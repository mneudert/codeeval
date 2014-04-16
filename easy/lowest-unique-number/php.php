<?php

$fh = fopen($argv[1], 'r');

while (false !== ($line = fgets($fh))) {
    $numbers = explode(' ', trim($line));
    $counts  = array_count_values($numbers);

    $uniques = array_keys(array_filter($counts, function($x) { return 1 == $x; }));

    if (0 == count($uniques)) {
        echo '0' . PHP_EOL;
        continue;
    }

    sort($uniques);

    $players = array_flip($numbers);

    echo ($players[array_shift($uniques)] + 1) . PHP_EOL;
}
