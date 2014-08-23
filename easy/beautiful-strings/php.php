<?php

$fh = fopen($argv[1], 'r');

while (false !== ($line = fgets($fh))) {
    $chars  = str_split(strtolower(trim($line)));
    $counts = array();
    $beauty = 0;

    foreach ($chars as $char) {
        $charNum = ord($char);

        if (97 > $charNum || 122 < $charNum) {
            continue;
        }

        if (empty($counts[$charNum - 97])) {
            $counts[$charNum - 97] = 0;
        }

        $counts[$charNum - 97]++;
    }

    rsort($counts);

    for ($n = 26; $n > 0; $n--) {
        $i = abs($n - 26);

        if (empty($counts[$i])) {
            break;
        }

        $beauty += $n * $counts[$i];
    }

    echo $beauty . PHP_EOL;
}
