<?php

$fh = fopen($argv[1], 'r');

while (false !== ($line = fgets($fh))) {
    $words  = explode(' ', trim($line));
    $target = array_pop($words);

    if ($target > count($words)) {
        echo PHP_EOL;
    } else {
        echo $words[count($words) - $target] . PHP_EOL;
    }
}
