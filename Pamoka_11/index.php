<?php
//versija a
$i = true;

while($i) {
    $moneta = rand(0,1);
    if ($moneta == 0) {
        echo 'Iskrito Herbas, H<br>';
        break;
    } else {
        echo 'Iskrito skaicius, S<br>';
    }
}
//versija b
$i = true;
$kiek = 0;

while($i) {
    $moneta = rand(0,1);
    if ($moneta == 0) {
        echo 'H ';
        $kiek++;
        } else {
            echo 'S ';}

    if ($kiek == 3) {
            break;
            }
}
//versija c
echo '<br />';
$i = true;
$buvo = "";
$buvo_kartu = 0;

while($i) {
    $moneta = rand(0,1);
    if ($moneta == 0) {
        echo 'H ';
         if ($buvo == $moneta) {
        $buvo_kartu++;
              }else {
                $buvo_kartu = 0;
                }
        } else {
            echo 'S ';
            }

   $buvo = $moneta;
   if ($buvo_kartu == 2) {
            break;}
}

?>