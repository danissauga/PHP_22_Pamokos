<?php

$random = rand(0,10);
echo "<br>Veiksmas atliktas su random skaiciumi: " . $random;

echo '<input id="rand" name="rand" value="'.$random.'">';

if ((isset($_POST['send_plus'])) && (isset($_POST['myValue'])) && (isset($_POST['NextMyValue']))) {
echo "Gautas skaicius sudejus ";
echo $_POST['myValue'] + $_POST['NextMyValue'] + $_POST['rand'];
}
if ((isset($_POST['send_minus'])) && (isset($_POST['myValue'])) && (isset($_POST['NextMyValue']))) {
echo "Gautas skaicius atemus ";
echo $_POST['myValue'] - $_POST['NextMyValue'] - $_POST['rand'];
}
if ((isset($_POST['send_daugyba'])) && (isset($_POST['myValue'])) && (isset($_POST['NextMyValue']))) {
echo "Gautas skaicius sudauginus ";
echo ($_POST['myValue'] * $_POST['NextMyValue'] * $_POST['rand']);
}
if ((isset($_POST['send_dalyba'])) && (isset($_POST['myValue'])) && (isset($_POST['NextMyValue']))) {
echo "Gautas skaicius padalinus ";
echo ($_POST['myValue'] / $_POST['NextMyValue'] / $_POST['rand']);
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