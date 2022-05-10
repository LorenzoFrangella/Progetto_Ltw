<?php
session_start();
$_SESSION['begin_game'] = true;
if(!isset($_SESSION['nickname']))header("Location: ./login.php");
?>
<!DOCTYPE html>
<html lang="it">
<head>
    <link rel="stylesheet" href="./primolivello.css">
        <title>Document</title>
</head>
<body>
    <div class="bg" onmousemove="moveTorch(event)"></div>
    <div class="torch" ></div>
    <script>
        function moveTorch(event){
            var torch = document.getElementsByClassName("torch")[0];
            torch.style.clipPath = `circle(100px at ${event.offsetX}px ${event.offsetY}px)`;
        }
        </script>
</body>
</html>