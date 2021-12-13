<?php

$target = './db.json';

//Masyvo sugeneravimas

if(isset($_GET['action']) AND $_GET['action'] == 'sukurti_masyva') {

    $masyvas = [];

    for($i = 0; $i < 100; $i++) {

        for($x = 0; $x < rand(5, 20); $x++) {

            $masyvas[$i][] = rand(99, 11500);

        }

    }

    //JSON
    $json = json_encode($masyvas);
    $failas = fopen($target, 'w');
    if( fwrite($failas, $json) ) {
        echo 'Sekmingai irasytas stringas i faila';
    }

}

if(isset($_GET['action']) AND $_GET['action'] == 'atvaizduoti_masyva') {

    // echo filesize($target);

    // $json = fread($failas, filesize($target));

    // echo $json;

    // fclose($failas);


     $json = file_get_contents($target);
    //echo $json;
    //I STD Tipo masyva dekodintas JSON stringas
    //$std = json_decode($json);
    //echo $std->indeksas->masyvas[0];

    //I Asociatyvaus Tipo masyva dekodintas JSON stringas
    $json = json_decode($json, true);


    echo '<pre>';
    print_r($json);

}

if(isset($_GET['action']) AND $_GET['action'] == 'pasalinti_mazesnius') {
    $json = file_get_contents($target);
    $json = json_decode($json, true);
    echo $json;

}


?>

<a href="?action=sukurti_masyva">Sukurti masyvą</a>
<a href="?action=atvaizduoti_masyva">Atvaizduoti masyva</a>
<a href="?action=pasalinti_mazesnius">Pasalinti mazesnius skaicius nei 6500</a>