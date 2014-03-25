<?php

$fh = fopen($argv[1], 'r');

while (false !== ($number = fgets($fh))) {
    $number   = trim($number);
    $digits   = str_split($number);
    $digitSum = 0;

    foreach ($digits as $digit) {
        $digitSum += pow($digit, strlen($number));
    }

    if ($number == $digitSum) {
        echo 'True' . PHP_EOL;
    } else {
        echo 'False' . PHP_EOL;
    }
}
