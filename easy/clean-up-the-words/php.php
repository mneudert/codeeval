<?php

$fh = fopen($argv[1], 'r');

while (false !== ($line = fgets($fh))) {
    echo trim(
      str_replace(
        '  ',
        ' ',
        preg_replace(
          '/[^a-z]+/',
          ' ',
          strtolower(trim($line))
        )
      )
    ) . PHP_EOL;
}
