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
                    <button id="add_new_account_data" name="add_new_account_data"  type="button" class="btn btn-primary">Registruoti sąskaitą</button>
                </div>
            </form>
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
//function add_new_account() {
$('#add_new_account_data').click(function() {    
   if ($("#name")) { 
       var name = $("#name").val(); 
    }
    if ($("#lname")) { 
       var lname = $("#lname").val(); 
    }
    if ($("#account_nr")) { 
       var account_nr = $("#account_nr").val();
    }
    if ($("#personal_code")) { 
       var personal_code = $("#personal_code").val(); 
    }
    
 // jau man buve. tik nepamenu kur suo pasikases tada buvo :)

    $.ajax({
    type: "POST",
    url: "includes/classes/add_account.php",                            
    data: "name=" + name + "&lname=" + lname + "&acc_nr=" + account_nr + "&pers_code=" + personal_code
        }).done(function( resp ) {
            alert(resp);
            location.reload();
    })

});
</script>