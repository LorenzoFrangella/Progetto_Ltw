<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="primolivello.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="./js/jquery.rwdImageMaps.js"></script>
    <script src="./housescape.js"></script>
    <title>Document</title>
</head>
<body id="primo">
   
<div class="bg" onmousemove="moveTorch(event)"></div>
<div class="torch" >
    <img src="./img/casa_quattro.png" usemap="#interruttore" id="luce" width="1360" height="765">
    <map name="interruttore">
        <area shape="rect" alt="parte 1 immagine" coords="93,238,127,282" href="#" onclick="illuminastanza();" title="interruttore">
        <area shape="rect" alt="parte 2 immagine" coords="42,643,125,680" href="#" onclick="javascript:popup();" title="interruttore">
    </map>
</div>
    <script>
        $(document).ready(function(e) {
            $("#luce").rwdImageMaps();
        });
        window.onmessage = function(e) {
            if (e.data == 'rimuovifiltro') {
                popup_close();
            }
        };
    </script>

</body>
</html>
