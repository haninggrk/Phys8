const startingMinutes = 1
let time = startingMinutes*60

const countdownEl = document.getElementById('countdown')

setInterval(updateCountdown, 1000)

function updateCountdown(){
    const minutes = Math.floor(time/60)
    let seconds = time %60

    seconds = seconds < startingMinutes ? '0' + seconds: seconds
    countdownEl.innerHTML = `${minutes}:${seconds}`

    if(time>0){
        time--
    } else{
        time = 0
    }
}