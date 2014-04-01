<?php

$fh     = fopen($argv[1], 'r');
$keyMap = array(
    0 => '0',
    1 => '1',
    2 => 'abc',
    3 => 'def',
    4 => 'ghi',
    5 => 'jkl',
    6 => 'mno',
    7 => 'pqrs',
    8 => 'tuv',
    9 => 'wxyz',
);

function permutate($prefix, $digits, $words)
{
    global $keyMap;

    if (1 == count($digits)) {
        foreach (str_split($keyMap[array_pop($digits)]) as $char) {
            $words[] = $prefix . $char;
        }
    } else {
        foreach (str_split($keyMap[array_shift($digits)]) as $char) {
            $words = permutate($prefix . $char, $digits, $words);
        }
    }

    return $words;
}

while (false !== ($number = fgets($fh))) {
    $words = permutate('', str_split(trim($number)), array());

    sort($words);

    echo join(',', $words) . PHP_EOL;
}
