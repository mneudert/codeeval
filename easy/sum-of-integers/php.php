<?php

$fh  = fopen($argv[1], 'r');
$sum = 0;

while (false !== ($number = fgets($fh))) {
    $sum += (int) $number;
}

echo $sum . PHP_EOL;
