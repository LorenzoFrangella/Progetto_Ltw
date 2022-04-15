function valida_registrazione(){
if (document.HousEscape.nick_email.value=="") {
    alert("Inserire l'email");
    return false;
    }
    if (document.HousEscape.password.value=="") {
    alert("Inserire password");
    return false;
    }
    var x,y;
    x = document.HousEscape.nick_email.value;
    y = document.HousEscape.password.value;
    function verifica_utente(x,y){}
}