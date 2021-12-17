<div class="modal fade" id="myModal-make-payment" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title" id="myModalLabel">Mokėjimo įvedimas</h6>
            </div>
            <div class="modal-body">
             <form method="POST">
            <div class="modal-body">

                        <input type="number" name="make-payment-id" id="make-payment-id" value="">

                        <div class="form-group">
                            <label for="name">Mokėtojo vardas, pavardė</label>
                            <input type="text" readonly="readonly" class="form-control" id="name" name="name">
                        </div>
                        <div class="form-group">
                            <label for="account_nr">Mokėtojo sąskaitos numeris </label>
                            <input type="text" readonly="readonly"   class="form-control" id="account_nr" name="account_nr">
                        </div>
                        <div class="form-group">
                            <label for="name">Gavėjo vardas, pavardė</label>
                            <input type="text" class="form-control" id="get_name" name="get_name">
                        </div>
                        <div class="form-group">
                            <label for="account_nr">Gavėjo sąskaitos numeris </label>
                            <input type="text" class="form-control" id="get_account_nr" name="get_account_nr">
                        </div>
                        <div class="form-group">
                            <label for="account_nr">Mokėjimo suma: </label>
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
</div>