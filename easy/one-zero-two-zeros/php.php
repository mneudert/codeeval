<?php

$fh = fopen($argv[1], 'r');

while (false !== ($line = fgets($fh))) {
    list($zeros, $limit) = explode(' ', trim($line));

    $matches = 0;

    for ($n = 1; $n <= $limit; $n += 1) {
        if ($zeros == substr_count(decbin($n), '0')) {
            $matches += 1;
        }
    }

    echo $matches . PHP_EOL;
}
