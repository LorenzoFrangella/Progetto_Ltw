function valida_login(){    
    var email = document.getElementById("nick_email").value;
    if(email == ""){
        alert("Inserire Email o Nickname");
        return false;
    }
    var password = document.getElementById("password").value;
    if(password == ""){
        alert("Inserire la password");
        return false;
    }
    return true;
}