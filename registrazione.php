<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./stile.css">
    <title>HousEscape</title>
    <script src="valida_registrazione.js" type="application/javascript"></script>    
</head>
<body>
    <div class="spaziatura"></div>
    <div class = "container" id="form">
        <h1 id="titolo_registrati">Registrati</h1>
        <form name="HousEscape" action="ceck_registrazione.php" method="POST" id="form_registrazione" 
        action="./ceck_registrazione.php" onsubmit="return valida_registrazione()">
            <input type="text" name="reg_name" id="nome" value="test"
             placeholder="inserire nome">
            <input type="text" name="reg_surn" id="cognome" value="test"
            placeholder="inserire cognome"><br>
            <input type="text" name="reg_nick" id="nickname" value="test"
            placeholder="inserire nickname">
            <input type="email" name="email" id="email" value="mail@test.com"
            placeholder="inserire email"><br>
            <input type="password" name="reg_pass" id="password" value="12345678"
            placeholder="inserire password">
            <input type="password" id="conferma_password" value="12345678"
            placeholder="conferma password"><br>
            <button type="submit" id="reg" 
            name="reg" class="btn btn-warning"> Registrati</button>
        </form>
    </div>
</body>
</html>