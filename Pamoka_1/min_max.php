<!DOCTYPE html>

<html>

<head>
  <title>Hello!</title>
</head>

<body>

<?php
$a = rand(0,25);
$b = rand(0,25);
$c = rand(0,25);

//$visi = array($a,$b,$c);


echo "Gauti skaiciai $a , $b , $c";

$did = max($a,$b,$c);
$maz = min($a,$b,$c);

    if (($a <> $maz) and ($a <> $did)) { $ats=$a;}
    if (($b <> $maz) and ($b <> $did)) { $ats=$b;}
    if (($c <> $maz) and ($c <> $did)) { $ats=$c;}


     echo "<br>Number $ats is in range $maz - $did";

?>

</body>
</html>