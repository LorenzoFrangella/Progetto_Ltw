<?php 
//Inizializzazione delle variabili di sessione
session_start();
//unset di begin game viene eseguito per evitare che l'utente una volta fatto l'accesso venga reindirizzato subito alla partita
unset($_SESSION['begin_game']);
//gestione del logout tramite variabili di sessione
if (isset($_GET['logout'])){
  session_unset();
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
    <!-- Importazione delle librerie necessarie tra cui bootstrap e jquery-->
    <!-- -->
    <script src="../js/bootstrap.bundle.js"></script>
    <script src="../js/bootstrap.esm.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <title>HouseEscape</title>
    <link rel="icon" href="../img/exit.png">
</head>
<body>
  <!-- Navabar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a href="/" class="logo d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
      <img src="../img/exit.png" style="width:40px;">
      <h3 style="padding-top: 8px; padding-left:5px">HousEscape</h3>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0" style="padding-top:10px; padding-left:5px">
            <li><a href="#" id="home" class="acti nav-link px-2 text-white">Home</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0" style="padding-top:10px; padding-left:5px">
            <li><a href="#chi_siamo" class="acti nav-link px-2 text-white">Contatti</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0" style="padding-top:10px; padding-left:5px">
            <li><a href="../classifica.php" id="classifica" class="acti nav-link px-2 text-white">Classifica</a></li>
          </ul>
        </li>
      </ul>
      <form class="d-flex">

      <?php 
      //Questa parte di codice permette la visualizzazione dei pulsanti accedi e registrati solo se l'utente non è loggato
      //altrimenti visualizza il menù a tendina che contiene nome, profilo e tasto logout
      if(!isset($_SESSION['nickname'])){
          echo "<div class='text-end fondo_nav'>
            <a href='../login.php'><button type='button' class='btn btn-outline-light me-2'>Accedi</button></a>
            <a href='../registrazione.php'><button type='button' class='btn btn-warning'>Registrati</button></a>
          </div>";
      }
      else if(isset($_SESSION['nickname'])){ 
          echo '<div class="dropdown fondo_nav">
            <button class="btn btn-warning dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <p1 class="nomeutente">'.$_SESSION['nickname'].'</p1>
              <img src="../img/logo_utente.jpg" style="width: 35px; border-radius:50%">
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" href="../profilo.php">Profilo</a>
              <a class="dropdown-item"  href="../index.php?logout=true">Esci</a>
            </div>';
      }
      ?>
      </form>
    </div>
  </div>
  </nav>
  <div class="container" style="text-align:center;height:600px;"><h1 class="titolo animated bounceInDown">Sei pronto a metterti in gioco?</h1> <br>
    <div class="container"><h2>Divertiti e mettiti alla prova con HousEscape! <br>
      Immergiti in un'avventura stile escape room e attraverso enigmi, giochi di ingegno, rompicapi e indovinelli dovrai trovare il percorso per uscire dalla casa.
      <br>
      <br>
      <br>
      <br>
      <div style="text-align:center"><i>COME SI GIOCA?</i>
        <br>
        <br>1-Se hai già un account effettua il login, altrimenti effettua la registrazione. <br>
        <br>2-Entra nella casa e trova l'uscita, attenzione però non sarà tutto così semplice...Guardati bene attorno! <br>
        <br>3-Divertiti!</h2>
      </div>
      <div style="text-align:center"><a href='../primo_livello.php'><button type='button' id='inizia_a_giocare' class='btn btn-warning bottone_home'><b>Inizia a giocare!</b></button></div>
    </div>
    <br>
    <br>
    <br>
    </a>
    <br>
    <br>
    <br>
    <br>
  </div>
  <div class="container" style="margin-top:100px;" id="chi_siamo"> </div>
  <br/>
  <br/>
  <br>
  <br>
  <br>
  <br>
<!-- footer -->
<footer class="bg-dark text-center text-white" id="fondo_pagina">
  <div class="container p-5" id="container_fondo">
    <section class="mb-4">
      <p>
        <a href="https://github.com/LorenzoFrangella/Progetto_Ltw.git">Link</a> Alla repository GitHub di HousEscape.
      </p>
    </section>
    <section class="mb-4">
      <h3>I nostri contatti</h3>
      <ul class="lista_contatti">
        <li><p><img src="../img/email.png" style="width:20px;">laudati.1894372@studenti.uniroma1.it</p></li>
        <li><p><img src="../img/email.png" style="width:20px;">mastrandrea.1892793@studenti.uniroma1.it </p></li>
        <li><p><img src="../img/email.png" style="width:20px;">frangella.1899674@studenti.uniroma1.it </p></li>
      </ul>
    </section>
  </div>
  

  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">Progetto di Linguaggi e Tecnologie per il Web
  </div>
</footer>
</body>
</html>



