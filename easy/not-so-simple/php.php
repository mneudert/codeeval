<?php

$fh = fopen($argv[1], 'r');

while (false !== ($line = fgets($fh))) {
    list($numbers, $iter) = explode(' | ', $line);

    $iter    = trim($iter);
    $numbers = explode(' ', $numbers);
    $steps   = count($numbers) - 1;

    for ($i = 0; $i < $iter; $i += 1) {
        for ($n = 0; $n < $steps; $n += 1) {
            if ($numbers[$n] <= $numbers[$n + 1]) {
                continue;
            }

            $temp            = $numbers[$n + 1];
            $numbers[$n + 1] = $numbers[$n];
            $numbers[$n]     = $temp;

            break;
        }
    }

    echo implode(' ', $numbers) . PHP_EOL;
}
