<?php

$fh = fopen($argv[1], 'r');

while (false !== ($number = fgets($fh))) {
    $number = trim($number);
    $steps  = 0;

    while ($number != strrev($number)) {
        $number += strrev($number);
        $steps++;
    }

    echo $steps . ' ' . $number . PHP_EOL;
}
