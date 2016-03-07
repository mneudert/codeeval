<?php

$fh   = fopen($argv[1], 'r');
$vals = [
    2  =>  2,  3  =>  3,  4  =>  4,
    5  =>  5,  6  =>  6,  7  =>  7,
    8  =>  8,  9  =>  9, 10  => 10,
   'J' => 11, 'Q' => 12, 'K' => 13, 'A' => 14
];

function cardVal($card, $trump) {
    global $vals;

    $val = $vals[substr($card, 0, -1)];

    if ($trump == substr($card, -1)) {
        $val += 100;
    }

    return $val;
}

while (false !== ($line = fgets($fh))) {
    list($cards, $trump) = explode(' | ', $line);
    list($left, $right)  = explode(' ', $cards);

    $trump = trim($trump);

    $leftVal  = cardVal($left, $trump);
    $rightVal = cardVal($right, $trump);

    if ($leftVal > $rightVal) {
        echo $left . PHP_EOL;
    } else if ($leftVal < $rightVal) {
        echo $right . PHP_EOL;
    } else {
        echo $left . ' ' . $right . PHP_EOL;
    }
}
