<?php

$fh = fopen($argv[1], 'r');

while (false !== ($sets = fgets($fh))) {
    list($left, $right) = explode(';', $sets);

    $left  = explode(',', trim($left));
    $right = explode(',', trim($right));

    echo join(',', array_intersect($left, $right)) . PHP_EOL;
}
