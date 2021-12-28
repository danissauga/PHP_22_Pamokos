<?php



class Tata{
	
	private $name;

	public function __construct($name){
		$this->name = $name;
	}

	function printName(){

		return $this->name;

	}
	
	function tataFunc(){
		echo "tata <br>";
	}
}

