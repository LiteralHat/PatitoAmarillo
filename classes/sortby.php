<?php

namespace App\Classes;


class Sortby
{
    private $parameters;
    private $data;

    public function __construct($data, $parameters)
    {

        $this->parameters = $parameters;
        $this->data = $data;
        
    }

    public function sortItems()
    {
        switch ($this->parameters['sortby']) {
            case 'default':
                usort($this->data, function ($a, $b) {
                    $idA = intval($a['artworkid']);
                    $idB = intval($b['artworkid']);
                    if ($idA < $idB) {
                        return -1;
                    } elseif ($idA > $idB) {
                        return 1;
                    } else {
                        return 0;
                    }
                });
                break;
            case 'title':
                usort($this->data, function ($a, $b) {
                    return strcmp($a['title'], $b['title']);
                });
                
                break;
            case 'newtoold':
                usort($this->data, function ($a, $b) {
                    return strtotime($b['datecreated']) - strtotime($a['datecreated']);
                });
                break;
            case 'oldtonew':
                usort($this->data, function ($a, $b) {
                    return strtotime($a['datecreated']) - strtotime($b['datecreated']);
                });
                break;
            default:
                usort($this->data, function ($a, $b) {
                    return strcmp($a['artworkid'], $b['artworkid']);
                });
                break;
        }
        // var_dump($this->data);
        return $this->data;
    }

   


}