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
    <script src="./js/bootstrap.esm.js"></script>
    <script src="./js/bootstrap.bundle.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="./housescape.js"></script>
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
    </div>
    </nav>
    <div class="container format" >
      <div id="carouselExampleSlidesOnly" id="caro" class="carousel slide" data-bs-interval="false" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <iframe id="stanza1" class="inpage" src="introduzione.php"></iframe>
          </div>
          <div class="carousel-item ">
            <iframe class="inpage" src="page2.php"></iframe>
          </div>
          <div class="carousel-item ">
            <iframe class="inpage" src="page3.php"></iframe>
          </div>
      </div>
    </div>
    <div class="container">
      <button class="btn btn-warning"  id="indietro" onclick="indietro()">← Indietro </button>
      <button class="btn btn-warning" id="avanti" onclick="avanti()"> Avanti → </button>
      <br/>
      <br/>
      <br/>
      <div class="enigmi">
        <img src="./img/primo_enigma.jpg" id = "primo_enigma">
  </div>
    </div>
    <script>
      var eventMethod = window.addEventListener
			? "addEventListener"
			: "attachEvent";
	var eventer = window[eventMethod];
	var messageEvent = eventMethod === "attachEvent"
		? "onmessage"
		: "message";

	eventer(messageEvent, function (e) {
		
		// if (e.origin !== 'http://the-trusted-iframe-origin.com') return;
		
		if (e.data === "primo_enigma" || e.message === "primo_enigma") 
      primo_enigma_risolto();
		console.log(e);
	});
      </script>
</body>
</html>