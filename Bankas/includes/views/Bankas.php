<?php

class Bankas {

    public function show_accounts_data()
     {
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
                                            <th class="text-center">Asmens kodas</th>
                                            <th class="text-center">Sąskaitos nr.</th>
                                            <th class="text-center">Turimos lėšos</th>
                                            <th class="text-center filter-false sorter-false">&nbsp;</th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-center">


                                        <?php

                                        /*if(isset($_SESSION['accounts'])) :
                                            if (count($_SESSION['accounts']) !== 0) :*/
                                            $data_load = new Datadb();
                                            $data = $data_load->test_data_exist();

                                                foreach($data as $id => $value):
                                                   // print_r($value);
                                            ?>
                                                <tr>
                                                    <td><?php echo $id+1; ?></td>
                                                    <td><?php echo $value['name'] . ', ' . $value['lname']; ?></td>
                                                    <td><?php echo $value['personal_code']; ?></td>
                                                    <td><?php echo $value['account_nr']; ?></td>
                                                    <td><?php echo $value['resources']; ?></td>
                                                    <td class="text-center">
                                                        <a class="btn btn-success" onclick="edit_account_modal(<?php echo $id; ?>)" id="add-account" role="button" style="margin: 2px;" data-toggle="modal"><i class="far fa-edit"></i></a>
                                                        <a class="btn btn-success" onclick="get_payment_modal(<?php echo $id; ?>)" id="get-payment" role="button" style="margin: 2px;" data-toggle="modal"><i class="fas fa-arrow-down"></i></a>
                                                        <a class="btn btn-primary" onclick="make_payment_modal(<?php echo $id; ?>)" id="make-payment" role="button" style="margin: 2px;" data-toggle="modal" data-id="<?php echo $id; ?>"><i class="fas fa-arrow-up"></i></a>
                                                    <?php if ($value['resources'] == 0) : ?>
                                                        <a class="btn btn-danger" onclick="delete_account_modal(<?php echo $id; ?>)"id="delete-account" role="button" style="margin: 2px;"  data-toggle="modal" data-id="<?php echo $id; ?>"><i class="fas fa-trash"></i></a>
                                                    <?php endif; ?>
                                                    </td>
                                                </tr>
                                            <?php
                                                endforeach;
                                        /*    endif;
                                         endif; */ ?>

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
    }
}