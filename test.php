<?php

require __DIR__ . '/vendor/autoload.php';

use App\Filter\Index;

$val = Index::getVal();
echo 'add a line';
echo $val."\n";
