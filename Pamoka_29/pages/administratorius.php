

                <div class="container container-small">
                        <main>
                            <div class="row mt-3">
                                <div class="col-md-10">
                                <?php echo '<b>Prisijunges kaip:</b> '.$_SESSION['user'];
                                 $target_kuponai = './db/kuponai.json';
                                 $target_prekes = './db/prekes.json';
                                 $kiekis = 0;
                                 $suma = 0;
                                  if (file_exists($target_prekes)) {
                                    $prekes = json_decode(file_get_contents($target_prekes), true);
                                    if (!$prekes) {
                                            $prekes=[];
                                        }
                                    }
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
                                                     if (!isset($_POST['kuponas'])) { $kupon = ""; }     //kuponas yra ar jo nera
                                                     else { $kupon = $_POST['kuponas']; }

                                                        if (file_exists($target_kuponai)) {
                                                            $kuponai = json_decode(file_get_contents($target_kuponai), true);
                                                        }

                                                        if( isset($_POST['prekes']) ) :


                                                            /*echo '<pre>';
                                                            print_r($prekes);*/
                                                            array_push($prekes, $_POST['prekes']);
                                                            $add_prekes=json_encode($prekes);
                                                           // $failas = fopen($target_prekes,'w');
                                                            if(file_put_contents($target_prekes, $add_prekes)) {
                                                            echo 'Failas įrašytas sėkmingai';
                                                        };
                                                        endif;

                                                       // $prekes = json_decode(file_get_contents($target_prekes), true);

                                                        ?>

                                                        <table class="table">
                                                                <thead>
                                                                        <th>Prekės pavadinimas</th>
                                                                        <th>Kaina</th>
                                                                        <th>Kiekis</th>
                                                                </thead>
                                                                <tbody>

                                                                <?php
                                                                        if($prekes) {
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
                                                                        }

                                                                ?>

                                                                </tbody>
                                                        </table>
                                                         <?php
                                                         /*   $discount = 0;

                                                            //pataisyta kuponu patikra

                                                            if ((isset($_POST['calculate_discount'])) and (isset($_POST['kuponas'])) and ($_POST['kuponas'] <> "") or ($_POST['kuponas'] <> "")) {

                                                                foreach ($kuponai as $key => $value) {
                                                                       //   print_r($key);
                                                                     if ($value['kuponas'] == $_POST['kuponas']) {

                                                                        if (is_numeric($value['discount']))
                                                                            {
                                                                            $percents = $value['discount'];
                                                                            $discount = ($suma*$percents)/100;
                                                                            break;
                                                                         }
                                                                    }
                                                                }
                                                            }
                                                          if ((isset($_POST['calculate_discount'])) and ($discount == 0)) {
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
                                                         */
                                                         ?>

                                        </div>
                                </div>

                                <div class="row">
                                <div class="col-lg-12">
                                        <form method="POST" action="">
                                                <div class="row mb-3">
                                                    <div class="col-md-2" >
                                                        <input id="kuponas" name="kuponas" class="form-control" type="text" value="<?php echo $kupon; ?>" placeholder="Nuolaidos kuponas">
                                                    </div>
                                                    <div class="col-md-2" >
                                                        <button type="submit" name="calculate_discount" class="btn btn-success">Pritaikyti nuolaidą</button>
                                                    </div>
                                                </div>
                                                <div class="row g-3">
                                                        <div class="col-sm-8">
                                                                <label class="form-label">Prekės pavadinimas</label>
                                                                <input type="text" class="form-control"
                                                                name="prekes[prekes_pavadinimas]"
                                                                value="" />
                                                        </div>
                                                        <div class="col-sm-2">
                                                                <label class="form-label">Prekės kainą</label>
                                                                <input type="text" class="form-control"
                                                                name="prekes[kaina]"
                                                                value="" />
                                                        </div>
                                                        <div class="col-sm-2">
                                                                <label class="form-label">Prekių kiekis</label>
                                                                <input type="number"
                                                                name="prekes[kiekis]"
                                                                class="form-control" value="" />
                                                        </div>
                                                </div>
                                                <div class="mt-5 mb-5">
                                                        <button class="w-100 btn btn-primary btn-lg" type="submit">Siųsti duomenis</button>
                                                </div>
                                     </form>
                                </div>
                            </div>

                        </main>
                </div>
