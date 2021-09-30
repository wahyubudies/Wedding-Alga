// Count Down
let countDownDate = new Date("Nov 28, 2021 13:00:00").getTime();
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
let buttonPlay = document.querySelector('.material-icons');
let audioMusic = document.querySelector('#audioMusic');

function playMusic(){
  if(buttonPlay.innerHTML === 'pause_circle'){
    buttonPlay.innerHTML = 'play_circle';
    audioMusic.pause();
  }else{
    buttonPlay.innerHTML = 'pause_circle';
    audioMusic.play();
  }
}

// Slide Up Cover
function slideUp(){
  goSlide(document.querySelector('.cover'), 1000);
  document.getElementsByTagName('BODY')[0].classList.add('overflow-auto');
  audioMusic.play();

  // Animate AOS
  AOS.init();
}

// Slide Animation
function goSlide(target, duration=500){
  target.style.transitionProperty = 'height, margin, padding';
  target.style.transitionDuration = duration + 'ms';
  target.style.boxSizing = 'border-box';
  target.style.height = target.offsetHeight + 'px';
  target.offsetHeight;
  target.style.overflow = 'hidden';
  target.style.height = 0;
  target.style.paddingTop = 0;
  target.style.paddingBottom = 0;
  target.style.marginTop = 0;
  target.style.marginBottom = 0;
  window.setTimeout( () => {
        target.style.display = 'none';
        target.style.removeProperty('height');
        target.style.removeProperty('padding-top');
        target.style.removeProperty('padding-bottom');
        target.style.removeProperty('margin-top');
        target.style.removeProperty('margin-bottom');
        target.style.removeProperty('overflow');
        target.style.removeProperty('transition-duration');
        target.style.removeProperty('transition-property');
  }, duration);
}

// Slider Gallery
document.addEventListener( 'DOMContentLoaded', function () {
	var secondarySlider = new Splide( '#secondary-slider', {
		fixedWidth  : 100,
		height      : 60,
		gap         : 10,
		cover       : true,
		isNavigation: true,
		focus       : 'center',
    pagination: false,
		breakpoints : {
			'600': {
				fixedWidth: 66,
				height    : 40,
			}
		},
	} ).mount();

  var primarySlider = new Splide( '#primary-slider', {
		type       : 'fade',
		heightRatio: 1,
		pagination : false,
		arrows     : false,
		cover      : true,
    autoplay: true,
    rewind : true,
	} );
	
	primarySlider.sync( secondarySlider ).mount();
} );