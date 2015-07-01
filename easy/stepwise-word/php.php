<?php

$fh = fopen($argv[1], 'r');

while (false !== ($line = fgets($fh))) {
    $words   = explode(' ', trim($line));
    $longest = '';

    foreach ($words as $word) {
        if (strlen($word) <= strlen($longest)) {
            continue;
        }

        $longest = $word;
    }

    for ($i = 0; $i < strlen($longest); ++$i) {
        if (0 < $i) {
            echo ' ';
        }

        echo str_repeat('*', $i) . $longest[$i];
    }

    echo PHP_EOL;
}
