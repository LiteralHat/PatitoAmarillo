<?php
namespace App\Controllers;

use App\Models\GalleryModel;
use App\Models\MusicModel;
use App\Classes\Query;
use App\Classes\Sortby;

class GalleryCtrl
{
    private $model;
    public function __construct()
    {
        $this->model = new GalleryModel();
    }

//initial database query that gets everything

    public function getAllItems($columns, $databaseType)
    {
        return $this->model->queryAllItems($columns, $databaseType);
    }

//query for individual view page
    public function getViewPageItem($databaseType, $datecreated, $title)
    {
        return $this->model->queryViewPageItem($databaseType, $datecreated, $title);
    }

//'master query' for all search functions

    public function getSearchItem($sql){
        return $this->model->querySearchItem($sql);
    }
}

$controller = new GalleryCtrl();

//checks which database we're talking about, and sets the variables for columns and table  name. Columns is for the main gallery view page, btw. not the individual pages

if (strpos(($_SERVER['REQUEST_URI']), 'music') == true) {
    $databaseType = 'music';
    $columns = '*';
} elseif (strpos(($_SERVER['REQUEST_URI']), 'artworks') == true) {
    $databaseType = 'artworks';
    $columns = 'title, datecreated, artworkid';
} else {
    echo "Please email support@literalhat.com explaining what you did that lead up to this error, because this shouldnt happen. lol.";
    die();
}

//checks which page we're on, if its the main gallery or the view pages

if (strpos($_SERVER['REQUEST_URI'], 'music/discography') !== false || strpos($_SERVER['REQUEST_URI'], 'artworks/archive') !== false || strpos($_SERVER['REQUEST_URI'], 'artworks/gallery') !== false ) {

//if we're not using a get method (for sorting etc) then it will just query and return the entire database
    if ($_SERVER['REQUEST_METHOD'] == 'GET' && !empty($_GET['submit'])){
        
        //puts the get request into an assoc array
        $parameters = $_GET;

        //instantiates a query class
        $query = new Query($databaseType, $parameters);

        //builds the query, $query is now a line of sql
        $query = $query->buildQuery();
        
        echo $query;

        //executes it against the database and stores it in $data
        $stupid = $controller->getSearchItem($query);

        //instantiates a new sorter thingy
        $sortby = new Sortby($stupid, $parameters);

        //the final stuff yay
        $data = $sortby->sortItems();

    } else {
        $data = $controller->getAllItems($columns, $databaseType);
        echo '<p>Hi 8)</p>';
    }

} elseif (strpos(($_SERVER['REQUEST_URI']), 'music/view') !== false || strpos($_SERVER['REQUEST_URI'], 'artworks/view') ) {

    $title = str_replace('/music/view/', '', $_SERVER['REQUEST_URI']);
    $dateandtitle = explode('/', $title);
    list($datecreated, $title) = $dateandtitle;
    $data = $controller->getViewPageItem($databaseType, $datecreated, $title);

} else {


}


