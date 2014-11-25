<?php

$fh = fopen($argv[1], 'r');

while (false !== ($line = fgets($fh))) {
    $line = trim($line);

    if (55 >= strlen($line)) {
        echo $line . PHP_EOL;
        continue;
    }

    $snip = substr($line, 0, 40);

    if (false !== strpos($snip, ' ')) {
        $snip = trim(substr($snip, 0, strrpos($snip, ' ')));
    }

    echo $snip . "... <Read More>\n";
}
