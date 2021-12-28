<?php


spl_autoload_register(function($class){
	require_once($class.'.php');
});

$name = new Vaikas('Orestas');

$name->sayLabas();

$name->vaikoFunc();

$name->tataFunc();

$nametata = new Tata('Anupras');

echo $nametata->printName();