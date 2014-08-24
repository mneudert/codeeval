<?php

$fh = fopen($argv[1], 'r');

while (false !== ($line = fgets($fh))) {
    list($amount, $numbers) = explode(';', trim($line));

    $counts = array_count_values(explode(',', $numbers));
    $flips  = array_flip($counts);

    echo $flips[2] . PHP_EOL;
}
