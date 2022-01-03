<?php include("includes/meniu.php");
   include("includes/functions.php");
if((!isset($_SESSION['reload'])) or ($_SESSION['reload'] == 'true')) { get_data(); $_SESSION['reload'] = 'false'; }

$bankas->show_accounts_data();

include("includes/footer.php");
?>
<script>

function get_payment_modal(mod_id) {
    $("#add-payment-id").val( mod_id );
    $('#myModal-add-payment').modal('show');
var PaymentFormData = $("#add_payment_form").serializeArray();
    $.ajax({
    type: "POST",
    dataType: 'json',
    url: "includes/classes/add_payment.php",
    data: "acc_id=" + mod_id + "&f=1"
        }).done(function( resp ) {
            console.log(resp);
        for (let i = 0; i < PaymentFormData.length; i++) {
            var prefix = PaymentFormData[i]['name'];

            if (resp[prefix]) {
                document.forms['add_payment_form'].elements[PaymentFormData[i]['name']].value = resp[PaymentFormData[i]['name']];
            }
        }
    })


}
function make_payment_modal(mod_id) {
    $("#make-payment-id").val( mod_id );
    $('#myModal-make-payment').modal('show');

var MakePaymentFormData = $("#make_payment_form").serializeArray();
console.log(MakePaymentFormData);
console.log(mod_id);

 $.ajax({
    type: "POST",
    dataType: 'json',
    url: "includes/classes/add_payment.php",
    data: "acc_id=" + mod_id + "&f=1"
        }).done(function( resp ) {
            console.log(resp);
        for (let i = 0; i < MakePaymentFormData.length; i++) {
            var prefix = MakePaymentFormData[i]['name'];

            if (resp[prefix]) {
                document.forms['make_payment_form'].elements[MakePaymentFormData[i]['name']].value = resp[MakePaymentFormData[i]['name']];
            }
        }
    })


}
function delete_account_modal(mod_id) {
    $("#delete-account-id").val( mod_id );
    $('#myModal-delete-account').modal('show');
}
function edit_account_modal(mod_id) {
    $("#add-account-id").val( mod_id );
    document.getElementById("add_new_account_data").style.display = "none";
    document.getElementById("update_account_data").style.display = "inline";
    $('#myModal-add-account').modal('show');
var formData = $("#add_account_form").serializeArray();
var resp = new Array(new Array());
    $.ajax({
    type: "POST",
    dataType: 'json',
    url: "includes/classes/add_account.php",
    data: "acc_id=" + mod_id + "&f=1"
        }).done(function( resp ) {
        for (let i = 0; i < formData.length; i++) {
            if (resp[formData[i]['name']]) {
                document.forms['add_account_form'].elements[formData[i]['name']].value = resp[formData[i]['name']];
            }
        }
    })
}

</script>
