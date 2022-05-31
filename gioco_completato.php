<?php 
    session_start();
    $totale_secondi = $_COOKIE['total_sec'];
    $minuti = $_COOKIE['minuti'];
    $secondi = $_COOKIE['secondi'];
    unset($_COOKIE['total_sec']);
    unset($_COOKIE['minuti']);
    unset($_COOKIE['secondi']);
    $stampa = false;
    $nickname = $_SESSION['nickname'];
    /*$dbconn = pg_connect("host=localhost port=5432 dbname=HousEscape user=postgres password=biar") or die('Could not connect: ' . pg_last_error());*/
    $dbconn = pg_connect("host=ec2-52-18-116-67.eu-west-1.compute.amazonaws.com port=5432 dbname=d4bkh2i9corr5n 
    user=bfknyktpivqfnf password=77b57797fef1f71d2a56428d3460620c69aaf2fe90fc17b935b507c95576ce82")
    or die('Could not connect: ' . pg_last_error()); 
    /*$dbconn = pg_connect("host=localhost port=5432 dbname=HousEscape user=postgres password=biar")
        or die('Could not connect: ' . pg_last_error());*/
    if($dbconn){
        $check = "select nickname from classifica where nickname = $1";
        $data = pg_query_params($dbconn,$check,array($nickname));
        $num_risultati = pg_num_rows($data);
            if($num_risultati!=1){ 
              $q2 = "insert into classifica values($1,$2,$3,$4)";
              $result = pg_query_params($dbconn,$q2,array($nickname,$minuti,$secondi,$totale_secondi));
            }
            else{
              $stampa = true;
            }
    }

?>
<!DOCTYPE html>
<html lang="it">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../stile.css">
    <script src="../js/bootstrap.bundle.js"></script>
    <script src="../js/bootstrap.esm.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <title>HouseEscape</title>
    <link rel="icon" href="../img/exit.png">
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
    <div class="container" style="text-align:center">
    <h1 class="titolo animated bounceInDown" style="text-align:center; height:300px">Complimenti!</h1> <br>
    <br>
    <h2 class="animated zoomIn">Congratulazioni, sei riuscito ad uscire in : <?php echo $minuti;?> minuti e <?php echo $secondi;?> secondi</h2>  
    <br>
    <p style="color:white;">Vai a vedere la <a href="./classifica.php">Classifica</a> Per scoprire se sei stato tra i più veloci</p>
    <br>
    <br>
    <?php
    if($stampa) echo '<p style="color:white;">Attenzione, i tentativi successivi al primo non verranno inseriti in classifica.</p>';
    ?>
    </div>
</body>
</html>