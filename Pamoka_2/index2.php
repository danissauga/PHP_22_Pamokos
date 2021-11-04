<?php
$ats = 0;
$a = rand(0,4);
$b = rand(0,4);

echo 'Reiksme A: '.$a.'<br>';
echo 'Reiksme B: '.$b.'<br>';

if (($a != 0) and ($b != 0)) {
    if ($a > $b ) {
       $ats = $a / $b;
       }
    if ($b > $a) {
        $ats = $b / $a;
        }
    if ($a == $b) {
        echo '<br>Reiksmes A ir B vienodos<br>';
        $ats = $b / $a;
        }
echo number_format($ats,'2','.','');
} else {
        echo '<br>Dalyba is nulio negalima<br>';
        };

?>