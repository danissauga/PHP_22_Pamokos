<?php

function show_message($id) {
    if (($id <> 0 ) and ($id <= 5 )) {
     echo 'Pasirinktas skaicius ' . $id;
     } else {
        echo 'Nepasirinkta jokia reiksme!';
     }

}
if ((isset($_POST['go'])) and (isset($_POST['value']))) {
    $case_id = $_POST['value'];
    switch($case_id){
        case 1:
             show_message($case_id);
        break;
        case 2:
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
        break;
        default :
             show_message(0);
        break;

    }
}

?>

<form name="add_to_swich" method="POST">

<select id="value" name="value" size="1">
<option value="" selected="selected">Pasirinkite</option>
<option value="1">Vinas</option>
<option value="2">Du</option>
<option value="3">Trys</option>
<option value="4">Keturi</option>
<option value="5">Penki</option>
</select>
<input id="go" name="go" type="submit" value="Set swtich">
</form>

