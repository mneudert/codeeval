<?php

$fh = fopen($argv[1], 'r');

while (false !== ($line = fgets($fh))) {
    $results = array();

    list($fizz, $buzz, $max) = explode(' ', trim($line));

    for ($i = 1; $i <= $max; $i++) {
        if ((0 == $i % $fizz) && (0 == $i % $buzz)) {
            $results[] = 'FB';
        } else if (0 == $i % $buzz) {
            $results[] = 'B';
        } else if (0 == $i % $fizz) {
            $results[] = 'F';
        } else {
            $results[] = $i;
        }
    }

    echo join(' ', $results) . PHP_EOL;
}
