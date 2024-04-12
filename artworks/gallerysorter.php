<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['sortby']) && isset($_POST['data'])) {
        $sortby = $_POST['sortby'];
        $artworksArray = json_decode($_POST['data'], true); // Unserialize the array
        

        switch ($sortby) {
            case 'default':
                usort($artworksArray, function ($a, $b) {
                    $idA = intval($a['artworkid']);
                    $idB = intval($b['artworkid']);
                    if ($idA < $idB) {
                        return -1;
                    } elseif ($idA > $idB) {
                        return 1;
                    } else {
                        return 0;
                    }
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
        $_SESSION['dbresults'] = $artworksArray;
        header("Location: gallery?page=1");
        exit();
    } else {
        echo 'Insufficient data received';
    }
} else {
    echo 'Invalid request';
}

