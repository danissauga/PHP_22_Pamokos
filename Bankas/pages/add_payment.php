<div class="modal fade" id="myModal-add-payment" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title" id="myModalLabel">Lėšų užskaitymas</h6>
            </div>
            <form method="POST" name="add_payment_form" id="add_payment_form">
            <div class="modal-body">

                        <input type="number" hidden="hidden" name="add-payment-id" id="add-payment-id" value="">

                        <div class="form-group">
                            <label for="name">Vardas</label>
                            <input type="text" readonly="readonly" class="form-control" id="name" name="name">
                        </div>
                        <div class="form-group">
                            <label for="name">Pavardė</label>
                            <input type="text" readonly="readonly" class="form-control" id="lname" name="lname">
                        </div>
                        <div class="form-group">
                            <label for="account_nr">Sąskaitos numeris </label>
                            <input type="text" readonly="readonly"   class="form-control" id="account_nr" name="account_nr">
                        </div>
                         <div class="form-group">
                            <label for="account_nr">Įmokos suma: </label>
                            <input type="number" required="required" class="form-control" id="recourses" name="recourses" value="0.00">
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-default" data-dismiss="modal">Nutraukti</button>
                    <button type="button" id="get_new_payment" name="get_new_payment" class="btn btn-primary">Pervesti pinigus</button>
                </div>
            </form>
            </div>
        </div>
</div>
<script>
$('#get_new_payment').click(function() {
    var PaymentFormData = $("#add_payment_form").serializeArray();
    $.ajax({
    type: "POST",
    url: "includes/classes/add_payment.php",
    data: "acc_id=" +  PaymentFormData[0]['value'] + "&recources=" + PaymentFormData[4]['value'] + "&f=0"
        }).done(function( resp ) {
            alert(resp);
            location.reload();
    })
});
</script>