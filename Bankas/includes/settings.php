<?php
spl_autoload_register(function ($class) {
    include './includes/views/'.$class.'.php';
});

$login = new Login();