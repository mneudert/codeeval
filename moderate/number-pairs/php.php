<?php

$fh = fopen($argv[1], 'r');

while (false !== ($line = fgets($fh))) {
    list($numbers, $target) = explode(';', trim($line));
    $numbers                = explode(',', $numbers);
    $numcount               = count($numbers);

    if ($target > ($numbers[$numcount - 1] + $numbers[$numcount - 2])) {
        echo 'NULL' . PHP_EOL;
        continue;
    }

    $i     = 0;
    $j     = $numcount - 1;
    $pairs = array();

    while ($i < $j) {
        $sum = $numbers[$i] + $numbers[$j];

        if ($sum > $target) {
            $j--;
        } else if ($sum < $target) {
            $i++;
        } else {
            $pairs[] = $numbers[$i] . ',' . $numbers[$j];

            $i++;
            $j--;
        }
    }

    if (empty($pairs)) {
        echo 'NULL' . PHP_EOL;
    } else {
        echo join(';', $pairs) . PHP_EOL;
    }
}
