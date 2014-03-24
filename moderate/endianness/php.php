<?php

$test     = 0x00FF;
$isLittle = ($test === current(unpack('v', pack('S', $test))));

echo ($isLittle ? 'LittleEndian' : 'BigEndian') . PHP_EOL;
