<?php 
    $totale_secondi = $_COOKIE['total_sec'];
    $minuti = $_COOKIE['minuti'];
    $secondi = $_COOKIE['secondi'];
    unset($_COOKIE['total_sec']);
    unset($_COOKIE['minuti']);
    unset($_COOKIE['secondi']);
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
    <div class="container" style="text-align:center">
    <h1 class="titolo animated bounceInDown" style="text-align:center; height:300px">Complimenti!</h1> <br>
    <h2>Congratulazioni, sei riuscito ad uscire in : <?php echo $minuti;?> minuti e <?php echo $secondi;?> secondi</h2>   
    <p style="color:white;">Vai a vedere la <a href="./classifica.php">Classifica</a> Per scoprire se sei stato tra i più veloci</p>
    </div>
</body>
</html>