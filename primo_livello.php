<?php
session_start();
$_SESSION['begin_game'] = true;
//if(!isset($_SESSION['nickname']))header("Location: ./login.php");
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
    <title>HousEscape</title>
</head>
<body>
<div class="image" onmousemove="moveTorch(event)">
    <img src="./img/casa_quattro.jpg">
  <div class="torch"></div>
</div>
<script>
    function moveTorch(event){
  var torch = document.getElementsByClassName("torch")[0];
  torch.style.clipPath = `circle(80px at ${event.offsetX}px ${event.offsetY}px)`;
}
</script>

</body>
</html>