<?php
session_start();
class Foo {

function add_payment($a_id) {
    echo 'Imoka gauta';
/*if (isset($_SESSION['accounts'])) {
        $kiek = count($_SESSION['accounts']);
        unset($_SESSION['accounts'][$a_id]);
        }

if( isset($_SESSION['accounts']) ) :

                $add_accounts=json_encode($_SESSION['accounts']);
                if(file_put_contents($_SESSION['ACCOUNTS'], $add_accounts)) {
                echo 'Operacija atlikta sėkmingai';
        };
endif;*/

$_SESSION['reload'] = 'true';
}

}
$fooObj = new Foo();
if ($_POST['f'] == 0) {echo $fooObj->add_payment($_POST['a_id']);}

?>