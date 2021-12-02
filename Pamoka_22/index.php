<?php
echo '<pre>';
$users = [];

settype($raides, "string");
settype($r, "string");
$raides = 'abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ';

for ($i=0; $i < 30; $i++) {
    $r = "";
    $r2 = "";
     for ($x = 0; $x < rand(5,25); $x++) {
        $n = rand(0, strlen($raides)-1);
        $r .= $raides[$n];
        $n2 = rand(0, strlen($raides)-1);
        $r2 .= $raides[$n2];
    }
    $users[$i]['user_id'] = rand(1,1000000);
    $users[$i]['place_in_row'] = rand(0,100);
    $users[$i]['name'] = $r;
    $users[$i]['surename'] = $r2;
}
print_r($users);

?>