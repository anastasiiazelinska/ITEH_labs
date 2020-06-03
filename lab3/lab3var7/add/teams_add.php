<?php

$cursor = $db->teams->find([],['projection'=>['name'=>1,'_id'=>0]]);

$teams = iterator_to_array($cursor);
