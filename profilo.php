<?php
    session_start();
    if(!isset($_SESSION['nickname']))
        header("Location: ./login.php");
    else {
        /*$dbconn = pg_connect("host=localhost port=5432 dbname=HousEscape user=postgres password=biar") or die('Could not connect: ' . pg_last_error());*/
        
        $dbconn = pg_connect("host=ec2-52-18-116-67.eu-west-1.compute.amazonaws.com port=5432 dbname=d4bkh2i9corr5n 
        user=bfknyktpivqfnf password=77b57797fef1f71d2a56428d3460620c69aaf2fe90fc17b935b507c95576ce82")
                or die('Could not connect: ' . pg_last_error()); 
        /*$dbconn = pg_connect("host=localhost port=5432 dbname=HousEscape user=postgres password=biar")
        or die('Could not connect: ' . pg_last_error());*/
        if ($dbconn) {
            $nickname = $_SESSION['nickname'];
            $q1= "select * from utente where nickname = $1";
            $result = pg_query_params($dbconn, $q1, array($nickname));
            $row = pg_fetch_row($result);
            $nome = $row[0];
            $cognome = $row[1];
            $email = $row[3];
            }
    }
    
?>
<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./img/exit.png" type="image/x-icon">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./stile.css"> 
    <link rel="stylesheet" href="./profilo.css"> 
    <title>HousEscape</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <a href="./index.php" class="logo d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
          <img src="./img/exit.png" style="width:40px;">
          <h3 style="padding-top: 8px; padding-left:5px">HousEscape</h3>
        </a>
      </div>
    </nav>
    <div class="container pagina_profilo">
        <h1>Profilo</h1>
        <div class="row">
            <div class="col-3"><img src="./img/logo_utente.png" class="logo_profilo"></div>
            <div class="col-8">
                <ul class="dati_utente">
                    <li><p class="info_account">Username: <?php echo $nickname?></p></li>
                    <li><p class="info_account">Nome: <?php echo $nome   ?></p></li>
                    <li><p class="info_account">Cognome: <?php echo $cognome  ?></p></li>
                    <li><p class="info_account">Email: <?php  echo $email ?></p></li>
                </ul>
            </div>
        </div>

    </div>
</body>
</html>