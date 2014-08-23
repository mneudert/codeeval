<?php

$fh    = fopen($argv[1], 'r');
$count = (int) trim(fgets($fh));
$lines = array();

while (false !== ($line = fgets($fh))) {
    $lines[] = trim($line);
}

usort($lines, function($a, $b) { return strlen($a) < strlen($b); });

echo join(array_slice($lines, 0, $count), PHP_EOL) . PHP_EOL;
