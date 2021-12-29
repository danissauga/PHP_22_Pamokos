<?php

echo '<pre>';
// 1,2,3 uzduoties
$mass = new stdClass;
$element=0;

//tik 1 mos uzduoties
for ($i=0; $i<30; $i++ ) {
    $mass->$i = rand(5,25);
}


foreach ($mass as $key => $value) {

  if ($value > 10) {
      echo 'Pirmasis maziausias indeksas kurio value > 10 yra: '. $key. '<br />';
      break;
  }

}


// 2 ir 3 cio uzduoties
$count = count((array)$mass);
//tik 3 cios uzduoties
for ($i=0; $i<$count; $i++) {
    if ((fmod($i,2)) and ($mass->$i > 15)) {
        $mass->$i = 0;
    }
}
print_r($mass);

//4 ta uzduotis



// 2 uduotis
for ($i=$count-1; $i<$count+10; $i++) {
    $mass->$i = rand(5,25);
}
print_r($mass);