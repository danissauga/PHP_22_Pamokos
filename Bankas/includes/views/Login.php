<?php

class Login {
    public function login_form(){ ?>
    <div class="container h-100">
             <div class="row h-100 justify-content-center align-items-center">
                    <form id="login" class="col-5" name="login" method="POST" enctype="multipart/form-data">
                         <h1 class="h3 mb-3 fw-normal">Login form</h1>
                        <div class="form-floating mb-3">
                            <input type="email" name="uname" class="form-control" id="floatingInput" placeholder="name@example.com">
                            <label for="floatingInput">Email address</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="password" name="upass" class="form-control" id="floatingPassword" placeholder="Password">
                            <label for="floatingPassword">Password</label>
                        </div>
                        <div class="checkbox mb-3">
                        </div>
                        <button name="go" class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
                    </form>
             </div>
    </div>
    <?php
    }
}
?>