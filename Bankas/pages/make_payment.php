<div class="modal fade" id="myModal-make-payment" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title" id="myModalLabel">Mokėjimo įvedimas</h6>
            </div>
            <div class="modal-body">
             <form method="POST" id="make_payment_form" name="make_payment_form">
            <div class="modal-body">

                        <input type="number" hidden="hidden" name="make-payment-id" id="make-payment-id" value="">

                        <div class="form-group">
                            <label for="name">Mokėtojo vardas</label>
                            <input type="text" readonly="readonly" class="form-control" id="name" name="name">
                        </div>
                        <div class="form-group">
                            <label for="name">Mokėtojo pavardė</label>
                            <input type="text" readonly="readonly" class="form-control" id="lname" name="lname">
                        </div>
                        <div class="form-group">
                            <label for="account_nr">Mokėtojo sąskaitos numeris </label>
                            <input type="text" readonly="readonly"   class="form-control" id="account_nr" name="account_nr">
                        </div>
                        <div class="form-group">
                            <label for="account_nr">Mokėjimo suma: </label>
                            <input type="number" required="required" class="form-control" id="recources" name="recources" value="0.00">
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-default" data-dismiss="modal">Nutraukti</button>
                    <button type="button" id="make_payment" name="make_payment" class="btn btn-primary">Pervesti pinigus</button>
                </div>
            </form>
            </div>
        </div>
    </div>
</div>
<script>
$('#make_payment').click(function() {
       var MakePaymentFormData = $("#make_payment_form").serializeArray();
    console.log(MakePaymentFormData);
    $.ajax({
    type: "POST",
    url: "includes/classes/add_payment.php",
    data: "acc_id=" +  MakePaymentFormData[0]['value'] + "&recources=" + MakePaymentFormData[4]['value'] + "&f=2"
        }).done(function( resp ) {
            alert(resp);
            location.reload();
    })
});
</script>