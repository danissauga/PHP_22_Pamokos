<nav class="navbar navbar-dark navbar-expand-lg fixed-top bg-white portfolio-navbar gradient">
        <div class="container">
            <a class="navbar-brand logo" href="<?php echo ROOT; ?>">e-parduotuvė</a>
            <?php
               // echo '<b>Prisijunges kaip:</b> '.$_SESSION['user'];
            ?>
            <button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navbarNav">
                <span class="visually-hidden">Toggle navigation</span>
                <span class="navbar-toggler-icon"></span>
            </button>


        <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">

                    <li class="nav-item"><a class="nav-link" href="list">Prekių sąrašas</a></li>
                    <li class="nav-item"><a class="nav-link" href="add">Pridėti prekę(-es)</a></li>
                    <li class="nav-item">
                        <form method="POST" style="float:right;">
                                    <a class="btn btn-success" href="cart" role="button"><i class="fas fa-shopping-cart"></i></a>
                                    <a class="btn btn-success" href="login" role="button"><i class="fas fa-sign-in-alt"></i></a>
                                    <a class="btn btn-success" href="logout" role="button"><i class="fas fa-sign-out-alt"></i></a>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
</nav>





