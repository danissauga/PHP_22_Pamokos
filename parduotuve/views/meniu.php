<nav class="navbar navbar-dark navbar-expand-lg fixed-top bg-white portfolio-navbar gradient">
        <div class="container">
            <a class="navbar-brand logo" href="#">e-parduotuvė</a>
            <?php
               // echo '<b>Prisijunges kaip:</b> '.$_SESSION['user'];
            ?>
            <button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navbarNav">
                <span class="visually-hidden">Toggle navigation</span>
                <span class="navbar-toggler-icon"></span>
            </button>


        <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="addGoods/">Pridėti prekę(-es)</a></li>
                   <!-- <li class="nav-item"><a class="nav-link active" href="#" data-toggle="modal" data-target="#myModal-add-payment">Pridėti lėšas</a></li>
                    <li class="nav-item"><a class="nav-link active" href="#" data-toggle="modal" data-target="#myModal-make-payment">Nuskaičiuoti lėšas</a></li>
                -->    <li class="nav-item">
                        <form method="POST" style="float:right;">
                                    <button type="submit" name="logoff" class="btn btn-success">Atsijungti</button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
</nav>





