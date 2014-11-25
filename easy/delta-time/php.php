<?php

$fh = fopen($argv[1], 'r');

while (false !== ($line = fgets($fh))) {
    list($left, $right) = explode(' ', trim($line));

    $left  = explode(':', trim($left));
    $right = explode(':', trim($right));

    $left  = ($left[0] * 3600)  + ($left[1] * 60)  + $left[2];
    $right = ($right[0] * 3600) + ($right[1] * 60) + $right[2];

    $diff = abs($left - $right);

    echo sprintf(
        '%02d:%02d:%02d',
        floor($diff / 3600),
        floor(($diff % 3600) / 60),
        $diff % 60
    ) . PHP_EOL;
}
