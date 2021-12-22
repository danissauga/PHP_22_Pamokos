<?php
class numbers {
    public $min;
    public $max;
    public $true_min;    //dadeta
    public $true_max;    //dadeta

public function __construct ($b1, $b2){
    $this-> min = $b1;
    $this-> max = $b2;
}


public function minr(){
    if ($this->min > 5){
        return $this->true_min = true;
    } else {
        return $this->true_min - false; //prideta reiksme
        }
}
public function maxr(){
    if ($this->max < 56){
        return $this->true_max = true;
    } else {
        return $this->true_max = false;  //prideta reiksme
        }
}

//prideta funkcija

 public function test_numbers() {
           if (($this->minr() == true) and ($this->maxr() == true)) {
               return 'Atitinka numatytąją sąlygą!';
           } else {
               return 'Netenkina numatytąją sąlygą!';
           }
        }

}

$minr=rand(0,56);
$maxr=rand(5,156);
$test = new numbers($minr,$maxr);

echo 'min:'. $minr.'<br/>';   //prideta
echo 'max:'. $maxr.'<br/>';  //prideta

echo  $test->test_numbers();  //pataisytas kreipinuys