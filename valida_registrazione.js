function validaRegistazione(){
    if (document.HousEscape.cognome.value=="") {
        alert("Inserire cognome");
        return false;
        }
        if (document.HousEscape.nome.value=="") {
        alert("Inserire nome");
        return false;
        }
        if (document.HousEscape.email.value=="") {
        alert("Selezionare una regione");
        return false;
        }
        if (document.HousEscape.password.value=="") {
        alert("Inserire password");
        return false;
        }
        var p = document.HousEscape.password.value;
        if(p.length() < 8){
            alert("la password deve contenere almeno 8 caratteri");
            return false;
        }
        alert("Dati inseriti correttamente");
        return true;
        }