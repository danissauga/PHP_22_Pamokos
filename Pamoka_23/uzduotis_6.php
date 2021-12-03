<?php
$symbols = '';
$data_array = [];
echo '<pre>';
for ($i=0; $i< 10; $i++) {
    for ($x=0; $x< 10; $x++) {
        $data_array[$i][$x]['value'] = "test";
        $data_array[$i][$x]['color'] = "red";
    }
}
print_r($data_array);

?>