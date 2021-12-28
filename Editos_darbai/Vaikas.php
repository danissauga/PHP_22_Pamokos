<?php


class Vaikas extends Tata{
	
	function sayLabas(){
		$vardas = $this->printName();
		echo "Labas".$vardas."<br>";
		
	}
	
	function vaikoFunc(){
		echo "vaikas <br>";
	}
}