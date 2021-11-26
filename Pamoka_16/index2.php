<?php

//Sugeneruokite 10 skaičių masyvą pagal taisyklę: Du pirmi skaičiai- atsitiktiniai nuo 5 iki 25.
//Trečias, pirmo ir antro suma. Ketvirtas- antro ir trečio suma. Penktas trečio ir ketvirto suma ir t.t.
echo '<pre>';
$gauti_10 = [];
$gauti = 10;
$first = rand(5,25);
$second = rand(5,25);
$gauti_10 = [$first,$second];

echo 'Pirmi du tsitiktiniai skaiciai:';
print_r($gauti_10);

for ($i=2; $i<$gauti; $i++) {
   $gauti_10[]=$gauti_10[$i-2]+$gauti_10[$i-1];
}

print_r($gauti_10);

while (true) {

$pagrindinis_mass = [];
$temp_mass = [];
$go = true;

for ($i=0; $i<=100; $i++) {
   $pagrindinis_mass[] = rand(0,300);
}
echo 'Pradinis masyvas:<br>';
print_r($pagrindinis_mass);

//keiciam ne unikalius unikaliu :)
foreach ($pagrindinis_mass as $value) {
  if (!in_array($value,$temp_mass)) {$temp_mass[] = $value;}
    else {
        while($go) {
        $new = rand(0,300);
        if (!in_array($new,$temp_mass)) {$temp_mass[] = $new; break; }
        }
    }
}
echo 'Pradinis perdarytas i visus unikalius:<br>';
print_r($temp_mass);

$max = [];
$max[]=max($temp_mass);
echo 'Didziausias skaicius: '.$max[0].'<br>';

if (($key = array_search($max[0], $temp_mass)) !== false) {
    unset($temp_mass[$key]);
}

$new_array = array_chunk($temp_mass,count($temp_mass)/2);

sort($new_array[0]);
rsort($new_array[1]);

$surusiuotas = [];

$surusiuotas = array_merge($new_array[0],$max, $new_array[1]);
echo 'Surusiuuotas masyvas:<br>';
print_r($surusiuotas);

$pirma_suma= array_sum($new_array[0]);
$antra_suma= array_sum($new_array[1]);

echo "Pirmos dalies masyvo suma: ". $pirma_suma .'<br/>';
echo "Antros dalies masyvo suma: ". $antra_suma.'<br/>';

if (($pirma_suma > $antra_suma)) {
    $skirtumas = $pirma_suma - $antra_suma;
    }
if (($antra_suma > $pirma_suma)) {
    $skirtumas = $antra_suma - $pirma_suma;
     }

echo 'Skirtumas tarp masyvu sumu: '.$skirtumas.'<br/>';
if ($skirtumas <= 30) { break;}
}
?>