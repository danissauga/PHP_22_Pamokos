<?php

spl_autoload_register(function () {

    if ($handle = opendir('./classes/')) {

    while (false !== ($entry = readdir($handle))) {

        if ($entry != "." && $entry != "..") {
            include './classes/'.$entry;
        }
    }

    closedir($handle);
}

});

$helper = new Helpers();

echo $helper::ADDRESS.'<br />';

$index = new Index();
//$extern = new Extern();

//$extern->atspausdinimas();
$index->atspausdinimas();