<?php
session_start();
include('includes/config.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" href="images/GEARFINAL.png" type="image/icon type">
  <title>ABOUT US &mdash; ISTE TKMCE</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700|Work+Sans:300,400,700" rel="stylesheet">
  <link rel="stylesheet" href="fonts/icomoon/style.css">

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/magnific-popup.css">
  <link rel="stylesheet" href="css/jquery-ui.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/bootstrap-datepicker.css">
  <link rel="stylesheet" href="css/animate.css">


  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/mediaelement@4.2.7/build/mediaelementplayer.min.css">



  <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

  <link rel="stylesheet" href="css/aos.css">

  <link rel="stylesheet" href="css/style.css">

  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/pe.css">
  <link rel="stylesheet" href="css/test.css">
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
    </div> <!-- site-mobile-menu -->

    <?php include('top.php'); ?>
    
    <div class="site-blocks-covers overlay" style="background: black;" data-aos="fade"
      data-stellar-background-ratio="0.2">
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-7 text-center" data-aos="fade">
            <span class="caption mb-3">ISTE TKMCE</span>
            <h1 class="mb-4">About Us</h1>
          </div>
        </div>
      </div>
    </div>

    <div class="wrapper">
  <h1 class="head">About ISTE</h1>
  <div class="quote" style="font-size: 1.2em;"> The Indian Society for Technical Education (ISTE) is a national, professional, non-profit
              making society registered under the Societies Registration Act of 1860.

              Engineers are the ones who mould their talents and personality to interact with the society to produce the
              best outcomes. ISTE chapter of TKMCE aims on sharpening the student's community skills, better
              personality, leadership qualities and technical skills and bring the best out them. These skills are
              enculcated through various activities and programmes conducted in the college</div>
</div>
</div>

    <!-- About Us End -->

  <!--OUR OBJECTIVES Starts here-->
  <div class="container site-section">
    <div class="row justify-content-center text-center mb-5">
      <div class="col-md-6">
        <span class="text-primary">
          <h2 class="mb-4">Our Objectives</h2>
      </div>
    </div>

    <div class="row justify-content-center">
      <div class="col-lg-7">
        <div class="row">
          <div class="col-lg-6 mr-auto pr-lg-5">
            <div class="feature-3">
              <h3>To arrange quality training</h3>
            </div>
          </div>
          <div class="col-lg-6 ml-auto pl-lg-5">
            <div class="feature-3">
              <h3>To provide a platform for students </h3>
            </div>
          </div>


          <div class="col-lg-6 mr-auto pr-lg-5">
            <div class="feature-3">
              <h3>To Conduct industrial training</h3>
            </div>
          </div>
          <div class="col-lg-6 ml-auto pl-lg-5">
            <div class="feature-3">
              <h3>To provide guidance </h3>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
  <div class="row justify-content-center text-center">
    <div class="col-md-6">
      <span class="text-primary">
        <h2 class="mb-4">MEET OUR TEAM</h2>
    </div>
  </div>
  <div class="site-section bg-light">
    <!----<h2 class="h2 mb-0">Faculty in charge </h2>-->
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-6 mb-5 mb-md-0">
          <div class="img-border"><img src="images/reshmi.jpg" alt="123" class="img-fluid"></div>
        </div>
        <div class="col-md-5 ml-auto facultyContent">

          <h2 class="h2 mb-0">Faculty in charge </h2>
          <div class="facultyDetails">
            <p class="-mb-4">
              RESHMI S L <br>
              ASSISTANT PROFFESOR<br>
              MECHANICAL DEPARTMENT<br>
            </p>
            
          </div>
        </div>

      </div>
    </div>
  </div>

  <div class="site-section block-15">
        <div class="container">
          <div class="row">
            <div class="mx-auto text-center mb-5 section-heading">
              <h2>Senior Execom</h2>
            </div>
          </div>


          <div class="nonloop-block-10 owl-two owl-carousel" id="execomm-carousel">

            <?php 
      $sql = "SELECT * FROM `execom`";
      $query = $dbh -> prepare($sql);
      $query->execute();
      $results=$query->fetchAll(PDO::FETCH_OBJ);
      if($query->rowCount() > 0)
      {
      foreach($results as $result)
      {				
        if($result->category=="Senior Execom"){?>
        
            <div class="media-with-text">
                <center>
              <div class="img-border-md mb-10">
                  <img style="display: flex; height:250px; width:250px;"
                    src="https://www.student.istetkmce.in/admin/images/<?php echo htmlentities($result->image) ?>" alt=""
                    class="img-fluid img-round img-center" />
              </div>
                <h2 class="heading mb-0"><a href="#"><?php echo htmlentities($result->name) ?></a></h2>
                <span class="mb-3 d-block post-date"><a
                    href="#"><?php echo htmlentities($result->position) ?></a></span>
              </center>
              <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio dolores culpa qui aliquam placeat nobis veritatis tempora natus rerum obcaecati.</p> -->
            </div>
            <?php }}}?>


          </div>
        </div>
      </div>
      
    </div>
  

    <div class=" block-15">
        <div class="container">
          <div class="row">
            <div class="mx-auto text-center mb-5 section-heading">
              <h2>Junior Execom</h2>
            </div>
          </div>


          <div class="nonloop-block-10 owl-one owl-carousel" id="execomm-carousel">

            <?php 
      $sql = "SELECT * FROM `execom`";
      $query = $dbh -> prepare($sql);
      $query->execute();
      $results=$query->fetchAll(PDO::FETCH_OBJ);
      if($query->rowCount() > 0)
      {
      foreach($results as $result)
      {				
        if($result->category=="Junior Execom"){?>
        
            <div class="media-with-text">
                <center>
              <div class="img-border-md mb-10">
                  <img style="display: flex; height:250px; width:250px;"
                    src="https://www.student.istetkmce.in/admin/images/<?php echo htmlentities($result->image) ?>" alt=""
                    class="img-fluid img-round img-center" />
              </div>
                <h2 class="heading mb-0"><a href="#"><?php echo htmlentities($result->name) ?></a></h2>
                <span class="mb-3 d-block post-date"><a
                    href="#"><?php echo htmlentities($result->position) ?></a></span>
              </center>
              <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio dolores culpa qui aliquam placeat nobis veritatis tempora natus rerum obcaecati.</p> -->
            </div>
            <?php }}}?>


          </div>
        </div>
      </div>
      
    </div>

    <div class="site-section block-15">
        <div class="container">
          <div class="row">
            <div class="mx-auto text-center mb-5 section-heading">
              <h2>Web Development</h2>
            </div>
          </div>


          <div class="nonloop-block-10 owl-three owl-carousel" id="execomm-carousel">

            <?php 
      $sql = "SELECT * FROM `execom`";
      $query = $dbh -> prepare($sql);
      $query->execute();
      $cnt=0;
      $results=$query->fetchAll(PDO::FETCH_OBJ);
      if($query->rowCount() > 0)
      {
      foreach($results as $result)
      {				
        if($result->category=="Web Developer"  && $cnt<3){?>
        
            <div class="media-with-text">
                <center>
              <div class="img-border-md mb-10">
                  <img style="display: flex; height:250px; width:250px;"
                    src="https://www.student.istetkmce.in/admin/images/<?php echo htmlentities($result->image) ?>" alt=""
                    class="img-fluid img-round img-center" />
              </div>
                <h2 class="heading mb-0"><a href="#"><?php echo htmlentities($result->name) ?></a></h2>
                <span class="mb-3 d-block post-date"><a
                    href="#"><?php echo htmlentities($result->position) ?></a></span>
              </center>
              <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio dolores culpa qui aliquam placeat nobis veritatis tempora natus rerum obcaecati.</p> -->
            </div>
            <?php $cnt=$cnt+1;}}}?>


          </div>
        </div>
      </div>
      
    </div>
  

  <!--senior execom starts here-->
  
  <?php include('footer.php'); ?>
  </div>

  <!--<script src="js/slick.min.js"></script> -->

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

  <!-- <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>  -->

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
    $('.owl-one').owlCarousel({
      loop: true,
      autoplay: true,
      margin: 10,
      autoplayTimeout: 1000,
      autoplayHoverPause: true,
      responsive: {
          0:{
            items:1,
            nav:false
        },
        320:{
            items:1,
            nav:true
        },
        700:{
            items:3,
            nav:false,
            loop:true
        }
      }
    });
    $('.owl-two').owlCarousel({
      loop: true,
      autoplay: true,
      margin: 10,
      autoplayTimeout: 1000,
      autoplayHoverPause: true,
      responsive: {
          0:{
            items:1,
            nav:false
        },
        320:{
            items:1,
            nav:true
        },
        700:{
            items:3,
            nav:false,
            loop:true
        }
      }
    });
    $('.owl-three').owlCarousel({
      loop: true,
      autoplay: true,
      margin: 10,
      autoplayTimeout: 1000,
      autoplayHoverPause: true,
      responsive: {
          0:{
            items:1,
            nav:false
        },
        320:{
            items:1,
            nav:true
        },
        700:{
            items:3,
            nav:false,
            loop:true
        }
      }
    });

    // Upcoming Events JS Code
    var eventList = ['A Talk by Dr.Martin Payyappilly (Oct 16 - 7 pm)'];
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
