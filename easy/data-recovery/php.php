<?php

$fh = fopen($argv[1], 'r');

while (false !== ($line = fgets($fh))) {
    list($words, $hints) = explode(';', trim($line));

    $words  = explode(' ', trim($words));
    $hints  = explode(' ', trim($hints));

    $count  = 0;
    $output = '';
    $result = array();

    foreach ($hints as $hint) {
        $result[(int) $hint] = $words[$count];
        $count++;
    }

    for ($i = 1; $i < count($hints) + 2; $i++) {
        if (isset($result[$i])) {
            $output .= ' ' . $result[$i];
        } else {
            $output .= ' ' . $words[count($words) - 1];
        }
    }

    echo trim($output) . PHP_EOL;
}
