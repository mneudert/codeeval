<?php

$fh = fopen($argv[1], 'r');

while (false !== ($line = fgets($fh))) {
    echo strtolower($line);
}
