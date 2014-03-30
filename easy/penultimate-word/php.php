<?php

$fh = fopen($argv[1], 'r');

while (false !== ($line = fgets($fh))) {
    $words = explode(' ', trim($line));

    echo $words[count($words) - 2] . PHP_EOL;
}
