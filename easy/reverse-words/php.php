<?php

$fh = fopen($argv[1], 'r');

while (false !== ($line = fgets($fh))) {
    echo join(array_reverse(explode(' ', trim($line))), ' ') . PHP_EOL;
}
