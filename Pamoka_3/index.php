<?php
    $a = rand(0,2);
    $a2 = rand(0,2);
    $a3 = rand(0,2);
    $a4 = rand(0,2);
    $nuliai = 0;
    $vienetai = 0;
    $dvejetai = 0;

    if ($a == 0) {$nuliai++;}
    if ($a2 == 0) {$nuliai++;}
    if ($a3 == 0) {$nuliai++;}
    if ($a4 == 0) {$nuliai++;}
    if ($a == 1) {$vienetai++;}
    if ($a2 == 1) {$vienetai++;}
    if ($a3 == 1) {$vienetai++;}
    if ($a4 == 1) {$vienetai++;}
    if ($a == 2) {$dvejetai++;}
    if ($a2 == 2) {$dvejetai++;}
    if ($a3 == 2) {$dvejetai++;}
    if ($a4 == 2) {$dvejetai++;}

echo "Sugeneruoti skaičiai: $a $a2 $a3 $a4 , is kuriu Nuliu yra: $nuliai , Vieneu yra: $vienetai , Dvejetu yra $dvejetai";

?>