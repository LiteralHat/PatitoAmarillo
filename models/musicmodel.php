<?php
namespace App\Models;

use App\Config\Dbh;

use PDO;
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

    public function searchSongs($title) {
        $sql = "SELECT * FROM music WHERE title LIKE :title";
        $stmt = $this->dbh->getDb()->prepare($sql);
        $title = '%' . $title . '%';
        $stmt->bindParam(':title', $title, PDO::PARAM_STR);
        $stmt->execute();
        $data = $stmt->fetchAll();
        return $data;
    }

    public function getSong($datecreated, $title) {
        $sql = "SELECT * FROM music WHERE title = :title AND datecreated = :datecreated LIMIT 1";
        $stmt = $this->dbh->getDb()->prepare($sql);
        $stmt->bindParam(':datecreated', $datecreated, PDO::PARAM_STR);
        $stmt->bindParam(':title', $title, PDO::PARAM_STR);
        $stmt->execute();
        $data = $stmt->fetch();
        return $data;

    }


}



