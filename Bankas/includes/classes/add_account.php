<?php
session_start();
class Foo { 

function add_account() {
$kiek = count($_SESSION['accounts']);
$_SESSION['accounts'][$kiek] = $_POST;
$accounts = [];

//    print_r($_SESSION['ACCOUNTS']);


if( isset($_SESSION['accounts']) ) :

      //  array_push($accounts, $_SESSION['accounts']);
        $add_accounts=json_encode($_SESSION['accounts']);
       // $failas = fopen($target_prekes,'w');
        if(file_put_contents($_SESSION['ACCOUNTS'], $add_accounts)) {
        echo 'Failas įrašytas sėkmingai';
    };
endif;

$_SESSION['reload'] = 'true';
}
}
$fooObj = new Foo();
echo $fooObj->add_account();

?>