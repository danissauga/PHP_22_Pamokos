<?php include("includes/meniu.php");
   include("includes/functions.php");
if((!isset($_SESSION['reload'])) or ($_SESSION['reload'] == 'true')) { get_data(); $_SESSION['reload'] = 'false'; }
?>
<main class="page">
    <section class="portfolio-block project">
        <div class="container">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h3>Banko sąskaitų sąrašas</h3>
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
                                            <th class="text-center">Turimos lėšos</th>
                                            <th class="text-center filter-false sorter-false">&nbsp;</th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-center">


                                        <?php
                                        if(isset($_SESSION['accounts'])) :
                                            if (count($_SESSION['accounts']) !== 0) :
                                                foreach($_SESSION['accounts'] as $id => $value):
                                                    print_r($value);
                                            ?>
                                                <tr>
                                                    <td><?php echo $id+1; ?></td>
                                                    <td><?php echo $value['name'] . ', ' . $value['lname']; ?></td>
                                                    <td>LT10000000000000000000</td>
                                                    <td>1000.00</td>
                                                    <td class="text-center">
                                                        <a class="btn btn-success" id="get-payment" role="button" style="margin: 2px;" data-toggle="modal" data-id="1"><i class="fas fa-arrow-down"></i></a>
                                                        <a class="btn btn-primary" id="make-payment" role="button" style="margin: 2px;" data-toggle="modal" data-id="1"><i class="fas fa-arrow-up"></i></a>
                                                        <a class="btn btn-danger" id="delete-account" role="button" style="margin: 2px;"  data-toggle="modal" data-id="1"><i class="fas fa-trash"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                            <?php
                                                endforeach;
                                            endif;
                                         endif;  ?>

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
//print_r($_SESSION);
include("includes/footer.php");
?>
<script>
$("#get-payment").click(function () {
    var ids = $(this).attr('data-id');
    $("#add-payment-id").val( ids );
    $('#myModal-add-payment').modal('show');
});
$("#make-payment").click(function () {
    var ids = $(this).attr('data-id');
    $("#make-payment-id").val( ids );
    $('#myModal-make-payment').modal('show');
});
$("#delete-account").click(function () {
    var ids = $(this).attr('data-id');
    $("#delete-account-id").val( ids );
    $('#myModal-delete-account').modal('show');
});
</script>
<!--//data-target="#myModal-add-payment"
-->