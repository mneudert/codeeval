<?php

$fh = fopen($argv[1], 'r');

while (false !== ($line = fgets($fh))) {
    list($number, $left, $right) = explode(',', $line);

    $bits     = decbin($number);
    $leftBit  = $bits[strlen($bits) - $left];
    $rightBit = $bits[strlen($bits) - $right];

    echo (($leftBit == $rightBit) ? 'true' : 'false') . PHP_EOL;
}
