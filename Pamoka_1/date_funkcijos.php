<!DOCTYPE html>

<html>

<head>
  <title>Hello!</title>
  <meta charset="utf-8">
</head>

<body>

<?php
//echo time();
//$date = date_create('2019-11-03');
//$new_date=date_create('2021-12-03');

//$skirtumas = date_diff($date, $new_date);

//echo $skirtumas->format('%y');

// min() ir  max()

$born = date_create('1977-11-01');
$today = date_create('2021-11-03');
$n_l_names ="Sigitas Šukaitis";

$old = date_diff($born, $today);

echo "Aš esu ".$n_l_names.". Man yra ". $old->format('%y') . " metų.";


?>

</body>
</html>