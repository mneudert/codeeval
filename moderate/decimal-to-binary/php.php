<?php

$fh = fopen($argv[1], 'r');

while (false !== ($number = fgets($fh))) {
    echo decbin(trim($number)) . PHP_EOL;
}
