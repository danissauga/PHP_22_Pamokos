<?php
class numbers {

public int $min;
public int $max;
public $true_min = false;
public $true_max = false;

        public function __construct($a1,$a2) {
            $this->min = $a1;
            $this->max = $a2;

        }

        public function test_min(){
            if ($this->min > 5){
               return $this->true_min = true;
            }  else {
                return $this->true_min = false;
            }
        }
        public function test_max(){
            if (($this->max < 56)) {
               return $this->true_max = true;
            }  else {
                return $this->true_max = false;
            }
        }
        public function test_conditions() {
           if (($this->test_min() == true) and ($this->test_max() == true)) {
               return 'Kondicija: MIN '. $this->min .'> 5 ir MAX '.$this->max.'< 56 atitinka numatytąją sąlygą!';
           } else {
               return 'Kondicija: MIN '. $this->min .'> 5 ir MAX '.$this->max.'< 56 netenkina numatytąją sąlygą!';
           }
        }
}
$minr=rand(0,56);
$maxr=rand(5,156);
$test = new numbers($minr,$maxr);

echo $test->test_conditions();
