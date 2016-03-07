<?php

$fh   = fopen($argv[1], 'r');
$ones = [
    '',     'One', 'Two',   'Three', 'Four',
    'Five', 'Six', 'Seven', 'Eight', 'Nine',

    'Ten',     'Eleven',  'Twelve',    'Thirteen', 'Fourteen',
    'Fifteen', 'Sixteen', 'Seventeen', 'Eighteen', 'Nineteen',
];

$tens = [
    '',      '',      'Twenty',  'Thirty', 'Forty',
    'Fifty', 'Sixty', 'Seventy', 'Eighty', 'Ninety',
];

function echoValuePart($part, $l, $m, $r) {
    global $ones;
    global $tens;

    if (0 == $l + $m + $r) {
        return;
    }

    if (0 < $l) {
        echo $ones[$l] . 'Hundred';
    }

    if (1 < $m) {
        echo $tens[$m] . $ones[$r];
    } else {
        echo $ones[$m * 10 + $r];
    }

    echo $part;
}

while (false !== ($line = fgets($fh))) {
    $value = str_split(str_pad(trim($line), 9, '0', STR_PAD_LEFT));

    echoValuePart('Million',  $value[0], $value[1], $value[2]);
    echoValuePart('Thousand', $value[3], $value[4], $value[5]);
    echoValuePart('',         $value[6], $value[7], $value[8]);

    echo 'Dollars' . PHP_EOL;
}
