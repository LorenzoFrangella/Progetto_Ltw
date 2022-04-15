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
        <form name="HousEscape" action="" method="post" id="form_registrazione" onsubmit="return valida_registrazione()">
            <input type="text" id="nome" placeholder="inserire nome">
            <input type="text" id="cognome" placeholder="inserire cognome"><br>
            <input type="text" id="nickname" placeholder="inserire nickname">
            <input type="email" id="email" placeholder="inserire email"><br>
            <input type="password" id="password" placeholder="inserire password">
            <input type="password" id="conferma_password" placeholder="conferma password"><br>
            <button type="submit" id="reg" class="btn btn-warning"> Registrati</button>
        </form>
    </div>
</body>
</html>