function valida_login(){    
    var email = document.getElementById("nick_email").value;
    if(email == ""){
        nick_email.focus();
        document.getElementById("errore_login").innerHTML = "Inserire l'email o il nickname";
        return false;
    }
    var password = document.getElementById("password").value;
    if(password == ""){
        document.getElementById("password").focus();
        document.getElementById("errore_login").innerHTML = "Inserire la password";
        return false;
    }
    return true;
}