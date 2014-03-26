<?php

$parensMap   = array('(' => ')', '[' => ']', '{' => '}');
$parensOpen  = array_keys($parensMap);
$parensClose = array_values($parensMap);
$fh          = fopen($argv[1], 'r');

while (false !== ($line = fgets($fh))) {
    $wellFormed = true;
    $line       = trim($line);
    $stack      = array();

    foreach (str_split($line) as $char) {
        if (in_array($char, $parensOpen)) {
            array_push($stack, $char);
        }

        if (in_array($char, $parensClose)) {
            if (empty($stack)) {
                $wellFormed = false;
                break;
            }

            $popped = array_pop($stack);

            if ($parensMap[$popped] != $char) {
                $wellFormed = false;
                break;
            }
        }
    }

    if (!empty($stack)) {
        $wellFormed = false;
    }

    echo ($wellFormed ? 'True' : 'False') . PHP_EOL;
}
