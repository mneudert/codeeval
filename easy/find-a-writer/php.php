<?php

$fh = fopen($argv[1], 'r');

while (false !== ($line = fgets($fh))) {
    list($chars, $keys) = explode('|', trim($line));

    foreach (explode(' ', trim($keys)) as $key) {
        echo $chars[$key - 1];
    }

    echo PHP_EOL;
}
