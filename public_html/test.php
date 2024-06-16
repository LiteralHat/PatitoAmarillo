<?php
declare(strict_types = 1);
include 'includes/autoloader.inc.php';

?>

<h1>Oh, hi.</h1>
<p>I wish there was something interesting here that you could use to possibly infiltrate my website such as debug information, but this is literally just a page I use to test and learn about stupid shit I'm not familiar with. Nice try though, take care.</p>

<?php

class Test extends Dbh {
    public function getUsers() {

        $sql = "SELECT * FROM artworks";
        $stmt = $this->connect()->query($sql);
        while($row = $stmt->fetch()) {

            echo $row['title'] . '<br>';
        }

    }
    public function getUsersStmt($title) {

        $sql = "SELECT * FROM artworks WHERE title = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$title]);
        $titles = $stmt->fetchAll();

        foreach ($titles as $title) {
            echo $title['title'];
        }

    }
}


?>

<?php

$testObj = new Test();
$testObj->getUsersStmt('firebird');
?>