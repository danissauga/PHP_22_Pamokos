<?php
echo '<pre>';
spl_autoload_register(function () {

    if ($handle = opendir('./classes/')) {

    while (false !== ($entry = readdir($handle))) {

        if ($entry != "." && $entry != "..") {
            $test = explode(".", $entry);    //susiskaidome faila i dalis
            $ilgis = count($test);    //paiimame suskaidytu daliu skaiciu
        if ($test[$ilgis-1] == 'php') { //jei ikelto failo galune php
            include './classes/'.$entry; //tada ji uzregistruojame.
            }
        }
    }

    closedir($handle);
}

});

$helper = new Helpers();

//echo $helper::ADDRESS.'<br />';

$index = new Index();
//$extern = new Extern();

//$extern->atspausdinimas();
//$index->atspausdinimas();