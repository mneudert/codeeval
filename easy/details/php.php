<?php

$fh = fopen($argv[1], 'r');

while (false !== ($line = fgets($fh))) {
    $details = explode(',', trim($line));
    $counts  = array_map(function($row) {
      return strpos($row, 'Y') - strrpos($row, 'X') - 1;
    }, $details);

    echo min($counts) . PHP_EOL;
}
