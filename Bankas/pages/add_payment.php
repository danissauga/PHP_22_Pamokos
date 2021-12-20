<div class="modal fade" id="myModal-add-payment" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title" id="myModalLabel">Lėšų užskaitymas</h6>
            </div>
            <form method="POST" name="add_payment_form" id="add_payment_form">
            <div class="modal-body">

                        <input type="number" name="add-payment-id" id="add-payment-id" value="">

                        <div class="form-group">
                            <label for="name">Vardas</label>
                            <input type="text" readonly="readonly" class="form-control" id="add_name" name="add_name">
                        </div>
                        <div class="form-group">
                            <label for="account_nr">Sąskaitos numeris </label>
                            <input type="text" readonly="readonly"   class="form-control" id="account_nr" name="account_nr">
                        </div>
                         <div class="form-group">
                            <label for="account_nr">Įmokos suma: </label>
                            <input type="number" required="required" class="form-control" id="payment" name="payment">
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Nutraukti</button>
                    <button type="submit" class="btn btn-primary">Pervesti pinigus</button>
                </div>
            </form>
            </div>
        </div>
</div>
