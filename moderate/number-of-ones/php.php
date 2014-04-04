<?php

$fh = fopen($argv[1], 'r');

while (false !== ($number = fgets($fh))) {
    echo substr_count(decbin(trim($number)), '1') . PHP_EOL;
}
