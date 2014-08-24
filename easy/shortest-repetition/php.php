<?php

$fh = fopen($argv[1], 'r');

while (false !== ($line = fgets($fh))) {
    $line = trim($line);
    $len  = 0;
    $m    = strlen($line);

    for ($n = 1; $n <= $m; $n++) {
        if (0 != $m % $n) {
            continue;
        }

        $test  = $line;
        $rep   = substr($line, 0, $n);
        $isRep = true;

        while ($test) {
            if ($rep != substr($test, 0, $n)) {
                $isRep = false;
                break;
            }

            $test = substr($test, $n);
        }

        if ($isRep) {
            $len = $n;
            break;
        }
    }

    echo $len . PHP_EOL;
}
