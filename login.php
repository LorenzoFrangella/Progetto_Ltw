<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./stile.css">
    <link rel="shortcut icon" href="./img/exit.png" type="image/x-icon">
    <title>HousEscape</title>
    <script src="valida_login.js" type="application/javascript"></script>    
</head>
<body></body>
    <div class="spaziatura"></div>
    <div class = "container" id="formlogin">
        <h1 id="titolo_accedi">Accedi</h1>
        <form name="HousEscape_1" action="./check_login.php" method="POST" id="form_login" onsubmit="return valida_login()">
            <input type="text" id="nick_email" name = "nick_email" placeholder="Nickname o Email">
            <input type="password" id="password" name="password" placeholder="Password"><br/>
            <button type="submit" id="log" name ="log" class="btn btn-warning"> Accedi</button>
        </form>
    </div>
</body>
</html>