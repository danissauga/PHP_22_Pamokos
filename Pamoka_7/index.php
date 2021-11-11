<?php
function debug($val){
    echo '<pre>';
    print_r($val);
    echo '</pre>';
}


$str1 = "Don't Be a Menace to South Central While Drinking Your Juice in the Hood";
$str2 = "Tik nereikia gąsdinti Pietų Centro, geriant sultis pas save kvartale";

$full_text = $str1.' '.$str2;

echo $full_text;

$break_text = explode(" ", $full_text);

$s1 = rand(0,23);
$ats[0] = $break_text[$s1].' ';
array_splice($break_text,$s1,1);
$s1 = rand(0,22);
$ats[1] = $break_text[$s1].' ';
array_splice($break_text,$s1,1);
$s1 = rand(0,21);
$ats[2] = $break_text[$s1].' ';
array_splice($break_text,$s1,1);
$s1 = rand(0,20);
$ats[3] = $break_text[$s1].' ';
array_splice($break_text,$s1,1);
$s1 = rand(0,19);
$ats[4] = $break_text[$s1].' ';
array_splice($break_text,$s1,1);
$s1 = rand(0,18);
$ats[5] = $break_text[$s1].' ';
array_splice($break_text,$s1,1);
$s1 = rand(0,17);
$ats[6] = $break_text[$s1].' ';
array_splice($break_text,$s1,1);
$s1 = rand(0,16);
$ats[7] = $break_text[$s1].' ';
array_splice($break_text,$s1,1);
$s1 = rand(0,15);
$ats[8] = $break_text[$s1].' ';
array_splice($break_text,$s1,1);
$s1 = rand(0,14);
$ats[9] = $break_text[$s1].' ';
array_splice($break_text,$s1,1);
$s1 = rand(0,13);

echo '<br /><br />';
echo implode($ats);
/* echo '<pre>';
    print_r($ats);
 echo '</pre>';*/
?>