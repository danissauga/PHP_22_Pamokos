

                <div class="container container-small">
                        <main>
                            <div class="row mt-3">
                                <div class="col-md-10">
                                <?php echo '<b>Prisijunges kaip:</b> '.$_SESSION['user'];

                                ?>
                                </div>
                                <div class="col-md-2">
                                    <form method="POST" style="float:right;">
                                    <button type="submit" name="logoff" class="btn btn-success">Atsijungti</button>
                                    </form>
                                </div>
                            </div>
                            <div class="py-5 text-center">
                                        <h2>Prekių administratorius</h2>

                                        <div class="text-start">

                                                <?php
                                                     if (!isset($_GET['kuponas'])) { $kupon = ""; }     //kuponas yra ar jo nera
                                                     else { $kupon = $_GET['kuponas']; }

                                                        $kuponai = [['kuponas' => 'BLACKFIRDAY','discount' => '10'],
                                                                   ['kuponas' => 'ACHILAS','discount' => '15'],
                                                                   ['kuponas' => 'META','discount' => '5']];

                                                        if( isset($_GET['prekes']) AND is_array($_GET['prekes']) AND count($_GET['prekes']) > 0) :

                                                        $prekes = $_GET['prekes'];

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

                                                                        foreach($prekes as $preke) {

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
                                                                                                $suma += $preke['kiekis'] * $preke['kaina'];
                                                                                        }

                                                                                }

                                                                        }

                                                                ?>

                                                                </tbody>
                                                        </table>
                                                         <?php
                                                            $discount = 0;

                                                            //pataisyta kuponu patikra

                                                            if ((isset($_GET['calculate_discount'])) and ($_GET['kuponas'] <> "") or ($_GET['kuponas'] <> "")) {

                                                                foreach ($kuponai as $key => $value) {
                                                                       //   print_r($key);
                                                                     if ($value['kuponas'] == $_GET['kuponas']) {

                                                                        if (is_numeric($value['discount']))
                                                                            {
                                                                            $percents = $value['discount'];
                                                                            $discount = ($suma*$percents)/100;
                                                                            break;
                                                                         }
                                                                    }
                                                                }
                                                            }
                                                          if ((isset($_GET['calculate_discount'])) and ($discount == 0)) {
                                                            echo '<div class="alert alert-danger" role="alert">
                                                                        Patikrinkite ar teisingai įvestas kupono kodas, tokio kupono nėra!
                                                                </div>';
                                                          }

                                                         if ($discount <> 0) {
                                                             echo '<div class="alert alert-success" role="alert">
                                                                    Kuponas galiojantis, jums taikoma '.$percents.'% nuplaida!
                                                                    </div>';
                                                            echo '<p class="lead">Taikoma niolaida: ' . number_format($discount,2) . '</p>';
                                                            $suma = $suma - $discount;
                                                         }
                                                         //pataisym pabaiga

                                                         echo '<p class="lead">Bendras uzsakytu prekiu kiekis: ' . $kiekis . '</p>';
                                                         echo '<p class="lead">Bendra uzsakytu prekiu suma po nuolaidos: ' . number_format($suma,2) . '</p>';
                                                         endif; ?>

                                        </div>
                                </div>

                                <div class="row">
                                <div class="col-lg-12">
                                        <form method="GET" action="">
                                                <div class="row mb-3">
                                                    <div class="col-md-2" >
                                                        <input id="kuponas" name="kuponas" class="form-control" type="text" value="<?php echo $kupon; ?>" placeholder="Nuolaidos kuponas">
                                                    </div>
                                                    <div class="col-md-2" >
                                                        <button type="submit" name="calculate_discount" class="btn btn-success">Pritaikyti nuolaidą</button>
                                                    </div>
                                                        <div class="col-md-12 col-sm-4 col-md-3 mt-2">
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
                </div>
