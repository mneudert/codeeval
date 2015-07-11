<?php

$fh       = fopen($argv[1], 'r');
$monthMap = array(
    'Jan' => 1, 'Feb' =>  2, 'Mar' =>  3, 'Apr' => 4,
    'May' => 5, 'Jun' =>  6, 'Jul' =>  7, 'Aug' => 8,
    'Sep' => 9, 'Oct' => 10, 'Nov' => 11, 'Dec' => 12
);

function monthIdx($date) {
    global $monthMap;

    return (12 * (substr($date, 4, 4) - 1990)) + $monthMap[substr($date, 0, 3)] - 1;
}

while (false !== ($line = fgets($fh))) {
    $periods = explode('; ', trim($line));
    $work    = array();

    foreach ($periods as $period) {
        list($start, $end) = explode('-', $period);

        $from = monthIdx($start);
        $to   = monthIdx($end);

        for ($i = $from; $i <= $to; $i += 1) {
            $work[$i] = true;
        }
    }

    echo floor(count($work) / 12) . PHP_EOL;
}
