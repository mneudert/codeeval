<?php

$fh   = fopen($argv[1], 'r');
$tree = array(
  3  => 8,
  8  => 30,
  10 => 20,
  20 => 8,
  29 => 20,
  30 => null,
  52 => 30
);

while (false !== ($line = fgets($fh))) {
    list($n1, $n2) = explode(' ', trim($line));

    $found = false;

    while ($n1 && $n1 != $n2) {
        $n2p = $n2;

        while ($n2p) {
            if ($n2p == $n1) {
                $found = true;
                break 2;
            }

            $n2p = $tree[$n2p];
        }

        $n1 = $tree[$n1];
    }

    echo $n1 . PHP_EOL;
}
