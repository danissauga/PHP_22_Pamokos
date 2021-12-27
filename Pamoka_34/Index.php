<?php

class Index {

    public function __construct() {

    }

    public function atspausdinimas() { //override

        echo 'Ant kaledines eglutes';

    }

}

class Extern extends Index {

    public function atspausdinimas() { //override

        echo 'Ant PHP Eglutes';

    }

}

$index = new Index();
$extern = new Extern();

$extern->atspausdinimas();
//$index