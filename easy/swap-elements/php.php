<?php

$fh = fopen($argv[1], 'r');

while (false !== ($line = fgets($fh))) {
    list($elements, $swaps) = explode(':', trim($line));

    $elements = explode(' ', trim($elements));
    $swaps    = explode(',', trim($swaps));

    foreach ($swaps as $swap) {
        list($left, $right) = explode('-', trim($swap));

        $temp             = $elements[$left];
        $elements[$left]  = $elements[$right];
        $elements[$right] = $temp;
    }

    echo join(' ', $elements) . PHP_EOL;
}
