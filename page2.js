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
      $("#area").css("cursor","pointer");
    $(".pianoforte").fadeOut(500);
    $("#close").fadeOut(500);
    $("#melodia").removeClass("blur");
    $("#exit").fadeOut(500);
    $("#progress").fadeOut(500);
    document.getElementById("progress").value = 0;
    });
    $("#close").click(function () { 
    $("#area").css("cursor","pointer");
    $(".pianoforte").fadeOut(500);
    $("#close").fadeOut(500);
    $("#melodia").removeClass("blur");
    $("#exit").fadeOut(500);
    $("#progress").fadeOut(500);
    document.getElementById("progress").value = 0;
});

$("#cartello").click(function(){
    if(menu_piano) return;
    if(solved_piano) return;
    solved_piano=true; ///ricorda di rimettere a false successivamente questa variabile
    $("#melodia").addClass("blur");
    $(".popup_img").fadeIn(500);
    $("#esci").fadeIn(500);
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
        parent.postMessage("secondo_enigma","*");
        array_utente=[];
        alert('Bravo! La sequenza è corretta');
        suono_passed.play();
        $("#area").unbind('click').removeAttr("onclick")[0].onclick = null;
        $("#area").css("cursor","default");
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