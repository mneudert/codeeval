<?php

$fh = fopen($argv[1], 'r');

while (false !== ($line = fgets($fh))) {
    $chars  = explode(' ', trim($line));
    $edge   = (int) sqrt(count($chars));
    $output = array();

    for ($r = 1; $r <= $edge; ++$r) {
        for ($c = ($edge * ($edge - 1) + $r) - 1; $c >= 0; $c -= $edge) {
            $output[] = $chars[$c];
        }
    }

    echo join(' ', $output) . PHP_EOL;
}
