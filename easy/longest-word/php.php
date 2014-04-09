<?php

$fh = fopen($argv[1], 'r');

while (false !== ($line = fgets($fh))) {
    $words   = explode(' ', trim($line));
    $longest = '';

    foreach ($words as $word) {
        if (strlen($word) > strlen($longest)) {
           $longest = $word;
        }
    }

    echo $longest . PHP_EOL;
}
