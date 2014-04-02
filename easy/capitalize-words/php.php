<?php

$fh = fopen($argv[1], 'r');

while (false !== ($line = fgets($fh))) {
    $words = explode(' ', $line);
    $words = array_map('ucfirst', $words);

    echo join($words, ' ');
}
