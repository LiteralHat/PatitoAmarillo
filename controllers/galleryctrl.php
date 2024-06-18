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

    public function searchItem($searchTitle)
    {
        return $this->model->queryItem($searchTitle);
    }






//query for individual view page
    public function getViewPageItem($datecreated, $title)
    {
        return $this->model->queryViewPageItem($datecreated, $title);
    }
}

$controller = new GalleryCtrl();




if (strpos(($_SERVER['REQUEST_URI']), 'music') == true) {
    $databaseType = 'music';
} elseif (strpos(($_SERVER['REQUEST_URI']), 'artworks') == true) {
    $databaseType = 'artworks';
} else {
    echo "Please email support@literalhat.com explaining what you did that lead up to this error, because this shouldnt happen. lol.";
    die();
}

if (strpos(($_SERVER['REQUEST_URI']), 'music/discography') == true) {
    if (isset($_GET['search'])) {
        $data = $controller->searchItem($_GET['search']);
    } else {
        $data = $controller->getAllItems($databaseType);
    }
} elseif (strpos(($_SERVER['REQUEST_URI']), 'music/view') == true) {
    $title = str_replace('/music/view/', '', $_SERVER['REQUEST_URI']);
    $dateandtitle = explode('/', $title);
    list($datecreated, $title) = $dateandtitle;
    $data = $controller->getViewPageItem($datecreated, $title);
} else {

}




