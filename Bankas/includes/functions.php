<?php

define("ACCOUNTS","./db/accounts.json");

function get_data() {
   // unset($_SESSION['accounts']);
   if (file_exists(ACCOUNTS)) {
        $_SESSION['accounts'] = json_decode(file_get_contents(ACCOUNTS), true);
        if (!$_SESSION['accounts']) {
            $_SESSION['accounts'] = 'aaaaaa';
        }
   }

}

function alerts ($a_id, $a_type) {
    $alert=[];

    if (isset($a_id) AND (isset($a_type))) {

    switch($a_id){
        case 1:
             $alert['message']= 'a';
        break;
       /* case 2:
             show_message($case_id);
        break;
        case 3:
             show_message($case_id);
        break;
        case 4:
             show_message($case_id);
        break;
        case 5:
             show_message($case_id);
        break;*/
        default :
        $alert['message']='Neaiški klaida...';
        break;

    }
}
 return $alert;
}