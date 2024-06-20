<?php
namespace App\Classes;


use DateTime;

class Query
{
    private $parameters;
    private $query;

    public function __construct($databaseType, $parameters)
    {
        $this->parameters = $parameters;
        $this->query = "SELECT * FROM $databaseType";
    }

    public function buildQuery()
    {

        $conditions = [];

        //title
        if (!empty($this->parameters['title'])) {
            $conditions[] = "title LIKE '%" . $this->parameters['title'] . "%'";
        }

        //medium
        if (!empty($this->parameters['mediums'])) {
            foreach ($this->parameters['mediums'] as $queryitem) {
            $conditions[] = "medium LIKE '%" . $queryitem . "%'";
                }
        }

        if (!empty($this->parameters['tags'])) {
            $answer = explode(' ', $_GET['tags']);
            foreach ($answer as $queryitem) {
            $conditions[] = "tags LIKE '%" . $queryitem . "%'";
                }
        }

        //category
        if (!empty($this->parameters['category'])) {
            if ($this->parameters['category'] == 'collection') {
                $conditions[] = "artworkcollection LIKE '" . $this->parameters['collection'] . "'";
            } else {
                $conditions[] = "category LIKE '" . $this->parameters['category'] . "'";
            }
        }

        //date
        $beforedate = !empty($this->parameters['beforedate']) ? $this->parameters['beforedate'] : '1970-01-01';
        $afterdate = !empty($this->parameters['afterdate']) ? $this->parameters['afterdate'] : date('Y-m-d');

        if (isset($this->parameters['fuzzydate'])) {
            $beforedatedt = new DateTime($beforedate);
            $afterdatedt = new DateTime($afterdate);
            $beforedatedt->modify("-30 days");
            $afterdatedt->modify("+30 days");
            $beforedate = $beforedatedt->format('Y-m-d');
            $afterdate = $afterdatedt->format('Y-m-d');
        }

        $conditions[] = "datecreated BETWEEN '" . $beforedate . "' AND '" . $afterdate . "'";

        //final query parse
        if (!empty($conditions)) {
            $this->query .= " WHERE " . implode(" AND ", $conditions);
        }

        return $this->query;
    }

}

