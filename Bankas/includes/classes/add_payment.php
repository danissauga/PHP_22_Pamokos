<?php
session_start();
class Foo {

function add_payments() {
if (isset($_SESSION['accounts']))
{
    $old_sume = $_SESSION['accounts'][$_POST['acc_id']]['resources'];
    $_SESSION['accounts'][$_POST['acc_id']]['resources'] = $old_sume + $_POST['recources'];
}
if( isset($_SESSION['accounts']) ) :

            $add_accounts=json_encode($_SESSION['accounts']);
            if(file_put_contents($_SESSION['ACCOUNTS'], $add_accounts)) {
              echo 'Įrašas pakeistas sėkmingai';
            };
endif;

$_SESSION['reload'] = 'true';
//echo json_encode($old_sume);
}

function make_payments() {
if (isset($_SESSION['accounts']))
{
    $old_sume = $_SESSION['accounts'][$_POST['acc_id']]['resources'];
    if ($old_sume >= $_POST['recources']) {
       $_SESSION['accounts'][$_POST['acc_id']]['resources'] = $old_sume - $_POST['recources'];
    } else {
       echo 'Sąskaitoje permažai lėšų, operacija negalima.';
       exit;
    }


}
if( isset($_SESSION['accounts']) ) :

            $add_accounts=json_encode($_SESSION['accounts']);
            if(file_put_contents($_SESSION['ACCOUNTS'], $add_accounts)) {
              echo 'Įrašas pakeistas sėkmingai';
            };
endif;

$_SESSION['reload'] = 'true';

}


function get_account_data()
{
    $account_data = $_SESSION['accounts'][$_POST['acc_id']];
    echo json_encode($account_data);
}

}
$fooObj = new Foo();

if ($_POST['f'] == 0) {echo $fooObj->add_payments();}
if ($_POST['f'] == 2) {echo $fooObj->make_payments();}
if ($_POST['f'] == 1) {echo $fooObj->get_account_data();}


?>