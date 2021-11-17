<?php

$kazys = "Kazys";
$k_taskai = 0;
$k_taskai_visi = 0;
$petras = "Petras";
$p_taskai = 0;
$p_taskai_visi = 0;
while (true){
   $k_taskai = rand(5,25);
   $p_taskai = rand(10,20);
   $k_taskai_visi += $k_taskai;
   $p_taskai_visi += $p_taskai;
       if ($k_taskai == $p_taskai) {
           echo "<b>Partijoje lygiosios $k_taskai : $p_taskai </b><br />";
           }
       if ($k_taskai > $p_taskai) {
           echo "<b>Partiją laimėjo $kazys su: $k_taskai tasku</b><br />";
           } else {
            echo "<b>Partiją laimėjo $petras su: $k_taskai tasku</b><br />";
           }

       if (($k_taskai_visi == $p_taskai_visi) and ($k_taskai_visi >= 222) and ($p_taskai_visi >= 222) ) {
           echo "Lygiosios, Kazys ir Petras surinko vienoda kieki tasku: $k_taskai_visi";
           break;
       }
       if (($k_taskai_visi >= 222) and ($k_taskai_visi >= $p_taskai_visi)) {
           echo "Laimejo $kazys, surinkęs $k_taskai_visi, kaip Petras tik: $p_taskai_visi";
           break;
       }
       if (($p_taskai_visi >= 222) and ($p_taskai_visi >= $k_taskai_visi)) {
           echo "Laimejo $petras, surinkęs $p_taskai_visi, kaip Kazys tik: $k_taskai_visi";
           break;
       }
}
echo "<br />";
$vinies_ilgis = 85; /// mato vnt milimetrai
$viniu_kiekis = 5;
$low_blow = 0;
$low_blow_count = 0;
$hard_blow = 0;
$hard_blow_count = 0;

echo '<h3>Kalam lengvai</h3>';

for ($vk=1; $vk <= $viniu_kiekis; $vk++) {
    $low_blow = 0;
    while (true) {
        $l_blow = rand(5,20);
        $low_blow += $l_blow;
        if ($low_blow <= $vinies_ilgis) { $low_blow_count++; }
        else {
            echo "Viniui $vk reikėjo $low_blow_count smugių<br>";
            break;
        }
    }
}
echo '<h3>Kalam stipriai</h3>';
for ($vk=1; $vk <= $viniu_kiekis; $vk++) {
    $how_blow_count = 0;
    while (true) {
        $h_blow = rand(5,20);
        $_pataikymas = rand(0,100);
        $hard_blow += $h_blow;
        if (($hard_blow <= $vinies_ilgis) and ($_pataikymas >= 50)) { $hard_blow_count++; }
        else {
            echo "Smugis pro sona <br>";
        }
        if ($hard_blow >= $vinies_ilgis) {
            echo "Viniui $vk reikėjo $hard_blow_count smugių<br>";
            break;
            }
    }
}



?>