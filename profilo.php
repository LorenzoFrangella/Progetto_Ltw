<?php
    session_start();
    if(!isset($_SESSION['nickname']))
        header("Location: ./login.php");
    else {
        $dbconn = pg_connect("host=localhost port=5432 dbname=HousEscape user=postgres password=biar") 
            or die('Could not connect: ' . pg_last_error()); //questo va levato!!!
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
    <div class="container">
        <img src="./img/logo_utente.jpg" class="logo">
        

    </div>
</body>
</html>