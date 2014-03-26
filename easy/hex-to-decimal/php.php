<?php

$fh = fopen($argv[1], 'r');

while (false !== ($hex = fgets($fh))) {
    echo hexdec($hex) . PHP_EOL;
}
