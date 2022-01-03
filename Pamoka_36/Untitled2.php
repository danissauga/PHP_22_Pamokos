<?php

class Su_naujais {
    public function New_year() {
        $data= date('Y', strtotime('+1 years'));
        echo 'Su artėjančiai '. $data .' aisiais';
    }
}
$su = new Su_naujais();
echo $su->New_year();