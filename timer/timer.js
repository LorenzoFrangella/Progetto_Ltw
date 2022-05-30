
function avvia_timer(){
    const second = 1000,
            minute = second * 60,
            hour = minute * 60,
            day = hour * 24;
    
    function addHours(numOfHours, date = new Date()) {
        date.setTime(date.getTime() + numOfHours * 60 * 60 * 1000);
        
        return date;
    }
    
    let result = addHours(0.5);
        
    const countDown = new Date(result).getTime(),
    x = setInterval(function() {    
        
        const now = new Date().getTime(),
        distance = countDown - now;
        var secondi = Math.floor((distance % (minute)) / second);
        var minuti = Math.floor((distance % (hour)) / minute);
        if( secondi <10 && secondi >=0){
            secondi = "0" + secondi;
        }
        if(minuti == 29 && secondi == 0){
            alert("inserire le ore 10 e 10 all'interno dell'orologio bianco");
        }
        if(minuti == 10 && secondi == 0){
            alert("inserire questa melodia sul pianoforte: FA,MI,RE,SOL,SI");
        }
        if(minuti == 5 && secondi == 0){
            alert("inserire la parola specchio all'interno della macchina da scrivere");
        }
        if(minuti != -1 || secondi != -1){
            document.getElementById("minutes").innerText = minuti,
            document.getElementById("seconds").innerText = secondi;
        }
        
        //do something later when date is reached
<<<<<<< HEAD
        if (distance < 0) {
<<<<<<< HEAD
            8//funzione da chiamare allo scadere del tempo
=======
=======
        if (distance <= 1) {
>>>>>>> cf7ad00 (2)
            window.location.href = "./tempo_scaduto.php";
            //funzione da chiamare allo scadere del tempo
>>>>>>> 7de06ae (0)
        }
            //seconds
    }, 1000)

}