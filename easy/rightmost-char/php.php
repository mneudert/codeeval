<?php

$fh = fopen($argv[1], 'r');

while (false !== ($line = fgets($fh))) {
    list($sentence, $char) = explode(',', trim($line));

    $pos = strrpos($sentence, $char);

    if (false === $pos) {
        echo '-1' . PHP_EOL;
    } else {
        echo $pos . PHP_EOL;
    }
}
