<?php
header('Content-Type: application/json');

require "connect.php";



$cursor = $db->games->find([
	'teams'	=>	[
		'$regex' => $_GET['team']
	],
],[
	'projection' => [
		'_id' => 0
	]
]);
$result = iterator_to_array($cursor);


foreach ($result as $value) {
	$value['date'] = $value['date']->toDateTime()->format('d.m.Y');
}
echo json_encode($result);
