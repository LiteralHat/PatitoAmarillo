<?php
$db = new PDO('sqlite:artworks.db');
$statement = $db->query("SELECT * FROM artworks");
$artworksdb = $statement->fetchAll(PDO::FETCH_ASSOC);


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['sortBy'])) {
        $sortBy = $_POST['sortBy'];
        // Custom sorting logic based on $sortBy
        switch ($sortBy) {
            case 'default':
                usort($artworksdb, function ($a, $b) {
                    return strcmp($a['artworkid'], $b['artworkid']);
                });
                break;
            case 'title':
                usort($artworksdb, function ($a, $b) {
                    return strcmp($a['title'], $b['title']);
                });
                break;
            case 'newtoold':
                usort($artworksdb, function ($a, $b) {
                    return strtotime($b['datecreated']) - strtotime($a['datecreated']);
                });
                break;
            case 'oldtonew':
                usort($artworksdb, function ($a, $b) {
                    return strtotime($a['datecreated']) - strtotime($b['datecreated']);
                });
                break;
            default:
                usort($artworksdb, function ($a, $b) {
                    return strcmp($a['artworkid'], $b['artworkid']);
                });
                break;
        }

        // Generate sorted HTML output
            foreach ($artworksdb as $row => $artwork) {
                $wordsArray = explode("-", $artwork['title']);
                $capitalizedWords = array_map('ucfirst', $wordsArray);
                $finalString = implode(" ", $capitalizedWords);
                $dateString = htmlspecialchars($artwork['datecreated']);
                $year = substr($dateString, 0, 4);
                echo "<div class='gallerythumbnail'><a href=\"view/" . $artwork['artworkid'] . "\"><img src='https://leviathan.literalhat.com/gallery/literalhat_" . $artwork['datecreated'] . "_" . htmlspecialchars($artwork['title']) . ".webp'><p class='gallerytitle'>" . $finalString . "</p></a><p>" . $year . "</div>";
            }
        
    } else {
        echo 'something broken';
    }
} else {
    echo ($_SERVER['REQUEST_METHOD']);
}
?>