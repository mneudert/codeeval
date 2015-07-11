<?php

$fh = fopen($argv[1], 'r');

while (false !== ($line = fgets($fh))) {
    $pos   = trim($line);
    $moves = array();

    list($x, $y) = array(ord($pos[0]) - 96, (int) $pos[1]);

    if ($x > 2 && $y > 1) { $moves[] = chr(96 + $x - 2) . ($y - 1); }
    if ($x > 2 && $y < 8) { $moves[] = chr(96 + $x - 2) . ($y + 1); }
    if ($x > 1 && $y > 2) { $moves[] = chr(96 + $x - 1) . ($y - 2); }
    if ($x > 1 && $y < 7) { $moves[] = chr(96 + $x - 1) . ($y + 2); }
    if ($x < 8 && $y > 2) { $moves[] = chr(96 + $x + 1) . ($y - 2); }
    if ($x < 8 && $y < 7) { $moves[] = chr(96 + $x + 1) . ($y + 2); }
    if ($x < 7 && $y > 1) { $moves[] = chr(96 + $x + 2) . ($y - 1); }
    if ($x < 7 && $y < 8) { $moves[] = chr(96 + $x + 2) . ($y + 1); }

    echo join(' ', $moves) . PHP_EOL;
}
