<?php
session_start();
class Foo {

function generate_iban() {
  $bank_value = rand(1,10);
  $bank_value = str_pad($bank_value, 2, '0', STR_PAD_LEFT);
  $bank_account_nr = rand(1,99999999999);
  $bank_account_nr = str_pad($bank_value, 11, '0', STR_PAD_LEFT);
  $iban = $_POST['contry'] . $bank_value . $_POST['bank'] . $bank_account_nr;
  return $iban;
}
function new_iban() {
    $ats=[];

          $IBAN = new Foo();
        $test = $IBAN -> generate_iban();

return $test;
}
}
$fooObj = new Foo();
if ($_POST['f'] == 0) {echo $fooObj->new_iban();}

?>