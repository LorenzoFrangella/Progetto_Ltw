
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
<body id="secondo">
   
<div class="box_piano" ></div>
<div class="torch" >
    <img src="./img/img2.png" usemap="#piano" id="melodia" width="1500" height="966">
    <map name="piano">
        <area shape="rect" alt="parte 1 immagine" coords="309,526,530,562" href="#" onclick="illuminastanza();" title="interruttore">
    </map>
</div>
    <script>
        $(document).ready(function(e) {
            $("#melodia").rwdImageMaps();
        });
        window.onmessage = function(e) {
            if (e.data == 'rimuovifiltro') {
                popup_close();
            }
        };
    </script>

</body>
</html>
