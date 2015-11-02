<?php

$fh = fopen($argv[1], 'r');

while (false !== ($line = fgets($fh))) {
    $data = array();

    preg_match(
        '/Vampires: (\d+), Zombies: (\d+), Witches: (\d+), Houses: (\d+)/',
        $line,
        $data
    );

    $candies  = ($data[1] * 3 + $data[2] * 4 + $data[3] * 5) * $data[4];
    $children = $data[1] + $data[2] + $data[3];

    echo floor($candies / $children) . PHP_EOL;
}
