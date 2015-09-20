<?php

$fh = fopen($argv[1], 'r');

while (false !== ($times = fgets($fh))) {
    $times = explode(' ', trim($times));

    rsort($times);

    echo implode(' ', $times) . PHP_EOL;
}
