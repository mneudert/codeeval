<?php

$map = array(1000 => 'M', 900 => 'CM',
              500 => 'D', 400 => 'CD',
              100 => 'C', 90  => 'XC',
               50 => 'L', 40  => 'XL',
               10 => 'X',  9  => 'IX',
                5 => 'V',  4  => 'IV',
                1 => 'I');
$fh  = fopen($argv[1], 'r');

while (false !== ($number = fgets($fh))) {
    $number = (int) trim($number);

    foreach ($map as $value => $sign) {
        while ($number >= $value) {
            $number -= $value;
            echo $sign;
        }
    }

    echo PHP_EOL;
}
