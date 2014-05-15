<?php

$fh = fopen($argv[1], 'r');

while (false !== ($line = fgets($fh))) {
    list($n, $m) = explode(',', trim($line));

    $alive = array();
    $dead  = array();

    for ($i = 0; $i < $n; $i++) {
        $alive[] = $i;
    }

    $target = 0;

    while (!empty($alive)) {
        $target = ($target + $m - 1) % count($alive);
        $dead[] = $alive[$target];

        array_splice($alive, $target, 1);
    }

    echo join(' ', $dead) . PHP_EOL;
}
