<?php

// 8 -ta uzduotis

$k1 = 1; //Vieneto kaina
$a1 = rand(5,3000); //gaunamas kiekis
$n1 = 3; //Nuo 1000 iki 2000 taikoma 3% nuolaida
$n2 = 4; //Nuo 2000 iki 3000 taikoma 4% nuolaida
$kaina = 0;
$g_kaina = 0;
$nuolaida = 0;

Echo 'Parduodamos zvakes 1 vnt. kainuoja 1 eur.<br><br>';

if ($a1 <= 1000) {
    $kaina = $a1 * $k1; //kaina netaikant nuolaidos kiekiui
        echo 'Perkamas kiekis: '.$a1. ' vnt., kainuoja '.$kaina;
    }
if (($a1 > 1000) && ($a1 < 2000)) {
    $kaina = $a1 * $k1; //kaina be nuolaidos
    $nuolaida = ($kaina * $n1)/100; //nuolaida
    $g_kaina = $kaina - $nuolaida; //kaina po nuolaidos
    echo 'Perkamas kiekis: '.$a1. ' vnt., kainuoja '.$kaina.' , taikoma nuolaida '.$n1.'% nuo kiekio: '. $nuolaida. ' kaina po nuolaidos: '. $g_kaina;

    }
if ($a1 >= 2000) {
    $kaina = $a1 * $k1; //kaina be nuolaidos
    $nuolaida = ($kaina * $n2)/100; //nuolaida
    $g_kaina = $kaina - $nuolaida; //kaina po nuolaidos
        echo 'Perkamas kiekis: '.$a1. ' vnt., kainuoja '.$kaina.' , taikoma nuolaida '.$n2.'% nuo kiekio: '. $nuolaida. ' kaina po nuolaidos: '. $g_kaina;
    }

// 9 ta uzduotis :

$a1 = rand(0,100);
$a2 = rand(0,100);
$a3 = rand(0,100);

$vidurkis = ($a1+$a2+$a3)/3;
$kiek = 0;

Echo '<br><br>Aritmetinis vidurkis skaiciu: '.$a1.' '.$a2.' '.$a3.' yra: '. round($vidurkis) .'<br><br>';

$vidurkis = 0;

if (($a1 > 10) && ($a1 < 90)) {$vidurkis +=$a1; $kiek++;}
if (($a2 > 10) && ($a2 < 90)) {$vidurkis +=$a2; $kiek++;}
if (($a3 > 10) && ($a3 < 90)) {$vidurkis +=$a3; $kiek++;}

if ($kiek <> 0) {
    $ats = $vidurkis / $kiek;
    echo '<br><br>Aritmetinis vidurkis atmetus mazesnius uz 10 ir didesnius uz 90 yra: '. round($ats) .'<br><br>';
    } else {
        echo 'Vidurkio is 0 negalima isvesti';
        }



// 10 tauzduotis Laikas :)
$sekundes_plus = rand(0,300);

$valandos = rand(0,23);
$minutes = rand(0,59);
$sekundes = rand(0,59);

echo 'Skaitmenis laikrodis ' .$valandos.':'.$minutes.':'.$sekundes.'<br>';
echo "Pridedamos sekundes: $sekundes_plus<br>";

//skaidom sekundas i minutes ir sekundes:

$n_sec = ($sekundes + $sekundes_plus) % 60;
$n_min = ($sekundes + $sekundes_plus - $n_sec) / 60;

$f_min = $minutes + $n_min;

$n_time = $valandos.':'. $f_min .':'. $n_sec;

echo "gautnaujas laikas: $n_time <br>";


?>
