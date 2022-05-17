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
    <script> var solved_piano = false;</script>
    <title>HousEscape</title>
</head>
<body id="secondo">
    <div class="piano" >
        <img src="./img/img2.png" usemap="#piano" id="melodia" width="1500" height="966">
        <map name="piano">
            <area id = "area" shape="rect" alt="parte 1 immagine" coords="309,526,530,562" href="#" onclick="" title="piano">
            <area id = "cartello" shape="rect" coords="554,622,683,673" href="#">
        </map>
        <div class="test">
        <div class="pianoforte" style="position:absolute;z-index:9999;display: none;">
        <button class="white-key C4-key" onclick="array_utente.push('Do');incrementa()">Do</button>
        <button class="black-key Db4-key"></button>
        <button class="white-key D4-key" onclick="array_utente.push('Re');incrementa()">Re</button>
        <button class="black-key Eb4-key"></button>
        <button class="white-key E4-key" onclick="array_utente.push('Mi');incrementa()">Mi</button>
        <button class="white-key F4-key" onclick="array_utente.push('Fa');incrementa()">Fa</button>
        <button class="black-key Gb4-key"></button>
        <button class="white-key G4-key" onclick="array_utente.push('Sol');incrementa()">Sol</button>
        <button class="black-key Ab4-key"></button>
        <button class="white-key A4-key" onclick="array_utente.push('La');incrementa()">La</button>
        <button class="black-key Bb4-key"></button>
        <button class="white-key B4-key" onclick="array_utente.push('Si');incrementa()">Si</button>
</br>
        </div>
    </div>
<p id="close">Invia la tua soluzione!</p>
<p class="exit" id="exit">Esci</p>
<input type="text" id="progress" value="0"/>
<p class="exit" id="esci"> Esci</p>
<img src="./img/melodia.png" class = "popup_img">
</div>
<script src="page2.js"></script>
    <script src="./giochi/piano/script.js"></script>

</body>
</html>
