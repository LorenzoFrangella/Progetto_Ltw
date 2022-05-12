<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./img/exit.png" type="image/x-icon">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./stile.css">
    <link rel="stylesheet" href="./primolivello.css">
    <title>HousEscape</title>
</head>
<body id="secondo">
    <div class="box_piano"></div>
    <div class="piano">
    <img src="./img/img2.jpg" usemap="#piano" id="melodia" width="1500" height="966">
    <map name="piano">
        <area shape="rect" style="filter:gradient(#0000,#fffff)" alt="parte 1 immagine" coords="260,546,554,558" href="./login.php" title="piano">
    </map>
    </div>
    <script>
        $(document).ready(function(e) {
            $("#melodia").rwdImageMaps();
        });
    </script>
</body>
</html>