<?php

$changeMap = array(
    10000 => 'ONE HUNDRED',
     5000 => 'FIFTY',
     2000 => 'TWENTY',
     1000 => 'TEN',
      500 => 'FIVE',
      200 => 'TWO',
      100 => 'ONE',
       50 => 'HALF DOLLAR',
       25 => 'QUARTER',
       10 => 'DIME',
        5 => 'NICKEL',
        1 => 'PENNY'
);

$fh = fopen($argv[1], 'r');

while (false !== ($line = fgets($fh))) {
    list($price, $cash) = explode(';', trim($line));

    if ($cash < $price) {
        echo 'ERROR' . PHP_EOL;
        continue;
    }

    if ($cash == $price) {
        echo 'ZERO' . PHP_EOL;
        continue;
    }

    $change = (100 * $cash) - (100 * $price);
    $return = array();

    foreach ($changeMap as $value => $name) {
        if ($value > $change) {
            continue;
        }

        while ($change >= $value) {
            $return[]  = $name;
            $change    = (int) ceil($change - $value);
        }
    }

    echo join(',', $return) . PHP_EOL;
}
