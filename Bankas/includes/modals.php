<?php

include("./pages/add_acount.php");
include("./pages/add_payment.php");
include("./pages/make_payment.php");
include("./pages/delete_account.php");

?>

<script>
$(document).ready(function() {
    $('#myModa-add-account').on('shown.bs.modal', function () {
});
    $('#myModa-add-payment').on('shown.bs.modal', function () {
});
    $('#myModa-make-payment').on('shown.bs.modal', function () {
});
    $('#myModa-delete-account').on('shown.bs.modal', function () {
});
});
</script>