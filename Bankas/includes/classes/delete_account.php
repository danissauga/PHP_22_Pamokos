<?php
session_start();
class Foo {

function delete_account($a_id) {
if (isset($_SESSION['accounts'])) {
        $kiek = count($_SESSION['accounts']);
        unset($_SESSION['accounts'][$a_id]);
        }

if( isset($_SESSION['accounts']) ) :

                $add_accounts=json_encode($_SESSION['accounts']);
                if(file_put_contents($_SESSION['ACCOUNTS'], $add_accounts)) {
                echo 'Operacija atlikta sėkmingai';
        };
endif;

$_SESSION['reload'] = 'true';
}

}
$fooObj = new Foo();
if ($_POST['f'] == 0) {echo $fooObj->delete_account($_POST['a_id']);}

?>