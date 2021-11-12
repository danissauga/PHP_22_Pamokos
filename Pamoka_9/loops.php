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

</style>
<?php

$start = 0;
$stop = 300;
$more_then_150 = 0;
echo '<p class="break_data">';
for ($st = $start; $st < $stop; $st++ ) {
      $who = rand($start, $stop);
      if ($who > 275) {echo "<span> $who</span>"; }
        else { echo ' '.$who;}
      if ($who > 150) { $more_then_150++;}
}
echo '<br> Skaiciu didesniu uz 150 yra: '.$more_then_150;
echo '</p>';

?>

