<?php

$fh = fopen($argv[1], 'r');

while (false !== ($line = fgets($fh))) {
    list($input, $expected) = explode('|', trim($line));

    $bugs     = 0;
    $expected = trim($expected);
    $input    = trim($input);

    for ($i = 0; $i < strlen($input); $i += 1) {
        if ($input[$i] !== $expected[$i]) {
            $bugs += 1;
        }
    }

    if (0 == $bugs) {
        echo 'Done';
    } else if (2 >= $bugs) {
        echo 'Low';
    } else if (4 >= $bugs) {
        echo 'Medium';
    } else if (6 >= $bugs) {
        echo 'High';
    } else {
        echo 'Critical';
    }

    echo PHP_EOL;
}
