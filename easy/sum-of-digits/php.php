<?php

$fh = fopen($argv[1], 'r');

while (false !== ($number = fgets($fh))) {
    echo array_sum(str_split($number)) . PHP_EOL;
}
