<?php

$fh = fopen($argv[1], 'r');

while (false !== ($line = fgets($fh))) {
    list($players, $number) = explode('|', $line);

    $number  = ((int) trim($number)) - 1;
    $players = explode(' ', trim($players));

    while (1 < count($players)) {
        array_splice($players, $number % count($players), 1);
    }

    echo $players[0] . PHP_EOL;
}
