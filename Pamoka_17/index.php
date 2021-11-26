<?php
echo '<pre>';
$mas_1 = [];
$mas_2 = [];
$start_from = 0;
$max_record = 100;
$go = true;

while ($go) {
    $sk1=rand(100,999);
    if (!in_array($sk1,$mas_1)) {$mas_1[] = $sk1;}
    if (count($mas_1) == 100) {break;}
}
while ($go) {
    $sk1=rand(100,999);
    if (!in_array($sk1,$mas_2)) {$mas_2[] = $sk1;}
    if (count($mas_2) == 100) {break;}
}
echo ('Pirmas masyvas:<br>');
print_r($mas_1);
echo ('Antras masyvas:<br>');
print_r($mas_2);

$nera_antrame = [];

for ($i=0; $i < count($mas_1); $i++) {
    if (!in_array($mas_1[$i],$mas_2)) {$nera_antrame[]= $mas_1[$i]; }
}

echo ('Nera antrame masyve:<br>');
print_r($nera_antrame);

$kartojasi = [];

for ($i=0; $i < count($mas_1); $i++) {
    if (in_array($mas_1[$i],$mas_2)) {$kartojasi[]= $mas_1[$i]; }
}

echo ('Kartojesi masyvuose:<br>');
print_r($kartojasi);

$hibridinis_masyvas = [];

for ($i=0; $i < count($mas_1); $i++) {
    $hibridinis_masyvas[$mas_1[$i]]= $mas_2[$i];
}

echo ('Hibridinis masyvas:<br>');
print_r($hibridinis_masyvas);

?>