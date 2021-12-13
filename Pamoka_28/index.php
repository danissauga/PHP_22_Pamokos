<?php
$data_mass = [];

for ($i=0; $i<100; $i++ ){
    for ($x=0; $x < rand(5,20); $x++ ){
        $data_mass[$i][$x] = rand(99,11500);
    }
}

echo '<pre>';
//print_r($data_mass);

$json_encoded_data=json_encode($data_mass);
$target = './db/db.json';

$failas = fopen($target,'w+');
if(fwrite($failas, $json_encoded_data)) {
    echo 'Duomenys į failą įrašyti sėkmingai<br>';
};

$json_encoded_data = file_get_contents($target, $json_encoded_data);

$data_mass = json_decode($json_encoded_data);

foreach($data_mass as $id => $value){
    foreach ($value as $idd => $value2) {
        if ($value2 > 6500) {
            unset($data_mass[$id][$idd]);
        }
    }

}
print_r($data_mass);

$json_encoded_data=json_encode($data_mass);

$failas = fopen($target,'w+');
if(fwrite($failas, $json_encoded_data)) {
    echo 'Duomenys į failą įrašyti sėkmingai<br>';
};

fclose($failas);

?>