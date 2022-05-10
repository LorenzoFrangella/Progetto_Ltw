<?php
session_start();
$_SESSION['begin_game'] = true;
//decommentare solo alla fine del progetto
////////if(!isset($_SESSION['nickname']))header("Location: ./login.php");
?>
<!DOCTYPE html>
<html lang="it">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./img/exit.png" type="image/x-icon">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./stile.css">
    <title>HousEscape</title>
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
    <div class="container format" >
        <iframe class="inpage" src="page1.php" frameborder="0"></iframe>
    </div>
    
</body>
</html>