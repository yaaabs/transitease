<!doctype html>
<html class="no-js" lang="zxx">
	
    <head>
        <!-- Meta Tags -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="keywords" content="Site keywords here">
		<meta name="description" content="">
		<meta name='copyright' content=''>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
		<!-- Title -->
        <title>TransitEase</title>
		
        <!-- All CSS -->
        <link rel="stylesheet" href="css/home/bootstrap.min.css">
    <link rel="stylesheet" href="css/home/themify-icons.css">
    <link rel="stylesheet" href="css/home/owl.carousel.min.css">
    <link rel="stylesheet" href="css/home/jquery.fancybox.min.css">
    <link rel="stylesheet" href="css/home/home.css">
    

  
    
		<!-- Favicon -->
    <link rel="icon" type="image/png" href="img/PLEASE.png">
		
		<!-- Google Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="css/bootstrap.min.css">

		<!-- icofont CSS -->
        <link rel="stylesheet" href="css/icofont.css">
		<!-- Slicknav -->
		<link rel="stylesheet" href="css/navbar/slicknav.min.css">
		<!-- Owl Carousel CSS -->

		
		<!-- CSS -->
        <link rel="stylesheet" href="css/navbar/normalize.css">
        <link rel="stylesheet" href="css/navbar/style.css">
        <link rel="stylesheet" href="css/navbar/responsive.css">
		
    </head>
    <style>
  .header {
    background-color: #5a5c69; /* Change background color of the header */
    color: #000; /* Change text color of the header */
    padding: 15px 0; /* Add padding to the header for spacing */
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); /* Optional: Add shadow for depth */
}

.navbar-text {
    font-size: 0.80rem;
    color: #000;
    font-weight: 500;
}

.btnn, .btnn.logout-button {
    background-color: #007bff;
    color: #fff !important; /* Ensure the text color is applied */
    padding: 5px 10px;
    border-radius: 5px;
    text-decoration: none;
}

.btnn:hover {
    background-color: #0056b3;
}

/* Add custom margin to create space between name and logout button */
.navbar-text.user-name {
    margin-right: 5px; /* Adjust this value as needed */
}

.btnn.logout-button {
    margin-left: 10px; /* Optional: Add margin to the left of the logout button */
}


/*===================
    Start Header CSS 
=====================*/

.header .navbar-collapse {
    padding: 0;
}

/* Topbar */
.header .topbar {
    background-color: #fff;
    border-bottom: 1px solid #eee;
}

.header .topbar {
    padding: 15px 0;
}

.get-quote {
    margin-top: 12px;
}

.get-quote .btn {
    color: #fff;
}

.header .logo {
    float: left;
    margin-top: 18px;
}

.header .navbar {
    background: none;
    box-shadow: none;
    border: none;
    margin: 0;
    height: 0px;
    min-height: 0px;
}

.header .nav li {
    margin-right: 15px;
    float: left;
    position: relative;
}

.header .nav li:last-child {
    margin: 0;
}

.header .nav li a {
    color: #2C2D3F;
    font-size: 14px;
    font-weight: 500;
    text-transform: capitalize;
    padding: 25px 12px;
    position: relative;
    display: inline-block;
    position: relative;
}

.header .nav li a::before {
    position: absolute;
    content: "";
    left: 0;
    bottom: 0;
    height: 3px;
    width: 0%;
    background: #1A76D1;
    border-radius: 5px 5px 0 0;
    opacity: 0;
    visibility: hidden;
    transition: all 0.4s ease;
}

.header .nav li.active a:before {
    opacity: 1;
    visibility: visible;
    width: 100%;
}

.header .nav li.active a {
    color: #1A76D1;
}

.header .nav li:hover a:before {
    opacity: 1;
    width: 100%;
    visibility: visible;
}

.header .nav li:hover a {
    color: #1a76d1;
}

.header .nav li a i {
    display: inline-block;
    margin-left: 1px;
    font-size: 13px;
}

/* Dropdown Menu */
.header .nav li .dropdown {
    background: #fff;
    width: 220px;
    position: absolute;
    left: -20px;
    top: 100%;
    z-index: 999;
    box-shadow: 0px 3px 5px #3333334d;
    transform-origin: 0 0 0;
    transform: scaleY(0.2);
    transition: all 0.3s ease 0s;
    opacity: 0;
    visibility: hidden;
    top: 74px;
    border-left: 3px solid #2889e4;
}

.header .nav li:hover .dropdown {
    opacity: 1;
    visibility: visible;
    transform: translateY(0px);
}

.header .nav li .dropdown li {
    float: none;
    margin: 0;
    border-bottom: 1px dashed #eee;
}

.header .nav li .dropdown li:last-child {
    border: none;
}

.header .nav li .dropdown li a {
    padding: 12px 15px;
    color: #666;
    display: block;
    font-weight: 400;
    text-transform: capitalize;
    background: transparent;
    transition: all 0.2s ease;
}

.header .nav li .dropdown li a:before {
    display: none;
}

.header .nav li .dropdown li:last-child a {
    border-bottom: 0px;
}

.header .nav li .dropdown li:hover a {
    color: #1A76D1;
}

.header .nav li .dropdown li a:hover {
    border-color: transparent;
}

.banner {
  background: url(../images/Side.png) no-repeat left center/12.5%;
  padding: 12% 0;
}

@font-face {
	font-family: 'themify';
	src:url('fonts/themify.eot?-fvbane');
	src:url('fonts/themify.eot?#iefix-fvbane') format('embedded-opentype'),
		url('fonts/themify.woff?-fvbane') format('woff'),
		url('fonts/themify.ttf?-fvbane') format('truetype'),
		url('fonts/themify.svg?-fvbane#themify') format('svg');
	font-weight: normal;
	font-style: normal;
}

[class^="ti-"], [class*=" ti-"] {
	font-family: 'themify';
	speak: none;
	font-style: normal;
	font-weight: normal;
	font-variant: normal;
	text-transform: none;
	line-height: 1;

	/* Better Font Rendering =========== */
	-webkit-font-smoothing: antialiased;
	-moz-osx-font-smoothing: grayscale;
}

</style>

<body>
	
	<!-- Header Area -->
<header class="header">
    <!-- Header Inner -->
    <div class="header-inner">
        <div class="container">
            <div class="inner">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-12">
                        <!-- Start Logo -->
                        <div class="logo">
                            <a href="dashboard"><img src="img/Logoo.png" alt="#"></a>
                        </div>
                        <!-- End Logo -->
                        <!-- Mobile Nav -->
                        <div class="mobile-nav"></div>
                    </div>
                    <div class="col-lg-7 col-md-9 col-12">
                        <div class="main-menu">
                            <nav class="navigation">
                                <ul class="nav menu">
                                    <li class="{{ Request::is('/') ? 'active' : '' }}"><a href="/">Home</a></li>
                                    <li class="{{ Request::is('lrt') ? 'active' : '' }}">
                                        <a href="{{ route('lrt') }}">LRT-1 Services <i class="icofont-rounded-down" aria-hidden="true"></i></a>
                                        <ul class="dropdown">
                                            <li><a href="ts">Train Schedule</a></li>
                                            <li><a href="fp">Fare Matrix</a></li>
                                            <li><a href="a">Announcement</a></li>
                                            <li><a href="route">Route</a></li>
                                        </ul>
                                    </li>
                                    <li class="{{ Request::is('newpage') ? 'active' : '' }}"><a href="newpage">About Us</a></li>
                                    <li class="{{ Request::is('page') ? 'active' : '' }}"><a href="{{ route('page') }}">TransitEase<i class="icofont-train-line" aria-hidden="true"></i></a></li>
                                    @auth
                                    <li><a href="another">Another Page </a></li>
                                    @else
                                    <li class="{{ Request::is('login') ? 'active' : '' }}"><a href="{{ route('login') }}">Login</a></li>
             
                                    @endauth
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-lg-2 col-12 d-flex justify-content-end align-items-center">
    @auth
    <span class="navbar-text user-name">{{ auth()->user()->name }}</span>
<a href="#" class="btnn logout-button" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
</form>

    @endauth
</div>

                </div>
            </div>
        </div>
    </div>
</header>
	
<!-- Banner section start -->
<section class="banner">

<div class="tren-img">
  <img src="images/GG.png" alt="">
</div>
  
<div class="container">
  <div class="row">
    <div class="col-lg-6 col-md-9">
      <div class="banner-content">
        <span>TRANSITEASE by DevOps</span>
        <h2>Get the app and register your account now!</h2>
        <p>In support of our mission to provide a convenient journey for commuters, we developed the TransitEase mobile app. You can install and test the TransitEase APK now!
</p>

      <a href="https://www.mediafire.com/file/swa82mbywqbrlee/TransitEase.apk/file" 
   class="btn" 
   onclick="openPopup(event, 'https://www.mediafire.com/file/swa82mbywqbrlee/TransitEase.apk/file')">Click Here!</a>

<div class="modal" id="imageModal">
    <span class="close">&times;</span>
    <img class="modal-content" id="img01">
</div>

        <a class="video-btn" data-fancybox href="https://www.youtube.com/watch?v=RUitsszSAHI">
          <i class="ti-control-play"></i>
          Watch Video Updates
        </a>
      </div>
    </div>
  </div>
</div>
</section>
<!-- Banner section end -->

<!-- About section start -->
<section class="about">
<img src="images/Train.png" alt="" class="flower-1">
<img src="images/Bilog.png" alt="" class="flower-2">
<br><br><br><br><br><br><br><br><br>
<div class="container">
  <div class="row">
    <div class="col-lg-10 col-md-12 m-auto">
      <div class="sec-heading">
        <img src="images/TE Logo.png" alt="">
        <span class="tagline">About TransitEase</span>
        <h3 class="sec-title">Transforming the way Filipinos commute.</h3>
        <p>In support of our mission to provide a convenient journey for commuters, we developed the TransitEase mobile app. TransitEase app is an invaluable tool for the riding public, offering better access to information and empowering commuters with the resources they need for a more efficient travel experience.</p>
      </div>
      <a href="#service" class="btn btn-round">How to use?</a><br><br>

    </div>
  </div>
</div>      
</section>
<!-- About section end -->

<!-- Service section start -->
 <br><br><br>
<section id="service" class="service">
<div class="service-caro owl-carousel">
  <div class="single-service">
    <img src="img/000.png" alt="#">
    <div class="service-hover">
      <img src="images/icons/Hover.png" alt="">
      <span>Train Godz</span>
    </div>
  </div>

  <div class="single-service">
    <img src="img/111.png" alt="#">
    <div class="service-hover">
      <img src="images/icons/Hover.png" alt="">
      <span>Train Godz</span>
    </div>
  </div>

  <div class="single-service">
    <img src="img/222.png" alt="#">
    <div class="service-hover">
      <img src="images/icons/Hover.png" alt="">
      <span>Train Godz</span>
    </div>
  </div>

  <div class="single-service">
    <img src="img/333.png" alt="#">
    <div class="service-hover">
      <img src="images/icons/Hover.png" alt="">
      <span>Train Godz</span>
      
    </div>
  </div>
</div>
</section>
<!-- Service section end -->

<!-- Procedures section start -->
<section id="procedures-section" class="procedures">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 m-auto">
            <div class="sec-heading">
              <h3 class="sec-title">Articles about LRT-1</h3>
              <p>Stay informed with the latest updates and essential guides on the LRT-1. From comprehensive station lists to the introduction of new trains aimed at reducing wait times, and the much-anticipated Cavite extension project, we've got all the important details covered. Discover how these developments enhance commuting in Metro Manila and keep you on track with the LRT-1's progress.</p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <article class="post">
              <img src="images/post/LRT1.png" alt="">
              <h4><a href="https://www.moneymax.ph/lifestyle/articles/lrt-1-stations-guide" target="_blank">LRT-1 Stations Guide by <b>Moneymax PH</b></a></h4>
              <p>LRT-1 Stations List in Order From Baclaran to Fernando Poe Jr.</p>
              <a href="https://www.moneymax.ph/lifestyle/articles/lrt-1-stations-guide" class="btn btn-round" target="_blank">read more</a>
            </article>
          </div>
          <div class="col-md-4">
            <article class="post">
              <img src="images/post/newtrains.jpg" alt="">
              <h4><a href="https://www.spot.ph/newsfeatures/mobility/105611/looks-features-of-the-new-lrt-1-trains-a5229-20230720" target="_blank">Everything You Need to Know About the New Trains</a></h4>
              <p>LRT-1 Adds New Trains to Cut Passenger's Waiting Time At Stations.</p>
              <a href="https://www.spot.ph/newsfeatures/mobility/105611/looks-features-of-the-new-lrt-1-trains-a5229-20230720" class="btn btn-round" target="_blank">read more</a>
            </article>
          </div>
          <div class="col-md-4">
            <article class="post">
              <img src="images/post/cavite.jpg" alt="">
              <h4><a href="https://www.pna.gov.ph/articles/1226461" target="_blank">LRT-1 Cavite Extension to be completed by 2031</a></h4>
              <p><b>MANILA</b> – The Light Rail Transit Line 1 (LRT-1) Cavite Extension is expected to ...</p>
              <a href="https://www.pna.gov.ph/articles/1226461" class="btn btn-round" target="_blank">read more</a>
            </article>
          </div>
        </div>
      </div>
    </section>
    <!-- Procedures section end -->

<!-- Testimonial section start -->
<section class="testimonial bg-lightred">
<div class="container">
  <div class="row">
    <div class="col-lg-10 col-md-12 m-auto">
      <div class="test-caro owl-carousel">
        <div class="single-tst">
          <img src="images/quote.png" alt="">
          <p><span><b>What is LRT-1 also known as?</span></b> Originally referred to as <i>Metrorail and the Yellow Line</i>, LRT Line 1 was reclassified to be the Green Line in 2012. It travels in a general north–south direction from Baclaran to Monumento, and then east–west from Monumento to Fernando Poe Jr.</p>

          <div class="client-info">
            <img src="images/Wikepedia Logo.png" alt="" class="thumb">
            <p>Wikepedia, <span>The Free Encyclopedia</span></p>
          </div>
        </div>
        <div class="single-tst">
          <img src="images/quote.png" alt="">
          <p><b>Manila Light Rail Transit System Line 1</b> The Light Rail Transit Line 1, commonly referred to as LRT Line 1 or LRT-1, is a light rapid transit system line in Metro Manila, Philippines, operated by Light Rail Manila Corporation and owned by the Light Rail Transit Authority as part of the Manila Light Rail Transit System.</p>

          <div class="client-info">
            <img src="images/Wikepedia Logo.png" alt="" class="thumb">
            <p>Wikepedia, <span>The Free Encyclopedia</span></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</section>
<!-- Testimonial section end -->


<section>
<video id="slider" autoplay muted loop>
  <source src="vid/1.mp4" type="video/mp4">
</video>
<ul class="navigation">
  <li onmouseenter="videoURL('vid/1.mp4')"><img src="img/1.PNG"></li>
  <li onmouseenter="videoURL('vid/2.mp4')"><img src="img/2.jpg"></li>
  <li onmouseenter="videoURL('vid/3.mp4')"><img src="img/3.jpg"></li>
  <li onmouseenter="videoURL('vid/4.mp4')"><img src="img/4.jpg"></li>
</ul>

</section>

<!-- A section start -->
<section class="appointment v2">
<div class="appointment-wrap">
  <figure>
    <img src="images/LRT2.png" alt="">
  </figure>
  <div class="appointment-form">
    <form action="#">
      <div class="form-field half-width">
        <input type="text" placeholder="NAME" required>
        <input type="email" placeholder="Email address" required>
      </div>
      <div class="form-field half-width">
        <div class="select-field">
          <select>
            <option>Select Option</option>
            <option>Send Reports</option>
			<option>Send Feedback</option>
			<option>Send Suggestions</option>
          </select>
        </div>
        <input type="tel" placeholder="Phone numer">
      </div>
      <div class="form-field half-width">
        <input type="date" placeholder="date">
        <input type="time" placeholder="time">
      </div>
      <div class="form-field">
        <textarea name="notes" placeholder="Your notes"></textarea>
      </div>
      <button class="btn btn-round">Submit</button>
    </form>
  </div>
</div> </div>

<!-- A section end -->
	











		
<!-- Footer Area -->
<footer id="footer" class="footer ">

<!-- Footer Top -->
<div class="footer-top" id="footer">
  <div class="container">
    <div class="row">
      <div class="col-lg-3 col-md-6 col-12">
        <div class="single-footer">
          <h2>TransitEase</h2>
          <p>In support of our mission to provide a convenient journey for commuters, we developed the TransitEase mobile app. Install it now!</p>
          <!-- Social -->
          <ul class="social">
            <li><a href="#"><i class="icofont-facebook"></i></a></li>
            <li><a href="#"><i class="icofont-google-plus"></i></a></li>
            <li><a href="#"><i class="icofont-twitter"></i></a></li>
            <li><a href="#"><i class="icofont-vimeo"></i></a></li>
            <li><a href="#"><i class="icofont-pinterest"></i></a></li>
          </ul>
          <!-- End Social -->
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-12">
        <div class="single-footer f-link">
          <h2>Quick Links</h2>
          <div class="row">
            <div class="col-lg-6 col-md-6 col-12">
              <ul>
                <li><a href="{{ route('home') }}"><i class="fa fa-caret-right" aria-hidden="true"></i>Home</a></li>
                <li><a href="{{ route('lrt') }}"><i class="fa fa-caret-right" aria-hidden="true"></i>LRT-1 Services</a></li>
                <li><a href="{{ route('ts') }}"><i class="fa fa-caret-right" aria-hidden="true"></i>Train Sched</a></li>
                <li><a href="{{ route('fp') }}"><i class="fa fa-caret-right" aria-hidden="true"></i>Fare Matrix</a></li>
                <li><a href="{{ route('a') }}#"><i class="fa fa-caret-right" aria-hidden="true"></i>Updates</a></li>	
              </ul>
            </div>
            <div class="col-lg-6 col-md-6 col-12">
              <ul>
                <li><a href="{{ route('route') }}"><i class="fa fa-caret-right" aria-hidden="true"></i>Route</a></li>
                <li><a href="{{ route('newpage') }}"><i class="fa fa-caret-right" aria-hidden="true"></i>About Us</a></li>
                <li><a href="{{ route('page') }}"><i class="fa fa-caret-right" aria-hidden="true"></i>TransitEase</a></li>
                <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>FAQ</a></li>
                <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Contact Us</a></li>	
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-12">
        <div class="single-footer">
          <h2>Operating Hours</h2>
          <p>LRT-1 Train Service Hours First and Last Trains of Baclaran and Fernando Poe Jr. Stations.</p>
          <ul class="time-sidual">
            <li class="day">Monday - Friday <span>4:30 AM - 10:00 PM</span></li>
            <li class="day">Weekends <span>5:00 AM - 9:30 PM</span></li>
            <li class="day">Holidays <span>5:00 AM - 9:30 PM</span></li>
          </ul>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-12">
        <div class="single-footer">
          <h2>Feedback</h2>
          <p>Your opinions and suggestions are important to us! Please share your thoughts to help us improve and provide a better experience.</p>
          <form action="mail/mail.php" method="get" target="_blank" class="newsletter-inner">
            <input name="email" placeholder="Email Address" class="common-input" onfocus="this.placeholder = ''"
              onblur="this.placeholder = 'Your email address'" required="" type="email">
            <button class="button"><i class="icofont icofont-paper-plane"></i></button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<!--/ End Footer Top -->
<!-- Copyright -->
<div class="copyright">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-12">
        <div class="copyright-content">
          <p>© Copyright 2069  |  All Rights Reserved by <a href="tripledoublue.yabutech.com" target="_blank">tripledoublue.yabutech.com</a> </p>
        </div>
      </div>
    </div>
  </div>
</div>
<!--/ End Copyright -->
</footer>
<!--/ End Footer Area -->
		
		<!-- jquery Min JS -->
        <script src="js/jquery.min.js"></script>
		<!-- jquery Migrate JS -->
		<script src="js/jquery-migrate-3.0.0.js"></script>
		<!-- jquery Ui JS -->

		<!-- Slicknav JS -->
		<script src="js/slicknav.min.js"></script>


		<!-- Main JS -->
		<script src="js/main.js"></script>

    <!-- JS -->
<script type="text/javascript">
function videoURL(hmmm){
  document.getElementById("slider").src = hmmm;
}
</script>
<script src="js/home/jquery-3.3.1.min.js"></script>
<script src="js/home/bootstrap.min.js"></script>
<script src="js/home/owl.carousel.min.js"></script>
<script src="js/home/jquery.fancybox.min.js"></script>
<script src="js/home/scripts.js">
</script>

<script>
    function openPopup(event, url) {
        event.preventDefault(); // Prevent the default link behavior
        window.open(
            url, 
            'popup', 
            'width=1024,height=576,scrollbars=yes,resizable=yes'
        );
    }
</script>

    </body>
</html>