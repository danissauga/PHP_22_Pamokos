<?php
include (__DIR__ . '/vendor/autoload.php');
include (__DIR__ . '/includes/config.php');
use Classes\Controllers\MainController;

new MainController();
//print_r($this->router->match());