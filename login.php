<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./stile.css">
    <title>HousEscape</title>
    <script src="valida_login.js" type="application/javascript"></script>    
</head>
<body>
    <div class="spaziatura"></div>
    <div class = "container" id="form">
        <h1 id="titolo_accedi">Accedi</h1>
        <form name="HousEscape_1" action="" method="post" id="form_login" onsubmit="return valida_login()">
            <input type="text" id="nick_email" placeholder="inserire nickname o email">
            <input type="password" id="password" placeholder="inserire password"><br>
            <button type="submit" id="reg" class="btn btn-warning"> Accedi</button>
        </form>
    </div>
</body>
</html>