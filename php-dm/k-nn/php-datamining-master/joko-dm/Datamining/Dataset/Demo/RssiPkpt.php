<?php

declare(strict_types=1);

namespace jokodm\Datamining\Dataset\Demo;
use jokodm\Datamining\Dataset\CsvDataset;

class RssiPkpt extends CsvDataset
{
    public function __construct()
    {
        $filepath = __DIR__.'/../../data/rssi_pkpt.csv';
        parent::__construct($filepath, 4, true);
    }
}
