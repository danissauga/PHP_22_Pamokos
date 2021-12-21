<?php
class test {
    public $company;
    public $address;
    public $employee_count;

    public function __construct($pavadinimas, $adresas, $skaicius) {
        $this->company = $pavadinimas;
        $this->address = $adresas;
        $this->employee_count = $skaicius;
      //  $this->skaiciuok();
    }
    public function skaicuok() {
        if($this->employee_count > 3) {
            echo 'taip';
        }
        else {
            echo 'ne';
        }
    }
}

$imone1 = new test('Adomas', 'Mickevicius', 4);
echo $imone1->skaicuok(). '</br>';
$imone2 = new test('Kazys', 'Grinius', 2);
echo $imone2->skaicuok();