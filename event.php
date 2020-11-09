<?php
session_start();
include('includes/config.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" href="images/GEARFINAL.png" type="image/icon type">
  <title>Official Website Of ISTE TKMCE Chapter</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700|Work+Sans:300,400,700" rel="stylesheet">
  <link rel="stylesheet" href="fonts/icomoon/style.css">
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-152957826-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag() { dataLayer.push(arguments); }
    gtag('js', new Date());

    gtag('config', 'UA-152957826-1');
  </script>


  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/magnific-popup.css">
  <link rel="stylesheet" href="css/jquery-ui.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/bootstrap-datepicker.css">
  <link rel="stylesheet" href="css/animate.css">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/mediaelement@4.2.7/build/mediaelementplayer.min.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">


  <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

  <link rel="stylesheet" href="css/aos.css">

  <link rel="stylesheet" href="css/style.css">

  <link rel="stylesheet" href="css/test.css">

  <!-- Custom CSS for previous events animation -->
  <link rel="stylesheet" href="css/pe.css">

</head>

<body>

  <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->


    <?php include('top.php'); ?>

    <!-- BANNER STARTS HERE -->
    <div class="site-blocks-covers overlay" style="background: black;" data-aos="fade"
      data-stellar-background-ratio="0.2">
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-7 text-center" data-aos="fade">
            <span class="caption mb-3">ISTE TKMCE</span>
            <h1 class="mb-4">Events</h1>
          </div>
        </div>
      </div>
    </div>


    <!-- Carousel End -->


    

    <!-- Section to work on new Previous Events Start -->

    <div class="mt-4 container">
    <div class="row">
          <div class="col-md-6 mx-auto text-center mb-5 section-heading">
            <h2>Upcoming Events</h2>
          </div>
        </div>
    <div class="row">
    <div class="col-md-4">
    <hr>
    <div style="width: 400px;" class="profile-card-6"><img src="images/DeTalks.jpeg?>" class="img img-responsive">
        <div class="profile-name">DETalks</div>
        <div class="profile-position"></div>
    </div>
</div>
<div class="col-md-4">
    <hr>
    <div style="width: 400px;" class="profile-card-6"><img src="images/Flemin.jpeg?>" class="img img-responsive">
        <div class="profile-name">Talk by Flemin Johnson</div>
        <div class="profile-position"></div>
    </div>
</div>
<div class="col-md-4">
    <hr>
    <div style="width: 400px;" class="profile-card-6"><img src="images/gopan.jpeg?>" class="img img-responsive">
        <div class="profile-name">Talk by Gopakumar</div>
        <div class="profile-position"></div>
    </div>
</div>
</div>
</div>
</div>

     <!-- Previous Events Starts -->
  
     <div class="mt-5 container">
    <div class="row">
          <div class="col-md-6 mx-auto text-center mb-5 section-heading">
            <h2>Previous Events</h2>
          </div>
        </div>
    <div class="row">
    <?php 
      $sql = "SELECT * FROM `events`";
      $query = $dbh -> prepare($sql);
      $query->execute();
      $results=$query->fetchAll(PDO::FETCH_OBJ);
      if($query->rowCount() > 0)
      {$cnt=0;
      foreach($results as $result)
      {	if($cnt!=3){			?>
    <div class="col-md-3">
    <hr>
    <div class="profile-card-6"><img src="https://www.student.istetkmce.in/admin/images/<?php echo htmlentities($result->image) ?>" class="img img-responsive">
        <div class="profile-name"><?php echo htmlentities($result->name) ?></div>
        <div class="profile-position"><?php echo htmlentities($result->date) ?></div>
    </div>
</div>
      <?php }}}?>
</div>
</div>

    </footer>
    <?php include('footer.php'); ?>
  </div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/aos.js"></script>


  <script src="js/mediaelement-and-player.min.js"></script>

  <script src="js/main.js"></script>


  <script>
    document.addEventListener('DOMContentLoaded', function () {
      var mediaElements = document.querySelectorAll('video, audio'), total = mediaElements.length;

      for (var i = 0; i < total; i++) {
        new MediaElementPlayer(mediaElements[i], {
          pluginPath: 'https://cdn.jsdelivr.net/npm/mediaelement@4.2.7/build/',
          shimScriptAccess: 'always',
          success: function () {
            var target = document.body.querySelectorAll('.player'), targetTotal = target.length;
            for (var j = 0; j < targetTotal; j++) {
              target[j].style.visibility = 'visible';
            }
          }
        });
      }
    });

    // Owl Carousel options
    var owl = $('#execomm-carousel');
    owl.owlCarousel({
      loop: true,
      autoplay: true,
      margin: 10,
      autoplayTimeout: 1000,
      autoplayHoverPause: true
    });

    // Upcoming Events JS Code
    var eventList = ['Event One', 'Event Two', 'Event Three', 'Event four'];
    var i = 1;
    function changeEvent() {

      $('#event').animate({ marginLeft: "-=250px" }, () => {
        $('#event').animate({ marginLeft: "+=250px" }, () => {
          $('#event').text(eventList[i]);
        });
      });
      i++;
      if (i >= eventList.length)
        i = 0;
    }
    setInterval(changeEvent, 3000);
  </script>

</body>

</html>
