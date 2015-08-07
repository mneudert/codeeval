<?php

$fh = fopen($argv[1], 'r');

while (false !== ($line = fgets($fh))) {
    $highest = array();
    $rows    = array_map(
        function($row) { return explode(' ', $row); },
        explode(' | ', trim($line))
    );

    for ($i = 0; $i < count($rows); $i += 1) {
        for ($j = 0; $j < count($rows[$i]); $j += 1) {
            if (!isset($highest[$j]) || $rows[$i][$j] > $highest[$j]) {
                $highest[$j] = $rows[$i][$j];
            }
        }
    }

    echo join(' ', $highest) . PHP_EOL;
}
