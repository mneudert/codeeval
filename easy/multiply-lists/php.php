<?php

$fh = fopen($argv[1], 'r');

while (false !== ($line = fgets($fh))) {
    list($left, $right) = explode('|', trim($line));

    $left      = explode(' ', trim($left));
    $right     = explode(' ', trim($right));
    $multiples = array();

    for ($i = 0; $i < count($left); $i++) {
        $multiples[] = $left[$i] * $right[$i];
    }

    echo join(' ', $multiples) . PHP_EOL;
}
