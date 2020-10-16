<?php
session_start();
include('includes/config.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
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

    <!-- Carousel Start -->
    <div class="slide-one-item home-slider owl-carousel">

      <div class="site-blocks-cover overlay" style="background-image: url(images/hero_1.jpg);" data-aos="fade"
        data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-md-7 text-center" data-aos="fade">
              <!-- <span class="caption mb-3">Official Website Of ISTE TKMCE</span> -->
              <h1 class="mb-4">ISTE<br> TKM College of Engineering</h1>
              <!-- <p><a href="#" class="text-white py-3 px-4">Official Website Of ISTE TKMCE</a></p> -->
            </div>
          </div>
        </div>
      </div>

      <div class="site-blocks-cover overlay" style="background-image: url(images/hero_2.jpg);" data-aos="fade"
        data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-md-7 text-center" data-aos="fade">
              <!-- <span class="caption mb-3">Official Website Of ISTE TKMCE</span> -->
              <h1 class="mb-4">ISTE<br> TKM College of Engineering</h1>
              <!-- <p><a href="#" class="text-white py-3 px-4">Official Website Of ISTE TKMCE</a></p> -->
            </div>
          </div>
        </div>
      </div>

    </div>

    <!-- Carousel End -->


    <!-- Upcoming Events Starts -->
    <div class="site-section block-14 bg-light">

<div class="container">
  
  <div class="row">
    <div class="col-md-6 mx-auto text-center mb-5 section-heading">
      <h2>Upcoming Events</h2>
    </div>
  </div>

      <div class="top-content">
          <div class="container-fluid">
          <div id="previous" class="carousel slide w-100" data-ride="carousel">
              <div class="carousel-inner row w-100 mx-auto" role="listbox">
                        <?php 
$sql = "SELECT * from  events where 0";
$query = $dbh -> prepare($sql);
$query->execute();
$cnt=0;
$results=$query->fetchAll(PDO::FETCH_OBJ);
if($query->rowCount() > 0)
{
foreach($results as $result)
{				if($result->name && $cnt==0){
?>
<div class="carousel-item col-md-4 active">      
            <div class="card">
              <img src="./admin/images/<?php echo htmlentities($result->image) ?>"
                class="card-img-top" alt="">
              <div class="card-body">
                <h5 class="card-title"><?php echo htmlentities($result->name) ?></h5>
                <p class="card-text">
                  <blockquote>&ldquo;<?php echo htmlentities($result->description) ?>&rdquo;
                  </blockquote>
                </p>
              </div>
            </div>
          </div>
          <?php $cnt=1; ?>
<?php }else{?>
<div class="carousel-item col-md-4">      
            <div class="card">
              <img src="./admin/images/<?php echo htmlentities($result->image) ?>"
                class="card-img-top" alt="">
              <div class="card-body">
                <h5 class="card-title"><?php echo htmlentities($result->name) ?></h5>
                <p class="card-text">
                  <blockquote>&ldquo;<?php echo htmlentities($result->description) ?>&rdquo;
                  </blockquote>
                </p>
              </div>
            </div>
          </div>
          <?php }}} ?>
              </div>
              <a class="carousel-control-prev w-auto" href="#previous" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon bg-dark border border-dark rounded-circle" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next w-auto" href="#previous" role="button" data-slide="next">
                  <span class="carousel-control-next-icon bg-dark border border-dark rounded-circle" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
              </a>
          </div>
      </div>
  </div>
  </div>
  </div>
</div>

    <!-- Section to work on new Previous Events Start -->

    <div class="site-section block-14 bg-light">

      <div class="container">
        
        <div class="row">
          <div class="col-md-6 mx-auto text-center mb-5 section-heading">
            <h2>Previous Events</h2>
          </div>
        </div>

            <div class="top-content">
                <div class="container-fluid">
                <div id="previous" class="carousel slide w-100" data-ride="carousel">
                    <div class="carousel-inner row w-100 mx-auto" role="listbox">
                              <?php 
$sql = "SELECT * from  events ";
$query = $dbh -> prepare($sql);
$query->execute();
$cnt=0;
$results=$query->fetchAll(PDO::FETCH_OBJ);
if($query->rowCount() > 0)
{
foreach($results as $result)
{				if($result->name && $cnt==0){
    ?>
    <div class="carousel-item col-md-4 active">      
                  <div class="card">
                    <img src="./admin/images/<?php echo htmlentities($result->image) ?>"
                      class="card-img-top" alt="">
                    <div class="card-body">
                      <h5 class="card-title"><?php echo htmlentities($result->name) ?></h5>
                      <p class="card-text">
                        <blockquote>&ldquo;<?php echo htmlentities($result->description) ?>&rdquo;
                        </blockquote>
                      </p>
                    </div>
                  </div>
                </div>
                <?php $cnt=1; ?>
<?php }else{?>
  <div class="carousel-item col-md-4">      
                  <div class="card">
                    <img src="./admin/images/<?php echo htmlentities($result->image) ?>"
                      class="card-img-top" alt="">
                    <div class="card-body">
                      <h5 class="card-title"><?php echo htmlentities($result->name) ?></h5>
                      <p class="card-text">
                        <blockquote>&ldquo;<?php echo htmlentities($result->description) ?>&rdquo;
                        </blockquote>
                      </p>
                    </div>
                  </div>
                </div>
                <?php }}} ?>
                    </div>
                    <a class="carousel-control-prev w-auto" href="#previous" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon bg-dark border border-dark rounded-circle" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next w-auto" href="#previous" role="button" data-slide="next">
                        <span class="carousel-control-next-icon bg-dark border border-dark rounded-circle" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
        </div>
        </div>
</div>

    

  <!-- <div class="nonloop-block-14 owl-carousel">
          
          <div class="p-4">
            <div class="d-flex block-testimony"> -->
  <!-- <div class="person mr-3"> -->
  <!-- <img src="images/person_1.jpg" alt="Image" class="img-fluid rounded">-->
  <!-- <div class="img"> <img src="images/previous events/FB_IMG_1569047483757.jpg" alt="00000"></div> HERE THE IMAGE IN THE PREVIOUS EVENT -1 -->
  <!-- </div> -->
  <!-- <div>
                <h2 class="h5">Katie Johnson</h2>
                <blockquote>&ldquo;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias accusantium qui optio, possimus necessitatibus voluptate aliquam velit nostrum tempora ipsam!&rdquo;</blockquote>
              </div> -->
  <!-- </div> -->
  <!-- </div> -->
  <!-- <div class="p-4"> -->
  <!-- <div class="d-flex block-testimony"> -->
  <!-- <div class="person mr-3">
                <img src="images/person_2.jpg" alt="Image" class="img-fluid rounded">
              </div> -->
  <!-- <div>
                <h2 class="h5">App Development Workshop</h2>
                <blockquote>&ldquo;<p>The ISTE students chapter of TKMCE conducted a 2 day workshop on App Development for the students of TKMCE. The workshop was held from 27th to 28th October at the CCFL Lab.</p>&rdquo;</blockquote>
                <a href="#">Read More...</a>
              </div>
            </div>
          </div>

          <div class="p-4">
              <div class="d-flex block-testimony"> -->
  <!-- <div class="person mr-3"> -->
  <!-- <img src="images/person_1.jpg" alt="Image" class="img-fluid rounded">-->
  <!-- <div class="img"> <img src="images/previous events/67578077_2348099588603456_5024053929711739326_n.jpg" alt="00000"></div> HERE THE IMAGE IN THE PREVIOUS EVENT -1 -->
  <!-- </div> -->
  <!-- <div>
                  <h2 class="h5">Katie Johnson</h2>
                  <blockquote>&ldquo;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias accusantium qui optio, possimus necessitatibus voluptate aliquam velit nostrum tempora ipsam!&rdquo;</blockquote>
                </div> -->
  <!-- </div> -->
  <!-- </div> -->
  <!-- <div class="p-4"> 
              <div class="d-flex block-testimony">
                 <div class="person mr-3">
                  <img src="images/person_2.jpg" alt="Image" class="img-fluid rounded">
                </div> 
                <div>
                  <h2 class="h5">Gaming Royale</h2>
                  <blockquote>&ldquo;<p>As part of the techno cultural fest HESTIA 2K19 held from 28th to 31st March 2019, the ISTE students chapter of TKMCE conducted the  Gaming Royale, a platform for entertainmental games that added a taste of enthusiasm to the tech fest.</p>&rdquo;</blockquote>
                  <a href="#">Read More...</a>
                </div>
              </div>
            </div>
          <div class="p-4">
            <div class="d-flex block-testimony">
              <div class="person mr-3"> 
               <img src="images/person_3.jpg" alt="Image" class="img-fluid rounded">
                <div class="img"> <img src="images/previous events/67059419_809343279467798_741432067154248475_n.jpg" alt="00000"></div>

               </div> -->
  <!-- <div>
                <h2 class="h5">Shane Holmes</h2>
                <blockquote>&ldquo;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias accusantium qui optio, possimus necessitatibus voluptate aliquam velit nostrum tempora ipsam!&rdquo;</blockquote>
              </div> 
            </div>-->
  <!-- </div> -->
  <!-- <div class="p-4"> -->
  <!-- <div class="d-flex block-testimony">
              <div class="person mr-3">
                <img src="images/person_4.jpg" alt="Image" class="img-fluid rounded">
              </div>
              <div>
                <h2 class="h5">Machine Learning Workshop</h2>
                <blockquote>&ldquo;<p>Machine Learning, is an application of Artificial Intelligence, focuses on the development of computer programs that can access data and use it learn for themselves. ISTE students chapter TKMCE conducted a 2 day workshop on Machine Learning.</p>&rdquo;</blockquote>
                <a href="#">Read More...</a>
              </div>
            </div>
          </div>

        </div>

      </div>
      
    </div> -->
  <!-- Section to work on new Previous Events End -->

  <!-- <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-6 mx-auto text-center mb-5 section-heading">
            <h2 class="mb-5">More Features</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <div class="text-center p-4 item">
              <span class="flaticon-paper-plane display-3 mb-3 d-block text-primary"></span>
              <h2 class="h5 text-uppercase">Our Mission</h2>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati reprehenderit explicabo quos fugit vitae dolorum.</p>
              <p><a href="#">Read More <span class="icon-arrow-right small"></span></a></p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="text-center p-4 item">
              <span class="flaticon-speaker display-3 mb-3 d-block text-primary"></span>
              <h2 class="h5 text-uppercase">Listen To Our Sermons</h2>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati reprehenderit explicabo quos fugit vitae dolorum.</p>
              <p><a href="#">Read More <span class="icon-arrow-right small"></span></a></p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="text-center p-4 item">
              <span class="flaticon-chat-1 display-3 mb-3 d-block text-primary"></span>
              <h2 class="h5 text-uppercase">Testimonies</h2>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati reprehenderit explicabo quos fugit vitae dolorum.</p>
              <p><a href="#">Read More <span class="icon-arrow-right small"></span></a></p>
            </div>
          </div>

        </div>
      </div>
    </div> -->




  <!-- <div class="py-5 quick-contact-info">
      <div class="container">
        <div class="row">
          <div class="col-md-4 text-center">
            <div>
              <span class="icon-room text-white h2 d-block"></span>
              <h2>Location</h2>
              <p class="mb-0">New York - 2398 <br>  10 Hadson Carl Street</p>
            </div>
          </div>
          <div class="col-md-4 text-center">
            <div>
              <span class="icon-clock-o text-white h2 d-block"></span>
              <h2>Service Times</h2>
              <p class="mb-0">Wednesdays at 6:30PM - 7:30PM <br>
              Fridays at Sunset - 7:30PM <br>
              Saturdays at 8:00AM - Sunset</p>
            </div>
          </div>
          <div class="col-md-4 text-center">
            <div>
              <span class="icon-comments text-white h2 d-block"></span>
              <h2>Get In Touch</h2>
              <p class="mb-0">Email: info@yoursite.com <br>
              Phone: (123) 3240-345-9348 </p>
            </div>
          </div>
        </div>
      </div>
    </div> -->


  <!-- <footer class="site-footer" style="background-image: url('images/hero_1.jpg');">
      <div class="container">
        

        <div class="row">
          <div class="col-md-4">
            <h3 class="footer-heading mb-4 text-white">About</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat quos rem ullam, placeat amet.</p>
            <p><a href="#" class="btn btn-primary pill text-white px-4">Read More</a></p>
          </div>
          <div class="col-md-6">
            <div class="row">
              <div class="col-md-6">
                <h3 class="footer-heading mb-4 text-white">Quick Menu</h3>
                  <ul class="list-unstyled">
                    <li><a href="#">About</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">Approach</a></li>
                    <li><a href="#">Sustainability</a></li>
                    <li><a href="#">News</a></li>
                    <li><a href="#">Careers</a></li>
                  </ul>
              </div>
              <div class="col-md-6">
                <h3 class="footer-heading mb-4 text-white">Ministries</h3>
                  <ul class="list-unstyled">
                    <li><a href="#">Children</a></li>
                    <li><a href="#">Women</a></li>
                    <li><a href="#">Bible Study</a></li>
                    <li><a href="#">Church</a></li>
                    <li><a href="#">Missionaries</a></li>
                  </ul>
              </div>
            </div>
          </div>

          
          <div class="col-md-2">
            <div class="col-md-12"><h3 class="footer-heading mb-4 text-white">Social Icons</h3></div>
              <div class="col-md-12">
                <p>
                  <a href="#" class="pb-2 pr-2 pl-0"><span class="icon-facebook"></span></a>
                  <a href="#" class="p-2"><span class="icon-twitter"></span></a>
                  <a href="#" class="p-2"><span class="icon-instagram"></span></a>
                  <a href="#" class="p-2"><span class="icon-vimeo"></span></a>

                </p>
              </div>
          </div>
        </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <p>
             Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0.
            Copyright &copy; <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>document.write(new Date().getFullYear());</script> All Rights Reserved | This template is made with <i class="icon-heart text-primary" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" >Colorlib</a>
             Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. 
            </p>
          </div>
          
        </div>
      </div>
    </footer> -->
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
