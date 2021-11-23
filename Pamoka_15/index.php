<?php
echo '<pre>';
$data = [];
for($i = 0; $i < 30; $i++) {
     $value = rand(5,25);
     $data[]=$value;
}
print_r($data);

$great_then_10 = 0;

foreach ($data as $value){
    if($value > 10) {
       $great_then_10++;
    }
}
echo 'Didesniu uz 10 yra: '.$great_then_10.'<br/>';

echo '<br>Didziausi skaiciai:<br/><br>';

$dizdiausia_reiksme = array_keys($data, max($data));

foreach ($dizdiausia_reiksme as $value){
    echo 'Didziausias skaicius :'.$data[$value].' kurio indexas: '.$value.'<br>';
}

echo '<br>Poriniu skaiciu indeksu sumos skaiciavimas:<br/><br>';
$sum = 0;
foreach ($data as $index => $value){
  if ($index % 2 == 0) {$sum += $index;}
}

echo 'Poriniu skaiciu indeksu suma:'.$sum.'<br/><br>';
echo '<br>Sukurkite naują masyvą, kurio reikšmės yra 1 uždavinio masyvo reikšmes minus tos reikšmės indeksas:<br/><br>';
$data2 = [];
foreach ($data as $index => $value){
    $data2[] = $value-$index;
}
print_r($data2);
echo '<br>Masyvo papildymas 10 elementu:<br>';

for($i = 0; $i < 10; $i++) {
    $data[] = rand(5,25);
}

print_r($data);

echo 'Iš masyvo elementų sukurkite du naujus masyvus. Vienas turi būti sudarytas iš neporinių indekso reikšmių, o kitas iš porinių';
$poriniai=[];
$neporiniai=[];
foreach ($data as $index => $value){
  if ($index % 2 == 0) {
      $poriniai[] = $value;
    } else {
      $neporiniai[] = $value;
  }
}
echo 'Poriniai<br>';
print_r($poriniai);
echo 'NePoriniai<br>';
print_r($neporiniai);

echo 'Pirminio masyvo elementus su poriniais indeksais padarykite lygius 0 jeigu jie didesni už 15';
foreach ($poriniai as $index => $value){
    if ($value > 15) {
        $poriniai[$index] = 0;
        }
}
echo 'Poriniai po didesniu uz 15 pakeitimo 0<br>';
print_r($poriniai);

echo 'Suraskite pirmą (mažiausią) indeksą, kurio elemento reikšmė didesnė už 10<br><br>';

for ($i=0; $i < count($data); $i++){
    if ($data[$i] > 10) {
    echo "Pirmas maziausias indexas kurio elemento israiska > 10 yra: $i<br>";
    break;
    }
}

echo '<br>Naudodami funkciją unset() iš masyvo ištrinkite visus elementus turinčius porinį indeksą;';
foreach ($data as $index => $value){
    if ($index % 2 == 0) {
        unset($data[$index]);
        }
}
echo 'Poriniai po didesniu uz 15 pakeitimo 0<br>';
print_r($data);



echo '</pre>';
?>