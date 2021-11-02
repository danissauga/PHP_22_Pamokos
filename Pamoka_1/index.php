<?php
 if (isset($_POST['send_plus'])) {
     echo "Gautas skaicius sudejus ";
     echo $_POST['myValue'] + $_POST['NextMyValue'];
     }
 if (isset($_POST['send_minus'])) {
     echo "Gautas skaicius atemus ";
     echo $_POST['myValue'] - $_POST['NextMyValue'];
     }
 if (isset($_POST['send_daugyba'])) {
     echo "Gautas skaicius sudauginus ";
     echo ($_POST['myValue'] * $_POST['NextMyValue']);
     }
 if (isset($_POST['send_dalyba'])) {
     echo "Gautas skaicius padalinus ";
     echo ($_POST['myValue'] / $_POST['NextMyValue']);
     }
?>
<form id="first_form" name="first_form" method="POST" enctype="multipart/form-data" target="_self">

    <input name="myValue" type="number"><br>

    <input name="NextMyValue" type="number"><br><br>

    <button name="send_plus" type="submit">Sudeti</button>&nbsp;
    <button name="send_minus" type="submit">Atimti</button>&nbsp;
    <button name="send_daugyba" type="submit">Padauginti</button>&nbsp;
    <button name="send_dalyba" type="submit">Padalinti</button>
</form>