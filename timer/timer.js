
function avvia_timer(){
    const second = 1000,
            minute = second * 60,
            hour = minute * 60,
            day = hour * 24;
    
    function addHours(numOfHours, date = new Date()) {
        date.setTime(date.getTime() + numOfHours * 60 * 60 * 1000);
        
        return date;
    }
    
    let result = addHours(0.005);
        
    const countDown = new Date(result).getTime(),
    x = setInterval(function() {    
        
        const now = new Date().getTime(),
        distance = countDown - now;
        document.getElementById("minutes").innerText = Math.floor((distance % (hour)) / (minute)),
        document.getElementById("seconds").innerText = Math.floor((distance % (minute)) / second);
        
        //do something later when date is reached
        if (distance < 0) {
<<<<<<< HEAD
            8//funzione da chiamare allo scadere del tempo
=======
            window.location.href = "./tempo_scaduto.php";
            //funzione da chiamare allo scadere del tempo
>>>>>>> 7de06ae (0)
        }
            //seconds
    }, 100)

}