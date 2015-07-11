<?php

$fh = fopen($argv[1], 'r');

while (false !== ($line = fgets($fh))) {
    $friends  = explode(' ', trim($line));
    $count    = array_shift($friends);
    $distance = 0;

    sort($friends);

    $mid = $friends[floor($count / 2)];

    foreach ($friends as $friend) {
        $distance += abs($friend - $mid);
    }

    echo $distance . PHP_EOL;
}
