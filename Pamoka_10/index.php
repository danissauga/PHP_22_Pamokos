<style type="text/css">
p {
    max-width: auto;
}
span {
        color: red;
}
    .break_data {
    word-break: normal;
}
.taskas {
    padding-right: 16px;
    color: black;
}

</style>
<?php

$start = 1;
$stop = 3000;
$comma = false;
echo '<p class="break_data">';
for ($st = $start; $st <= $stop; $st++ ) {


            if (!fmod($st , 77)) {
                if ($comma) {echo ','; $comma = false;}
                    echo "<span> $st</span>";
                   {$comma = true;}
            }
}

echo '</p>';

$start = 0;
$stop = 625;


for ($st = $start; $st < $stop; $st++ ) {


            if (!fmod($st , 25)) {
                echo '<br />';
            }
            echo '<span class="taskas">*</span>';

}
echo '<br/><br>';
$start = 0;
$stop = 10;


for ($st = $start; $st < $stop; $st++ ) {
    for ($st2 = $start; $st2 < $stop; $st2++ ) {
            if ($st == $st2) {$color = 'red';}
            if (($stop - $st-1) == $st2) {$color = 'red';}
            echo '<span class="taskas" style="color:'.$color.';">*</span>';
            $color = 'black';
}
echo "<br />";
}

?>

