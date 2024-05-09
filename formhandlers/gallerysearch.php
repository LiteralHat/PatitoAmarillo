<?php
session_start();
include_once('../includes/dbh.php');

$statement = $db->query("SELECT * FROM artworks");
$data = $statement->fetchAll(PDO::FETCH_ASSOC);
$searchQuery = [];

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    function notAllowed($string)
    {
        $notallowed = '/[@#$%^&*()+={}\[\]:;<>\/\\|]/';
        if (preg_match($notallowed, $string)) {
            echo "<p class='warning'>Your search query is not valid!</p>";
            exit;
        } else {
            return;
        }
    }

    // This function compares the master array with the final array and removes the items that they both don't have in common
    function reSort($data, $matchingArtworks)
    {
        return array_filter($data, function ($artwork) use ($matchingArtworks) {
            return in_array($artwork, $matchingArtworks);
        });
    }
    // This function removes any duplicates from $matchingArtworks using artworkid as the unique identifier
    function getMatchingArtworks($matchingArtworks, $artworksByTag)
    {
        $matchingArtworks = [];
        foreach ($artworksByTag as $artworks) {
            foreach ($artworks as $artwork) {
                $matchingArtworks[$artwork['artworkid']] = $artwork;
            }
        }
        ;
        return $matchingArtworks;
    }

    function executeStatement($statement)
    {
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }


    if (!empty($_GET['title'])) {
        $title = $_GET['title'];
        notAllowed($title);
        array_push($searchQuery, "'" . $title . "'");
        $queryitem = str_replace(' ', '-', $title);
        $searchTerm = '%' . $queryitem . '%';
        $statement = $db->prepare("SELECT * FROM artworks WHERE title LIKE :searchTerm");
        $statement->bindValue(':searchTerm', $searchTerm, PDO::PARAM_STR);
        $matchingArtworks = executeStatement($statement);
        $data = reSort($data, $matchingArtworks);

    }

    if (!empty($_GET['afterdate']) || !empty($_GET['beforedate'])) {
        if (!empty($_GET['beforedate'])) {
            // Use the value from $_GET['beforedate']
            $beforedate = $_GET['beforedate'];
        } else {
            // Use a default value if $_GET['beforedate'] is not set
            $beforedate = '01-01-1970';
        }

        if (!empty($_GET['afterdate'])) {
            $afterdate = $_GET['afterdate'];
        } else {
            $afterdate = date('Y-m-d');
        }


        array_push($searchQuery, "from " . $beforedate . " to " . $afterdate);


        if (!empty($_GET['fuzzydate'])) {
            $beforedatedt = new DateTime($beforedate);
            $afterdatedt = new DateTime($afterdate);
            $beforedatedt->modify("-30 days");
            $afterdatedt->modify("+30 days");
            $beforedate = $beforedatedt->format('Y-m-d');
            $afterdate = $afterdatedt->format('Y-m-d');
        }

        $statement = $db->prepare('SELECT * FROM artworks WHERE datecreated BETWEEN :beforedate AND :afterdate');
        $statement->bindValue(':beforedate', $beforedate, PDO::PARAM_STR);
        $statement->bindValue(':afterdate', $afterdate, PDO::PARAM_STR);

        $matchingArtworks = executeStatement($statement);
        $data = reSort($data, $matchingArtworks);
    }

    if (!empty($_GET['category']) && ($_GET['category']) !== 'collection') {
        $category = $_GET['category'];
        notAllowed($category);
        array_push($searchQuery, "category: " . $category);
        $queryitem = str_replace(' ', '-', $category);
        $searchTerm = '%' . $queryitem . '%';
        $statement = $db->prepare("SELECT * FROM artworks WHERE category LIKE :searchTerm");
        $statement->bindValue(':searchTerm', $searchTerm, PDO::PARAM_STR);
        $matchingArtworks = executeStatement($statement);
        $data = reSort($data, $matchingArtworks);
    }

    if (!empty($_GET['collection'])) {
        $collection = $_GET['collection'];
        notAllowed($collection);
        array_push($searchQuery, "'" . $collection . "'");
        $queryitem = $collection;
        $searchTerm = '%' . $queryitem . '%';
        $statement = $db->prepare("SELECT * FROM artworks WHERE artworkcollection LIKE :searchTerm");
        $statement->bindValue(':searchTerm', $searchTerm, PDO::PARAM_STR);
        $matchingArtworks = executeStatement($statement);
        $data = reSort($data, $matchingArtworks);

    }

    if (!empty($_GET['mediums'])) {
        $answer = $_GET['mediums'];
        $mediumQuery = array();
        $artworksByTag = [];
        foreach ($answer as $queryitem) {
            $searchTerm = '%' . $queryitem . '%';
            $statement = $db->prepare("SELECT * FROM artworks WHERE medium LIKE :searchTerm");
            $statement->bindValue(':searchTerm', $searchTerm, PDO::PARAM_STR);

            $matchingArtworks = executeStatement($statement);

            $artworksByTag[$queryitem] = $matchingArtworks;

            array_push($mediumQuery, $queryitem);
        }
        ;
        $mediumQuery = implode(" / ", $mediumQuery);
        array_push($searchQuery, 'mediums: ' . $mediumQuery);

        $matchingArtworks = getMatchingArtworks($matchingArtworks, $artworksByTag);
        $data = reSort($data, $matchingArtworks);
    }

    if (!empty($_GET['tags'])) {
        $answer = explode(' ', $_GET['tags']);

        $mediumQuery = array();
        $artworksByTag = [];
        foreach ($answer as $queryitem) {

            $searchTerm = '%' . $queryitem . '%';
            $statement = $db->prepare("SELECT * FROM artworks WHERE tags LIKE :searchTerm");
            $statement->bindValue(':searchTerm', $searchTerm, PDO::PARAM_STR);

            $matchingArtworks = executeStatement($statement);
            $artworksByTag[$queryitem] = $matchingArtworks;

            array_push($mediumQuery, $queryitem);
        }
        ;
        $mediumQuery = implode(", ", $mediumQuery);
        array_push($searchQuery, 'tags: ' . $mediumQuery);

        $matchingArtworks = getMatchingArtworks($matchingArtworks, $artworksByTag);
        $data = reSort($data, $matchingArtworks);
    }

    $_SESSION['dbresults'] = $data;

    $searchQuery = implode(", ", $searchQuery);
    $_SESSION['searchQuery'] = $searchQuery;



    //this basically makes sure that the ?page=1 things don't stack cuz it looks ugly 
    $referrer = $_SERVER['HTTP_REFERER'];
    $parsed_url = parse_url($referrer);
    
    if (isset($parsed_url['query'])) {

        parse_str($parsed_url['query'], $query_params);

        unset($query_params['page']);

        $new_query_string = http_build_query($query_params);

        $cleaned_url = $parsed_url['scheme'] . '://' . $parsed_url['host'] . $parsed_url['path'];
        if (!empty($new_query_string)) {
            $cleaned_url .= '?' . $new_query_string;
        }
        if (isset($parsed_url['fragment'])) {
            $cleaned_url .= '#' . $parsed_url['fragment'];
        }
    
        header("Location: " .  $cleaned_url . "?page=1#top");
    } else {
        header("Location: " .  $_SERVER['HTTP_REFERER'] . "?page=1#top");
    }
    exit();

}