<?php

$fh = fopen($argv[1], 'r');

while (false !== ($line = fgets($fh))) {
    $digits = '';
    $map    = array(
        'a' => 0, 'b' => 1, 'c' => 2, 'd' => 3, 'e' => 4,
        'f' => 5, 'g' => 6, 'h' => 7, 'i' => 8, 'j' => 9
    );

    foreach (str_split($line) as $char) {
        if (isset($map[$char])) {
            $digits .= $map[$char];
        }

        if (is_numeric($char)) {
            $digits .= $char;
        }
    }

    if ('' == $digits) {
        echo 'NONE' . PHP_EOL;
    } else {
        echo $digits . PHP_EOL;
    }
}
