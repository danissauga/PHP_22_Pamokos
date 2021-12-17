<div class="modal fade" id="myModal-add-payment" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title" id="myModalLabel">Lėšų užskaitymas</h6>
            </div>
            <form method="POST">
            <div class="modal-body">

                        <div class="form-group">
                            <label for="name">Vardas</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Įveskite kliento vardą">
                        </div>
                        <div class="form-group">
                            <label for="lname">Pavardė</label>
                            <input type="text" class="form-control" id="lname" name="lname" placeholder="Įveskite kliento pavrdę">
                        </div>
                        <div class="form-group">
                            <label for="account_nr">Sąskaitos numeris </label>
                            <input type="text"  class="form-control" id="account_nr" name="account_nr" placeholder="Įveskite sąskaitos numeris">
                        </div>
                        <div class="form-group">
                            <label for="account_nr">Įmokos suma: </label>
                            <input type="number" required="required" class="form-control" id="account_nr" name="account_nr">
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
