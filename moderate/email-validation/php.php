<?php

$fh = fopen($argv[1], 'r');

while (false !== ($line = fgets($fh))) {
    $email = strtolower(trim($line));

    if (preg_match('/^([^ @"<>]+|".*")@[a-z0-9.]+.[a-z]+$/', $email)) {
        echo 'true' . PHP_EOL;
    } else {
        echo 'false' . PHP_EOL;
    }
}
