<?php

$fh = fopen($argv[1], 'r');

while (false !== ($line = fgets($fh))) {
    list($o, $p, $q, $r) = explode(' ', $line, 4);

    $o = (int) trim($o);
    $p = (int) trim($p);
    $q = (int) trim($q);
    $r = (int) trim($r);

    $direction = '';

    if ($p < $r) {
        $direction .= 'N';
    } else if ($p > $r) {
        $direction .= 'S';
    }

    if ($o < $q) {
        $direction .= 'E';
    } else if ($o > $q) {
        $direction .= 'W';
    }

    if ('' === $direction) {
        echo 'here' . PHP_EOL;
    } else {
        echo $direction . PHP_EOL;
    }
}
