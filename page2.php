
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
    <script> var solved_piano = false</script>
    <title>Document</title>
</head>
<body id="secondo">
    <div class="piano" >
        <img src="./img/img2.png" usemap="#piano" id="melodia" width="1500" height="966">
        <map name="piano">
            <area id = "area" shape="rect" alt="parte 1 immagine" coords="309,526,530,562" href="#" onclick="popup_piano();" title="piano">
            <area id = "cartello" shape="rect" coords="554,622,683,673" href="#">
        </map>
        <div class="test">
        <div class="pianoforte" style="position:absolute;z-index:9999;top:37%;left:40%;display: none;">
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
<script>
    var menu_piano = false;
    $("#area").click(function () { 
        if(!solved_piano){
        menu_piano= true;
        $("#area").css("cursor","default");
        $(".pianoforte").fadeIn(500);
        $("#close").fadeIn(500);
        $("#melodia").addClass("blur");
        $("#exit").fadeIn(500);
        $("#progress").fadeIn(500);
        }
  });
  $("#exit").click(function(){
      menu_piano = false;
    });
    $("#close").click(function () { 
    $("#area").css("cursor","pointer");
    $(".pianoforte").fadeOut(500);
    $("#close").fadeOut(500);
    $("#melodia").removeClass("blur");
    $("#exit").fadeOut(500);
    $("#progress").fadeOut(500);
    array_utente=[];
    document.getElementById("progress").value = 0;
  });


  $("#cartello").click(function(){
      if(!menu_piano){
        if(solved_piano) return;
        else if(!solved_piano){
            solved_piano=true; ///ricorda di rimettere a false successivamente questa variabile
            $("#melodia").addClass("blur");
            $(".popup_img").fadeIn(500);
            $("#esci").fadeIn(500);
        }
    }
  });

  $("#esci").click(function(){
    solved_piano=false;
    $("#melodia").removeClass("blur");
    $(".popup_img").fadeOut(500);
    $("#esci").fadeOut(500);
  });

  $("#close").click(function () { 
      menu_piano= false;
    console.log(array_utente);
    if (JSON.stringify(array_utente) === JSON.stringify(mio_array)) {
        $("#area").unbind('click').removeAttr("onclick")[0].onclick = null;
        $("#area").css("cursor","default");
        alert('Bravo! La sequenza è corretta');
        $(".pianoforte").fadeOut(500);
        $("#close").fadeOut(500);
        $("#melodia").removeClass("blur");
        $("#exit").fadeOut(500);
        $("#progress").fadeOut(500);
        solved_piano = true;
    }
    else{
        array_utente=[];
        document.getElementById("progress").value = 0;
        alert('Ritenta');
        solved_piano= false;
    }
});
  
    $(document).ready(function(e) {
        $("#melodia").rwdImageMaps();
    });
    </script>
    <script src="./giochi/piano/script.js"></script>

</body>
</html>
