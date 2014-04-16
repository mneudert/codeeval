<?php

$grid = array();

for ($i = 0; $i < 256; $i++) {
    $grid[$i] = array();

    for ($j = 0; $j < 256; $j++) {
        $grid[$i][$j] = 0;
    }
}

$fh = fopen($argv[1], 'r');

while (false !== ($line = fgets($fh))) {
    list($command, $arg1, $arg2) = array_merge(explode(' ', trim($line)), array(''));

    switch ($command) {
        case 'SetCol':
            for ($row = 0; $row < 256; $row++) {
                $grid[$arg1][$row] = $arg2;
            }
            break;

        case 'SetRow':
            for ($col = 0; $col < 256; $col++) {
                $grid[$col][$arg1] = $arg2;
            }
            break;

        case 'QueryCol':
            echo array_sum($grid[$arg1]) . PHP_EOL;
            break;

        case 'QueryRow':
            $sum = 0;

            for ($col = 0; $col < 256; $col++) {
                $sum += $grid[$col][$arg1];
            }

            echo $sum . PHP_EOL;
            break;
    }
}
