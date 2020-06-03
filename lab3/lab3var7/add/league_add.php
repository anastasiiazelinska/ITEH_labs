<?php

$cursor = $db->games->find([],['projection'=>['league'=>1,'_id'=>0]]);
$result = iterator_to_array($cursor);


$leagues = array();
foreach ($result as $value) {
	$leagues[] = $value['league'];
}
$leagues = array_unique($leagues);
