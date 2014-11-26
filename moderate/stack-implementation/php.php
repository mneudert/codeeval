<?php

$fh = fopen($argv[1], 'r');

while (false !== ($line = fgets($fh))) {
    $numbers = explode(' ', trim($line));
    $numbers = array_reverse($numbers);
    $popped  = array();

    while (count($numbers)) {
        $popped[] = array_shift($numbers);

        if (count($numbers)) {
            array_shift($numbers);
        }
    }

    echo join(' ', $popped) . PHP_EOL;
}
