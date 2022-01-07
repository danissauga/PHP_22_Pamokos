<?php
session_start();
include("includes/settings.php");
include("includes/header.php");

define("ACCOUNTS","db/accounts.json");
$_SESSION['ACCOUNTS'] = __DIR__.'/'.ACCOUNTS;

if ((isset($_GET['clear'])) and ($_GET['clear'] == 1)) { unset($_SESSION['accounts']); }

include("includes/login.php");
    if (isset($_POST['logoff'])) {logoff(); }
    if (isset($_POST['go'])) {login($_POST,$users);}

if (!is_logged_in($users)) {

$login->login_form();

} else {
include("pages/bankas.php");
include("includes/modals.php");
}

//
?>

