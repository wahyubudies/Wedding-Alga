<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Wildan & Lia's Wedding</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css" integrity="sha512-P5MgMn1jBN01asBgU0z60Qk4QxiXo86+wlFahKrsQf37c9cro517WzVSPPV1tDKzhku2iJ2FVgL67wG03SGnNA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12">
        <header class="d-flex justify-content-center align-items-center">
          <div class="header-flower-top"></div>
          <div class="content text-center">
            <p>The Wedding of</p>
            <h2>
              Wildan & Lia
            </h2>
            <img src="{{ asset('img/header-flower-circle.png') }}" alt="">
            <h4>Countdown Timer</h4>
            <p>Our wedding will take place on</p>
            <p class="mt-4"><b>Mon, 4 Dec 2021</b></p>
            <div class="row">
              <div class="col-3">
                <div class="box text-center text-white">
                  <p class="mb-0" id="days-countdown">0</p>
                  <p class="mb-0">Days</p>
                </div>
              </div>
              <div class="col-3">
                <div class="box text-center text-white">
                  <p class="mb-0" id="hours-countdown">0</p>
                  <p class="mb-0">Hours</p>
                </div>
              </div>
              <div class="col-3">
                <div class="box text-center text-white">
                  <p class="mb-0" id="minutes-countdown">0</p>
                  <p class="mb-0">Mnts</p>
                </div>
              </div>
              <div class="col-3">
                <div class="box text-center text-white">
                  <p class="mb-0" id="seconds-countdown">0</p>
                  <p class="mb-0">Scnds</p>
                </div>
              </div>
            </div>
          </div>
          <div class="header-flower-bottom"></div>
        </header>
      </div>
    </div>
  </div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.slim.min.js" integrity="sha512-6ORWJX/LrnSjBzwefdNUyLCMTIsGoNP6NftMy2UAm1JBm6PRZCO1d7OHBStWpVFZLO+RerTvqX/Z9mBFfCJZ4A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.bundle.min.js" integrity="sha512-wV7Yj1alIZDqZFCUQJy85VN+qvEIly93fIQAN7iqDFCPEucLCeNFz4r35FCo9s6WrpdDQPi80xbljXB8Bjtvcg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>