<?php

$fh = fopen($argv[1], 'r');

while (false !== ($line = fgets($fh))) {
    $column = (int) trim($line);
    $name   = '';

    while ($column > 0) {
        $column -= 1;
        $name    = chr(65 + ($column % 26)) . $name;
        $column  = floor($column / 26);
    }

    echo $name . PHP_EOL;
}
