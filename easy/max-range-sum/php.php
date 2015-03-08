<?php

$fh = fopen($argv[1], 'r');

while (false !== ($line = fgets($fh))) {
  list($count, $numbers) = explode(';', trim($line));

  $numbers = explode(' ', trim($numbers));
  $numbers = array_map('intval', $numbers);

  $maxPos   = count($numbers) - $count;
  $maxRange = 0;

  for ($i = 0; $i <= $maxPos; ++$i) {
    $range = array_sum(array_slice($numbers, $i, $count));

    if ($range > $maxRange) {
      $maxRange = $range;
    }
  }

  echo $maxRange . PHP_EOL;
}
