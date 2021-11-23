<?php
echo '<pre>';
$symbols =['A','B','C','D'];
$symbols_mass = [];
$symbols_mass_2 = [];
$symbols_mass_3 = [];

for ($i=0; $i<=200; $i++) {
   $symbol = $symbols[rand(0,3)];
   $symbols_mass[] = $symbol;
}
print_r($symbols_mass);


foreach ($symbols as $raides) {
    echo 'Gautam masyve raiddziu '.$raides.' yra: ';
    echo (count(array_keys($symbols_mass, $raides))).'<br />';
}

sort($symbols_mass);

print_r($symbols_mass);

$symbols_mass = [];
$merged_mass =[];
$combinations=[];

for ($i=0; $i<=200; $i++) {
   $symbol = $symbols[rand(0,3)];
   $symbols_mass[] = $symbol;
   $symbol = $symbols[rand(0,3)];
   $symbols_mass_2[] = $symbol;
   $symbol = $symbols[rand(0,3)];
   $symbols_mass_3[] = $symbol;
}

echo 'Pirmas masyvas:<br>';
print_r($symbols_mass);
echo 'Antras masyvas:<br>';
print_r($symbols_mass_2);
echo 'Trecias masyvas:<br>';
print_r($symbols_mass_3);

$iki = 200;
for ($i=0;$i<$iki;$i++) {
    $merged_mass[$i] = $symbols_mass[$i].$symbols_mass_2[$i].$symbols_mass_3[$i];  //merging arrays
   if (($symbols_mass[$i] <> $symbols_mass_2[$i])    //checking for unique
    && ($symbols_mass[$i] <> $symbols_mass_3[$i])
    && ($symbols_mass_2[$i] <> $symbols_mass_3[$i]))
    {
   if (!in_array($merged_mass[$i],$combinations)) {$combinations[] = $merged_mass[$i];} //if unique then remember it :)
   }
}

print_r($merged_mass);
sort($combinations);
print_r($combinations);

echo "Viso kombinaciju: ", count($combinations);
?>