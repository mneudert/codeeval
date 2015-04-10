<?php

$fh = fopen($argv[1], 'r');

while (false !== ($line = fgets($fh))) {
    $numbers = explode(' ', trim($line));
    $diffs   = array();
    $max     = count($numbers) - 1;
    $isJolly = true;

    for ($i = 1; $i < $max; $i++) {
        $diff = abs($numbers[$i] - $numbers[$i + 1]);

        if ($diff < 1 || $diff > $max || @$diffs[$diff]) {
            $isJolly = false;
            break;
        }

        $diffs[$diff] = true;
    }

    echo $isJolly ? "Jolly\n" : "Not jolly\n";
}
