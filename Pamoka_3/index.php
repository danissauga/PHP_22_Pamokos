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

echo "Sugeneruoti skaičiai: $a $a2 $a3 $a4 , is kuriu Nuliu yra: $nuliai , Vienetu yra: $vienetai , Dvejetu yra $dvejetai";

$skaicius = rand(1,6);

echo "<h".$skaicius.">". $skaicius . "</h".$skaicius.">";

    $s1 = rand(-10,10);
    $s2 = rand(-10,10);
    $s3 = rand(-10,10);

echo "Sugeneruoti skaičiai: $s1 $s2 $s3 , is kuriu yra:<br>";

if ($s1 == 0) {echo '<span style="color:red;">Lygus'.$s1.'</span><br>'; }
if ($s2 == 0) {echo '<span style="color:red;">Lygus'.$s2.'</span><br>'; }
if ($s3 == 0) {echo '
<span style="color:red;">Lygus'.$s3.'</span><br>'; }

if ($s1 < 0) {echo '<span style="color:green;">Maziau uz 0 yra:'.$s1.'</span><br>'; }
if ($s2 < 0) {echo '<span style="color:green;">Maziau uz 0 yra:'.$s2.'</span><br>'; }
if ($s3 < 0) {echo '<span style="color:green;">Maziau uz 0 yra:'.$s3.'</span><br>'; }

if ($s1 > 0) {echo '<span style="color:blue;">Daugiau uz 0 yra:'.$s1.'</span><br>'; }
if ($s2 > 0) {echo '<span style="color:blue;">Daugiau uz 0 yra:'.$s2.'</span><br>'; }
if ($s3 > 0) {echo '<span style="color:blue;">Daugiau uz 0 yra:'.$s3.'</span><br>'; }

?>