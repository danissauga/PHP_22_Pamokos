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
while ($start < $stop) {
    echo '*';
$start++;
}
echo '</p>';
$start = 0;
$stop = 400;
while ($start < $stop) {
    if (!fmod($start, 50)) {echo '<br/>'; }
    echo '*';
$start++;
}

?>