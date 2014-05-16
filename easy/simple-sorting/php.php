<?php

$fh = fopen($argv[1], 'r');

while (false !== ($line = fgets($fh))) {
    $numbers = explode(' ', trim($line));

    sort($numbers);

    echo join(' ', $numbers) . PHP_EOL;
}
