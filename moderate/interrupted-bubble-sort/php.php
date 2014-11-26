<?php

$fh    = fopen($argv[1], 'r');
$track = array();

function bubble($numbers) {
    $sorted = false;

    for ($i = 0; $i < count($numbers) - 1; $i++) {
        if ($numbers[$i] > $numbers[$i+1]) {
            $sorted = true;

            $temp            = $numbers[$i];
            $numbers[$i]     = $numbers[$i + 1];
            $numbers[$i + 1] = $temp;
        }
    }

    return array($sorted, $numbers);
}

while (false !== ($line = fgets($fh))) {
    list($numbers, $iterations) = explode('|', trim($line));

    $numbers    = explode(' ', trim($numbers));
    $iterations = trim($iterations);

    for ($i = 1; $i <= $iterations; $i++) {
        list($sorted, $numbers) = bubble($numbers);

        if (!$sorted) {
            break;
        }
    }

    echo join(' ', $numbers) . PHP_EOL;
}
