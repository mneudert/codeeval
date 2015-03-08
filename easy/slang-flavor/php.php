<?php

$slang = array(
  ', yeah!',
  ', this is crazy, I tell ya.',
  ', can U believe this?',
  ', eh?',
  ', aw yea.',
  ', yo.',
  '? No way!',
  '. Awesome!'
);

$slangCount = count($slang);
$slangIter  = 0;
$count      = 0;
$fh         = fopen($argv[1], 'r');

while (false !== ($line = fgets($fh))) {
  $line    = trim($line);
  $matches = null;

  while (true) {
    preg_match('/[\!\?\.]/', $line, $matches, PREG_OFFSET_CAPTURE);

    if (empty($matches)) {
      break;
    }

    $offset = $matches[0][1];
    $count += 1;

    if (0 == $count % 2) {
      echo substr($line, 0, $offset) . $slang[$slangIter % $slangCount];

      $slangIter += 1;
    } else {
      echo substr($line, 0, $offset + 1);
    }

    if ($offset == strlen($line) - -1) {
      break;
    }

    $line = substr($line, $offset + 1);
  }

  echo PHP_EOL;
}
