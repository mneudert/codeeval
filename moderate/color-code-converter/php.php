<?php

$fh = fopen($argv[1], 'r');

function detectType($color)
{
    if ('(' == $color[0]) {
        return 'CMYK';
    }

    if ('L' == $color[2]) {
        return 'HSL';
    }

    if ('V' == $color[2]) {
        return 'HSV';
    }

    return 'HEX';
}

function fromCMYK($color)
{
    list($c, $m, $y, $k) = explode(',', substr($color, 1, -1));

    return sprintf(
        'RGB(%u,%u,%u)',
        rgbInt((1 - $c) * (1 - $k)),
        rgbInt((1 - $m) * (1 - $k)),
        rgbInt((1 - $y) * (1 - $k))
    );
}

function fromHex($color)
{
    return sprintf(
        'RGB(%u,%u,%u)',
        hexdec(substr($color, 1, 2)),
        hexdec(substr($color, 3, 2)),
        hexdec(substr($color, 5, 2))
    );
}

function fromHSL($color)
{
    list($h, $s, $l) = explode(',', substr($color, 4, -1));

    $s = $s / 100;
    $l = $l / 100;

    $c  = (1 - abs(2 * $l - 1)) * $s;
    $h2 = $h / 60;
    $x  = $c * (1 - abs(fmod($h2, 2) - 1));
    $m  = $l - $c / 2;

    switch (floor($h2)) {
        case 0: $r = $c + $m; $g = $x + $m; $b = $m;      break;
        case 1: $r = $x + $m; $g = $c + $m; $b = $m;      break;
        case 2: $r = $m;      $g = $c + $m; $b = $x + $m; break;
        case 3: $r = $m;      $g = $x + $m; $b = $c + $m; break;
        case 4: $r = $x + $m; $g = $m;      $b = $c + $m; break;
        case 5: $r = $c + $m; $g = $m;      $b = $x + $m; break;
    }

    return sprintf('RGB(%u,%u,%u)', rgbInt($r), rgbInt($g), rgbInt($b));
}

function fromHSV($color)
{
    list($h, $s, $v) = explode(',', substr($color, 4, -1));

    $s = $s / 100;
    $v = $v / 100;

    $c  = $v * $s;
    $h2 = $h / 60;
    $x  = $c * (1 - abs(fmod($h2, 2) - 1));
    $m  = $v - $c;

    switch (floor($h2)) {
        case 0: $r = $c + $m; $g = $x + $m; $b = $m;      break;
        case 1: $r = $x + $m; $g = $c + $m; $b = $m;      break;
        case 2: $r = $m;      $g = $c + $m; $b = $x + $m; break;
        case 3: $r = $m;      $g = $x + $m; $b = $c + $m; break;
        case 4: $r = $x + $m; $g = $m;      $b = $c + $m; break;
        case 5: $r = $c + $m; $g = $m;      $b = $x + $m; break;
    }

    return sprintf('RGB(%u,%u,%u)', rgbInt($r), rgbInt($g), rgbInt($b));
}

function rgbInt($value)
{
    return floor($value * 255 + 0.5);
}

while (false !== ($color = fgets($fh))) {
    switch (detectType($color)) {
        case 'CMYK': echo fromCMYK($color) . PHP_EOL; break;
        case 'HEX':  echo fromHex($color)  . PHP_EOL; break;
        case 'HSL':  echo fromHSL($color)  . PHP_EOL; break;
        case 'HSV':  echo fromHSV($color)  . PHP_EOL; break;
    }
}
