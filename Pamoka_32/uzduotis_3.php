<?php
class company {

public string $company;
public string $address;
public int $employee_count;
public $company_data;
public $data_link;
public $count;


public function __construct() {
    $this->data_link = './db/random.json';
    $this->get_data();
    $this->count = false;
}

public function get_data() {
    if (file_exists($this->data_link)) {
        $this->company_data = json_decode(file_get_contents($this->data_link), true);
        if (!$this->company_data) {
            $this->company_data=[];
            echo "Nėra duomenų! ";
            exit;
        }
    }
}

public function employee_test($eploees) {
     if ($eploees > 3) {
       $this->count = true;
     } else {
            $this->count = false;
     }
return $this->count;

}
}
echo '<pre>';
$companys= [];
$data = new company();
$companys = $data->company_data;

foreach ($companys as $id => $value) {

$yra = $data->employee_test($value['employee_count']);
    if ($yra == true)   echo $value['company'].', '.$value['address'].', Kuri turi '.$value['employee_count']. ' darbuotojus.<br />';
}
