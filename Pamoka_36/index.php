<?php

echo '<pre>';

$mass = new stdClass;
$element=0;

for ($i=0; $i<30; $i++ ) {
    $mass->$i = rand(5,25);
}
$count = count((array)$mass);
for ($i=$count-1; $i<$count+10; $i++) {
    $mass->$i = rand(5,25);
}
print_r($mass);