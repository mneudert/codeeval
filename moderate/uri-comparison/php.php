<?php

$fh = fopen($argv[1], 'r');

while (false !== ($line = fgets($fh))) {
    list($left, $right) = explode(';', trim($line));

    $left  = parse_url($left);
    $right = parse_url($right);

    if (strtolower($left['scheme']) !== strtolower($right['scheme'])) {
        echo 'False' . PHP_EOL;
        continue;
    }

    if (empty($left['port'])) {
        $left['port'] = 80;
    }

    if (empty($right['port'])) {
        $right['port'] = 80;
    }

    if ($left['port'] != $right['port']) {
        echo 'False' . PHP_EOL;
        continue;
    }

    if (strtolower($left['host']) !== strtolower($right['host'])) {
        echo 'False' . PHP_EOL;
        continue;
    }

    if (urldecode($left['path']) !== urldecode($right['path'])) {
        echo 'False' . PHP_EOL;
        continue;
    }

    echo 'True' . PHP_EOL;
}
