<?php

$a1 = rand(1000,9999);
$a2 = rand(1000,9999);
$a3 = rand(1000,9999);
$a4 = rand(1000,9999);
$a5 = rand(1000,9999);
$a6 = rand(1000,9999);

$all = array($a1,$a2,$a3,$a4,$a5,$a6);

sort($all);
print_r($all);

?>