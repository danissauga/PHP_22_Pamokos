<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Checkout example · Bootstrap v5.1</title>
        <!-- Custom stiliu failas -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="css/styles.css">
    </head>
<body class="bg-light">

<?php
session_start();
include("includes/login.php");
if (isset($_POST['logoff'])) {logoff(); }
if (isset($_POST['go'])) {login($_POST,$users);}

if (!is_logged_in($users)) :
?>
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
                                   <!-- <label>
                                        <input type="checkbox" value="remember-me"> Remember me
                                    </label>  -->
                                </div>
                                <button name="go" class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
                            </form>


         </div>
</div>


<?php else :
include("pages/administratorius.php");
endif; ?>

</body>
</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
