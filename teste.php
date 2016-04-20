<?php

require('request.php');

$feed = requestFeed(25);
$datapoints = $feed->data[0]->datapoints;

foreach ($datapoints as $point) {
    $values[] = $point->value->value;
}

var_dump($datapoints[0]->value[0]->value);