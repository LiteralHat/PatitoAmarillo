<?php
namespace App\Classes;



class Query {
    // private $parameters;
    private $query;

    public function __construct($databaseType) {
    // $this->parameters = $parameters;
    $this->query = "SELECT * FROM $databaseType";
    }

    public function buildQuery() {

    }


}

