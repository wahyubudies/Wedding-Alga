// Animate AOS
AOS.init();

// Count Down
let countDownDate = new Date("Dec 4, 2021 09:00:00").getTime();
let x = setInterval(function() {
  let now = new Date().getTime();
  let distance = countDownDate - now;

  let days = Math.floor(distance / (1000 * 60 * 60 * 24));
  let hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  let minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  let seconds = Math.floor((distance % (1000 * 60)) / 1000);

  // Display the result in the element with id="demo"
  document.getElementById("days-countdown").innerHTML = days;
  document.getElementById("hours-countdown").innerHTML = hours;
  document.getElementById("minutes-countdown").innerHTML = minutes;
  document.getElementById("seconds-countdown").innerHTML = seconds;
  
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("days-countdown").innerHTML = 0;
    document.getElementById("hours-countdown").innerHTML = 0;
    document.getElementById("minutes-countdown").innerHTML = 0;
    document.getElementById("seconds-countdown").innerHTML = 0;
  }
}, 1000);

// Copy to Clipboard
function copyToClipboard(id)
{
  var r = document.createRange();
  r.selectNode(document.getElementById(id));
  window.getSelection().removeAllRanges();
  window.getSelection().addRange(r);
  document.execCommand('copy');
  window.getSelection().removeAllRanges();
}

// Play Music
var myAudio = document.getElementById("myAudio");
var isPlaying = false;

function togglePlay() {
  isPlaying ? myAudio.pause() : myAudio.play();
};

myAudio.onplaying = function() {
  isPlaying = true;
};
myAudio.onpause = function() {
  isPlaying = false;
};