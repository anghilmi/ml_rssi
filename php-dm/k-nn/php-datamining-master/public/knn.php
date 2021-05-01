<?php

require '../vendor/autoload.php';
use jokodm\Datamining\Klasifikasi\KNearestNeighbors;
use jokodm\Datamining\Dataset\Demo\RssiPkpt;

$dataset = new RssiPkpt();

// $dtraining = [[1.2,2,3], [2.5,4.6],[4,1],[5.6,1.2],[6,3.5]];
// $labels = ['A','A','B','B','B'];

$classifier = new KNearestNeighbors($k=9);
// $classifier->train($dtraining, $labels);
$classifier->train($dataset->getSamples(), $dataset->getTargets());

// $pred = $classifier->predict([3,2]);
$pred = $classifier->predict([
    -99,
    -85,
    -96,
    0
    ]);

echo "Lokasi: " . $pred;
?>