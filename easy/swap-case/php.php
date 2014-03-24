<?php

$fh = fopen($argv[1], 'r');

while (false !== ($line = fgets($fh))) {
    foreach (str_split(trim($line)) as $char) {
        $ord = ord($char);

        if (65 <= $ord && 90 >= $ord) {
            echo strtolower($char);
            continue;
        }

        if (97 <= $ord && 122 >= $ord) {
            echo strtoupper($char);
            continue;
        }

        echo $char;
    }

    echo PHP_EOL;
}
