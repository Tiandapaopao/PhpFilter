<?php

require __DIR__ . '/vendor/autoload.php';

use Filter\Index;

$val = Index::getVal();
echo $val."\n";