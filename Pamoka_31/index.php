<?php
//phpinfo();
class Test {
   public string $name;
   public string $surename;
   public string $address;

   //Konstantos klasese
   public const KONSTANTA = 'Slamučių 17';

   public function __construct($vardas,$pavarde) {
       $this->setName($vardas);
       $this->surename = $pavarde;

       /*$this->address = function() {
            return self::KONSTANTA;
        };*/
   }

   public function setName($name) {
       $this->name = $name;
   }
   public function getName() {
       return $this->name;
   }
}

$test = new Test('Antanas', 'Antanaitis');
//$test->setName('Antanas');
echo $test->getName();
echo $test->surename;
echo $test::KONSTANTA;


?>

