<?php

$primes = array(2);
$num    = 3;

while (1000 >= $num) {
    $isPrime = true;

    foreach ($primes as $prime) {
        if (0 == $num % $prime) {
            $isPrime = false;
            break;
        }
    }

    if ($isPrime) {
        $primes[] = $num;
    }

    $num++;
}

foreach (array_reverse($primes) as $prime) {
    if ($prime == strrev($prime)) {
        echo $prime . PHP_EOL;
        break;
    }
}
