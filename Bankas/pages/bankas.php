<?php include("includes/meniu.php"); ?>
<main class="page">
    <section class="portfolio-block project">
        <div class="container">
<!--<main class="page lanidng-page"></main>-->
            <div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h3>Banko sąskaitų sąrašas</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th class="text-center">#</th>
                                            <th class="text-center">Vardas, Pavardė</th>
                                            <th class="text-center">Sąskaitos nr.</th>
                                            <th class="text-center">Turimos lėšos EUR</th>
                                            <th class="text-center filter-false sorter-false">&nbsp;</th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-center">
                                        <tr>
                                            <td>1</td>
                                            <td>Ana, Diseñado</td>
                                            <td>LT10000000000000000000</td>
                                            <td>1000.00</td>
                                            <td class="text-center">
                                                <a class="btn btn-success" role="button" style="margin: 2px;" data-toggle="modal" data-target="#myModal-add-payment"><i class="fas fa-arrow-down"></i></a>
                                                <a class="btn btn-primary" role="button" style="margin: 2px;" data-toggle="modal" data-target="#myModal-make-payment"><i class="fas fa-arrow-up"></i></a>
                                                <a class="btn btn-danger" role="button" style="margin: 2px;"  data-toggle="modal" data-target="#myModal-delete-account"><i class="fas fa-trash"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
</main>
<?php
include("includes/footer.php");
?>
