<?php

$fh = fopen($argv[1], 'r');

while (false !== ($number = fgets($fh))) {
    $digits = str_split(trim($number));
    $counts = array_count_values($digits);
    $isSelf = 1;

    for ($i = 0; $i < count($digits); $i++) {
        if ((0 == $digits[$i]) && !isset($counts[$i])) {
           continue;
        }

        if (!isset($counts[$i]) || ($digits[$i] != $counts[$i])) {
            $isSelf = 0;
            break;
        }
    }

    echo $isSelf . PHP_EOL;
}
