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
    <h2>Parkių forma</h2>
    <p>Suveskite pradines prekes</p>

        <div class="row">
            <div class="col-sm-9">
                <input type="text" class="form-control" id="GoodsName" placeholder="Pavadinimas" name="GoodsName">
            </div>
            <div class="col-sm-3">
                <input type="number" class="form-control" placeholder="Kiekis" id="GoodsCount" name="GoodsCount">
            </div>
        </div>
        <button type="button" onclick="myFunction(GoodsName.value,GoodsCount.value)" class="btn btn-primary mt-3">Submit</button>

    <h2 class="mt-3">Suformuotas prekiu sarasas</h2>
    <div class="row">
            <form method="get">
                <div class="col-sm-12" id="goods_list">
                    <span id="no_goods">Prekių sąrašas tuščias...</span>
                </div>
            </form>
    </div>

</div>



<script src="./js/elements.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>