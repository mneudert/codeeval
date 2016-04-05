<?php

$fh = fopen($argv[1], 'r');

while (false !== ($line = fgets($fh))) {
    list($left, $right) = explode(' | ', $line);

    $left  = explode(' ', trim($left));
    $right = explode(' ', trim($right));

    array_walk($left,  function(&$element) { $element = hexdec($element); });
    array_walk($right, function(&$element) { $element = bindec($element); });


    echo array_sum($left) <= array_sum($right) ? "True\n" : "False\n";
}
