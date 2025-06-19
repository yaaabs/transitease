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
        <title>TransitEase - LRT Services</title>
		
        <!-- All CSS -->
    

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
	
		<!-- Nav  -->
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


<!-- Video Background Header -->
<div style="position: relative; width: 100%; height: 0; padding-bottom: 56.25%; overflow: hidden;">
    <video autoplay muted loop playsinline style="position: absolute; width: 100%; height: 100%; top: 0; left: 0; object-fit: cover;">
        <source src="{{ asset('vid/TestVBG.mp4') }}" type="video/mp4">
        Your browser does not support the video tag.
    </video>
</div>


<!-- Start Fun-facts -->
<div id="fun-facts" class="fun-facts section overlay">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-6 col-12">
						<!-- Start Single Fun -->
						<div class="single-fun">
						<i class="icofont-speed-meter"></i>
							<div class="content">
								<span class="counter">19,650</span>
								<p>Meters track length</p>
							</div>
						</div>
						<!-- End Single Fun -->
					</div>
					<div class="col-lg-3 col-md-6 col-12">
						<!-- Start Single Fun -->
						<div class="single-fun">
						<i class="icofont-users-social"></i>
							<div class="content">
								<span class="counter">300,000</span>
								<p>Passengers a day</p>
							</div>
						</div>
						<!-- End Single Fun -->
					</div>
					<div class="col-lg-3 col-md-6 col-12">
						<!-- Start Single Fun -->
						<div class="single-fun">
							<i class="icofont-train-line"></i>
							<div class="content">
								<span class="counter">150</span>
								<p>Trains serving the line</p>
							</div>
						</div>
						<!-- End Single Fun -->
					</div>
					<div class="col-lg-3 col-md-6 col-12">
						<!-- Start Single Fun -->
						<div class="single-fun">
							<i class="icofont-building"></i>
							<div class="content">
								<span class="counter">20</span>
								<p>Twenty stations along its route</p>
							</div>
						</div>
						<!-- End Single Fun -->
					</div>
				</div>
			</div>
		</div>
		<!--/ End Fun-facts -->

<div class="container mt-5">
    <div class="row">
        <div class="col-md-4">
            <div class="card mb-4">
                <img src="{{ asset('img/NTS.jfif') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    
                    <br>  <br>
                    
                    <h5 class="card-title">Train Schedule</h5>
                    <p class="card-text">Stay on track with the latest train schedules! Plan your commute or trip with ease. </p><br>
                    <a href="ts" class="btn btn-primary">Read More</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mb-4">
                <img src="{{ asset('img/SJT23.jfif') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Fare Matrix</h5>
                    <p class="card-text">Your ticket to affordable travel! Discover LRT-1 fares, discounts, and payment options. </p><br>
                    <a href="fp" class="btn btn-primary">Read More</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mb-4">
                <img src="{{ asset('img/Route.png') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    
                      <br>  <br>  <br>  <br>  <br>  <br>
                    <h5 class="card-title">Route</h5>
                    <p class="card-text">Discover the LRT-1 route, stations, and connections. Plan your travels with ease and navigate Metro Manila like a pro.</p><br>
                    <a href="route" class="btn btn-primary">Read More</a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container mt-5">
        <div class="row">
            <div class="col">
                <div class="card">
                    <img src="img/PT4.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Announcement</h5>
                        <p class="card-text">Stay informed on the latest updates, schedules, and service changes to enhance your LRT commuting experience.</p><br>
                        <a href="a" class="btn btn-primary">Read More</a>
                    </div>
                </div>
                <br><br>
            </div>
            <div class="col">
                <div class="card" aria-hidden="true">
                    <img src="img/FP.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title placeholder-glow">
                            <span class="placeholder col-6"></span>
                        </h5>
                        <p class="card-text placeholder-glow">
                            <span class="placeholder col-7"></span>
                            <span class="placeholder col-4"></span>
                            <span class="placeholder col-4"></span>
                            <span class="placeholder col-6"></span>
                            <span class="placeholder col-8"></span>
                        </p><br><br>
                        <a href="#" tabindex="-1" class="btn btn-primary disabled placeholder col-6"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>




		
		
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
		<!-- Mga fcking need sa counter -->
        
		<!-- jquery Migrate JS -->
		<script src="js/jquery-migrate-3.0.0.js"></script>
		<!-- Slicknav JS -->
		<script src="js/home/slicknav.min.js"></script>
		<!-- counterup JS -->
		<script src="js/jquery.counterup.min.js"></script>
		<!-- Counter Up CDN JS -->
		<script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
		<!-- Main JS -->
		<script src="js/main.js"></script>
        <script src="js/jquery.min.js"></script>
    </body>
</html>



