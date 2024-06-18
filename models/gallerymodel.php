<?php
namespace App\Models;

use App\Config\Dbh;

use PDO;
class GalleryModel {
    private $dbh;
    public function __construct() {
        $this->dbh = new Dbh();
    }

//initial database query that gets everything

    public function queryAllItems($databaseType) {
        $sql = "SELECT * FROM $databaseType";
        $stmt = $this->dbh->getDb()->prepare($sql);
        $stmt->execute();
        $data = $stmt->fetchAll();
        return $data;
    }

//get request queries

    public function queryItem($databaseType, $title) {
        $sql = "SELECT * FROM $databaseType WHERE title LIKE :title";
        $stmt = $this->dbh->getDb()->prepare($sql);
        $title = '%' . $title . '%';
        $stmt->bindParam(':title', $title, PDO::PARAM_STR);
        $stmt->execute();
        $data = $stmt->fetchAll();
        return $data;
    }




//query for individual view page
    public function queryViewPageItem($databaseType, $datecreated, $title) {
        $sql = "SELECT * FROM $databaseType WHERE title = :title AND datecreated = :datecreated LIMIT 1";
        $stmt = $this->dbh->getDb()->prepare($sql);
        $stmt->bindParam(':datecreated', $datecreated, PDO::PARAM_STR);
        $stmt->bindParam(':title', $title, PDO::PARAM_STR);
        $stmt->execute();
        $data = $stmt->fetch();
        return $data;

    }


}



