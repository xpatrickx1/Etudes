
const watch = document.querySelector('#watch');
let milliseconds = 0;
let timer;

function startWatch() {
    watch.classList.remove('paused');
    clearInterval(timer);
    timer = setInterval(()=>{ 
        milliseconds += 10;
        let dateTimer = new Date(milliseconds);
        watch.innerHTML = 
      ('0'+dateTimer.getUTCMinutes()).slice(-2) + ' : ' +
      ('0'+dateTimer.getUTCSeconds()).slice(-2) + ' : ' +
      ('0'+dateTimer.getUTCMilliseconds()).slice(-3,-1) +
      ('0'+dateTimer.getUTCMilliseconds()).slice(-2,-1);
    },10);
};

startWatch();