<?php

$fh = fopen($argv[1], 'r');

while (false !== ($line = fgets($fh))) {
    list($string, $mask) = explode(' ', $line, 2);

    $string = strtolower(trim($string));
    $mask   = trim($mask);

    foreach (str_split($mask) as $index => $upper) {
        if (!(bool) $upper) {
            continue;
        }

        $string[$index] = strtoupper($string[$index]);
    }

    echo $string . PHP_EOL;
}
