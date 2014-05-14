<?php

$fh = fopen($argv[1], 'r');

while (false !== ($line = fgets($fh))) {
    $numbers = explode(',', trim($line));
    $max     = 'None';

    foreach (array_count_values($numbers) as $number => $count) {
        if ($count > count($numbers) / 2) {
            $max = $number;
            break;
        }
    }

    echo $max . PHP_EOL;
}
