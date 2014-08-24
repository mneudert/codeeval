<?php

$fh     = fopen($argv[1], 'r');
$primes = array(2);

while (false !== ($line = fgets($fh))) {
    if (!strlen($line)) {
        continue;
    }

    list($from, $to) = explode(',', trim($line));

    $count  = 0;

    if ($to > $primes[count($primes) - 1]) {
        $p = $primes[count($primes) - 1] + 1;

        if (0 == $p % 2) {
            $p++;
        }

        for ($p; $p <= $to; $p += 2) {
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

    foreach ($primes as $prime) {
        if ($prime < $from) {
            continue;
        }

        if ($prime > $to) {
            break;
        }

        $count++;
    }

    echo $count . PHP_EOL;
}
