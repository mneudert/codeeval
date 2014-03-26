<?php

$fh = fopen($argv[1], 'r');

while (false !== ($line = fgets($fh))) {
    preg_match('/\((.+), (.+)\) \((.+), (.+)\)/', $line, $points);

    if ($points[1] > $points[3]) {
        $x = $points[1] - $points[3];
    } else {
        $x = $points[3] - $points[1];
    }

    if ($points[2] > $points[4]) {
        $y = $points[2] - $points[4];
    } else {
        $y = $points[4] - $points[2];
    }

    echo (int) sqrt(($x * $x) + ($y * $y)) . PHP_EOL;
}
