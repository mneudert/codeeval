<?php

$fh = fopen($argv[1], 'r');

while (false !== ($line = fgets($fh))) {
    $number = strrev(str_replace(' ', '', trim($line)));
    $sum    = 0;

    for ($i = 0; $i < strlen($number); $i += 2) {
        $sum += (int) $number[$i];
    }

    for ($i = 1; $i < strlen($number); $i += 2) {
        $double = 2 * (int) $number[$i];

        if (9 < $double) {
            $sum += array_sum(str_split($double));
        } else {
            $sum += $double;
        }
    }

    echo ($sum % 10 === 0 ? 1 : 0) . PHP_EOL;
}
