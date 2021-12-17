<!-- Modal -->
<div class="modal fade" id="myModal-add-account" tabindex="-1" role="dialog" aria-labelledby="Sąskaitos registracija">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title" id="myModalLabel">Sąskaitos registracija</h6>
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
                            <input type="text" class="form-control" id="account_nr" name="account_nr" placeholder="Įveskite sąskaitos numeris">
                        </div>
                        <div class="form-group">
                            <label for="personal_code">Asmens kodas</label>
                            <input type="text" class="form-control" id="personal_code" name="personal_code" placeholder="Įveskite asmens kodas">
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Nutraukti</button>
                    <button type="submit" class="btn btn-primary">Registruoti sąskaitą</button>
                </div>
            </form>
        </div>
    </div>
</div>