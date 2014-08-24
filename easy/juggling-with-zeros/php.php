<?php

$fh = fopen($argv[1], 'r');

while (false !== ($line = fgets($fh))) {
    $seqs = explode(' ', trim($line));
    $bin  = '';

    while (!empty($seqs)) {
        $flag = array_shift($seqs);
        $seq  = array_shift($seqs);

        if ('0' === $flag) {
            $bin .= $seq;
        } else {
            $bin .= str_repeat('1', strlen($seq));
        }
    }

    echo bindec($bin) . PHP_EOL;
}
