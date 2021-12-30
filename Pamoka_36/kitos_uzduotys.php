<?php

echo '<pre>';
// 6 uzduoties
$mass = new stdClass;
$chars =
[['char'=>'A','count'=>0],
['char'=>'B','count'=>0],
['char'=>'C','count'=>0],
['char'=>'D','count'=>0]];


for ($i = 0; $i < 200; $i++) {
    $char=rand(0,3);
    $mass->$i = $chars[$char]['char'];
    $chars[$char]['count']++;
}

print_r($mass);
echo '<br>Sugeneruota vienodu raidžių: <br />';
foreach ($chars as $id => $val) {
   echo 'Raidė: '.$val['char']. ' kurios kiekis: '.$val['count'].'<br />';
}

//7 uzduotis
$array = json_decode(json_encode($mass), true);
sort($array);
$mass= json_decode(json_encode($array),false);
print_r($mass);

$mass1 = stdClass;
$mass2 = stdClass;
$mass3 = stdClass;


