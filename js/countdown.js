// countdown
var daysE1 = document.getElementById('days');
var hoursE1 = document.getElementById('hours');
var minutesE1 = document.getElementById('minutes');
var secondsE1 = document.getElementById('seconds');

function countdownTimer(){
    const countDownDate = new Date('12/25/2023').getTime()

    const second = 1000
    const minute = second * 60
    const hour = minute * 60
    const day = hour * 24


const interval = setInterval(() => {
    // get current date
    const now = new Date().getTime()
    const distance = countDownDate - now

    daysE1.innerText = formatNumber(Math.floor(distance / day));
    hoursE1.innerText = formatNumber(Math.floor((distance % day) / hour));
    minutesE1.innerText = formatNumber(Math.floor((distance % hour) / minute));
    secondsE1.innerText = formatNumber(Math.floor((distance % minute) / second));

    //when it is time
    if(distance < 0) {
        document.getElementById('headline').innerText = "IT'S TIME NOW!";
        document.getElementById('countdown').style.display = "none";

        //stop interval
        clearInterval(interval);
        }
    }, 1000);     
}

function formatNumber(number) {
    if(number < 10) {
        return '0' + number
    }
    return number
}

//run function
countdownTimer();