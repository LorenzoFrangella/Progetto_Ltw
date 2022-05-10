<?php
session_start();
$_SESSION['begin_game'] = true;
//decommentare solo alla fine del progetto
////////if(!isset($_SESSION['nickname']))header("Location: ./login.php");
?>
<!DOCTYPE html>
<html lang="it">
<head>
    <link rel="stylesheet" href="./primolivello.css">
        <title>Document</title>
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
    <div class="bg" onmousemove="moveTorch(event)"></div>
    <div class="torch" ></div>
    <div class= "cursor"> </div>
    <script>
        function moveTorch(event){
            var torch = document.getElementsByClassName("torch")[0];
            torch.style.clipPath = `circle(100px at ${event.offsetX}px ${event.offsetY}px)`;
        }
        </script>
    
</body>
</html>