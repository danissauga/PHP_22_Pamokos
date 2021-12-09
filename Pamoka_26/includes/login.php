<?php
$users = ['user' => 'sigitas@danis.lt',
'password' => "pass123"
];
define('ROOT_DIR',__DIR__);

function is_logged_in($list){
    if ((isset($_SESSION['logged_in'])) and ($_SESSION['logged_in'] == true) and ($_SESSION['user'] == $list['user'])) {
        return true;
    } else {
        return false;
    }

}
function login($udata, $list) {
     if (($udata['uname'] == $list['user']) and ($udata['upass'] == $list['password'])){
       $_SESSION['logged_in'] = true;
       $_SESSION['user'] = $list['user'];
     }
}

function logoff() {

       unset($_SESSION['logged_in']);
       unset($_SESSION['user']);
       //header('"Location: '.ROOT_DIR.'/"');

}

?>