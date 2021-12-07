<?php
session_save_path('D:\xampp\tmp');
ini_set('session.gc_probability', 1);
session_start();

//pirma uzduotis ir trecia uzduotis
function text($print,$h) {
    echo '<h'.$h.'>'.$print.'</h'.$h.'>';
}
text("Pirmoji funkcija", 1);
text("Pirmoji funkcija", 2);
text("Pirmoji funkcija", 3);
text("Pirmoji funkcija", 4);
text("Pirmoji funkcija", 4);
text("Pirmoji funkcija", 6);

//antra uzduotis
function countNumbers($matches) {
    $_SESSION['onlynumbers'] .=$matches[0];
}

$_SESSION['onlynumbers'] = '';
$input = md5(time());
echo 'pradinis kodas: '.$input.'<br>';
$skaiciai = '/[0-9]+/i';
$result = preg_replace_callback($skaiciai, 'countNumbers', $input);
echo '<br>Grazinami tik skaiciai:<br>';
 text($_SESSION['onlynumbers'],1);

//ketvitra uzduotis
function dalikliai(int $skaicius, bool $leidimas)
{
    $kiekis = 0;
    for ($x = 2; $x < $skaicius; $x++) {
        $kas = $skaicius/$x;
        if (is_int($kas)) {
            if ($leidimas) {
                echo $x.' ';
            }
            if (!$leidimas) {
                $kiekis++;
            }
        }
    }
    if (!$leidimas) {
        return $kiekis;
    }
}

$skaicius = 45;
echo 'Dalikliai skaiciaus '.$skaicius.'<br>';
echo dalikliai($skaicius,true).'<br>';

//penta uzduotis
function skaiciai() {
    for ($i = 0; $i< 100; $i++) {
       $sk = rand(33,77);
       $mass[$i]['skaicius'] = $sk;
       $mass[$i]['daliklis'] = dalikliai($sk, false);
    }
    return $mass;
}
echo '<pre>';
$new_mass = skaiciai();
//print_r($new_mass);   //sugeneruotas pradinis masyvs 
$sort = array_column($new_mass, 'daliklis');
array_multisort($sort, SORT_DESC, $new_mass);
print_r($new_mass);


?>