<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</head>
<body>
<script>
$.ajax({
    type: "POST",
    url: "./includes/classes/add_account.php"
        }).done(function( resp ) {
            alert(resp);
    });
</script>
</body>
</html>
