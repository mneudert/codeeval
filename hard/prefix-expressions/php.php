<?php

$fh = fopen($argv[1], 'r');

while (false !== ($line = fgets($fh))) {
    $exprs  = array_reverse(explode(' ', trim($line)));
    $values = array();

    foreach ($exprs as $expr) {
        if ('+' == $expr) {
            $values[] = array_pop($values) + array_pop($values);
            continue;
        }

        if ('*' == $expr) {
            $values[] = array_pop($values) * array_pop($values);
            continue;
        }

        if ('/' == $expr) {
            $values[] = array_pop($values) / array_pop($values);
            continue;
        }

        $values[] = $expr;
    }

    echo $values[0] . PHP_EOL;
}
