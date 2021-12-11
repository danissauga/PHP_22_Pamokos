<?php
define('BASE_DIR', __DIR__);

require(BASE_DIR . '/includes/functions.php');
require(BASE_DIR . '/includes/auth.php');

//unset($_SESSION['logged_in']);

//$loged_in == $_SESSION['logged_in']
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Checkout example · Bootstrap v5.1</title>
        <!-- Bootstrap CDN nuoroda -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <!-- Custom stiliu failas -->
     <!--   <link href="assets/css/custom.css" rel="stylesheet">    -->
    </head>
    <body class="bg-light">
                <div class="container container-small">

                        <?php if(!$logged_in) : ?>

                        <main class="form-signin text-center">
                                <form method="POST">
                                        <h1 class="h3 mb-3 fw-normal">Prašome prisijungti</h1>
                                        <input type="hidden" name="login" value="1"/>
                                        <div class="form-floating">
                                        <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                                        <label for="floatingInput">Email address</label>
                                        </div>
                                        <div class="form-floating">
                                        <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
                                        <label for="floatingPassword">Password</label>
                                        </div>

                                        <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
                                        <p class="mt-5 mb-3 text-muted">&copy; 2017–2021</p>
                                </form>
                        </main>

                        <?php else: ?>
                        <form method ="POST">
                             <button class ="w-100 btn btn-lg btn-primary" type="submit">Atsijungti</button>
                        </form>
                        <main>
                                <div class="py-5 text-center">
                                        <h2>Prekių administratorius</h2>

                                        <div class="text-start">
                                                <?php
                                                        //PHP visu zinuciu atvaizdavimui naudokite:
                                                        //ini_set('display_errors', true);
                                                        //error_reporting(E_ALL);

                                                        //$_GET - Grazina is address bar linko paduotus parametrus
                                                        //$_POST - Grazina siunciamus parametrus, kuriu jau nematome adress bar'e
                                                        //$_REQUEST - Grazina visus siunciamus parametrus
                                                        //$_SESSION - Issaugo COOKIES duomenis

                                                        //Sumuojame perduodamas reiksmes

                                                        //print_r($_GET);

                                                        if( prekes_exists() ) :

                                                        $prekes = $_GET['prekes'];
                                                        //$nuolaida = $_GET['nuolaida'];

                                                        if($_GET['rusiavimas'] == 1) {
                                                                $sort_by = array_column($prekes, 'prekes_pavadinimas');
                                                                array_multisort($sort_by, SORT_ASC, $prekes);
                                                        }

                                                        ?>

                                                        <table class="table">
                                                                <thead>
                                                                        <th>Prekės pavadinimas</th>
                                                                        <th>Kaina</th>
                                                                        <th>Kiekis</th>
                                                                </thead>
                                                                <tbody>

                                                                <?php
                                                                        $kiekis = 0;
                                                                        $suma = 0;

                                                                        //echo '<pre>';

                                                                        foreach($prekes as $preke) {

                                                                                //print_r($preke);

                                                                                if( is_array($preke) ) {

                                                                                        if($preke['prekes_pavadinimas'] != '') {


                                                                                        echo '<tr>';
                                                                                                echo '<td>' . $preke['prekes_pavadinimas'] . '</td>';
                                                                                                echo '<td>' . $preke['kaina'] . '</td>';
                                                                                                echo '<td>' . $preke['kiekis'] . '</td>';
                                                                                        echo '</tr>';

                                                                                        }

                                                                                        if( is_numeric($preke['kiekis']) ) {
                                                                                                $kiekis += $preke['kiekis'];
                                                                                        }

                                                                                        if( is_numeric($preke['kaina']) ) {
                                                                                                $suma += $preke['kaina'];
                                                                                        }

                                                                                }

                                                                        }

                                                                ?>

                                                                </tbody>
                                                        </table>

                                                        <?php echo '<p class="lead">Bendras uzsakytu prekiu kiekis: ' . $kiekis . '</p>'; ?>
                                                        <?php echo '<p class="lead">Bendra uzsakytu prekiu suma: ' . $suma . '</p>'; ?>

                                                        <?php endif; ?>

                                        </div>

                                </div>

                                <div class="row">
                                <div class="col-lg-12">
                                        <form method="GET" action="">
                                                <div class="row mb-3">
                                                        <div class="col-md-12">
                                                                <select name="rusiavimas" class="form-select">
                                                                        <option value="0">Pasirinkite rušiavimo būdą:</option>
                                                                        <option value="1">Rusiuoti pagal pavadinima</option>
                                                                        <option value="2">Rusiuoti pagal kieki</option>
                                                                </select>
                                                        </div>
                                                </div>
                                                <div class="row g-3">

                                                        <?php
                                                                for($i = 0; $i < 10; $i++) :

                                                                $pavadinimas = isset($_GET['prekes'][$i]['prekes_pavadinimas']) ? $_GET['prekes'][$i]['prekes_pavadinimas'] : '';
                                                                $kaina = isset($_GET['prekes'][$i]['kaina']) ? $_GET['prekes'][$i]['kaina'] : '0';
                                                                $kiekis = isset($_GET['prekes'][$i]['kiekis']) ? $_GET['prekes'][$i]['kiekis'] : '0';

                                                        ?>

                                                        <div class="col-sm-8">
                                                                <label class="form-label">Prekės pavadinimas</label>
                                                                <input type="text" class="form-control"
                                                                name="prekes[<?php echo $i; ?>][prekes_pavadinimas]"
                                                                value="<?php echo $pavadinimas; ?>" />
                                                        </div>
                                                        <div class="col-sm-2">
                                                                <label class="form-label">Prekės kainą</label>
                                                                <input type="text" class="form-control"
                                                                name="prekes[<?php echo $i; ?>][kaina]"
                                                                value="<?php echo $kaina; ?>" />
                                                        </div>
                                                        <div class="col-sm-2">
                                                                <label class="form-label">Prekių kiekis</label>
                                                                <input type="number" name="prekes[<?php echo $i; ?>][kiekis]"
                                                                class="form-control" value="<?php echo $kiekis; ?>" />
                                                        </div>

                                                        <?php endfor; ?>
                                                </div>
                                                <div class="mt-5 mb-5">
                                                        <button class="w-100 btn btn-primary btn-lg" type="submit">Siųsti duomenis</button>
                                                </div>
                                        </form>
                                </div>
                                </div>
                        </main>

                        <?php endif; ?>
                </div>

                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        </body>
</html>