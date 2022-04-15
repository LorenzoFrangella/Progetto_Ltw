<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./stile.css">
    <title>HousEscape</title>
    <script src="valida_registrazione.js" type="application/javascript"> </script>
        
</head>
<body>
    <div class="spaziatura"></div>
    <div class = "container" id="form">
        <h1 id="titolo_registrati">Registrati</h1>
        <form action="" method="post" id="form_registrazione" onsubmit="validaRegistrazione()">
            <input type="text" id="nome" placeholder="inserire nome">
            <input type="text" id="cognome" placeholder="inserire cognome"><br>
            <input type="email" id="email" placeholder="inserire email">
            <input type="password" id="password" placeholder="inserire password"><br>
            data di nascita:<input type="date" id="birthday"><br>
            <button type="submit" id="reg" class="btn btn-warning"> Registrati</button>
        </form>
    </div>
</body>
</html>