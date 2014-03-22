<?php

$fh = fopen($argv[1], 'r');

while (false !== ($line = fgets($fh))) {
    $chars  = str_split(trim($line));
    $counts = array_count_values($chars);

    foreach ($chars as $char) {
        if (1 == $counts[$char]) {
            echo $char . PHP_EOL;
            break;
        }
    }
}
