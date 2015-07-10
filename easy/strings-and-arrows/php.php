<?php

$fh    = fopen($argv[1], 'r');
$left  = '<--<<';
$right = '>>-->';

while (false !== ($line = fgets($fh))) {
    $count  = 0;
    $offset = 0;

    while (false !== ($pos = strpos($line, $left, $offset))) {
      $count  += 1;
      $offset  = $pos + 4;
    }

    $offset = 0;

    while (false !== ($pos = strpos($line, $right, $offset))) {
      $count  += 1;
      $offset  = $pos + 4;
    }

    echo $count . PHP_EOL;
}
