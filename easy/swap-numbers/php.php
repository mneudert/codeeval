<?php

$fh = fopen($argv[1], 'r');

while (false !== ($line = fgets($fh))) {
    $words = explode(' ', trim($line));

    foreach ($words as &$word) {
        $len  = strlen($word);
        $temp = $word[$len - 1];

        $word[$len - 1] = $word[0];
        $word[0]        = $temp;
    }

    echo join(' ', $words) . PHP_EOL;
}
