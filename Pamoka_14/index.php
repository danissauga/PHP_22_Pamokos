<style type="text/css">
.lygevimas {
  text-align: center;
  width: 300px;
}
span {
    line-height: 1;
}

</style>
<?php

$aukstis=21-2;  //-2 tai virssus ir apacios kampai
echo '<div class="lygevimas">';
for ($i1=0; $i1 <= $aukstis/2+1; $i1++) { //+1 Vudurio kairys desinys kampas
   echo "<span>$i1</span>";  //tik parodyti kiek eiluciu :)
    for ($a=0; $a<=$i1; $a++){
        echo '<span style="color: rgb('. rand(1,256) .','. rand(1,256).','. rand(1,256).');"> * </span>';
    }
    echo '<br>';
}
for ($i2=$aukstis/2; $i2 > 0; $i2--) {
   echo "<span>"; echo $i1++; echo "</span>"; //tik parodyti kiek eiluciu :)
    for ($a=0; $a<=$i2; $a++){
        echo '<span style="color: rgb('. rand(1,256) .','. rand(1,256).','. rand(1,256).');"> * </span>';
    }
    echo '<br>';
}
echo '</div>';

?>