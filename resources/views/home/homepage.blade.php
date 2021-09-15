<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Wildan & Lia's Wedding</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css" integrity="sha512-P5MgMn1jBN01asBgU0z60Qk4QxiXo86+wlFahKrsQf37c9cro517WzVSPPV1tDKzhku2iJ2FVgL67wG03SGnNA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <livewire:styles />
</head>
<body>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12">
        <header class="d-flex justify-content-center align-items-center">
          <div class="header-flower-top" data-aos="fade-down"></div>
          <div class="content-banner text-center">
            <p>The Wedding of</p>
            <h2>
              Wildan & Lia
            </h2>
            <img src="{{ asset('img/header-flower-circle.png') }}" data-aos="zoom-in" data-aos-duration="1000" alt="">
            <h4>Countdown Timer</h4>
            <p>Our wedding will take place on</p>
            <p class="mt-4"><b>Mon, 4 Dec 2021</b></p>
            <div class="row">
              <div class="col-3">
                <div class="box text-center text-white" data-aos="zoom-in-up" data-aos-duration="1000">
                  <p class="mb-0" id="days-countdown">0</p>
                  <p class="mb-0">Days</p>
                </div>
              </div>
              <div class="col-3">
                <div class="box text-center text-white" data-aos="zoom-in-up" data-aos-duration="1500">
                  <p class="mb-0" id="hours-countdown">0</p>
                  <p class="mb-0">Hours</p>
                </div>
              </div>
              <div class="col-3">
                <div class="box text-center text-white" data-aos="zoom-in-up" data-aos-duration="2000">
                  <p class="mb-0" id="minutes-countdown">0</p>
                  <p class="mb-0">Mnts</p>
                </div>
              </div>
              <div class="col-3">
                <div class="box text-center text-white" data-aos="zoom-in-up" data-aos-duration="2500">
                  <p class="mb-0" id="seconds-countdown">0</p>
                  <p class="mb-0">Scnds</p>
                </div>
              </div>
            </div>
          </div>
          <div class="header-flower-bottom" data-aos="fade-up"></div>
        </header>
        <section class="bg-white p-4">
          <div class="surah-flower-top" data-aos="fade-up"></div>
          <div class="content-surah px-4 py-5">
            <p class="mb-0 text-white text-center">
              Dan di antara tanda-tanda (kebesaran)-Nya ialah Dia menciptakan pasangan-pasangan untukmu dari jenismu sendiri, agar kamu cenderung dan merasa tenteram kepadanya, dan Dia menjadikan di antaramu rasa kasih dan sayang. <br>
              <b>(QS. Ar Rum : 21)</b>
            </p>
          </div>
          <div class="surah-flower-bottom" data-aos="fade-down"></div>
        </section>
        <section class="bg-mid-brown p-4">
          <div class="content-couple text-center">
            <img src="{{ asset('img/bismillah.png') }}" alt="" class="bismillah-png">
            <h4 class="mt-4 mb-3">
              Assallammuallaikkum Wr. Wb.
            </h4>
            <p>
              Tanpa mengurangi rasa hormat. Kami mengundang Bapak/Ibu/Saudara/i serta Kerabat sekalian untuk menghadiri acara pernikahan kami:
            </p>
            <img src="{{ asset('img/wildan.png') }}" alt="" class="couple-circle" data-aos="zoom-in">
            <h5 class="mb-3">Wildan Nurfadila Amin, S.Pt</h5>
            <p>
                <b>Putra dari</b> <br>
                Bapak Drs. Moch Nursodiq & <br>
                Ibu Dra. Laila Indawati
            </p>
            <h1 class="mt-5">&</h1>
            <img src="{{ asset('img/lia.png') }}" alt="" class="couple-circle" data-aos="zoom-in">
            <h5 class="mb-3">dr. Nur Amalia Permatasari</h5>
            <p>
                <b>Putri dari</b> <br>
                Bapak Ir. M. Ismail Djamaluddin, MT &  <br>
                Ibu Diah Anida Kusuma, SH
            </p>
          </div>
        </section>
        <section class="bg-white p-4">
          <div class="content-maps text-center">
            <h4>Lokasi Acara</h4>
            <img src="{{ asset('img/maps-flower.png') }}" alt="" data-aos="fade-up">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3951.4890783364594!2d112.63780181477918!3d-7.948304194274966!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd629c658012e69%3A0xd741a502d6f95888!2sJl.%20Letjend%20S.%20Parman%20No.87%2C%20Purwantoro%2C%20Kec.%20Blimbing%2C%20Kota%20Malang%2C%20Jawa%20Timur%2065126!5e0!3m2!1sen!2sid!4v1631360080462!5m2!1sen!2sid" class="mt-4" allowfullscreen="" loading="lazy"></iframe>
            <p class="my-4"><b>Ballroom Atria Hotel Malang</b> <br> Jl. Letjend S. Parman no 87-89, Purwantoro - Blimbing. Malang</p>
            <a href="https://www.google.com/maps/place/Jl.+Letjend+S.+Parman+No.87,+Purwantoro,+Kec.+Blimbing,+Kota+Malang,+Jawa+Timur+65126/@-7.948304,112.639991,15z/data=!4m5!3m4!1s0x2dd629c658012e69:0xd741a502d6f95888!8m2!3d-7.9483042!4d112.6399905?hl=en" target="_blank" class="mt-3 mx-auto d-block">Lihat Lokasi</a>
          </div>
        </section>
        <section class="bg-white p-4">
          <div class="content-akad text-center px-4 py-5 text-white">
            <h4>Akad Nikah Wildan & Lia</h4>
            <img src="{{ asset('img/akad-flower.png') }}" alt="" data-aos="fade-up">
            <p>Tanpa mengurangi rasa hormat, karena situasi pandemi COVID-19, kami hanya dapat mengundang keluarga dan kerabat dekat.</p>
            <p>Atas hal tersebut kami sampaikan permohonan maaf. Terima kasih dari lubuk hati yang terdalam kami ucapkan kepada Bapak/Ibu/Saudara yang telah memahami serta memaklumi kondisi ini.</p>
            <p>Semoga kita semua selalu dalam lindungan, berkah, dan hidayah Allah SWT. Aamiin.</p>
          </div>
        </section>
        <section class="bg-easy-brown p-4 text-center">
          <div class="content-streaming px-4 py-5 text-center d-flex align-items-center justify-content-center flex-column overflow-hidden">
            <img src="{{ asset('img/right-border-flower.png') }}" alt="" class="right-border-flower" data-aos="fade-down-left">
            <h4 class="mb-4">Live Streaming</h4>
            <p>Temui kami secara virtual untuk menyaksikan acara pernikahan kami.</p>
            <a href="#" class="d-block my-5">Menuju Streaming Youtube</a>
            <p>Dikarenakan LIVE YouTube hanya dapat ditampilkan ke sejumlah subscribers yang terbatas, silahkan subscribe terlebih dahulu agar dapat mengikuti jalannya aqad nikah.</p>
            <img src="{{ asset('img/left-border-flower.png') }}" alt="" class="left-border-flower" data-aos="fade-up-right">
          </div>
        </section>
        <livewire:greeting />
        <section class="bg-white">
          <div class="content-amplop text-center p-4">
            <h4>Amplop Digital</h4>
            <img src="{{ asset('img/akad-flower.png') }}" alt="" data-aos="fade-up">
            <p>Doa Restu Anda merupakan karunia yang sangat berarti bagi kami.</p>
            <p>Dan jika memberi adalah ungkapan tanda kasih Anda, Anda dapat memberi kado secara cashless.</p>
            <img class="my-4" src="https://logos-download.com/wp-content/uploads/2017/03/BCA_logo_Bank_Central_Asia.png" alt="">
            <p>No. Rekening : <b id="rekening">079667722</b></p>
            <p><b>a.n. Wahyu Budi Setyawan</b></p>
            <button onclick="copyToClipboard('rekening')" class="mt-3">Salin Rekening</button>
          </div>
        </section>
        <section class="bg-white">
          <div class="content-farewell text-center pt-5 pb-4 pr-4 pl-4">
            <img class="circle-flower" src="{{ asset('img/header-flower-circle.png') }}" alt="" data-aos="zoom-in">
            <p>Merupakan suatu kehormatan dan kebahagiaan bagi kami, apabila Bapak/Ibu/Saudara/i berkenan hadir dan memberikan doa restu. Atas kehadiran dan doa restunya, kami mengucapkan terima kasih.</p>
            <h4 class="my-5">Wassalamu'alaikum Wr. Wb.</h4>
            <h2 class="my-5">
              Wildan & Lia
            </h2>
            <img src="{{ asset('img/maps-flower.png') }}" alt="" data-aos="fade-up">
          </div>
        </section>
        <footer>
          <div class="content-footer bg-white pb-3 pt-3 text-center">
            &copy; <small>Cerita Cintaku from ALGA Creative</small>
          </div>
        </footer>
      </div>
    </div>
  </div>
  <button id="play-song" class="d-flex justify-content-center align-items-center"><span class="material-icons text-white">play_circle</span></button>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.slim.min.js" integrity="sha512-6ORWJX/LrnSjBzwefdNUyLCMTIsGoNP6NftMy2UAm1JBm6PRZCO1d7OHBStWpVFZLO+RerTvqX/Z9mBFfCJZ4A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.bundle.min.js" integrity="sha512-wV7Yj1alIZDqZFCUQJy85VN+qvEIly93fIQAN7iqDFCPEucLCeNFz4r35FCo9s6WrpdDQPi80xbljXB8Bjtvcg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script src="{{ asset('js/script.js') }}"></script>
  <livewire:scripts />
</body>
</html>