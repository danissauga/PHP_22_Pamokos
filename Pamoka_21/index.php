<?php
echo '<pre>';
$masyvas_10 = [];
$masyvo_vidus = [];
settype($raides, "string");
$raides = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';

for ($i = 0; $i < 10; $i++) {
    for ($x = 0; $x <= rand(2,20); $x++) {
        $kuri_raide = rand(0,strlen($raides)-1);

        $masyvas_10[$i][$x] = $raides[$kuri_raide];
    }
    asort($masyvas_10[$i]);
}

$temp_array_su_K = [];
$temp_array_be_K = [];

echo 'Pradinis surusiuotas masyvas: <br>';
print_r($masyvas_10);

for ($i = 0; $i < 10; $i++) {

   if (in_array('K',$masyvas_10[$i])) {
      $temp_array_su_K[] = $masyvas_10[$i];
      } else {
          $temp_array_be_K[] = $masyvas_10[$i];
      }
}

$masyvas_10=[];
asort($temp_array_su_K);
asort($temp_array_be_K);

$masyvas_10 = array_merge($temp_array_su_K,$temp_array_be_K);
echo 'Su K pirmieji, be K visi like masyvas: <br>';
print_r($masyvas_10);

?>