<?php

$fh = fopen($argv[1], 'r');

class Rect
{
    public $ulx;
    public $uly;
    public $lrx;
    public $lry;

    public function __construct($ulx, $uly, $lrx, $lry)
    {
        $this->ulx = (int) $ulx;
        $this->uly = (int) $uly;
        $this->lrx = (int) $lrx;
        $this->lry = (int) $lry;
    }

    public function contains($x, $y)
    {
        return $this->ulx <= $x && $x <= $this->lrx
            && $this->lry <= $y && $y <= $this->uly;
    }

    public function overlaps(Rect $rect)
    {
        for ($y = $this->lry; $y <= $this->uly; $y++) {
            if ($rect->contains($this->ulx, $y)) {
                return true;
            }

            if ($rect->contains($this->lrx, $y)) {
                return true;
            }
        }

        for ($x = $this->ulx; $x <= $this->lrx; $x++) {
            if ($rect->contains($x, $this->uly)) {
                return true;
            }

            if ($rect->contains($x, $this->lry)) {
                return true;
            }
        }

        return false;
    }
}

while (false !== ($line = fgets($fh))) {
    $coords = explode(',', $line);
    $a      = new Rect($coords[0], $coords[1], $coords[2], $coords[3]);
    $b      = new Rect($coords[4], $coords[5], $coords[6], $coords[7]);

    echo ($a->overlaps($b) ? 'True' : 'False') . PHP_EOL;
}
