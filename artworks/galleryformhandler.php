<?php
session_start();

//code wont execute at all if nothing has been submitted

// $jsondb =  $_POST['jsondb']; 
// $data = json_decode($jsondb, true); 


$db = new PDO('sqlite:artworksv2.db');
$statement = $db->query("SELECT * FROM artworks");
$artworksdb = $statement->fetchAll(PDO::FETCH_ASSOC);

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
    function reSort($artworksdb, $matchingArtworks)
    {
        return array_filter($artworksdb, function ($artwork) use ($matchingArtworks) {
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
        $queryitem = str_replace(' ', '-', $title);
        $searchTerm = '%' . $queryitem . '%';
        $statement = $db->prepare("SELECT * FROM artworks WHERE title LIKE :searchTerm");
        $statement->bindValue(':searchTerm', $searchTerm, PDO::PARAM_STR);

        $matchingArtworks = executeStatement($statement);
        $artworksdb = reSort($artworksdb, $matchingArtworks);
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
        $artworksdb = reSort($artworksdb, $matchingArtworks);
    }


    if (!empty($_GET['mediums'])) {
        $answer = $_GET['mediums'];
        $artworksByTag = [];
        foreach ($answer as $queryitem) {
            $searchTerm = '%' . $queryitem . '%';
            $statement = $db->prepare("SELECT * FROM artworks WHERE medium LIKE :searchTerm");
            $statement->bindValue(':searchTerm', $searchTerm, PDO::PARAM_STR);

            $matchingArtworks = executeStatement($statement);

            $artworksByTag[$queryitem] = $matchingArtworks;
        }
        ;
        $matchingArtworks = getMatchingArtworks($matchingArtworks, $artworksByTag);
        $artworksdb = reSort($artworksdb, $matchingArtworks);

    }

    if (!empty($_GET['tags'])) {
        $answer = explode(' ', $_GET['tags']);
        $artworksByTag = [];
        foreach ($answer as $queryitem) {

            $searchTerm = '%' . $queryitem . '%';
            $statement = $db->prepare("SELECT * FROM artworks WHERE tags LIKE :searchTerm");
            $statement->bindValue(':searchTerm', $searchTerm, PDO::PARAM_STR);

            $matchingArtworks = executeStatement($statement);
            $artworksByTag[$queryitem] = $matchingArtworks;
        }
        ;
        $matchingArtworks = getMatchingArtworks($matchingArtworks, $artworksByTag);
        $artworksdb = reSort($artworksdb, $matchingArtworks);
    }

    $_SESSION['dbresults'] = $artworksdb;
    header("Location: gallery?page=1");
    exit();

}