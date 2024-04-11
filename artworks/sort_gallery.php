<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['sortBy']) && isset($_POST['artworksArray'])) {
        $sortBy = $_POST['sortBy'];
        $artworksArray = json_decode($_POST['artworksArray'], true); // Unserialize the array
        

        switch ($sortBy) {
            case 'default':
                usort($artworksArray, function ($a, $b) {
                    return strcmp($a['artworkid'], $b['artworkid']);
                });
                break;
            case 'title':
                usort($artworksArray, function ($a, $b) {
                    return strcmp($a['title'], $b['title']);
                });
                break;
            case 'newtoold':
                usort($artworksArray, function ($a, $b) {
                    return strtotime($b['datecreated']) - strtotime($a['datecreated']);
                });
                break;
            case 'oldtonew':
                usort($artworksArray, function ($a, $b) {
                    return strtotime($a['datecreated']) - strtotime($b['datecreated']);
                });
                break;
            default:
                usort($artworksArray, function ($a, $b) {
                    return strcmp($a['artworkid'], $b['artworkid']);
                });
                break;
        }

        // Generate sorted HTML output
        foreach ($artworksArray as $row => $artwork) {
            $wordsArray = explode("-", $artwork['title']);
            $capitalizedWords = array_map('ucfirst', $wordsArray);
            $finalString = implode(" ", $capitalizedWords);
            $dateString = htmlspecialchars($artwork['datecreated']);
            $year = substr($dateString, 0, 4);
            echo "<div class='gallerythumbnail'><a href=\"view/" . $artwork['artworkid'] . "\"><img src='https://leviathan.literalhat.com/gallery/literalhat_" . $artwork['datecreated'] . "_" . htmlspecialchars($artwork['title']) . ".webp'><p class='gallerytitle'>" . $finalString . "</p></a><p>" . $year . "</div>";
        }

    } else {
        echo 'Insufficient data received';
    }
} else {
    echo 'Invalid request';
}

