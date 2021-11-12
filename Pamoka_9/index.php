<style type="text/css">
p {
        max-width: 500px;
}

.break_data {
            word-break: break-all;
}

</style>

<?php
$start = 0;
$stop = 400;

echo '<p class="break_data">';
for ($st = $start; $st < $stop; $st++ ) {
        echo '*';
}
echo '</p>';

$start = 0;
$stop = 400;

for ($st = $start; $st < $stop; $st++ ) {
        if (!fmod($st, 50)) {echo '<br/>'; }
        echo '*';
}

$start = 0;
$stop = 400;

echo '<p class="break_data">';
do {
    echo '*';
    $start++;
} while ($start <= $stop);
echo '</p>';

$start = 0;
$stop = 399;

do {

    if (!fmod($start, 50)) {echo '<br/>'; }
    echo '*';
     $start++;
} while ($start <= $stop);

echo "<p>Su foreach</p>";

$start = 0;
$stop = 399;

for ($i=0; $i < 400; $i++){
	$mas[]=$i;
}

foreach ($mas as $value) {

   if (!fmod($value, 50)) {echo '<br/>'; }
   echo '*';
}


?>