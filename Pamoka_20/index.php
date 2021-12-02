<!DOCTYPE html>
<html>
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/custom.css">
</head>
<body>

 <div class="container">
    <h2>Prekių forma</h2>
    <p>Suveskite pradines prekes</p>

        <div class="row">
            <div class="col-sm-9">
                <input type="text" class="form-control" onchange="(validate_elements())" id="GoodsName" placeholder="Pavadinimas" name="GoodsName">
            </div>
            <div class="col-sm-3">
                <input type="number" class="form-control" oninput ="(validate_elements())" placeholder="Kiekis" id="GoodsCount" name="GoodsCount">
            </div>
        </div>
        <button type="button" id="addToCart" disabled="disabled" onclick="myFunction(GoodsName.value,GoodsCount.value)" class="btn btn-primary mt-3">Pridėti prekę</button>

    <h2 class="mt-3">Suformuotas prekiu sarasas</h2>
    <div class="row">

                <div class="col-12" id="goods_list">
                    <table class="table" id="goods_table">
                    <thead>
                        <tr>
                            <td>Prekės pavadinimas</td>
                            <td>Kiekis</td>
                        </tr>
                    </thead>
                    </table>
                    <span id="no_goods">Prekių sąrašas tuščias...</span>
                </div>

    </div>

</div>



<script src="./js/elements.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>