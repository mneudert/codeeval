<?php

$primes = array(2);
$fh     = fopen($argv[1], 'r');

while (false !== ($limit = fgets($fh))) {
    if ($limit > $primes[count($primes) - 1]) {
        $p = $primes[count($primes) - 1] + 1;

        if (0 == $p % 2) {
            $p++;
        }

        for ($p; $p < $limit; $p += 2) {
            $isPrime = true;

            foreach ($primes as $prime) {
                if (0 == $p % $prime) {
                    $isPrime = false;
                    break;
                }
            }

            if ($isPrime) {
                $primes[] = $p;
            }
        }
    }

    $found = array();

    foreach ($primes as $prime) {
        if ($prime >= $limit) {
            break;
        }

        $found[] = $prime;
    }

    echo join(',', $found) . PHP_EOL;
}
