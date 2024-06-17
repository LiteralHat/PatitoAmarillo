<?php
namespace App\Controllers;

use App\Models\MusicModel;
class MusicCtrl {
    private $model;
    public function __construct() {
        $this->model = new MusicModel(); 
    }

    public function displayMusic() {
        return $this->model->getAllSongs(); 
    }

    public function searchSong($searchTitle) {
        return $this->model->searchSongs($searchTitle); 
    }
}

$controller = new MusicCtrl();

if (isset($_GET['search'])) {
    $data = $controller->searchSong($_GET['search']);
} else {
    $data = $controller->displayMusic();
}