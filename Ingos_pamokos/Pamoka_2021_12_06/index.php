<?php

$names = ['Sigitas','Mantas','Petras','Lina','Inga'];
$lastnames = ['Petrauskas','Antanaitis','Petraitis','Lumina','Skuodis'];
$decimals = 2; // number of decimal places
$goods =[['goods'=>'Piestukai','units'=>'vnt','price'=>'1.21'],
         ['goods'=>'Trintukai','units'=>'vnt','price'=>'3.26'],
         ['goods'=>'Rasikliai','units'=>'vnt','price'=>'8.12'],
         ['goods'=>'Tusas','units'=>'vnt','price'=>'2.28'],
         ['goods'=>'Guasas','units'=>'vnt','price'=>'4.32']];

$dec = pow(10, $decimals);

$data_array = [];

echo '<pre>';

print_r ($goods);

for ($i=0; $i< 5; $i++) {

        $data_array[$i]['id'] = rand(1,10000);
        $data_array[$i]['name'] = $names[rand(0,count($names)-1)];
        $data_array[$i]['lastname'] = $lastnames[rand(0,count($lastnames)-1)];
        $data_array[$i]['count'] = rand(1,20);
        $data_array[$i]['price'] = mt_rand(0.01 * $dec, 100.00 * $dec) / $dec;

}
echo 'Pirkejai';
print_r($data_array);

for ($i=0; $i< 5; $i++) {
     $goods_data[$i]['id'] = $i;
     $goods_data[$i]['buyer_id'] = $data_array[$i]['id'];
     $goods_data[$i]['goods'] = $goods[rand(0,4)]['goods'];
     $goods_data[$i]['units'] = $goods[rand(0,4)]['units'];
     $goods_data[$i]['price'] = $goods[rand(0,4)]['price'];
}


echo 'Pirkejai pirko sias prekes, kur ID yra pirkejo ID ';
print_r($goods_data);




?>
<!--<?php
 echo '<pre>';

$data = [];
$a = ['Inga', 'Lina', 'Kasparas','Baltazaras', 'Mindaugas'];
$b = ['Etiam', 'Vala', 'Ipsum', 'Igestas', 'Tincidunt'];

for ($i=0; $i<5; $i++){

        $data [$i]['Name'] = $a[rand(0,count($a)-1)];
        $data [$i]['Surname']= $b;

}
print_r ($data);

?>-->

