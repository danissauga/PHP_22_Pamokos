<?php
//session_start();
echo '<pre>';
function dalikliai(int $skaicius)
{
    $kiekis = 0;
    for ($x = 2; $x < $skaicius; $x++) {
        $kas = $skaicius/$x;
        if (is_int($kas)) {
                $kiekis++;
        }
    }
        return $kiekis;
}


//echo dalikliai(15);

// 6 uzduotis
$data = [];
for ($i = 0; $i < 100; $i++){
    $data[] = rand(333,777);
}
/*echo 'Pradinis masyvas ';
print_r($data);*/
foreach ($data as $id => $value)
{
    if (dalikliai($value) == 0) {
        unset($data[$id]);
    }

}
/*echo '<br />Panaikinti pirminiai skaičiai <br />';
echo 'Liko tik '. count($data) . ' įrašai.<br />';
print_r($data);*/

/*Sugeneruokite atsitiktinio (nuo 10 iki 20) ilgio masyvą,
kurio visi, išskyrus paskutinį,
elementai yra atsitiktiniai skaičiai nuo 0 iki 10,*/


echo '<h3>7- tintas uzdavinys</h3>';

function get_array() {
   $mas = [];
   $till2 = rand(10,20);
   for ($x = 0; $x < $till2; $x++) {
                $mas[$x] = rand(0,10);
   }
   return $mas;
}


$masyvas = [];
$till1 = rand(10,20);

for ($all = 0; $all < $till1; $all++) {

    if ($all == $till1-1) {
    $masyvas[$all] = get_array();
   } else {
      $masyvas[$all] = rand(0,10);
   }
}
print_r($masyvas);
echo count($masyvas);

$masyvas = [];
function creat_tree(&$masyvas) {
    $till = rand(10,20);
    for ($i=0; $i < $till; $i++){
       if ($i==$till-1) { creat_tree($masyvas[$i]); } else {
       $masyvas[$i] = rand(10,30); }
    }
return $masyvas;
}

//print_r(creat_tree($masyvas));
echo '<br>';

function fact($n,$f) {
  if ($n === 0) { //ar ne 0 lis
     return 0; //Jei taip - grazinamas paskutinis simbolis 0 = lis 
  }
  else {
      for ($i = 0; $i < $f; $i++){
         if ($i == $f-1) { $mass[$i]=fact($n-1, rand(10,20)); } else {
          $mass[$i]=rand(0,10); }
      }
      }
      return $mass;

}
print_r(fact(rand(10,30), rand(10,20)));


?>