<?php
session_start();
class Foo { 

public function add_account($f) {
if (isset($_SESSION['accounts']))
{
  $kiek = count($_SESSION['accounts']);
    if ($f == 0) {
            $_SESSION['accounts'][$kiek] = $_POST;
    }
    else {
            $accounts = [];
    }
    if ($f == 2) {
       $records = count($_POST);
             $_SESSION['accounts'][$_POST['aid']]['name'] = $_POST['name'];
             $_SESSION['accounts'][$_POST['aid']]['lname'] = $_POST['lname'];
             $_SESSION['accounts'][$_POST['aid']]['personal_code'] = $_POST['personal_code'];
            //   print_r ($_POST);
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

public function get_account_data()
{
    $account_data = $_SESSION['accounts'][$_POST['acc_id']];
    echo json_encode($account_data);
}

}
$fooObj = new Foo();
if ($_POST['f'] == 0) {echo $fooObj->add_account($_POST['f']);}
if ($_POST['f'] == 2) {echo $fooObj->add_account($_POST['f']);}
if ($_POST['f'] == 1) {echo $fooObj->get_account_data();}

?>