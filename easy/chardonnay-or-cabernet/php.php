<?php

$fh = fopen($argv[1], 'r');

while (false !== ($line = fgets($fh))) {
    list($wines, $chars) = explode('|', trim($line));

    $chars = array_count_values(str_split(trim($chars)));
    $wines = explode(' ', trim($wines));

    $known = array();

    foreach ($wines as $wine) {
        $wineChars = array_count_values(str_split($wine));
        $isKnown   = true;

        foreach ($chars as $char => $count) {
            if (!isset($wineChars[$char]) || $wineChars[$char] < $count) {
                $isKnown = false;
                break;
            }
        }

        if ($isKnown) {
            $known[] = $wine;
        }
    }

    if (empty($known)) {
        echo 'False' . PHP_EOL;
    } else {
        echo implode(' ', $known) . PHP_EOL;
    }
}
