<?php
class company {

public string $company;
public string $address;
public int $employee_count;
public $company_info;

public function __construct($a1,$a2,$a3) {
    $this->company = $a1;
    $this->address = $a2;
    $this->employee_count = $a3;
}

public function employee_test() {
     if ($this ->employee_count > 3) {
        $this->company_info =  $this->company.', '.$this->address.', Kuri turi '.$this->employee_count. ' darbuotojus.<br />';
     }
    return $this->company_info;
}
}

function get_data() {
    $data_link = './db/random.json';
    $company_data = [];
    if (file_exists($data_link)) {
        $company_data = json_decode(file_get_contents($data_link), true);
        if (!$company_data) {
            $company_data=[];
            echo "Nėra duomenų! ";
            exit;
        }
    }
    return $company_data;
}




$companys= get_data();

foreach ($companys as $id => $value) {
    $data = new company($value['company'],$value['address'],$value['employee_count']);
    echo $data->employee_test();

}
