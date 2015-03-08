<?php

$fh = fopen($argv[1], 'r');

while (false !== ($line = fgets($fh))) {
    $msg = trim($line);
    $msg = preg_replace('/(.)\\1+/', '$1', $msg);

    echo $msg . PHP_EOL;
}
