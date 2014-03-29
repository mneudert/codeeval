<?php

$fh = fopen($argv[1], 'r');

function permutate($prefix, $chars, $permutations)
{
    if (1 == count($chars)) {
        $permutations[] = $prefix . array_pop($chars);
    } else {
        foreach (array_keys($chars) as $index) {
            $temp = $chars;
            unset($temp[$index]);

            $permutations = permutate($prefix . $chars[$index], $temp, $permutations);
        }
    }

    return $permutations;
}

while (false !== ($line = fgets($fh))) {
    $muts = permutate('', str_split(trim($line)), array());

    sort($muts);

    echo join(',', $muts) . PHP_EOL;
}
