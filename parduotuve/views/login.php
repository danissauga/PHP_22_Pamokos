<?php
include("views/header.php");
include("views/meniu.php");
$login = new Classes\Models\Login();
print_r($login->users);
if (isset($_POST['logoff'])) {$login->logoff(); }
if (isset($_POST['go']) and (isset($_POST['uname'])) and (isset($_POST['upass']))) {$login->log_me_in($_POST);}
if (!$login->is_logged_in()) {
    $login->login_form();
} else {
    $login->logged_in();
}

include("views/footer.php");
