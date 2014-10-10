<?php

$fh = fopen($argv[1], 'r');

while (false !== ($line = fgets($fh))) {
    $degrees = (float) $line;
    $minutes = ($degrees - (int) $degrees) * 60;
    $seconds = ($minutes - (int) $minutes) * 60;

    echo sprintf(
        '%d.%02d\'%02d"',
        (int) $degrees,
        (int) $minutes,
        (int) $seconds
    ) . PHP_EOL;
}
