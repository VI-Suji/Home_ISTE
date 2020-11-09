<?php
session_start();
// exit(0);
include('includes/config.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta property="og:image" content="images/GEARFINAL.png">
  <link rel="icon" href="images/GEARFINAL.png" type="image/icon type">
  <title>Official Website Of ISTE TKMCE Chapter</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
  <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700|Work+Sans:300,400,700" rel="stylesheet">
  <link rel="stylesheet" href="fonts/icomoon/style.css">
  
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/magnific-popup.css">
  <link rel="stylesheet" href="css/jquery-ui.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/bootstrap-datepicker.css">
  

  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/test.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/themify-icons/0.1.2/css/themify-icons.css">

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

      <div class="site-blocks-cover overlay" style="background-image: url(images/bg2.jpg);">
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

      <div class="site-blocks-cover overlay" style="background-image: url(images/bg1.jpg);" >
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

    <div class="py-2 bg-primary upcoming-events">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6">
            <span class="caption bg-warning px-4">Upcoming Events</span>
            <!-- <h2 class="text-white">December Camp Meeting</h2> -->

            <!-- <div id="slider">
              <div class="container1">
                <div class="slide">
                  <h3><a class="link" href="index.html">Ethical Hacking</a></h3>
                  
                </div>
                <div class="slide">
                  <h3><a class="link" href="index.html">Ethical Hacking</a></h3>
                  
                </div>
                <div class="slide">
                  <h3><a class="link" href="index.html">Ethical Hacking</a></h3>
                  
                </div>
                <div class="slide">
                  <h3><a class="link" href="index.html">Ethical Hacking</a></h3>
                  
                </div>
                <div class="slide">
                  <h3><a class="link" href="index.html">Ethical Hacking</a></h3>
                 
                </div>
              </div>
            </div> -->
            <div class="w3-container pt-2 ">
              <!-- <h1>Animation is Fun!</h1> -->
              <p class="text-white" id="event"></p>
            </div>

          </div>
          <!-- <div class="col-md-6">
            <span class="caption">The camp meeting will start in</span>
            <div id="date-countdown"></div>    
          </div> -->
        </div>

      </div>
    </div>

    <!-- Upcoming Events Ends -->

    <!-- <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-6 mx-auto text-center mb-5 section-heading">
            <h2 class="mb-5">Church Services</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <div class="church-service text-center">
              <a href="#" class="d-block mb-3 thumbnail"><img src="images/img_1.jpg" alt="Image" class="img-fluid"></a>
              <h3 class="heading mb-3"><a href="#">Consectetur adipisicing elit</a></h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta labore recusandae soluta quis.</p>
              <p><a href="#" class="text-primary">Read More <span class="icon-arrow-right small"></span></a></p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="church-service text-center">
              <a href="#" class="d-block mb-3 thumbnail"><img src="images/img_2.jpg" alt="Image" class="img-fluid"></a>
              <h3 class="heading mb-3"><a href="#">Consectetur adipisicing elit</a></h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta labore recusandae soluta quis.</p>
              <p><a href="#" class="text-primary">Read More <span class="icon-arrow-right small"></span></a></p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="church-service text-center">
              <a href="#" class="d-block mb-3 thumbnail"><img src="images/img_3.jpg" alt="Image" class="img-fluid"></a>
              <h3 class="heading mb-3"><a href="#">Consectetur adipisicing elit</a></h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta labore recusandae soluta quis.</p>
              <p><a href="#" class="text-primary">Read More <span class="icon-arrow-right small"></span></a></p>
            </div>
          </div>
        </div>
      </div>
    </div> -->

    <div class="wrapper">
  <h1 class="head">About Us</h1>
  <div class="quote"> ISTE Students’ Chapter assists and contributes in the production and development of top quality professional
          engineers and technicians needed by the industry and other organizations and also provides guidance and
          training to students to develop better learning skills and personality.</div>
</div>
</div>

    <!-- About Us End -->

    <!-- Services -->

    <section class="container">
    <div class="col-md-6 mx-auto text-center mb-5 section-heading">
            <h2>Our Services</h2>
          </div>
  <div class="services-grid">
    <div class="service service1">
      <i class="ti-file"></i>
      <h4>NEWS LETTER</h4>
      <p>You can access exclusive links for short checklists to original articles and posts where you can study the subject in detail!</p>
    </div>

    <div class="service service2">
      <i class="ti-folder"></i>
      <h4>ARTICLE</h4>
      <p>Principled research papers dealing with theoretical, methodological, empirical and
                                                    application-related aspects of technical education</p>
    </div>

    <div class="service service3">
      <i class="ti-light-bulb"></i>
      <h4>PROJECT DEVELOPMENT</h4>
      <p> Students of who are doing project work involving product development,fabrication,model studies, etc.</p>
    </div>
    <div class="service service4">
      <i class="ti-server"></i>
      <h4>SERVER ACCESS</h4>
      <p><br>Server access allows users to access and manage the actual system interfaces and files.</p>
    </div>
  </div>
</section>

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

<!-- Service end -->

    <div class="mt-4 container">
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
    <div class="col-md-4">
    <hr>
    <div class="profile-card-6"><img src="images/<?php echo htmlentities($result->image) ?>" class="img img-responsive">
        <div class="profile-name"><?php echo htmlentities($result->name) ?></div>
        <div class="profile-position"><?php echo htmlentities($result->date) ?></div>
    </div>
</div>
      <?php $cnt=$cnt+1;}}}?>
</div>
</div>

      
      <div class="mt-3 container justify-content-center text-center">
        <a href="event.php" class="btn btn-primary">View More</a>
      </div>

      <div class="container mt-4">
          <div class="row">
            <div class="mx-auto text-center mb-5 section-heading">
              <h2>TEAM ISTE</h2>
            </div>
          </div>
      </div>

      <div class="container">
	<div class="row">
		<div class="col-md-4">
    <h4 class="text-center"><strong>FACULTY IN CHARGE</strong></h4>
    <hr>
    <div class="profile-card-2"><img src="./images/reshmi.jpg" class="img img-responsive">
        <div class="profile-name">RESHMI S L </div>
        <div class="profile-username">MECHANICAL DEPT</div>
        <!-- <div class="profile-icons"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-linkedin"></i></a></div> -->
    </div>
    </div>
    <div class="col-md-4" >
    <h4 class="text-center"><strong>CHAIRPERSON</strong></h4>
    <hr>
    <div class="profile-card-2"><img src="./images/bhagyasree.jpg" class="img img-responsive">
        <div class="profile-name">BHAGYASREE</div>
        <div class="profile-username">ELECTRONICS</div>
        <!-- <div class="profile-icons"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-linkedin"></i></a></div> -->
    </div>
    </div>
    <div class="col-md-4">
    <h4 class="text-center"><strong>VICE CHAIRPERSON</strong></h4>
    <hr>
    <div class="profile-card-2"><img src="./images/vishnu b vinod.jpg" class="img img-responsive">
        <div class="profile-name">VISHNU B VINOD</div>
        <div class="profile-username">ELECTRONICS</div>
        <!-- <div class="profile-icons"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-linkedin"></i></a></div> -->
    </div>
    </div>
</div>
</div>
</div>

<div class="container justify-content-center text-center">
        <a href="about.php" class="btn btn-primary">View More</a>
      </div>



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

  <script id="TelegramLiveChatLoader" data-bot="CEB14C86-FC1E-11EA-ADFB-952423E822B5" src="//livechatbot.net/assets/chat/js/loader.js"></script>
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


  <!-- <script src="js/mediaelement-and-player.min.js"></script> -->

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
    var eventList = [''];
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
