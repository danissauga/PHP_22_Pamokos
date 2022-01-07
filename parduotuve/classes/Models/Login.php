<?php
namespace Classes\Models;

class Login {

public $users;
protected $pass;
protected $data;

public function __constructor()
{
    $this->users = array(['user' => 'sigitas@danis.lt','password' => "pass123"]);
}



public function is_logged_in(){
    if ((isset($_SESSION['logged_in'])) and ($_SESSION['logged_in'] == true) and ($_SESSION['user'] == $this->users['user'])) {
        return true;
    } else {
        return false;
    }

}

public function log_me_in($udata) {

print_r($this->users['user']);
   /*  if (($udata['uname'] == $this->users['user']) and ($udata['upass'] == $this->users['password'])){
       $_SESSION['logged_in'] = true;
       $_SESSION['user'] = $udata['user'];
     }*/
}

public function logoff() {

      unset($_SESSION['logged_in']);
      unset($_SESSION['user']);
      header("Location: ./");

}

public function login_form(){ ?>
    <div class="container h-75">
             <div class="row h-75 justify-content-center align-items-center">
                    <form id="loginas" class="col-5" action="login" name="loginas" method="POST" enctype="multipart/form-data">
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
    }

public function logged_in(){
    print_r($_SESSION);?>
    <div class="container h-75">
             <div class="row h-75 justify-content-center align-items-center">
                    <form id="loginas" class="col-5" action="login" name="loginas" method="POST" enctype="multipart/form-data">
                         <h1 class="h3 mb-3 fw-normal">Jūs jau prisijungę !</h1>
                    </form>
             </div>
    </div>
<?php
}

}

?>