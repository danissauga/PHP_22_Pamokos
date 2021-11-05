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




?>
