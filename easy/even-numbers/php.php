<?php

$fh = fopen($argv[1], 'r');

while (false !== ($number = fgets($fh))) {
    echo (int) (($number + 1) % 2) . PHP_EOL;
}
