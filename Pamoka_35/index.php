<?php

spl_autoload_register(function ($class) {
    include './classes/'.$class.'.php';
});

//$child = new Child();
//echo $test->testMetodas();
echo Child::takeFromParent();