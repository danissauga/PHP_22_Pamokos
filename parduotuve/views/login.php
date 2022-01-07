<?php
include("views/header.php");
include("views/meniu.php");
?>
    <div class="container h-75">
             <div class="row h-75 justify-content-center align-items-center">
                    <form id="login" class="col-5" action="<?php echo ROOT; ?>" name="login" method="POST" enctype="multipart/form-data">
                         <h1 class="h3 mb-3 fw-normal">Vartotojo prisijungimas</h1>
                        <div class="form-floating mb-3">
                            <input type="email" name="uname" class="form-control" id="floatingInput" placeholder="name@example.com">
                            <label for="floatingInput">El. pašto adresas</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="password" name="upass" class="form-control" id="floatingPassword" placeholder="Slaptažodis">
                            <label for="floatingPassword">Slaptažodis</label>
                        </div>
                        <div class="checkbox mb-3">
                        </div>
                        <button name="go" class="w-100 btn btn-lg btn-primary" type="submit">Prisijungti</button>
                    </form>
             </div>
    </div>
<?php
include("views/footer.php");
