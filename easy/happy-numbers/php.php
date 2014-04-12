<?php

$fh = fopen($argv[1], 'r');

while (false !== ($number = fgets($fh))) {
    $steps = array();

    while (1 < $number && !in_array($number, $steps)) {
        $steps[] = $number;
        $digits  = str_split($number);
        $number  = 0;

        foreach ($digits as $digit) {
            $number += $digit * $digit;
        }
        echo $number . PHP_EOL;
    }

    echo (int) (1 == $number) . PHP_EOL;
    echo '====' . PHP_EOL;
}
