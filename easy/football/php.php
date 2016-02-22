<?php

$fh = fopen($argv[1], 'r');

while (false !== ($line = fgets($fh))) {
    $countries = explode('|', $line);
    $outputs   = [];
    $teams     = [];

    foreach ($countries as $index => $roots) {
        $rootTeams = explode(' ', trim($roots));

        foreach ($rootTeams as $team) {
            if (!isset($teams[$team])) {
                $teams[$team] = array();
            }

            $teams[$team][] = $index + 1;
        }
    }

    foreach ($teams as $team => $fans) {
        $outputs[] = $team . ':' . implode(',', $fans);
    }

    natsort($outputs);

    echo implode('; ', $outputs) . ';' . PHP_EOL;
}
