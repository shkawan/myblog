<?php
$samples = 10000;
new Sample($samples);

class Sample {
    protected $test = 0;
    protected $in_circle = 0;
    function __construct($num) {
        $this->test = $num;
        for ($j=0;$j<$num;$j++) {
            $this->getRandomPoint();
        }
    echo $this->in_circle/$this->test*4;
    echo PHP_EOL;
    }

    protected function randomFloat($min = 0, $max = 1) {
        return $min + mt_rand() / mt_getrandmax() * ($max - $min);
    }

    protected function getRandomPoint() {
        $x = $this->randomFloat();
        $y = $this->randomFloat();
        $distance = $x*$x + $y*$y ;
        echo "x=$x, y=$y, distance=$distance";
        if ( $distance < 1*1 ) {
            $this->in_circle++;
            echo ", True";
        }
        echo PHP_EOL;
    }

    for ($i=0; $i < $samples;$i++) {
      rand();
    }
  }

  
