<?php
function debug($val){
    echo '<pre>';
    print_r($val);
    echo '</pre>';
}
$str = "An American in Paris";
$str1 = "Breakfast at Tiffany's";
$str2 = "2001: A Space Odyssey";
$str3 = "It's a Wonderful Life";
$str4 = "Don't Be a Menace to South Central While Drinking Your Juice in the Hood";
$str5 = "Tik nereikia gąsdinti Pietų Centro, geriant sultis pas save kvartale";

$ats1 = str_replace("a", "*", $str);
$ats = str_replace("A", "*", $ats1);
echo $ats."<br />";


// UZduotis  6

$star_wars ='Star Wars: Episode '.str_repeat(' ', rand(0,5)). rand(1,9) . ' - A New Hope';
echo $star_wars."<br />";

echo preg_replace('/[^0-9]/', '', $star_wars).'<br />';

echo substr_count($str, 'a').'- mazuju a<br />';
echo substr_count($str, 'A').'- didziuju A<br />';


$string = "This is some text with some more text and even more text.";
echo "Rastos ".preg_match_all('/[aeiou]/i',$str,$matches)." balses, sakinyje ".$str.'<br />';

$string = "This is some text with some more text and even more text.";
echo "Rastos ".preg_match_all('/[aeiou]/i',$str1,$matches)." balses, sakinyje ".$str1.'<br />';

$string = "This is some text with some more text and even more text.";
echo "Rastos ".preg_match_all('/[aeiou]/i',$str2,$matches)." balses, sakinyje ".$str2.'<br />';

$string = "This is some text with some more text and even more text.";
echo "Rastos ".preg_match_all('/[aeiou]/i',$str3,$matches)." balses, sakinyje ".$str3.'<br />';

$words = explode(" ", $str4);
$kiek = 0;

if (strlen($words[0]) >= 5){$kiek += 1;}
if (strlen($words[1]) >= 5){$kiek += 1;}
if (strlen($words[2]) >= 5){$kiek += 1;}
if (strlen($words[3]) >= 5){$kiek += 1;}
if (strlen($words[4]) >= 5){$kiek += 1;}
if (strlen($words[5]) >= 5){$kiek += 1;}
if (strlen($words[6]) >= 5){$kiek += 1;}
if (strlen($words[7]) >= 5){$kiek += 1;}
if (strlen($words[8]) >= 5){$kiek += 1;}
if (strlen($words[9]) >= 5){$kiek += 1;}
if (strlen($words[10]) >= 5){$kiek += 1;}
if (strlen($words[11]) >= 5){$kiek += 1;}
if (strlen($words[12]) >= 5){$kiek += 1;}
if (strlen($words[13]) >= 5){$kiek += 1;}

echo 'Zodziu ilgesniu arba lygiu 5 simboliams yra: '.$kiek.'<br />';

$words="";
$words = explode(" ", $str5);
$kiek = 0;

if (mb_strlen($words[0]) >= 5){$kiek += 1;}
if (mb_strlen($words[1]) >= 5){$kiek += 1;}
if (mb_strlen($words[2]) >= 5){$kiek += 1;}
if (mb_strlen($words[3]) >= 5){$kiek += 1;}
if (mb_strlen($words[4]) >= 5){$kiek += 1;}
if (mb_strlen($words[5]) >= 5){$kiek += 1;}
if (mb_strlen($words[6]) >= 5){$kiek += 1;}
if (mb_strlen($words[7]) >= 5){$kiek += 1;}
if (mb_strlen($words[8]) >= 5){$kiek += 1;}
if (mb_strlen($words[9]) >= 5){$kiek += 1;}


echo 'Zodziu ilgesniu arba lygiu 5 simboliams yra: '.$kiek.'<br />';


$b = 'abcdefghijklmnopqrstuvwxyz';

$s1 = rand(0,23);
$s2 = rand(0,23);
$s3 = rand(0,23);

echo $b[$s1].$b[$s2].$b[$s3];

?>