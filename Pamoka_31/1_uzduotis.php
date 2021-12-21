<?php
class company {

public string $company;
public string $address;
public int $employee_count;

public function __construct($a1,$a2,$a3) {
    $this->company = $a1;
    $this->address = $a2;
    $this->employee_count = $a3;
}
public function employee_test() {
     if ($this ->employee_count > 3) {
         echo $this->company.', '.$this->address.', Kuri turi '.$this->employee_count. ' darbuotojus.';
     } else echo 'Darbuotojų įmonėje mažiau arba lygu 3.';

}
}
$darbuotojai = rand(1,100);
$data = new company('DEMO UAB','Maironio g. 100', $darbuotojai);
echo $data->employee_test();