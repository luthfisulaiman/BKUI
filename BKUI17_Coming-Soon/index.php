<!DOCTYPE html>
<html>
<head>

  <title>Coming Soon :: BKUI17</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <link rel="shortcut icon" href="app/images/favicon.png" type="image/x-icon" />

  <link rel="stylesheet" type="text/css" href="vendor/css/font-awesome.min.css"/>
  <link rel="stylesheet" type="text/css" href="vendor/css/tooltipster.css"/>
  <link rel="stylesheet" type="text/css" href="vendor/css/tooltipster-shadow.css"/>
  <link rel="stylesheet" type="text/css" href="vendor/css/remodal.css"/>
  <link rel="stylesheet" type="text/css" href="vendor/css/remodal-default-theme.css"/>
  <link rel="stylesheet" type="text/css" href="app/css/styles.css?v=1.3.5"/>
</head>
<body>
  
  <div class="wrapper">
    <div class="web-content">
      <div class="social-icon">
        <a href="https://twitter.com/bkui_official" target="_blank" class="icon tooltip" title="@BKUI_Official"><i class="fa fa-twitter"></i></a>
        <a href="https://instagram.com/BKUI_Official" target="_blank" class="icon tooltip" title="@BKUI_Official"><i class="fa fa-instagram"></i></a>
        <a class="icon tooltip" title="+62 812 9896 9600 (Farra)"><i class="fa fa-phone"></i></a>
        <a target="_blank" class="icon tooltip" title="Mohon maaf, penjualan tiket belum dibuka. Penjualan tiket akan segera dibuka pada tanggal 12 Juni 2017"><i class="fa fa-ticket"></i></a>
      </div>
      
      <div class="text-container">
        <h1 class="coming-soon">Coming Soon</h1>
        <h1 class="bkui17">BKUI17</h1>
        <h2 class="date">11 - 12 November 2017</h2>
        <div class="cd-container">
          <h2 class="hitung-mundur">Hitung Mundur Menuju Pembukaan Penjualan Tiket</h2>
          <h1 id="demo" class="hitung-mundur" ></h1>
        </div>
      </div>

      <script>
      // Set the date we're counting down to
      var countDownDate = new Date("June 12, 2017 08:00:00").getTime();

      // Update the count down every 1 second
      var x = setInterval(function() {

        // Get todays date and time
        var now = new Date().getTime();

        // Find the distance between now an the count down date
        var distance = countDownDate - now;

        // Time calculations for days, hours, minutes and seconds
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

        // Display the result in the element with id="demo"
        document.getElementById("demo").innerHTML = days + " Hari  " + hours + " Jam  "
        + minutes + " menit  " + seconds + " Detik  ";

        // If the count down is finished, write some text 
        if (distance < 0) {
          clearInterval(x);
          document.getElementById("demo").innerHTML = "EXPIRED";
        }
      }, 1000);
      </script>
    </div>

    <div class="preloader">
      <div class="sk-spinner sk-spinner-wave">
        <div class="sk-rect1"></div>
        <div class="sk-rect2"></div>
        <div class="sk-rect3"></div>
        <div class="sk-rect4"></div>
        <div class="sk-rect5"></div>
      </div>
    </div>
  </div>
  
  <script type="text/javascript" src="vendor/js/jquery-1.11.2.min.js"></script>
  <script type="text/javascript" src="vendor/js/jquery.tooltipster.min.js"></script>
  <script type="text/javascript" src="vendor/js/jquery.countdown.min.js"></script>
  <script type="text/javascript" src="vendor/js/remodal.min.js"></script>
  <script type="text/javascript" src="app/js/app.js?v=1.1.2"></script>
  <script type="text/javascript" src="app/js/script.min.js?v=1.0"></script>
</body>
</html>