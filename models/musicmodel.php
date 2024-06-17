<?php
namespace App\Models;

use App\Config\Dbh;
class MusicModel {
    private $dbh;
    public function __construct() {
        $this->dbh = new Dbh();
    }

    public function getAllSongs() {
        $sql = "SELECT * FROM music";
        $stmt = $this->dbh->getDb()->prepare($sql);
        $stmt->execute();
        $data = $stmt->fetchAll();
        return $data;
    }

    public function searchSongs($searchTitle) {
        $sql = "SELECT * FROM music WHERE title LIKE :searchTitle";
        $stmt = $this->dbh->getDb()->prepare($sql);
        $searchTitle = '%' . $searchTitle . '%';
        $stmt->bindParam(':searchTitle', $searchTitle, PDO::PARAM_STR);
        $stmt->execute();
        $data = $stmt->fetchAll();
        return $data;
    }


}



