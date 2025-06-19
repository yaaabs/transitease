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
        <title>TransitEase - Fare Matrix</title>
		
        <!-- All CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
     
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
    
body.bg-dark {
    background: #fff !important;
}


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
.qwerty {
  width: 90%;
  max-width: 1000px;
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
  gap: 20px;
  box-shadow: 0 20px 20px rgba(0,0,0,.2);
  background-color: #fff; /* Change this to your desired background color for the cards */
  padding: 20px;
  border-radius: 10px;
  margin: auto;
}
.qwerty .card {
  position: relative;
  display: flex;
  flex-direction: column;
  background: #fff;
  transition: 0.5s;
  border-radius: 10px;
  overflow: hidden;
}

.qwerty .card:nth-child(even) {
  flex-direction: column-reverse;
}

.qwerty .card .imgBx {
  position: relative;
  width: 100%;
  height: 250px;
  background: #000;
}

.qwerty .card .imgBx img {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  object-fit: cover;
}

.qwerty .card .content {
  position: relative;
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 20px;
  text-align: center;
}

.qwerty .card .content div {
  width: 100%;
}

@media (max-width: 1000px) {
  .qwerty {
    width: 100%;
    grid-template-columns: 1fr;
    margin: 0;
    box-shadow: none;
    padding: 10px;
  }

  .qwerty .card {
    flex-direction: row;
    margin: 10px 0;
  }

  .qwerty .card:nth-child(even) {
    flex-direction: row-reverse;
  }

  .qwerty .card .imgBx,
  .qwerty .card .content {
    width: 50%;
  }
}

@media (max-width: 600px) {
  .qwerty {
    width: 100%;
    padding: 10px;
  }

  .qwerty .card {
    flex-direction: column;
    margin: 10px 0;
  }

  .qwerty .card:nth-child(even) {
    flex-direction: column;
  }

  .qwerty .card .imgBx,
  .qwerty .card .content,
  .qwerty .card .content div {
    width: 100%;
  }

  .qwerty .card .content {
    height: auto; /* Adjust height to be flexible */
  }
}

.test{

    width: 100%;
    height: 100vh;
    background: url('img/FMSV.png');
    background-repeat:no-repeat;
    background-size:contain;
    background-position:center;
    
}
.test1{

width: 100%;
height: 100vh;
background: url('img/FMSJT.png');
background-repeat:no-repeat;
background-size:contain;
background-position:center;

}

/* Scoped CSS for Fare Calculator */
.fare-calculator-container {
    background-color: #ffffff;
    border-radius: 10px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    padding: 20px;
    max-width: 600px;
    margin: auto;
}

.fare-calculator-title {
    font-size: 1.8rem;
    color: #333;
    font-weight: bold;
    text-transform: uppercase;
    letter-spacing: 1px;
}

.fare-calculator-form label {
    display: block;
    font-weight: bold;
    margin-bottom: 5px;
    color: #555;
}

.fare-calculator-input {
    width: 100%;
    height: 45px;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ddd;
    border-radius: 5px;
    font-size: 1rem;
    transition: all 0.3s ease;
}

.fare-calculator-input:focus {
    border-color: #007bff;
    box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
    outline: none;
}

.fare-calculator-btn {
    width: 100%;
    background-color: #ffc107;
    color: #fff;
    font-weight: bold;
    text-transform: uppercase;
    height: 50px;
    border-radius: 5px;
    border: none;
    transition: background-color 0.3s ease, transform 0.3s ease;
    font-size: 1rem;
}

.fare-calculator-btn:hover {
    background-color: #e0a800;
    transform: scale(1.02);
    cursor: pointer;
}

.fare-calculator-result {
    margin-top: 20px;
    background-color: #f8f9fa;
    padding: 15px;
    border: 1px solid #e9ecef;
    border-radius: 5px;
    text-align: center;
}

.fare-calculator-result h4 {
    margin: 0;
    color: #555;
    font-weight: bold;
}

.fare-calculator-container {
    background-color: #f0f0f0; /* New background color */
    border-radius: 10px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    padding: 20px;
    max-width: 600px;
    margin: auto;

 /* Image Gallery dittoo sht */
    .image-gallery .row {
      margin-bottom: 20px;
    }

    .image-gallery img {
      width: 100%;
      height: auto;
      cursor: pointer;
      border-radius: 5px;
      transition: transform 0.3s ease;
    }

    .image-gallery img:hover {
      transform: scale(1.05);
    }

    .modal-body {
      text-align: center;
      /* Center the image in the modal */
    }

    /* Custom CSS to center the modal content */
    .modal-dialog {
      display: flex;
      align-items: center;
      justify-content: center;
      min-height: calc(100vh - 2rem);
    }

    .modal-content {
      max-width: 90vw; 
      /* Adjust as needed to prevent image overflow */
    }



/* ... test ... */


</style>

<body class="bg-dark">
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

<!-- Fcking Counter -->

  <div id="fun-facts" class="fun-facts section overlay">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-6 col-12">
						<!-- Start Single Fun -->
						<div class="single-fun" id="test">
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

                                                                                                   <!-- Fare Matrix Calculator dito -->
                                                                                                   
<div class="card fare-calculator-container my-5 shadow">
    <div class="card-body">
        <h2 class="fare-calculator-title text-center mb-4">LRT-1 Fare Calculator</h2>
        <form id="fareCalculatorForm" class="fare-calculator-form">
            <div class="form-group mb-3">
                <label for="fareType">Fare Type:</label>
                <select id="fareType" class="form-control">
                    <option value="sjt">Single Journey Ticket (SJT)</option>
                    <option value="svc">Stored Value Card (Beep Card)</option>
                </select>
            </div>
            <div class="form-group mb-3">
                <label for="origin">Origin Station:</label>
                <select id="origin" class="form-control">
                    <!-- Stations will be dynamically added here -->
                </select>
            </div>
            <div class="form-group mb-3">
                <label for="destination">Destination Station:</label>
                <select id="destination" class="form-control">
                    <!-- Stations will be dynamically added here -->
                </select>
            </div>
            <button type="button" class="fare-calculator-btn" onclick="calculateFare()">Calculate Fare</button>
        </form>
        <div class="fare-calculator-result mt-4 text-center" id="fareResult" style="display: none;">
            <h4>Fare: <span id="fareValue"></span> PHP</h4>
        </div>
    </div>
</div>


   <!-- End Fare Matrix Calculator dito -->
   
<!-- 
<div class="container">
<section class="test">
  <!-- OLD PIC -->
<!-- </section>
<!-- </div>

<!-- <div class="container">
<!-- <section class="test1">
  <!-- OLD IMAGE -->
<!-- </section>
<!-- </div>
-->


                                                                                                    <!-- Image Gallery dittoo sht -->
<BR><bR>
<div class="container">
  <div class="image-gallery">
    <div class="row">
      <div class="col-md-6">
        <img src="img/FMSV.png" alt="Image 2" data-bs-toggle="modal" data-bs-target="#imageModal2">
      </div>
      <div class="col-md-6">
        <img src="img/FMSJT.png" alt="Image 3" data-bs-toggle="modal" data-bs-target="#imageModal3">
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="imageModal2" tabindex="-1" aria-labelledby="imageModal2Label" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <img src="img/FMSV.png" alt="Image 2" class="img-fluid">
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="imageModal3" tabindex="-1" aria-labelledby="imageModal3Label" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <img src="img/FMSJT.png" alt="Image 3" class="img-fluid">
      </div>
    </div>
  </div>
</div>
<br><br><br><br>

                                                                 <!-- End ng Image Gallery dittoo sht -->
                                                                 
                                                                 
  <div class="container">
    <section class="qwerty" id="home" style="background-color: #f2f2f2;">
      <div class="card">
        <div class="imgBx">
          <img src="img/PT1.jpg">
        </div>
        <div class="content" style="background-color: #F0F0F0;">
          <div>
            <h2><b>Fare Matrix</b></h2>
            <p>Pursuant to the approval of the Department of Transportation (DOTr) in June 2023, Light Rail Manila Corporation (LRMC) will implement the adjusted fares for LRT-1 starting 2 August 2023.</p>
          </div>
        </div>
      </div>
      
      <div class="card" style="background-color: #F0F0F0;">
        <div class="imgBx">
          <img src="img/PT2.jpg">
        </div>
        <div class="content" style="background-color: #F0F0F0;">
          <div>
            <h2><b>Stored Value</b></h2>
            <p>This reusable card allows passengers to load a balance and use it for multiple trips until the balance is exhausted.</p>
          </div>
        </div>
      </div>
      
      <div class="card" style="background-color: #F0F0F0;">
        <div class="imgBx">
          <img src="img/PT3.jpg">
        </div>
        <div class="content" style="background-color: #F0F0F0;">
          <div>
            <h2><b>Single Journey Ticket</b></h2>
            <p>This ticket is valid for a one-way trip from the station of origin to the specified destination.</p>
          </div>
        </div>
      </div>
    </section>
  </div>








  <!-- Dalawang sht b4 footer -->
  
  <section class="container-fluid" style="margin-top: 100px;">
    <div class="card mx-5 bg-light-green rounded-corner">
        <div class="card-body" style="background-color: #F0F0F0;">
            <div class="row mx-md-5 px-lg-5 d-flex align-items-center">
                <div class="col-md-7 p-2 text-center text-md-left">
                    <p class="text-secondary font-size-sm">LRT-1 SV Fare Matrix</p><br>
                    <h3 class="poppins-bold dark-green"><i class="icofont-info-circle"></i><justify><b> Note:</b> You can <em>TAP</em> your stored value card when entering and exiting. You can extend your card if it's expired for 10 pesos only.</justify></h3>
                </div>
                <div class="col-md-5 text-center text-md-right p-0">
                    <img src="img/FMSV.png" class="img-fluid w-75"
                        alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<section class="container-fluid" style="margin-top: 100px;">
    <div class="card mx-5 bg-light-green rounded-corner">
        <div class="card-body" style="background-color: #F0F0F0;">
            <div class="row mx-md-5 px-lg-5 d-flex align-items-center">
                <div class="col-md-7 p-2 text-center text-md-left">
                    <p class="text-secondary font-size-sm">LRT-1 SJT Fare Matrix</p><br>
                    <h3 class="poppins-bold dark-green"><i class="icofont-info-circle"></i><justify><b> Note:</b> You can <em>TAP</em> your Single Journey Ticket while entering and <em>INSERT </em> when exiting.</justify></h3>
                </div>
                <div class="col-md-5 text-center text-md-right p-0">
                    <img src="img/FMSJT.png" class="img-fluid w-75"
                        alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<br><br>

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



<script src="js/home/jquery-3.3.1.min.js"></script>
<script src="js/home/bootstrap.min.js"></script>
<script src="js/home/owl.carousel.min.js"></script>
<script src="js/home/jquery.fancybox.min.js"></script>
<script src="js/home/scripts.js">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>



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


	<!-- Fare Matrix Calcu rito -->

<script>
    // LRT Stations (South to North)
    const stations = [
        "Baclaran", "EDSA", "Libertad", "Gil Puyat", "Vito Cruz", 
        "Quirino", "Pedro Gil", "UN Avenue", "Central", "Carriedo",
        "Doroteo Jose", "Bambang", "Tayuman", "Blumentritt", "Abad Santos",
        "R. Papa", "5th Avenue", "Monumento", "Balintawak", "Roosevelt"
    ];

    // Fare Matrix for Single Journey Ticket (SJT)
    const fareMatrixSJT = {
    "Baclaran":   [0, 15, 15, 20, 20, 20, 20, 20, 25, 25, 25, 25, 25, 30, 30, 30, 30, 30, 35, 35],
    "EDSA":       [15, 0, 15, 15, 20, 20, 20, 20, 25, 25, 25, 25, 25, 25, 30, 30, 30, 30, 35, 35],
    "Libertad":   [15, 15, 0, 15, 15, 20, 20, 20, 20, 25, 25, 25, 25, 25, 25, 30, 30, 30, 35, 35],
    "Gil Puyat":  [20, 15, 15, 0, 15, 20, 20, 20, 20, 20, 25, 25, 25, 25, 25, 25, 30, 30, 30, 35],
    "Vito Cruz":  [20, 20, 15, 15, 0, 15, 15, 20, 20, 20, 20, 20, 25, 25, 25, 25, 25, 30, 30, 35],
    
    "Quirino":    [20, 20, 20, 20, 15, 0, 15, 15, 20, 20, 20, 20, 20, 25, 25, 25, 25, 25, 30, 30],
    "Pedro Gil":  [20, 20, 20, 20, 15, 15, 0, 15, 20, 20, 20, 20, 20, 20, 25, 25, 25, 25, 30, 30],
    "UN Avenue":  [25, 20, 20, 20, 20, 15, 15, 0, 15, 20, 20, 20, 20, 20, 20, 25, 25, 25, 30, 30],
    "Central":    [25, 25, 20, 20, 20, 20, 20, 15, 0, 15, 15, 20, 20, 20, 20, 20, 20, 25, 25, 30],
    "Carriedo":   [30, 25, 25, 25, 20, 20, 20, 20, 15, 0, 15, 15, 20, 20, 20, 20, 20, 25, 25, 30],
    
    "Doroteo Jose":[25, 25, 25, 25, 20, 20, 20, 20, 15, 15, 0, 15, 15, 20, 20, 20, 20, 20, 25, 25],
    "Bambang":    [25, 25, 25, 25, 20, 20, 20, 20, 30, 15, 15, 0, 15, 15, 20, 20, 20, 20, 25, 25],
    "Tayuman":    [25, 25, 25, 25, 25, 20, 20, 20, 20, 20, 15, 15, 0, 15, 15, 20, 20, 20, 25, 25],
    "Blumentritt":[30, 25, 25, 25, 25, 25, 20, 20, 20, 20, 20, 15, 15, 0, 15, 15, 20, 20, 20, 25],
    "Abad Santos":[30, 30, 25, 25, 25, 25, 25, 20, 20, 20, 20, 20, 15, 15, 0, 15, 15, 20, 20, 25],
    
    "R. Papa":    [30, 30, 30, 25, 25, 25, 25, 25, 20, 20, 20, 20, 20, 15, 15, 0, 15, 20, 20, 25],
    "5th Avenue": [30, 30, 30, 30, 25, 25, 25, 25, 20, 20, 20, 20, 20, 20, 15, 15, 0, 15, 20, 20],
    "Monumento":  [30, 30, 30, 30, 30, 25, 25, 25, 25, 25, 20, 20, 20, 20, 20, 20, 15, 0, 20, 20],
    "Balintawak": [35, 35, 35, 30, 30, 30, 30, 30, 25, 25, 25, 25, 25, 20, 20, 20, 20, 20, 0, 20],
    "Roosevelt":  [35, 35, 35, 35, 35, 30, 30, 30, 30, 30, 25, 25, 25, 25, 25, 25, 20, 20, 20, 0]
};

    // Fare Matrix for Stored Value Card (SVC)
    const fareMatrixSVC = {
    "Baclaran":   [0, 14, 15, 16, 17, 18, 19, 20, 22, 23, 23, 24, 25, 26, 27, 28, 29, 30, 33, 35],
    "EDSA":       [14, 0, 15, 15, 17, 18, 19, 20, 21, 22, 23, 24, 24, 25, 26, 27, 28, 29, 32, 34],
    "Libertad":   [15, 15, 0, 14, 15, 16, 17, 18, 20, 21, 22, 22, 23, 24, 25, 26, 27, 28, 31, 33],
    "Gil Puyat":  [16, 15, 14, 0, 15, 16, 17, 17, 19, 20, 21, 21, 22, 23, 24, 25, 26, 27, 30, 32],
    "Vito Cruz":  [17, 17, 15, 15, 0, 14, 15, 16, 18, 19, 19, 20, 21, 22, 23, 24, 25, 26, 29, 31],
    
    "Quirino":    [18, 18, 16, 16, 14, 0, 14, 15, 17, 18, 18, 19, 20, 21, 22, 23, 24, 25, 28, 30],
    "Pedro Gil":  [19, 19, 17, 17, 15, 14, 0, 14, 16, 17, 17, 18,19, 20, 21, 22, 23, 24, 27, 29],
    "UN Avenue":  [20, 20, 18, 17, 16, 15, 14, 0, 15, 16, 16, 17, 18, 19, 20, 21, 22, 23, 26, 28],
    "Central":    [22, 21, 20, 19, 18, 17, 16, 15, 0, 14, 15, 16, 17, 17, 18, 19, 20, 22, 24, 27],
    "Carriedo":   [23, 22, 21, 20, 19, 18, 17, 16, 14, 0, 14, 15, 16, 16, 18, 18, 20, 21, 24, 26],
    
    "Doroteo Jose":[23, 23, 22, 21, 19, 18, 17, 16, 15, 14, 0, 14, 15, 16, 17, 18, 19, 20, 23, 25],
    "Bambang":    [24, 24, 22, 21, 20, 19, 18, 17, 16, 15, 14, 0, 14, 15, 16, 17, 18, 19, 22, 24],
    "Tayuman":    [25, 24, 23, 22, 21, 20, 19, 18, 17, 16, 15, 14, 0, 14, 15, 16, 17, 18, 21, 23],
    "Blumentritt":[26, 25, 24, 23, 22, 21, 20, 19, 17, 16, 16, 15, 14, 0, 14, 15, 16, 18, 20, 23],
    "Abad Santos":[27, 26, 25, 24, 23, 22, 21, 20, 18, 18, 17, 16, 15, 14, 0, 14, 15, 17, 19, 22],
    
    "R. Papa":    [28, 27, 26, 25, 24, 23, 22, 21, 19, 18, 18, 17, 16, 15, 14, 0, 14, 16, 18, 21],
    "5th Avenue": [29, 28, 27, 26, 25, 24, 23, 22, 20, 20, 19, 18, 17, 16, 15, 14, 0, 15, 17, 20],
    "Monumento":  [30, 29, 28, 27, 26, 25, 24, 23, 22, 21, 20, 19, 18, 18, 17, 16, 15, 0, 16, 18],
    "Balintawak": [33, 32, 31, 30, 29, 28, 27, 26, 24, 24, 23, 22, 21, 20, 19, 18, 17, 16, 0, 16],
    "Roosevelt":  [35, 34, 33, 32, 31, 30, 29, 28, 27, 26, 25, 24, 23, 23, 22, 21, 20, 18, 16, 0]
};

    // Populate dropdowns with station names
    const originDropdown = document.getElementById('origin');
    const destinationDropdown = document.getElementById('destination');

    stations.forEach(station => {
        const option1 = document.createElement('option');
        const option2 = document.createElement('option');
        option1.value = station;
        option2.value = station;
        option1.textContent = station;
        option2.textContent = station;
        originDropdown.appendChild(option1);
        destinationDropdown.appendChild(option2);
    });

    // Calculate fare
    function calculateFare() {
        const fareType = document.getElementById('fareType').value;
        const origin = document.getElementById('origin').value;
        const destination = document.getElementById('destination').value;

        if (origin === destination) {
            alert("Origin and destination cannot be the same.");
            return;
        }

        // Choose the appropriate fare matrix
        const selectedFareMatrix = fareType === 'svc' ? fareMatrixSVC : fareMatrixSJT;
        const fare = selectedFareMatrix[origin][stations.indexOf(destination)];

        // Display the fare
        const fareResult = document.getElementById('fareResult');
        const fareValue = document.getElementById('fareValue');

        fareValue.textContent = fare;
        fareResult.style.display = 'block';
    }
</script>

             	<!-- Image Gallery JS rito -->
             	
<script>

$(document).ready(function() {
  $('.image-gallery img').click(function() {
    setTimeout(function() { 
      var modal = $('#' + $(this).data('bs-target')); 
      var modalBody = modal.find('.modal-body');
      modalBody.css('marginTop', '100px'); 
    }.bind(this), 10); // Adjust the delay (in milliseconds) if needed
  });
});

</script>

    </body>
</html>



