<?php
$data_mass = [];

for ($i=0; $i<100; $i++ ){
    for ($x=0; $x < rand(5,20); $x++ ){
        $data_mass[$i][$x] = rand(99,11500);
    }
}

//echo '<pre>';
//print_r($data_mass);

$json_encoded_data=json_encode($data_mass);
$target = './db/db.json';

$failas = fopen($target,'w+');
if(fwrite($failas, $json_encoded_data)) {
    echo 'Duomenys į failą įrašyti sėkmingai<br>';
};
fclose($failas);

$data = fopen($target, "r");
//Output lines until EOF is reached
while(! feof($data)) {
    $line = fgets($data);
    echo $line. "<br>";
}

fclose($data);


?>