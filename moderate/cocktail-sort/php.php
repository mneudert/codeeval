<?php

$fh = fopen($argv[1], 'r');

function maybeSwap(&$arr, $li, $ri) {
    if ($arr[$li] <= $arr[$ri]) {
        return;
    }

    $temp     = $arr[$ri];
    $arr[$ri] = $arr[$li];
    $arr[$li] = $temp;
}

while (false !== ($line = fgets($fh))) {
    list($numbers, $iter) = explode(' | ', $line);

    $iter    = trim($iter);
    $numbers = explode(' ', $numbers);

    $lowerBound = 0;
    $upperBound = count($numbers) - 2;

    for ($i = 0; $i < $iter; $i += 1) {
        for ($n = $lowerBound; $n <= $upperBound; $n += 1) {
            maybeSwap($numbers, $n, $n + 1);
        }

        $upperBound -= 1;

        for ($n = $upperBound; $n >= $lowerBound; $n -= 1) {
            maybeSwap($numbers, $n, $n + 1);
        }

        $lowerBound += 1;
    }

    echo implode(' ', $numbers) . PHP_EOL;
}
