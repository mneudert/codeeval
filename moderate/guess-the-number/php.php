<?php

$fh = fopen($argv[1], 'r');

while (false !== ($line = fgets($fh))) {
    $args = explode(' ', trim($line));

    $min   = 0;
    $max   = array_shift($args);
    $guess = ceil($max / 2);

    foreach ($args as $answer) {
        switch ($answer) {
            case 'Yay!':
                break;

            case 'Lower':
                $max = $guess - 1;
                break;

            case 'Higher':
                $min = $guess + 1;
                break;
        }

        $guess = $min + ceil(($max - $min) / 2);
    }

    echo $guess . PHP_EOL;
}
