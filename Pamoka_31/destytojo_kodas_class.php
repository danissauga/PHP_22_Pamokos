<?php
//Klasės ir Objektai

//Klasė
class Test {

    //Trys matomumo variantai
    //public
    //private
    //protected

    //Savybes | Properties
    public $name = 'Giedrius'; //Nurodome pradine savybes reiksme
    public $surname;
    public $address;

    //Konstanta
    public const KONSTANTA = 'Gedimino g. 11';

    //Construct methodas pasileidzia vos tik iniciavus klase
    //__destruct()
    public function __construct($vardas, $pavarde) {
        $this->setName($vardas);
        $this->surname = $pavarde;

        $this->address = function() {
            return self::KONSTANTA;
        };

    }

    //Metodas | Method
    public function setName($name) {
        //$this - yra kreipimasis į funkciją kurioje yra metodas
        $this->name = $name;
    }

    public function getName() {
        //$this->setName();
        return $this->name;
    }

}

//Objektas
$objektas1 = new Test('Adomas', 'Mickevicius');
$objektas2 = new Test('Kazys', 'Grinius');

//$test->setName('Vilius');

//echo $test->name;

echo $objektas1->getName() . '<br />';
echo $objektas1->surname . '<br />';

echo $objektas1::KONSTANTA;

echo '<pre>';
print_r($objektas1);

echo $objektas2->getName() . '<br />';
echo $objektas2->surname . '<br />';

echo ($objektas2->address)();

//MVC Metodu
//Model - Yra atsakingas uz duomenu paemima ir apdorojima
//View - Yra atsakingas uz duomenu atvaizdavima
//Controller - Yra atsakingas uz duomenu paskirstyma
