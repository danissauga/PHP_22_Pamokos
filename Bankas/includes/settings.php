<?php

//register views classes
spl_autoload_register(function ($class) {
    include './includes/views/'.$class.'.php';
});
$class='';
//register Model classes
spl_autoload_register(function ($class) {
    include './includes/model/'.$class.'.php';
});

$login = new Login();
$bankas = new Bankas();