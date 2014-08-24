<?php

$fh    = fopen($argv[1], 'r');
$track = array();

while (false !== ($line = fgets($fh))) {
    $track[] = str_split(trim($line));
}

$pos = $previous = array_search('_', $track[0]);
$track[0][$pos]  = '|';

for ($row = 1; $row < count($track); $row++) {
    $pos = array_search('C', $track[$row]);
    $pos = $pos ?: array_search('_', $track[$row]);

    if ($pos < $previous) {
        $track[$row][$pos] = '/';
    } elseif ($pos > $previous) {
        $track[$row][$pos] = '\\';
    } else {
        $track[$row][$pos] = '|';
    }

    $previous = $pos;
}

array_walk($track, function($row) {
    echo join('', $row) . PHP_EOL;
});
