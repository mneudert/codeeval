<?php

$fh = fopen($argv[1], 'r');

while (false !== ($trip = fgets($fh))) {
    $cities    = explode(';', rtrim(trim($trip), ';'));
    $distances = array();

    foreach ($cities as $city) {
        list($stop, $distance) = explode(',', trim($city));

        $distances[] = $distance;
    }

    sort($distances);

    $route = array($distances[0]);

    for ($n = 1; $n < count($distances); $n++) {
        $route[] = $distances[$n] - $distances[$n - 1];
    }

    echo join(',', $route) . PHP_EOL;
}
