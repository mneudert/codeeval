<?php

$fh = fopen($argv[1], 'r');

while (false !== ($line = fgets($fh))) {
    list($number, $expr) = explode(' ', trim($line));

    $left  = '';
    $right = '';
    $op    = '';

    for ($i = 0; $i < strlen($expr); $i++) {
        if (in_array($expr[$i], array('+', '-'))) {
            $op = $expr[$i];
            continue;
        }

        if ('' == $op) {
            $left .= $number[$i];
        } else {
            $right .= $number[$i - 1];
        }
    }

    if ('+' == $op) {
        echo $left + $right . PHP_EOL;
    } else {
        echo $left - $right . PHP_EOL;
    }
}
