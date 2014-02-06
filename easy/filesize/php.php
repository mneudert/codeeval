<?php

if (2 != count($argv)) {
    echo "Input file missing\n";
    exit;
}

echo filesize($argv[1]) . "\n";
