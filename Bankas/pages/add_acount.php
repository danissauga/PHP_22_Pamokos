<!-- Modal -->
<div class="modal fade" id="myModal-add-account" tabindex="-1" role="dialog" aria-labelledby="Sąskaitos registracija">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title" id="myModalLabel">Sąskaitos registracija</h6>
            </div>
             <form method="POST" name="add_account_form" id="add_account_form">

             <input type="number" hidden="hidden" name="add-account-id" id="add-account-id" value="">

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
                            <input type="text" readonly="readonly" class="form-control" id="account_nr" name="account_nr" placeholder="Įveskite sąskaitos numeris">
                        </div>
                        <div class="form-group">
                            <label for="personal_code">Asmens kodas</label>
                            <input type="number" class="form-control" id="personal_code" maxlength="11" name="personal_code" placeholder="Įveskite asmens kodas">
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" onclick=(location.reload()) data-dismiss="modal">Nutraukti</button>
                    <button id="add_new_account_data" name="add_new_account_data"  type="button" class="btn btn-primary">Registruoti sąskaitą</button>
                    <button id="update_account_data" style="display: none;" name="update_account_data"  type="button" class="btn btn-primary">Atnaujinti duomenis</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>


function set_data(class_id) {

   var AccountFormData = $("#add_account_form").serializeArray();
    console.log(AccountFormData);
if (class_id == 0) {
    $.ajax({
    type: "POST",
    url: "includes/classes/add_account.php",
    data: "name=" + AccountFormData[1]['value'] + "&lname=" + AccountFormData[2]['value'] + "&account_nr=" + AccountFormData[3]['value'] + "&personal_code=" + AccountFormData[4]['value'] + "&resources=0.00" + "&f=" + class_id
        }).done(function( resp ) {
            alert(resp);
           location.reload();
    })
}
if (class_id == 2) {
    $.ajax({
    type: "POST",
    url: "includes/classes/add_account.php",
    data: "aid=" + AccountFormData[0]['value'] + "&name=" + AccountFormData[1]['value'] + "&lname=" + AccountFormData[2]['value'] + "&personal_code=" + AccountFormData[4]['value'] + "&f=" + class_id
        }).done(function( resp ) {
            alert(resp);
           location.reload();
    })
}

}
$('#add_new_account_data').click(function() {
    set_data(0);
});
$('#update_account_data').click(function() {
    set_data(2);
});

</script>