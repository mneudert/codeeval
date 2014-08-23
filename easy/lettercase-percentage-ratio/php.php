<?php

$fh = fopen($argv[1], 'r');

while (false !== ($line = fgets($fh))) {
    $lower = 0;
    $upper = 0;

    foreach (str_split(trim($line)) as $char) {
        $ord = ord($char);

        if (90 >= $ord) {
            $upper++;
        } else {
            $lower++;
        }
    }

    if (0 == $lower) {
        echo 'lowercase: 0.00 uppercase: 100.00' . PHP_EOL;
    } elseif (0 == $upper) {
        echo 'lowercase: 100.00 uppercase: 0.00' . PHP_EOL;
    } else {
        echo sprintf(
            'lowercase: %.2f uppercase: %.2f' . PHP_EOL,
            100 * ($lower / ($lower + $upper)),
            100 * ($upper / ($lower + $upper))
        );
    }
}
