<?php

$primes = array(2);
$num    = 3;

while (1000 > count($primes)) {
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

echo array_sum($primes) . PHP_EOL;
