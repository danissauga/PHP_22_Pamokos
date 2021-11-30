<?php
echo '<pre>';
$masyvas_10 = [];
$masyvo_vidus = [];
settype($raides, "string");
$raides = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";

for ($i = 0; $i < 10; $i++) {
    for ($x = 0; $x <= rand(2,20); $x++) {
        $kuri_raide = rand(0,10);

        $masyvas_10[$i][$x] = $raides[$kuri_raide];
    }
}
echo 'Pradiniai duomenys: <br>';
print_r($masyvas_10);
//rusiuojame
for ($i = 0; $i < 10; $i++) {
   asort($masyvas_10[$i]);
}
echo 'Surusiuota: <br>';
print_r($masyvas_10);
?>