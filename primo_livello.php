<?php
//inizializzazione variabili di sessione
session_start();
$_SESSION['begin_game'] = true;
if(!isset($_SESSION['nickname']))
//se non hai fatto il login ti rimanda alla pagina di login
  header("Location: ./login.php");
if(isset($_SESSION['tempo_scaduto'])){
  //se il tempo è scaduto non  puoi tornare indietro e ricominciare a giocare
  if($_SESSION['tempo_scaduto'] == true){
    unset($_SESSION['tempo_scaduto']);
    header("Location: ./index.php");
  }
}
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
    <script src="./js/bootstrap.esm.js"></script>
    <script src="./js/bootstrap.bundle.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="./housescape.js"></script>
    <script src="./timer/timer.js"></script>
    <link rel="stylesheet" href="./timer/timer.css">
    <link rel="stylesheet" href="./stile.css">
    <title>HousEscape</title>
</head>
<body>
  <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <a href="./index.php" class="logo d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
          <img src="./img/exit.png" style="width:40px;">
          <h3 style="padding-top: 8px; padding-left:5px">HousEscape</h3>
        </a>
      </div>
      <div class="body_timer">
            <div id="countdown">
            <ul class="classe_ul">
              <li class="elemento"><span id="minutes">30</span></li>
              <li class="elemento duepunti"><span>:</span></li>
              <li class="elemento"><span id="seconds">00</span></li>
            </ul>
            </div>
      </div>
    </nav>
    <!-- CAROSELLO -->
    <div class="container format" >
        <div id="carouselExampleSlidesOnly" id="caro" class="carousel slide" data-bs-interval="false" data-ride="carousel">
          <div class="enigmi">
            <img src="./img/primo_enigma.jpg" id = "primo_enigma">
            <img src="./img/secondo_enigma.jpg" id = "secondo_enigma">
            <img src="./img/terzo_enigma.jpg" id = "terzo_enigma">
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <iframe id="stanza1" class="inpage" src="introduzione.php"></iframe>
            </div>
            <div class="carousel-item ">
              <iframe id="stanza2" class="inpage" src="page2.php"></iframe>
            </div>
            <div class="carousel-item ">
              <iframe id="stanza3" class="inpage" src="page3.php"></iframe>
            </div>
          </div>
        </div>
      <div class="container">
        <button class="btn btn-warning"  id="indietro" onclick="indietro()">← Indietro </button>
        <button class="btn btn-warning" id="avanti" onclick="avanti()"> Avanti → </button>
        <br/>
        <br/>
        <br/>
      </div>
    </div>
</body>
</html>