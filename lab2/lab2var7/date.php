<?php


$dsn = "mysql:host=localhost; dbname=iteh1lbvar7";
$user = 'root';
$pass = '';
header('Content-Type: text/xml');
header("Cache-Control: no-cache, must-revalidate");
try {
    $dbh = new PDO($dsn,$user,$pass);

    $date = $_GET["date"];

    $datestart = "SELECT DISTINCT game.ID_Game , game.date , game.place , game.score FROM game WHERE game.date > '". $date ."'";
    echo '<?xml version="1.0" encoding="utf8" ?>';
    echo "<root>";
    foreach ($dbh->query($datestart) as $row) {
        echo '<game>';

        echo '<id>'.$row['ID_Game'].'</id>'.'<date>'.$row['date'].'</date>'.'<place>'.$row['place'].'</place>'.'<score>'.$row['score'].'</score>';

        echo '</game>';
    }
    echo "</root>";
} catch (PDOException $e) {
    echo "Ошибка";
}