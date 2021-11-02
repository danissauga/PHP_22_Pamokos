<?php

$random = rand(0,10);

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
echo "<br>Veiksmas bus atliktas su random skaiciumi: " . $random."<br>";

?>
<form id="first_form" name="first_form" method="POST" enctype="multipart/form-data" target="_self">
<?php echo '<input hidden="hidden" id="rand" name="rand" value="'.$random.'">'; ?>
<input name="myValue" type="number" required><br>

<input name="NextMyValue" type="number" required><br><br>

<button name="send_plus" type="submit">Sudeti</button>&nbsp;
<button name="send_minus" type="submit">Atimti</button>&nbsp;
<button name="send_daugyba" type="submit">Padauginti</button>&nbsp;
<button name="send_dalyba" type="submit">Padalinti</button>
</form>