<?php

$fh = fopen($argv[1], 'r');

while (false !== ($line = fgets($fh))) {
    $last    = 0;
    $numbers = array_map('intval', explode(',', trim($line)));
    $max     = $numbers[0];

    foreach ($numbers as $number) {
        if ($number > $max) {
            $max = $number;
        }

        if ($number + $last > $max) {
            $max = $number + $last;
        }

        if ($number + $last > 0) {
            $last += $number;
        } else {
            $last = 0;
        }
    }

    echo $max . PHP_EOL;
}
