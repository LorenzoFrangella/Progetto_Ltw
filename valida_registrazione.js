function valida_registrazione(){
        if (document.HousEscape.nome.value=="") {
        alert("Inserire nome");
        return false;
     }
    if (document.HousEscape.cognome.value=="") {
        alert("Inserire cognome");
        return false;
        }
    if (document.HousEscape.email.value=="") {
        alert("Inserire l'email");
        return false;
        }
        if (document.HousEscape.password.value=="") {
        alert("Inserire password");
        return false;
        }
        var p = document.HousEscape.password.value;
        if(p.length < 8){
            alert("la password deve contenere almeno 8 caratteri");
            return false;
        }
        if(document.HousEscape.password.value!=document.HousEscape.conferma_password.value){
            alert("le password non corrispondono");
            return false;
        }
        alert("Dati inseriti correttamente");
        return true;
        }