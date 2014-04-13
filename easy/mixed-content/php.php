<?php

$fh = fopen($argv[1], 'r');

while (false !== ($line = fgets($fh))) {
    $elements = explode(',', trim($line));
    $numerics = array();
    $words    = array();

    foreach ($elements as $element) {
        if (is_numeric($element)) {
            $numerics[] = $element;
        } else {
            $words[] = $element;
        }
    }

    if (!empty($words)) {
        echo join(',', $words);
    }

    if (!empty($numerics) && !empty($words)) {
        echo '|';
    }

    if (!empty($numerics)) {
        echo join(',', $numerics);
    }

    echo PHP_EOL;
}
