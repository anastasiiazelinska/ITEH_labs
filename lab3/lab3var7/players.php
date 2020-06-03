<?php
header('Content-Type: application/json');

require "connect.php";



$cursor = $db->teams->findOne([
    'name'    =>  $_GET['team'],
],[
    'projection' => [
        '_id' => 0,
        'players' => 1
    ]
]);
$result = iterator_to_array($cursor);

echo json_encode($result['players']);
