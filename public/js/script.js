// Count Down

var countDownDate = new Date("Dec 4, 2021 09:00:00").getTime();
var x = setInterval(function() {
  var now = new Date().getTime();
  var distance = countDownDate - now;

  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

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