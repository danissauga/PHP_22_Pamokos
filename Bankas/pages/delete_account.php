<div class="modal fade " id="myModal-delete-account" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title" id="myModalLabel">Sąskaitos panaikinimas</h6>
            </div>
            <div class="modal-body">
                Panaikinti pasirinktą sąskaitą ?
            <input type="number" hidden="hidden" name="delete-account-id" id="delete-account-id" value="">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Uždaryti</button>
                <button type="button" id="delete_account" class="btn btn-danger">Panaikinti</button>
            </div>
        </div>
    </div>
</div>
<script>

$('#delete_account').click(function() {
     if ($("#delete-account-id")) {
       var acc_id =  $("#delete-account-id").val();
    }

    $.ajax({
    type: "POST",
    url: "includes/classes/delete_account.php",
    data: "a_id=" + acc_id + "&f=0"
        }).done(function( resp ) {
            alert(resp);
            location.reload();
    })

});
</script>