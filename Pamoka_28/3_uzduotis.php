<?php
$data_mass = [];

echo '<pre>';

$target = './db/db.json';

$json_encoded = file_get_contents($target);

function add_mass_line() {
    for ($i=0; $i < rand(3,500); $i++) {
        $mas_line[] = rand(500,6500);
    }
    return $mas_line;
}


$data_mass = json_decode($json_encoded, true);

print_r ($data_mass);

foreach($data_mass as $id => $value){
    foreach ($value as $idd => $value2) {
        if ($value2 < 500) {
            $data_mass[$id][$idd] = add_mass_line();
        }
    }

}
print_r($data_mass);


?>