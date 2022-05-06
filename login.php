<?php 
session_start();
$errore=  0 ?>
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
    <script src="./valida_login.js" type="application/javascript"></script>    
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
    <div class="spaziatura"></div>
    <div class = "container" id="formlogin">
        <h1 id="titolo_accedi">Accedi</h1>
        <form name="HousEscape_1" action="./check_login.php" method="POST" id="form_login" onsubmit="return valida_login()">
            <input type="text" id="nick_email" name = "nick_email" placeholder="Nickname o Email">
            <input type="password" id="password" name="password" placeholder="Password"><br/>

            <button type="submit" id="log" name ="log" class="btn btn-warning"> Accedi</button><br>
            <p1 class = "error-message"><?php if($errore==1){echo "user not found";}?></p1>
            <div style="position:relative;bottom:-20px;color:red">
            <?php 
            if(isset($_GET['error']) && $_GET['error']=='error_username_or_pass' ) echo"<p1>Nome Utente o Password Errati!</p1>";
            if(isset($_GET['error']) && $_GET['error']=='usr_not_found' ) echo" <p1>Utente non trovato!</p1>";
            ?>

            </div>
            <div style="position:relative;bottom:-30px"><p1> Non hai un account? <span><a href="./registrazione.php">Registrati</a></span></p1></div>
        </form>
    </div>
</body>
</html>