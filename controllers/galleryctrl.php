<?php
namespace App\Controllers;

use App\Models\GalleryModel;
use App\Models\MusicModel;

class GalleryCtrl
{
    private $model;
    public function __construct()
    {
        $this->model = new GalleryModel();
    }

//initial database query that gets everything

    public function getAllItems($databaseType)
    {
        return $this->model->queryAllItems($databaseType);
    }

//get request queries

    public function searchItem($databaseType, $searchTitle)
    {
        return $this->model->queryItem($databaseType, $searchTitle);
    }

//query for individual view page
    public function getViewPageItem($databaseType, $datecreated, $title)
    {
        return $this->model->queryViewPageItem($databaseType, $datecreated, $title);
    }
}

$controller = new GalleryCtrl();

//checks which database we're talking about and assigns a variable to it appropriately

if (strpos(($_SERVER['REQUEST_URI']), 'music') == true) {
    $databaseType = 'music';
} elseif (strpos(($_SERVER['REQUEST_URI']), 'artworks') == true) {
    $databaseType = 'artworks';
} else {
    echo "Please email support@literalhat.com explaining what you did that lead up to this error, because this shouldnt happen. lol.";
    die();
}

if (strpos($_SERVER['REQUEST_URI'], 'music/discography') !== false || strpos($_SERVER['REQUEST_URI'], 'artworks/archive') !== false || strpos($_SERVER['REQUEST_URI'], 'artworks/gallery') !== false ) {

    if (isset($_GET['title'])) {
        $data = $controller->searchItem($databaseType, $_GET['title']);
    } else {
        $data = $controller->getAllItems($databaseType);
    }

} elseif (strpos(($_SERVER['REQUEST_URI']), 'music/view') !== false || strpos($_SERVER['REQUEST_URI'], 'artworks/view') ) {

    $title = str_replace('/music/view/', '', $_SERVER['REQUEST_URI']);
    $dateandtitle = explode('/', $title);
    list($datecreated, $title) = $dateandtitle;
    $data = $controller->getViewPageItem($databaseType, $datecreated, $title);

} else {


}


