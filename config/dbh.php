<?php
namespace App\Config;

use PDO;

class Dbh {
    protected $db;

    public function __construct() {
        $config = require_once '../../config.php';
        $dsn = 'mysql:host=' . DB_HOST . ';dbname=' . DB_NAME;
        $this->db = new PDO($dsn, DB_USERNAME, DB_PASSWORD);
        $this->db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    }

    public function getDb() {
        return $this->db;
    }
}
