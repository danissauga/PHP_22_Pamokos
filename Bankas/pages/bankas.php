<?php include("includes/meniu.php");
   include("includes/functions.php");
if((!isset($_SESSION['reload'])) or ($_SESSION['reload'] == 'true')) { get_data(); $_SESSION['reload'] = 'false'; }
?>
<main class="page">
    <section class="portfolio-block project">
        <div class="container">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h3>Banko sąskaitų sąrašas</h3>
                        </div>
                    </div>
                </div>

            <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th class="text-center">#</th>
                                            <th class="text-center">Vardas, Pavardė</th>
                                            <th class="text-center">Asmens kodas</th>
                                            <th class="text-center">Sąskaitos nr.</th>
                                            <th class="text-center">Turimos lėšos</th>
                                            <th class="text-center filter-false sorter-false">&nbsp;</th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-center">


                                        <?php
                                        if(isset($_SESSION['accounts'])) :
                                            if (count($_SESSION['accounts']) !== 0) :
                                                foreach($_SESSION['accounts'] as $id => $value):
                                                   // print_r($value);
                                            ?>
                                                <tr>
                                                    <td><?php echo $id+1; ?></td>
                                                    <td><?php echo $value['name'] . ', ' . $value['lname']; ?></td>
                                                    <td><?php echo $value['personal_code']; ?></td>
                                                    <td><?php echo $value['account_nr']; ?></td>
                                                    <td><?php echo $value['resources']; ?></td>
                                                    <td class="text-center">
                                                        <a class="btn btn-success" onclick="edit_account_modal(<?php echo $id; ?>)" id="add-account" role="button" style="margin: 2px;" data-toggle="modal"><i class="far fa-edit"></i></a>
                                                        <a class="btn btn-success" onclick="get_payment_modal(<?php echo $id; ?>)" id="get-payment" role="button" style="margin: 2px;" data-toggle="modal"><i class="fas fa-arrow-down"></i></a>
                                                        <a class="btn btn-primary" onclick="make_payment_modal(<?php echo $id; ?>)" id="make-payment" role="button" style="margin: 2px;" data-toggle="modal" data-id="<?php echo $id; ?>"><i class="fas fa-arrow-up"></i></a>
                                                    <?php if ($value['resources'] == 0) : ?>
                                                        <a class="btn btn-danger" onclick="delete_account_modal(<?php echo $id; ?>)"id="delete-account" role="button" style="margin: 2px;"  data-toggle="modal" data-id="<?php echo $id; ?>"><i class="fas fa-trash"></i></a>
                                                    <?php endif; ?>
                                                    </td>
                                                </tr>
                                            <?php
                                                endforeach;
                                            endif;
                                         endif;  ?>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
</main>
<?php
//print_r($_SESSION);
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
