<?php

$fh = fopen($argv[1], 'r');

while (false !== ($line = fgets($fh))) {
    $triangle = array(1);
    $depth    = (int) trim($line);

    for ($i = 1; $i  < $depth; $i += 1) {
        $current    = 1;
        $triangle[] = $current;

        for ($j = 1; $j <= $i; $j += 1) {
            $current    = ($current * ($i + 1 - $j)) / $j;
            $triangle[] = $current;
        }
    }

    echo join(' ', $triangle) . PHP_EOL;
}
