<?php

$fh = fopen($argv[1], 'r');

while (false !== ($card = fgets($fh))) {
    $card = str_replace(' ', '', trim($card));
    $sum  = 0;

    for ($i = 0; $i < strlen($card); $i += 1) {
        if (0 == $i % 2) {
            $sum += $card[$i];
        }

        $sum += $card[$i];
    }

    echo ((0 == $sum % 10) ? 'Real' : 'Fake') . PHP_EOL;
}
