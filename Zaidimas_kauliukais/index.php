<?php
require("includes/header.php");
?>
    <main class="page hire-me-page">
        <section class="portfolio-block hire-me">
            <div class="container">
                <div class="heading">
                    <h2>žaidimas kauliukais</h2>
                </div>
                <form>
                    <h3 style="text-align: center;">Rezultatas</h3>
                    <hr style="width: 100%; height: 2px; background-color: #DDDDDD">
                    <div class="mb-3">
                        <div class="row" style="text-align: center;">
                            <div class="col-6">
                                <p style="text-align: center"><h3 id="user_1_name">Žaidėjas Nr.: 1</h3> </p>
                            </div>
                            <div class="col-6">
                                <p style="text-align: center"><h3 id="user_2_name">Žaidėjas Nr.: 2</h3> </p>
                            </div>
                        </div>
                    </div>

                             <input id="user_1_score" type="number" hidden="hidden" value="0" name="user_1_score">
                             <input id="user_2_score" type="number" hidden="hidden" value="0" name="user_2_score">

                    <div class="row justify-content-md-center">
                        <div class="col-6 text-center">
                            <span class="col-auto" id="display_1_score" class="game_result" style="font-size: 65px;">00</span>
                        </div>
                        <div class="col-6 text-center">
                            <span id="display_2_score" class="game_result" style="font-size: 65px;">00</span>
                        </div>
                    </div>
                    <div class="row">
                       <div class="alert alert-danger" role="alert" id="allert">
                             Įveskite žaidėjų vardus!
                        </div>
                    </div>
                    <div class="row mt-3 justify-content-md-center">
                        <div class="col-6">
                            <input class="form-control" type="text" id="user_1" name="user_1" placeholder="Pirmo žaidėjo vardas" minlength="3" required="">
                        </div>
                        <div class="col-6">
                            <input class="form-control" type="text" id="user_2" name="user_2" placeholder="Antro žaidėjo vardas" minlength="3" required="">
                        </div>
                    </div>
                    <div class="row mt-3" id="pradeti_zaidima">
                        <div class="col d-block d-xl-flex my-auto justify-content-xl-center align-items-xl-center">
                            <button class="btn btn-primary border rounded-0 form-control" onclick="test_gamer_name(user_1, user_2)" type="button">Pradėti žaidimą</button>
                        </div>
                    </div>

                    <div class="row" id="end_game_information" style="display:none; padding:0;">
                        <hr style="width: 100%; height: 2px; background-color: #DDDDDD">
                       <div id="info_bar" class="alert alert-success" role="alert">
                             Žaidimas baigiamas, kaip vienas iš žaidėjų surenka 30 ir daugiau taškų!
                        </div>
                    </div>
                    <div class="row">
                        <div class="col" id="ball_box" style="text-align: center; padding-top:2px;">
                            <picture><img id="start_pic" class="img-fluid" style="text-align: center; max-height: 200px;" src="./img/start_page.png"></picture>
                        </div>
                    </div>
                    <div class="row mt-3" id="mesti_kauliuka" style="display:none;">
                        <div class="col d-block d-xl-flex my-auto justify-content-xl-center align-items-xl-center">
                            <input id="kas_meta" hidden="hidden" name="kas_meta" type="text">
                            <button id="push_ball" onclick="pull_the_ball(kas_meta.value)" class="btn btn-primary border rounded-0 form-control" type="button">Risti kamuoliuką</button>
                            <button id="restart" style="display: none;" onclick="location.reload();" class="btn btn-danger border rounded-0 form-control" type="button">Pakartoti žaidimą</button>
                        </div>
                    </div>
                    <div></div>
                </form>
            </div>
        </section>
    </main>
<?php
require("includes/footer.php");
?>