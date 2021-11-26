<?php
echo '<pre>';
$reiksmes=[];
for ($i=0; $i < 10; $i++) {
    for ($x=0; $x<5; $x++){
        $reiksmes[$i][$x] = rand(5,25);
    }
}
print_r($reiksmes);
$kiek = 0; //kiekis daugiau uz 10
$dickis = 0;
for ($i=0; $i < 10; $i++) {
    for ($x=0; $x<5; $x++){
        if ($reiksmes[$i][$x] > 10) {$kiek ++;} //ziurime kiek daugiau uz 10
        if ($reiksmes[$i][$x] > $dickis) {$dickis = $reiksmes[$i][$x];} //ziurime kas didziausias
    }
}
echo 'Skaiciu masyve didesniu uz 10 yra '.$kiek.'<br>';
echo 'Masyve didesniu skaicius yra '.$dickis.'<br>';
$sumos = [];
$suma =0;
for ($x=0; $x<5; $x++){
    for ($i=0; $i < 10; $i++) {
        $suma += $reiksmes[$i][$x];
    }
$sumos[$x]= $suma;
$suma=0;
}

echo 'Sumos pagal indeksus: ';
print_r ($sumos). '<br />';

for ($i=0; $i < 10; $i++) {
    for ($x= 0; $x < 2; $x++){
        $reiksmes[$i][] = rand(5,25);
    }
}
print_r($reiksmes);

$sumos = [];
$suma = 0;

for ($i=0; $i < 10; $i++) {
for ($x= 0; $x < 7; $x++){
       $suma += $reiksmes[$i][$x];
    }
$sumos[$i] = $suma;
$suma=0;
}
echo 'Naujas masyvas is sumu: <br>';
print_r ($sumos). '<br />';

?>