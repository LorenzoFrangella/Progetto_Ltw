
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="giochi/piano/style.css">
    <link rel="stylesheet" href="primolivello.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="./js/jquery.rwdImageMaps.js"></script>
    <script src="./housescape.js"></script>
    <title>Document</title>
</head>
<body id="secondo">
    <div class="piano" >
        <img src="./img/img2.png" usemap="#piano" id="melodia" width="1500" height="966">
        <map name="piano">
            <area id = "area" shape="rect" alt="parte 1 immagine" coords="309,526,530,562" href="#" onclick="popup_piano();" title="piano">
        </map>

        <div class="pianoforte" style="position:absolute;z-index:9999;top:30%;left:30%;display: none;">
        <button class="white-key C4-key" onclick="array_utente.push('Do')">Do</button>
        <button class="black-key Db4-key"></button>
        <button class="white-key D4-key" onclick="array_utente.push('Re')">Re</button>
        <button class="black-key Eb4-key"></button>
        <button class="white-key E4-key" onclick="array_utente.push('Mi')">Mi</button>
        <button class="white-key F4-key" onclick="array_utente.push('Fa')">Fa</button>
      <button class="black-key Gb4-key"></button>
      <button class="white-key G4-key" onclick="array_utente.push('Sol')">Sol</button>
      <button class="black-key Ab4-key"></button>
      <button class="white-key A4-key" onclick="array_utente.push('La')">La</button>
      <button class="black-key Bb4-key"></button>
      <button class="white-key B4-key" onclick="array_utente.push('Si')">Si</button>
</br>
</div>
<p id="close">Invia la tua soluzione!</p>
</div>
<script>
    $("#area").click(function () { 
        $(".pianoforte").fadeIn(500);
        $("#close").fadeIn(500);
        $("#melodia").addClass("blur");
  });
  $("#close").click(function () { 
    $(".pianoforte").fadeOut(500);
    $("#close").fadeOut(500);
    $("#melodia").removeClass("blur");
    console.log(array_utente);
    if (JSON.stringify(array_utente) === JSON.stringify(mio_array)) {
        $("#area").unbind('click').removeAttr("onclick")[0].onclick = null;
        $("#area").css("cursor","default");
        alert('Bravo! La sequenza è corretta');
        return true;
    }
    else{
        array_utente=[];
        alert('Ritenta');
        return false;
    }
});
  
    $(document).ready(function(e) {
        $("#melodia").rwdImageMaps();
    });
    </script>
    <script src="./giochi/piano/script.js"></script>

</body>
</html>
