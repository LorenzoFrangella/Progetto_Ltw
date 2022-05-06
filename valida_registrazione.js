function valida_registrazione(){
    document.getElementById("errore").innerHTML="";
    var debug = true;
        if (document.HousEscape.nome.value=="") {
        //if(debug)alert("Inserire nome");
        document.HousEscape.nome.focus();
        document.getElementById("errore").innerHTML="Inserire nome";
        return false;
     }
    if (document.HousEscape.cognome.value=="") {
        //if(debug)alert("Inserire cognome");
        cognome = document.getElementById("cognome");
        cognome.focus();
        document.getElementById("errore").innerHTML = "Inserire cognome";
        return false;
        }
    if (document.HousEscape.email.value=="") {
        //if(debug)alert("Inserire l'email");
        document.HousEscape.email.focus();
        document.getElementById("errore").innerHTML = "Inserire l'email";
        return false;
        }
    if (document.HousEscape.nickname.value=="") {
        //if(debug)alert("Inserire nickname");
        document.HousEscape.nickname.focus();
        document.getElementById("errore").innerHTML = "Inserire nickname";
        return false;
        }
    var n = document.HousEscape.nickname.value;
    if(n.length < 2 || n.length > 20){
            if(debug)alert("il nickname deve contenere da 2 a 20 caratteri");
            return false;
        }
    if (document.HousEscape.password.value=="") {
        //if(debug)alert("Inserire password");
        document.HousEscape.password.focus();
        document.getElementById("errore").innerHTML = "Inserire password";
        return false;
    }
    var p = document.HousEscape.password.value;
    if(p.length < 8){
        if(debug)alert("la password deve contenere almeno 8 caratteri");
        return false;
    }
    if(document.HousEscape.password.value!=document.HousEscape.conferma_password.value){
        if(debug)alert("le password non corrispondono");
        return false;
    }
        /*var a,b,c,d,e,f;
        a = document.HousEscape.cognome.value;
        b = document.HousEscape.nome.value;
        c = document.HousEscape.nickname.value;
        d = document.HousEscape.email.value;
        e = document.HousEscape.password.value;

        function inserisci_utente(a,b,c,d,e){
            
        }*/
        //alert("Dati inseriti correttamente");
        return true;
        }