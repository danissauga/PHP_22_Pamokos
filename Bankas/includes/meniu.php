<nav class="navbar navbar-dark navbar-expand-lg fixed-top bg-white portfolio-navbar gradient">
        <div class="container">
            <a class="navbar-brand logo" href="#">Bankininkas</a>
            <?php
                echo '<b>Prisijunges kaip:</b> '.$_SESSION['user'];
            ?>
            <button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navbarNav">
                <span class="visually-hidden">Toggle navigation</span>
                <span class="navbar-toggler-icon"></span>
            </button>


        <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link active" href="#">Pridėti sąskaitą</a></li>
                    <li class="nav-item"><a class="nav-link active" href="#">Pridėti lėšas</a></li>
                    <li class="nav-item"><a class="nav-link active" href="#">Nuskaičiuoti lėšas</a></li>
                    <li class="nav-item">
                        <form method="POST" style="float:right;">
                                    <button type="submit" name="logoff" class="btn btn-success">Atsijungti</button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
</nav>
<!-- Button trigger modal -->
<br><br><br><br><br>


<!-- Modal -->
<div class="modal fade" id="myModal-add-account" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Modal title</h4>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="myModal-add-payment" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Modal title</h4>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>

<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal-add-account">
    Launch demo modal
</button>
<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal-add-payment">
    Launch demo modal
</button>

<script>
$(document).ready(function() {
    $('#myModa-add-account').on('shown.bs.modal', function () {
});
    $('#myModa-add-payment').on('shown.bs.modal', function () {
});
});
</script>

