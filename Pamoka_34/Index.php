<?php
echo '<pre>';
spl_autoload_register(function () {

    if ($handle = opendir('./classes/')) {

    while (false !== ($entry = readdir($handle))) {

        if ($entry != "." && $entry != "..") {
            $test = explode(".", $entry);
            $ilgis = count($test);
        if ($test[$ilgis-1] == 'php') {
            include './classes/'.$entry;
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