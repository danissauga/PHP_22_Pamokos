<?php

$strN1 = "Stevenas";
$strN2 = "Segalas";
$str1 = "Steven Segal";
$str2 = "Jason Michael Statham";

If (strlen($str1) >strlen($str2)) {
    echo $str1. ' yra ilgesnis uz '.$str2.'<br />'; }
        else { echo $str2. ' yra ilgesnis uz '.$str1.'<br />';}

echo strtoupper($strN1).' '.strtolower($strN2).'<br>';

$v_len=(strlen($strN1)-1)*-1;
$p_len=(strlen($strN2)-1)*-1;

$ats = substr($strN1, 0, $v_len).substr($strN2, 0, $p_len);
echo $ats.'<br/>';

$ats = substr($strN1,-3).substr($strN2,-3);
echo $ats;
?>