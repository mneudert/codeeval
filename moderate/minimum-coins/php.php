<?php

$fh = fopen($argv[1], 'r');

while (false !== ($amount = fgets($fh))) {
    $coins = 0;

    foreach (array(5, 3, 1) as $coin) {
        while ($coin <= $amount) {
            $coins++;
            $amount -= $coin;
        }
    }

    echo $coins . PHP_EOL;
}
