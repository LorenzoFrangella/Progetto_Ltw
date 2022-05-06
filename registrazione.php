<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="shortcut icon" href="./img/exit.png" type="image/x-icon">
    <link rel="stylesheet" href="./stile.css">
    <title>HousEscape</title>
    <script src="valida_registrazione.js" type="application/javascript"></script>    
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a href="./index.php" class="logo d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
      <img src="./img/exit.png" style="width:40px;">
      <h3 style="padding-top: 8px; padding-left:5px">HousEscape</h3>
    </a>
    </button>
</div>
</nav>
    <div class = "overlay">
        <div class = "modal">
            <button id="close-modal-btn"> Close </button>
    </div>
    <div class="spaziatura"></div>
    <div class = "container" id="form">
        <h1 id="titolo_registrati">Registrati</h1>
        <form name="HousEscape" action="ceck_registrazione.php" method="POST" id="form_registrazione" 
        action="./ceck_registrazione.php" onsubmit="return valida_registrazione()">
            <input type="text" name="reg_name" id="nome" 
             placeholder="Nome">
            <input type="text" name="reg_surn" id="cognome"
            placeholder="Cognome"><br>
            <input type="text" name="reg_nick" id="nickname" 
            placeholder="Nickname">
            <input type="email" name="email" id="email"
            placeholder="Email"><br>
            <input type="password" name="reg_pass" id="password" 
            placeholder="Password">
            <input type="password" id="conferma_password"
            placeholder="Conferma password"><br>
            <p1 class="error" id="errore">
                <?php
                if(isset($_GET["error"]) && $_GET["error"]=="alr_reg") echo "Nome utente già utilizzato"
                ?>
            </p1> <br>
            <button type="submit" id="reg" 
            name="reg" class="btn btn-warning regbtn"> Registrati</button>
        </form>
        <div style="position:relative;bottom:-20px"><p1>Hai già un account?  <span><a href="./login.php">Accedi</a></span></p1></div>
    </div>
</body>
</html>