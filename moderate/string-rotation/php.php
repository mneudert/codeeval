<?php

$fh = fopen($argv[1], 'r');

while (false !== ($words = fgets($fh))) {
    list($left, $right) = explode(',', trim($words));

    $isRot = false;

    for ($i = 0; $i <= strlen($left); $i++) {
        if ($left == $right) {
            $isRot = true;
            break;
        }

        $right = substr($right, 1) . $right[0];
    }

    echo ($isRot ? 'True' : 'False') . PHP_EOL;
}
