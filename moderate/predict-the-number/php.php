<?php

$fh = fopen($argv[1], 'r');

while (false !== ($line = fgets($fh))) {
    $number = 0;
    $target = (int) trim($line);

    while ($target > 0) {
        if (0 < $target % 2) {
            $number += 1;
        }

        $target = floor($target / 2);
    }

    echo ($number % 3) . PHP_EOL;
}
