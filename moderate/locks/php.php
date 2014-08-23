<?php

$fh = fopen($argv[1], 'r');

function flip($locks) {
    for ($i = 2; $i < count($locks); $i += 3) {
        $locks[$i] = !$locks[$i];
    }

    return $locks;
}

function lock($locks) {
    for ($i = 1; $i < count($locks); $i += 2) {
        $locks[$i] = true;
    }

    return $locks;
}

while (false !== ($line = fgets($fh))) {
    list($count, $runs) = explode(' ', trim($line));

    $unlocked = 0;
    $locks    = array_fill(0, $count, false);

    for ($i = 1; $i < $runs; $i++) {
        $locks = lock($locks);
        $locks = flip($locks);
    }

    $locks[count($locks) - 1] = !$locks[count($locks) - 1];

    foreach ($locks as $lock) {
        $unlocked += (int) !$lock;
    }

    echo $unlocked . PHP_EOL;
}
