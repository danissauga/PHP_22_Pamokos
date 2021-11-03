<?php

$e = rand (10, 20);

$f = rand (10, 20);

$g = rand (10, 20);



echo 'Jeigu kraštinės yra : '.$e.', '.$f.' ir '.$g.', ';

if (($e == $f) && ($f == $g))  {

    echo 'trikampis gaunasi<br />';

}

else {

    echo 'trikampis nesigauna<br />';

}

?>