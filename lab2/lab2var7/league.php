<?php

$dsn = "mysql:host=localhost; dbname=iteh1lbvar7";
$user = 'root';
$pass = '';
try {
    $dbh = new PDO($dsn,$user,$pass);

    $league = $_GET["league"];

    $leaguestart = "SELECT game.ID_Game , game.date , game.place , game.score FROM game,team WHERE game.FID_Team1 = team.ID_Team AND team.league = '". $league ."'";

    foreach ($dbh->query($leaguestart) as $row) {
        echo '<tr>'.'<td>'.$row['ID_Game'].'</td>'.'<td>'.$row['date'].'</td>'.'<td>'.$row['place'].'</td>'.'<td>'.$row['score'].'</td>'.'<tr>';
    }
} catch (PDOException $e) {
    echo "Ошибка";
}