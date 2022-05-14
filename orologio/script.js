function inserisci_orario(){
    var t = document.getElementById("time").value;
    var orario = t.split(":");
    var hr = orario[0];
    var min = orario[1];
    var hr_rotation = 30 * hr + min / 2; //converting current time
    var min_rotation = 6 * min;
  
    hour.style.transform = `rotate(${hr_rotation}deg)`;
    minute.style.transform = `rotate(${min_rotation}deg)`;
    if(hr=="10" && min=="10"){
        alert("orario inserito corretto");
        var hangoutBotton = document.getElementById("esci_due");
        hangoutBotton.click();
}
}