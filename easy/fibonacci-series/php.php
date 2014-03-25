<?php

$fh   = fopen($argv[1], 'r');
$fibs = array(0, 1);

while (false !== ($line = fgets($fh))) {
    $fib = (int) trim($line);

    if (!isset($fibs[$fib])) {
        for ($f = count($fibs); $f <= $fib; $f++) {
            $fibs[$f] = $fibs[$f - 1] + $fibs[$f - 2];
        }
    }

    echo $fibs[$fib] . PHP_EOL;
}
