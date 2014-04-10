<?php

$fh = fopen($argv[1], 'r');

while (false !== ($line = fgets($fh))) {
    $numbers = explode(' ', trim($line));
    $last    = array_shift($numbers);
    $count   = 1;
    $comps   = array();

    foreach ($numbers as $number) {
        if ($number != $last) {
            $comps[] = sprintf('%u %u', $count, $last);
            $last    = $number;
            $count   = 1;

            continue;
        }

        $count++;
    }

    $comps[] = sprintf('%u %u', $count, $last);

    echo join($comps, ' ') . PHP_EOL;
}
