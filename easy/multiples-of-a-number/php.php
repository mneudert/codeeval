<?php

$fh = fopen($argv[1], 'r');

while (false !== ($line = fgets($fh))) {
    list($base, $comp) = explode(',', trim($line));

    $mult = $comp;

    while ($base > $comp) {
        $comp += $mult;
    }

    echo $comp . PHP_EOL;
}
