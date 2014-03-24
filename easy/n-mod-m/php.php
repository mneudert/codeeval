<?php

$fh = fopen($argv[1], 'r');

while (false !== ($line = fgets($fh))) {
    list($n, $m) = explode(',', trim($line));

    while ($n >= $m) {
       $n -= $m;
    }

    echo $n . PHP_EOL;
}
