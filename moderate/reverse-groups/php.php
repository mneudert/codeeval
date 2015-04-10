<?php

$fh = fopen($argv[1], 'r');

while (false !== ($line = fgets($fh))) {
    list($elements, $count) = explode(';', trim($line));

    $count    = trim($count);
    $elements = explode(',', trim($elements));
    $reversed = array();
    $rounds   = ceil(count($elements) / $count);

    for ($i = 0; $i < $rounds; $i++) {
        $slice = array_slice($elements, $i * $count, $count);

        if (count($elements) >= $count + ($i * $count)) {
            $slice = array_reverse($slice);
        }

        $reversed = array_merge($reversed, $slice);
    }

    echo join(',', $reversed) . PHP_EOL;
}
