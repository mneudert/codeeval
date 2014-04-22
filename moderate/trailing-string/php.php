<?php

$fh = fopen($argv[1], 'r');

while (false !== ($line = fgets($fh))) {
    list($sentence, $test) = explode(',', trim($line));

    echo (int) (
        strlen($sentence) >= strlen($test) &&
        0 === substr_compare($sentence, $test, -strlen($test))
    ) . PHP_EOL;
}
