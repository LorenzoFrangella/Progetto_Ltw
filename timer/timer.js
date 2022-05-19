
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
        if(minuti != -1 || secondi != -1){
            document.getElementById("minutes").innerText = minuti,
            document.getElementById("seconds").innerText = secondi;
        }
        
        //do something later when date is reached
        if (distance <= 1) {
            window.location.href = "./tempo_scaduto.php";
            //funzione da chiamare allo scadere del tempo
        }
            //seconds
    }, 1000)

}