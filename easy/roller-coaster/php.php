<?php

$fh = fopen($argv[1], 'r');

while (false !== ($line = fgets($fh))) {
    $lower = false;

    foreach (str_split($line) as $char) {
        $ord = ord($char);

        if ($ord < 65 || ($ord > 90 && $ord < 97) || $ord > 122) {
            echo $char;
            continue;
        }

        echo ($lower) ? strtolower($char) : strtoupper($char);

        $lower = !$lower;
    }
}
