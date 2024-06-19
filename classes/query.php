<?php
namespace App\Classes;



class Query {
    private $parameters;
    private $query;

    public function __construct($databaseType, $parameters) {
    $this->parameters = $parameters;
    $this->query = "SELECT * FROM $databaseType";
    }

    public function buildQuery() {

        $conditions = [];
        if (isset($this->parameters['title'])){
            $conditions[] = "title LIKE '%" . $this->parameters['title'] . "%'";
        }
       
        if (!empty($conditions)) {
            $this->query .= " WHERE " . implode(" AND ", $conditions); 
        }

        return $this->query;
    }

}

