<?php

class Uzdavinys7 {


 public $chars;
 public $char;
 public $mass;
 public $array;
 public $massss;


 public function __construct() {
        $this->mass=[];

        $this->chars =
        [['char'=>'A','count'=>0],
        ['char'=>'B','count'=>0],
        ['char'=>'C','count'=>0],
        ['char'=>'D','count'=>0]];
    }

public function Generate() {

    for ($i = 0; $i < 200; $i++) {
        $char=rand(0,3);
        $this->mass[] = $this->chars[$char]['char'];
        }
    return $this->mass;
}

public function Decode($masss) {
    $array = json_decode(json_encode($masss), true);
     return $array;
}

public function Sum_arrays($a1,$a2,$a3){
    for ($x=0; $x < count($a1);$x++) {
      $this->array[$x] = $a1[$x].$a2[$x].$a3[$x];
    }
    return $this->array;
}

public function Get_uniqe($data) {
    
}

}

echo '<pre>';

$mass1 = new Uzdavinys7();
$mass1->Generate();
$mass2 = new Uzdavinys7();
$mass2->Generate();
$mass3 = new Uzdavinys7();
$mass3->Generate();
$full_array = new Uzdavinys7();
$full_array->Sum_arrays( $mass1->Decode($mass1->mass), $mass2->Decode($mass2->mass), $mass3->Decode($mass3->mass) );

print_r($full_array->array);