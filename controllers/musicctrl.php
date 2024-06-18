<?php
namespace App\Controllers;

use App\Models\MusicModel;

class MusicCtrl
{
    private $model;
    public function __construct()
    {
        $this->model = new MusicModel();
    }

    public function displayMusic()
    {
        return $this->model->getAllSongs();
    }

    public function searchSong($searchTitle)
    {
        return $this->model->searchSongs($searchTitle);
    }

    public function getOneSong($datecreated, $title)
    {
        return $this->model->getSong($datecreated, $title);
    }
}

$controller = new MusicCtrl();


if (strpos(($_SERVER['REQUEST_URI']), 'music/discography') == true) {

    if (isset($_GET['search'])) {
        $data = $controller->searchSong($_GET['search']);
    } else {
        $data = $controller->displayMusic();
    }

} elseif (strpos(($_SERVER['REQUEST_URI']), 'music/view') == true) {
    $title = str_replace('/music/view/', '', $_SERVER['REQUEST_URI']);
    $dateandtitle = explode('/', $title);
    list($datecreated, $title) = $dateandtitle;
    $data = $controller->getOneSong($datecreated, $title);
    


} else {


}




