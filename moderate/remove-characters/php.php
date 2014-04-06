<?php

$fh = fopen($argv[1], 'r');

while (false !== ($line = fgets($fh))) {
    list($sentence, $chars) = explode(',', trim($line));

    foreach (str_split(trim($chars)) as $char) {
        $sentence = str_replace($char, '', $sentence);
    }

    echo trim($sentence) . PHP_EOL;
}
