<?php

/*Sugeneruokite stringą, kurį sudarytų 50 atsitiktinių skaičių nuo 1 iki 200, atskirtų tarpais.
Skaičiai turi būti unikalūs (t.y. nesikartoti).
Sugeneruokite antrą stringą, pasinaudodami pirmu, palikdami jame tik pirminius skaičius
(t.y tokius, kurie dalinasi be liekanos tik iš 1 ir patys savęs).
Skaičius stringe sudėliokite didėjimo tvarka, nuo mažiausio iki didžiausio.*/

$skaiciai_visi = array();
$skaiciai_pirminiai = array();
$kiek = 0;
$pirminis = false;
$dalikliai=0;

while (true) {
    $generated=rand(1,200);
    if (!in_array($generated, $skaiciai_visi)) {
         $skaiciai_visi[] = $generated; $kiek++;
    }
    if ($kiek == 50){break;}
}
echo 'Sugeneruota: '. implode(" ", $skaiciai_visi);
echo '<br />';
for ($a = 0; $a < 50; $a++) {
   $dalikliai = 0;
   for ($n=1; $n<=$skaiciai_visi[$a]; $n++){
     if (is_int($skaiciai_visi[$a]/$n)){
         $dalikliai++;
         }
      }
if ($dalikliai == 2) {
     $skaiciai_pirminiai[] = $skaiciai_visi[$a];
}
    }

echo '<br />Pirminiai skaiciai: ';
echo implode(" ", $skaiciai_pirminiai);
echo '<br />Isrusiuoti skaiciai: ';
asort($skaiciai_pirminiai);
echo implode(" ", $skaiciai_pirminiai);
echo '<br />';


?>