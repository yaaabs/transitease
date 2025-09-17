@extends('layout')

@section('title', "TransitEase - Home")

@section('content')

<!-- Sticky Sidebar Ad for Desktop -->
<div class="sidebar-ad-container" data-ad-id="sidebar-1">
	<div class="sidebar-ad-unit">
		<div class="sidebar-ad-label">Advertisement</div>
		<div class="sidebar-ad-content">
			<div class="sidebar-ad-close" onclick="closeAd('sidebar-1')">×</div>
			<div class="sidebar-ad-icon">
				<img src="{{ asset('img/customodoro-icon.png') }}" alt="Customodoro Logo" class="ad-logo-img">
			</div>
			<h4 class="sidebar-ad-title">Customodoro</h4>
			<p class="sidebar-ad-desc">Customodoro is a powerful and fully customizable Pomodoro timer designed to help students, professionals, and creatives stay focused and productive.</p>
			<div class="sidebar-ad-features">
				<div class="sidebar-feature">✓ Classic Pomodoro</div>
				<div class="sidebar-feature">✓ Reverse Pomodoro</div>
				<div class="sidebar-feature">✓ 100% Free To Use</div>
			</div>
			<a href="https://customodoro.vercel.app/" target="_blank" rel="noopener" class="sidebar-ad-cta">
				Try Customodoro Now
			</a>
			<div class="sidebar-ad-sponsor">Sponsored</div>
		</div>
	</div>
</div>

<style>
.why-choose .choose-right{
	height:100%;
	width:100%;
	background-image:url('img/143.jpg');
	background-size:cover;
	background-position:center;
	background-repeat:no-repeat;
	position:relative;
}
.services {
        background-image: url('img/143.jpg');
        background-size: cover; /* Ensure the background image covers the entire section */
        background-position: center; /* Center the background image */
        background-repeat: no-repeat; /* Prevent the background image from repeating */
        padding: 50px; /* Add some padding to the section */
        color: white; /* Set text color to white for better contrast */
}

/* Professional AdSense-style Advertisement */
.ad-container {
    max-width: 1200px;
    margin: 30px auto;
    padding: 0 15px;
    position: relative;
}

.ad-label {
    font-size: 11px;
    color: #70757a;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    margin-bottom: 8px;
    font-weight: 400;
    text-align: center;
}

.ad-unit {
    background: #ffffff;
    border: 1px solid #e8eaed;
    border-radius: 8px;
    padding: 20px;
    position: relative;
    box-shadow: 0 1px 6px rgba(32,33,36,.28);
    transition: box-shadow 0.3s ease;
    overflow: hidden;
}

.ad-unit:hover {
    box-shadow: 0 2px 12px rgba(32,33,36,.35);
}

.ad-content-wrapper {
    display: flex;
    gap: 20px;
    align-items: flex-start;
}

.ad-visual {
    display: flex;
    flex-direction: column;
    align-items: center;
    flex-shrink: 0;
    gap: 8px;
}

.ad-icon {
    width: 48px;
    height: 48px;
    border-radius: 8px;
    background: linear-gradient(45deg, #4285f4, #34a853);
    display: flex;
    align-items: center;
    justify-content: center;
    box-shadow: 0 2px 8px rgba(66, 133, 244, 0.3);
}

.ad-badge {
    background: #34a853;
    color: white;
    font-size: 10px;
    padding: 2px 6px;
    border-radius: 3px;
    font-weight: 500;
    text-transform: uppercase;
    letter-spacing: 0.3px;
}

.ad-text-content {
    flex: 1;
    min-width: 0;
}

.ad-headline {
    color: #1a73e8;
    font-size: 18px;
    font-weight: 500;
    margin: 0 0 8px 0;
    line-height: 1.3;
    cursor: pointer;
    text-decoration: none;
}

.ad-headline:hover {
    text-decoration: underline;
}

.ad-description {
    color: #5f6368;
    font-size: 14px;
    line-height: 1.4;
    margin: 0 0 12px 0;
}

.ad-features {
    display: flex;
    gap: 16px;
    margin-bottom: 16px;
    flex-wrap: wrap;
}

.ad-feature {
    font-size: 12px;
    color: #34a853;
    display: flex;
    align-items: center;
    gap: 4px;
}

.ad-cta-section {
    display: flex;
    align-items: center;
    gap: 12px;
    flex-wrap: wrap;
}

.ad-cta-button {
    background: #1a73e8;
    color: white;
    padding: 10px 20px;
    border-radius: 4px;
    text-decoration: none;
    font-weight: 500;
    font-size: 14px;
    display: inline-flex;
    align-items: center;
    gap: 6px;
    transition: background-color 0.2s ease;
    border: none;
    cursor: pointer;
}

.ad-cta-button:hover {
    background: #1557b0;
    color: white;
    text-decoration: none;
}

.ad-cta-button:active,
.ad-cta-button:focus {
    background: #1557b0;
    color: white !important;
    text-decoration: none;
    outline: none;
}

.ad-cta-button:visited {
    color: white;
    text-decoration: none;
}

.ad-domain {
    color: #34a853;
    font-size: 12px;
    font-weight: 500;
}

.ad-close {
    position: absolute;
    top: 8px;
    right: 8px;
    background: none;
    border: none;
    color: #5f6368;
    cursor: pointer;
    padding: 4px;
    border-radius: 50%;
    width: 24px;
    height: 24px;
    display: flex;
    align-items: center;
    justify-content: center;
    opacity: 0.7;
    transition: all 0.2s ease;
}

.ad-close:hover {
    background: #f1f3f4;
    opacity: 1;
}

/* Responsive Design */
@media (max-width: 768px) {
    .ad-container {
        margin: 20px auto;
        padding: 0 10px;
    }
    
    .ad-unit {
        padding: 16px;
    }
    
    .ad-content-wrapper {
        flex-direction: column;
        gap: 16px;
        text-align: center;
    }
    
    .ad-visual {
        align-self: center;
    }
    
    .ad-features {
        justify-content: center;
    }
    
    .ad-cta-section {
        justify-content: center;
        flex-direction: column;
        gap: 8px;
    }
    
    .ad-headline {
        font-size: 16px;
    }
    
    .ad-description {
        font-size: 13px;
    }
}

@media (max-width: 480px) {
    .ad-unit {
        padding: 12px;
    }
    
    .ad-headline {
        font-size: 15px;
    }
    
    .ad-features {
        flex-direction: column;
        gap: 8px;
    }
    
    .ad-cta-button {
        padding: 8px 16px;
        font-size: 13px;
    }
}

/* Sticky Sidebar Ad */
.sidebar-ad-container {
    position: fixed;
    right: 20px;
    top: 50%;
    transform: translateY(-50%);
    z-index: 999;
    width: 280px;
    display: block;
}

.sidebar-ad-unit {
    background: #fff;
    border-radius: 12px;
    box-shadow: 0 8px 32px rgba(0, 0, 0, 0.12);
    overflow: hidden;
    border: 1px solid #e1e5e9;
}

.sidebar-ad-label {
    background: #f8f9fa;
    color: #70757a;
    font-size: 10px;
    text-align: center;
    padding: 6px;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    border-bottom: 1px solid #e1e5e9;
}

.sidebar-ad-content {
    padding: 20px 16px;
    text-align: center;
    position: relative;
}

.sidebar-ad-close {
    position: absolute;
    top: 8px;
    right: 8px;
    background: none;
    border: none;
    font-size: 16px;
    color: #70757a;
    cursor: pointer;
    width: 24px;
    height: 24px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
}

.sidebar-ad-close:hover {
    background: #f1f3f4;
}

.sidebar-ad-icon {
    margin: 0 auto 12px;
    width: 48px;
    height: 48px;
    display: flex;
    align-items: center;
    justify-content: center;
}

/* Logo Image Styling */
.ad-logo-img {
    width: 100%;
    height: 100%;
    object-fit: contain;
    border-radius: 8px;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
    background: #fff;
    padding: 2px;
}

.sidebar-ad-icon .ad-logo-img {
    width: 48px;
    height: 48px;
}

.content-ad-icon .ad-logo-img {
    width: 40px;
    height: 40px;
}

.inline-ad-logo .ad-logo-img {
    width: 48px;
    height: 48px;
}

.sidebar-ad-title {
    color: #1a73e8;
    font-size: 18px;
    font-weight: 600;
    margin: 0 0 8px 0;
}

.sidebar-ad-desc {
    color: #5f6368;
    font-size: 13px;
    line-height: 1.4;
    margin: 0 0 16px 0;
}

.sidebar-ad-features {
    margin-bottom: 16px;
}

.sidebar-feature {
    font-size: 11px;
    color: #34a853;
    margin-bottom: 4px;
}

.sidebar-ad-cta {
    background: #1a73e8;
    color: white;
    padding: 10px 20px;
    border-radius: 6px;
    text-decoration: none;
    font-weight: 500;
    font-size: 14px;
    display: inline-block;
    margin-bottom: 12px;
    transition: background-color 0.2s ease;
}

.sidebar-ad-cta:hover {
    background: #1557b0;
    color: white;
    text-decoration: none;
}

.sidebar-ad-cta:active,
.sidebar-ad-cta:focus {
    background: #1557b0;
    color: white !important;
    text-decoration: none;
    outline: none;
}

.sidebar-ad-cta:visited {
    color: white;
    text-decoration: none;
}

.sidebar-ad-sponsor {
    color: #34a853;
    font-size: 10px;
    font-weight: 500;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

/* Content Ad Styles */
.content-ad-container {
    margin: 40px 0;
    padding: 0 15px;
}

.content-ad-wrapper {
    max-width: 1200px;
    margin: 0 auto;
}

.content-ad-label {
    text-align: center;
    font-size: 11px;
    color: #70757a;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    margin-bottom: 12px;
}

.content-ad-unit {
    background: #fff;
    border: 1px solid #e1e5e9;
    border-radius: 12px;
    padding: 24px;
    position: relative;
    box-shadow: 0 2px 16px rgba(0, 0, 0, 0.08);
}

.content-ad-close {
    position: absolute;
    top: 12px;
    right: 12px;
    background: none;
    border: none;
    font-size: 18px;
    color: #70757a;
    cursor: pointer;
    width: 28px;
    height: 28px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
}

.content-ad-close:hover {
    background: #f1f3f4;
}

.content-ad-body {
    display: flex;
    gap: 20px;
    align-items: flex-start;
}

.content-ad-visual {
    flex-shrink: 0;
    text-align: center;
}

.content-ad-badge {
    background: #34a853;
    color: white;
    font-size: 10px;
    padding: 4px 8px;
    border-radius: 4px;
    margin-bottom: 12px;
    display: inline-block;
    text-transform: uppercase;
    letter-spacing: 0.3px;
}

.content-ad-icon {
    margin-bottom: 8px;
    display: flex;
    align-items: center;
    justify-content: center;
}

.content-ad-text {
    flex: 1;
}

.content-ad-headline {
    color: #1a73e8;
    font-size: 20px;
    font-weight: 600;
    margin: 0 0 12px 0;
    line-height: 1.3;
}

.content-ad-description {
    color: #5f6368;
    font-size: 15px;
    line-height: 1.5;
    margin: 0 0 16px 0;
}

.content-ad-benefits {
    display: flex;
    gap: 20px;
    margin-bottom: 16px;
    flex-wrap: wrap;
}

.benefit-item {
    font-size: 13px;
    color: #34a853;
    font-weight: 500;
}

.content-ad-action {
    margin-left: auto;
    text-align: right;
    flex-shrink: 0;
}

.content-ad-button {
    background: #1a73e8;
    color: white;
    padding: 12px 24px;
    border-radius: 6px;
    text-decoration: none;
    font-weight: 500;
    font-size: 15px;
    display: inline-flex;
    align-items: center;
    gap: 8px;
    margin-bottom: 8px;
    transition: background-color 0.2s ease;
}

.content-ad-button:hover {
    background: #1557b0;
    color: white;
    text-decoration: none;
}

.content-ad-button:active,
.content-ad-button:focus {
    background: #1557b0;
    color: white !important;
    text-decoration: none;
    outline: none;
}

.content-ad-button:visited {
    color: white;
    text-decoration: none;
}

.content-ad-url {
    color: #34a853;
    font-size: 12px;
    font-weight: 500;
}

/* Inline Ad Styles */
.inline-ad-container {
    margin: 50px 0;
    background: #f8f9fa;
    padding: 30px 0;
}

.inline-ad-unit {
    background: #fff;
    border-radius: 12px;
    padding: 0;
    box-shadow: 0 4px 24px rgba(0, 0, 0, 0.1);
    overflow: hidden;
}

.inline-ad-header {
    background: #f8f9fa;
    padding: 8px 16px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    border-bottom: 1px solid #e1e5e9;
}

.inline-ad-label {
    font-size: 10px;
    color: #70757a;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

.inline-ad-close {
    background: none;
    border: none;
    font-size: 16px;
    color: #70757a;
    cursor: pointer;
    padding: 4px;
}

.inline-ad-content {
    padding: 24px;
    display: flex;
    gap: 24px;
    align-items: center;
}

.inline-ad-left {
    display: flex;
    gap: 16px;
    align-items: center;
    flex: 1;
}

.inline-ad-logo {
    flex-shrink: 0;
    display: flex;
    align-items: center;
    justify-content: center;
}

.inline-ad-title {
    color: #1a73e8;
    font-size: 18px;
    font-weight: 600;
    margin: 0 0 4px 0;
}

.inline-ad-subtitle {
    color: #5f6368;
    font-size: 14px;
    margin: 0 0 8px 0;
}

.inline-ad-rating {
    display: flex;
    align-items: center;
    gap: 8px;
}

.stars {
    color: #fbbc04;
    font-size: 14px;
}

.rating-text {
    color: #70757a;
    font-size: 12px;
}

.inline-ad-right {
    flex-shrink: 0;
    text-align: right;
}

.inline-ad-features {
    margin-bottom: 16px;
}

.feature-highlight {
    font-size: 12px;
    color: #34a853;
    margin-bottom: 4px;
}

.inline-ad-cta {
    background: #1a73e8;
    color: white;
    padding: 12px 24px;
    border-radius: 6px;
    text-decoration: none;
    font-weight: 500;
    font-size: 14px;
    display: inline-block;
    transition: background-color 0.2s ease;
}

.inline-ad-cta:hover {
    background: #1557b0;
    color: white;
    text-decoration: none;
}

.inline-ad-cta:active,
.inline-ad-cta:focus {
    background: #1557b0;
    color: white !important;
    text-decoration: none;
    outline: none;
}

.inline-ad-cta:visited {
    color: white;
    text-decoration: none;
}

.inline-ad-footer {
    background: #f8f9fa;
    padding: 8px 16px;
    border-top: 1px solid #e1e5e9;
    text-align: center;
}

.sponsored-label {
    font-size: 10px;
    color: #70757a;
}

/* Responsive Design for New Ads */
@media (max-width: 1200px) {
    .sidebar-ad-container {
        display: none;
    }
}

@media (max-width: 768px) {
    .content-ad-body {
        flex-direction: column;
        text-align: center;
    }
    
    .content-ad-action {
        margin-left: 0;
        text-align: center;
    }
    
    .inline-ad-content {
        flex-direction: column;
        text-align: center;
    }
    
    .inline-ad-left {
        justify-content: center;
    }
    
    .inline-ad-right {
        text-align: center;
    }
    
    .content-ad-benefits {
        justify-content: center;
    }
}

@media (max-width: 480px) {
    .content-ad-unit,
    .inline-ad-unit {
        margin: 0 10px;
    }
    
    .content-ad-headline {
        font-size: 18px;
    }
    
    .inline-ad-title {
        font-size: 16px;
    }
    
    .content-ad-benefits {
        flex-direction: column;
        gap: 8px;
    }
}

</style>
<!-- Preloader -->
<div class="preloader">
    <div class="loader">
        <div class="loader-outter"></div>
        <div class="loader-inner"></div>

        <div class="indicator"> 
            <img src="img/PLEASE.png" alt="Preloader Logo" class="preloader-logo">
        </div>
    </div>
</div>
<!-- End Preloader -->

		
<!-- Pindutin mo -->
<ul class="pro-features" id="proFeatures">
        <a class="get-pro" href="#" id="getProBtn">Click Here!</a>
        <button class="close-btn" onclick="toggleCard()">×</button>
        <li class="big-title">Hi There!</li>
        <li class="title">This is your Section Navigation</li>
        <li>&nbsp;</li>
        <li>Feel free to choose the sections below.</li>
        <li></li>
        <li></li>
        <li></li>
        <div class="button">
            <a href="#fare" class="btn">Fare Calculator Section</a>
            <a href="#header" class="btn">Header/Carousel Section</a>
            <a href="#schedule" class="btn">LRT Line 1 Section</a>
            <a href="#gg" class="btn">Counter Section</a>
            <a href="#vid" class="btn">Video Sections</a>
            <a href="#install" class="btn">Mobile App Section</a>
            <a href="#announce" class="btn">Announcement Section</a>
            <a href="#tix" class="btn">Ticket Section</a>
            <a href="#blog" class="btn">Articles Section</a>
            <a href="#footer" class="btn">Footer Section</a>
        </div>
    </ul>
		
		
		<!-- Slider Area -->
		<section class="slider" id="header">
			<div class="hero-slider">
				<!-- Start Single Slider -->
				<div class="single-slider" style="background-image:url('img/122.jpeg')">
					<div class="container">
						<div class="row">
							<div class="col-lg-7">	
								<div class="text">
									<h1>We Provide <span>Transit</span> Services with <span>Ease!</span></h1>
									<p>In support of our mission to provide a convenient journey for commuters, we developed the TransitEase mobile app.</p>
									<div class="button">
<a href="https://www.mediafire.com/file/swa82mbywqbrlee/TransitEase.apk/file" 
   class="btn" 
   onclick="openPopup(event, 'https://www.mediafire.com/file/swa82mbywqbrlee/TransitEase.apk/file')">Get the App!</a>
										<a href="{{ route('page') }}" class="btn primary">Learn More</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- End Single Slider -->
				<!-- Start Single Slider -->
				<div class="single-slider" style="background-image:url('img/125.jpg')">
					<div class="container">
						<div class="row">
							<div class="col-lg-7">
								<div class="text">
									<h1>Make commuting <span>simple</span>,  your gateway to hassle-free travel.</h1>
									<p>In support of our mission to provide a convenient journey for commuters, we developed the TransitEase mobile app.</p>
									<div class="button">
									<a href="https://www.mediafire.com/file/swa82mbywqbrlee/TransitEase.apk/file" 
   class="btn" 
   onclick="openPopup(event, 'https://www.mediafire.com/file/swa82mbywqbrlee/TransitEase.apk/file')">Get the App!</a>
										<a href="{{ route('page') }}" class="btn primary">Learn More</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Start End Slider -->
				<!-- Start Single Slider -->
				<div class="single-slider" style="background-image:url('img/143.jpg')">
					<div class="container">
						<div class="row">
							<div class="col-lg-7">
								<div class="text">
									<h1><span>Download</span> TransitEase App, and <span>Register</span> your account now! </h1>
									<p>In support of our mission to provide a convenient journey for commuters, we developed the TransitEase mobile app.</p>
									<div class="button">
									<a href="https://www.mediafire.com/file/swa82mbywqbrlee/TransitEase.apk/file" 
   class="btn" 
   onclick="openPopup(event, 'https://www.mediafire.com/file/swa82mbywqbrlee/TransitEase.apk/file')">Get the App!</a>
										<a href="{{ route('page') }}" class="btn primary">Learn More</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- End Single Slider -->
			</div>
		</section>
		<!--/ End Slider Area -->
		
		<!-- Advertisement Section -->
		<div class="ad-container">
			<div class="ad-label">Advertisement</div>
			<div class="ad-unit" data-ad-id="main-content-1">
				<div class="ad-content-wrapper">
					<div class="ad-visual">
						<div class="ad-icon">
							<img src="{{ asset('img/customodoro-icon.png') }}" alt="Customodoro Logo" class="ad-logo-img">
						</div>
						<div class="ad-badge">Sponsored</div>
					</div>
					<div class="ad-text-content">
						<h3 class="ad-headline">Boost Your Productivity with Customodoro</h3>
						<p class="ad-description">Revolutionary timer with Classic Pomodoro OR Reverse Mode - work as long as you want and earn breaks based on your effort. Perfect for deep work!</p>
						<div class="ad-features">
							<span class="ad-feature">✓ Classic 25min Pomodoro</span>
							<span class="ad-feature">✓ Revolutionary Reverse Mode</span>
							<span class="ad-feature">✓ Work longer = Bigger breaks</span>
						</div>
						<div class="ad-cta-section">
							<a href="https://customodoro.vercel.app/" target="_blank" rel="noopener" class="ad-cta-button">
								Try Free Now
								<svg width="16" height="16" viewBox="0 0 24 24" fill="none">
									<path d="M7 17L17 7M17 7H7M17 7V17" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
								</svg>
							</a>
							<span class="ad-domain">customodoro.vercel.app</span>
						</div>
					</div>
				</div>
				<button class="ad-close" onclick="closeAd('main-content-1')" aria-label="Close ad">
					<svg width="14" height="14" viewBox="0 0 24 24" fill="none">
						<path d="M18 6L6 18M6 6L18 18" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
					</svg>
				</button>
			</div>
		</div>
		
		<!-- Start Schedule Area -->
		<section class="schedule" id="schedule">
			<div class="container"><br><br>
				<div class="schedule-inner">
					<div class="row">
					<div class="col-lg-4 col-md-12 col-12">
							<!-- single-schedule -->
							<div class="single-schedule last">
								<div class="inner">
									<div class="icon">
										<i class="icofont-ui-clock"></i>
									</div>
									<div class="single-content">
										<center><span>LRT-1 Train Service Hours (Special Days)</span></center><br>
										<h4>Weekends & Holidays</h4>
										<ul class="time-sidual"><br>
											<li class="day"><I>**Both Stations</I> - First Train <span><B>5:00 AM</B></span></li><br>
											<li class="day"><I>*Baclaran Station</I> - Last Train <span><B>9:30 PM</B></span></li>
											<li class="day"><I>*Fernando Poe Jr. Station</I> - LT <span><B>9:45 PM</B></span></li>
										</ul>
										<a href="{{ route('ts') }}">LEARN MORE<i class="fa fa-long-arrow-right"></i></a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-12 col-12">
							<!-- single-schedule -->
							<div class="single-schedule last">
								<div class="inner">
									<div class="icon">
										<i class="icofont-ui-clock"></i>
									</div>
									<div class="single-content">
										<center><span>LRT-1 Train Service Hours (Regular Day)</span></center><br>
										<h4>First Train</h4>
										<ul class="time-sidual"><br>
											<li class="day"><I>Monday - Friday</I> </li><br>
											<li class="day"><I>*Baclaran Station</I> <span><B>4:30 AM</B></span></li>
											<li class="day"><I>*Fernando Poe Jr. Station</I> <span><B>4:30 AM</B></span></li>
										</ul>
										<a href="{{ route('ts') }}">LEARN MORE<i class="fa fa-long-arrow-right"></i></a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-12 col-12">
							<!-- single-schedule -->
							<div class="single-schedule last">
								<div class="inner">
									<div class="icon">
										<i class="icofont-ui-clock"></i>
									</div>
									<div class="single-content">
										<center><span>LRT-1 Train Service Hours (Regular Day)</span></center><br>
										<h4>Last Train</h4>
										<ul class="time-sidual"><br>
											<li class="day"><I>Monday - Friday</I> </li><br>
											<li class="day"><I>*Baclaran Station</I> <span><B>10:00 PM</B></span></li>
											<li class="day"><I>*Fernando Poe Jr. Station </I><span><B>10:15 PM</B></span></li>
										</ul>
										<a href="{{ route('ts') }}">LEARN MORE<i class="fa fa-long-arrow-right"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/End Start schedule Area -->

		<!-- Start Feautes -->
		<section class="Feautes section" id="LRT1">
			<div class="container"><br><br>
				<div class="row">
					<div class="col-lg-12">
						<div class="section-title">
							<h2>LRT Line 1 (Metro Manila)</h2>
							<img src="img/Logooo.png" alt="#">
							<p>The Light Rail Transit Line 1, commonly referred to as LRT Line 1 or LRT-1, is a light rapid transit system line in Metro Manila, Philippines, operated by Light Rail Manila Corporation (LRMC) and owned by the Light Rail Transit Authority (LRTA) as part of the Manila Light Rail Transit System.</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-4 col-12">
						<!-- Start Single features -->
						<div class="single-features">
							<div class="signle-icon">
							<i class="icofont-toy-train"></i>
							</div>
							<h3>Route</h3>
							<p>The line links the cities of Quezon City, Caloocan, Manila, and Pasay, with the upcoming stations passing through the cities of Parañaque, Las Piñas, and Bacoor in Cavite.</p>
						</div>
						<!-- End Single features -->
					</div>
					<div class="col-lg-4 col-12">
						<!-- Start Single features -->
						<div class="single-features">
							<div class="signle-icon">
							<i class="icofont-train-line"></i>
							</div>
							<h3>Operation & Services</h3>
							<p>The line operates from 4:30 a.m. PST (UTC+8) until 10:15 p.m. on weekdays, and 5:00 a.m. until 9:45 p.m on weekends and holidays.[12] It operates almost every day of the year unless otherwise announced.</p>
						</div>
						<!-- End Single features -->
					</div>
					<div class="col-lg-4 col-12">
						<!-- Start Single features -->
						<div class="single-features last">
							<div class="signle-icon" id="gg">
							<i class="icofont-train-steam"></i>
							</div>
							<h3>Stations</h3>
							<p>The line serves 20 stations along its route. A twenty-first station is yet to be constructed. Three stations serve as connecting stations between other lines in the metro.</p>
						</div>
						<!-- End Single features -->
					</div>
				</div>
			</div>
		</section>
		<!--/ End Feautes -->
		
		<!-- Start Fun-facts -->
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
		
		<!-- Start Why choose -->
		<section class="why-choose section" id="vid">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section-title">
							<h2>LRT-1 4th Generation Full Ride Tour</h2>
							<img src="img/Logooo.png" alt="#">
							<p>The NEW Trains are Finally Here! Trying the 4th Generation LRT-1 from Baclaran-Roosevelt Philippines.</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6 col-12">
						<!-- Start Choose Left -->
						<div class="choose-left">
							<h3>New LRT-1 Trains?</h3>
							<p>Join us on an exclusive tour of the LRT-1 4th Generation trains! Experience the ride in this immersive video, showcasing modern amenities and the enhanced comfort of our newest fleet. Watch now! </p>
							
							<p>Discover more about LRT-1 by watching our additional videos by clicking the play button! Explore the latest updates, behind-the-scenes footage, and passenger experiences to stay informed and excited about our services. Don't miss our 4th Generation Full Ride Tour on YouTube. </p>
							<div class="row">
								<div class="col-lg-6">
									<ul class="list">
										<li><a class="video video-popup mfp-iframe" href="https://www.youtube.com/watch?v=TP1N3vkrfB8" target="_blank"><i class="fa fa-caret-right"></i></a>How to use the Philippine Metro (LRT/MRT)</li>

										<li><a class="video video-popup mfp-iframe" href="https://www.youtube.com/watch?v=_6UyoczKBVA" target="_blank"><i class="fa fa-caret-right"></i></a>LRT-1 Safety Reminder: To retrieve fallen items, please alert the security</li>
												
										<li><a class="video video-popup mfp-iframe" href="https://www.youtube.com/watch?v=drVAQrWwfbY" target="_blank"><i class="fa fa-caret-right"></i></a>LRT-1 Safety Reminder: Keep hands away from the train door edge</li>
									</ul>
								</div>
								<div class="col-lg-6">
									<ul class="list">
											
										<li><a class="video video-popup mfp-iframe" href="https://www.youtube.com/watch?v=tw0wIjUaAsQ" target="_blank"><i class="fa fa-caret-right"></i></a>LRT-1 3G (LRTA 1200 Class and 1G) passing Monumento Station</li>
												
										<li><a class="video video-popup mfp-iframe" href="https://www.youtube.com/watch?v=u6Byo53EWfA" target="_blank"><i class="fa fa-caret-right"></i></a>4th Generation Trains taking a test run on the LRT-1 Cavite Extension</li>
										
										<li><a class="video video-popup mfp-iframe" href="https://www.youtube.com/watch?v=ODsoKi7Ug6Y" target="_blank"><i class="fa fa-caret-right"></i></a>The LRT-1 4th Generation Train Set (Animated Video)</li>
											<br>
										<li><p><i class="icofont-info-circle"></i> <b>Note:</b> You can click the small play buttons to play the videos.</p></li>

									</ul>
								</div>
							</div>
						</div>
						<!-- End Choose Left -->
					</div>
					<div class="col-lg-6 col-12">
						<!-- Start Choose Rights -->
						<div class="choose-right">
							<div class="video-image">
								<!-- Video Animation -->
								<div class="promo-video">
									<div class="waves-block">
										<div class="waves wave-1"></div>
										<div class="waves wave-2"></div>
										<div class="waves wave-3"></div>
									</div>
								</div>
								<!--/ End Video Animation -->
								<a class="video video-popup mfp-iframe"  href="https://www.youtube.com/watch?v=RUitsszSAHI"><i class="fa fa-play"></i></a>
							</div>
						</div>
						<!-- End Choose Rights -->
					</div>
				</div>
			</div>
		</section>
		<!--/ End Why choose -->
		
		<!-- Start Call to action -->
		<section class="call-action overlay" data-stellar-background-ratio="0.5" id="fare">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-12">
						<div class="content">
							<h2>LRT-1 Fare Calculator</h2>
							<p><b>Plan your LRT-1 journey with ease!</b> Our comprehensive Fare Matrix Calculator provides you with the latest train schedules, fare prices, and detailed route information.  Stay updated on important announcements and service changes to ensure a smooth and efficient commute. Calculate your fare now and travel with confidence!</p>
							<div class="button">
								<a href="{{ route('route') }}" class="btn">Wanna Know about the Stations?</a>
								<a href="{{ route('fp') }}" class="btn second">Fare Calculator<i class="fa fa-long-arrow-right"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/ End Call to action -->
		
		<!-- Content Ad Placement -->
		<div class="content-ad-container" data-ad-id="content-1">
			<div class="content-ad-wrapper">
				<div class="content-ad-label">Advertisement</div>
				<div class="content-ad-unit">
					<button class="content-ad-close" onclick="closeAd('content-1')" aria-label="Close ad">×</button>
					<div class="content-ad-body">
						<div class="content-ad-visual">
							<div class="content-ad-badge">Sponsored</div>
							<div class="content-ad-icon">
								<img src="{{ asset('img/customodoro-icon.png') }}" alt="Customodoro Logo" class="ad-logo-img">
							</div>
						</div>
						<div class="content-ad-text">
							<h3 class="content-ad-headline">Transform Your Focus with Customodoro</h3>
							<p class="content-ad-description">Revolutionary dual-mode timer: Classic Pomodoro for structured work, or Reverse Mode where you work as long as you want and earn breaks based on effort! <b>Customodoro</b> is a powerful and fully customizable Pomodoro timer designed to help <b><i>students, professionals, and creatives</b></i> stay focused and productive.</p>
							<div class="content-ad-benefits">
								<span class="benefit-item">🧠 Enhanced Mental Clarity</span>
								<span class="benefit-item">⚡ 25-Minute Focus Session</span>
								<span class="benefit-item">🎯 70% Productivity Boost</span>
								<span class="benefit-item">📚 Master Time Management</span>
						</div>
						<div class="content-ad-action">
							<a href="https://customodoro.vercel.app/" target="_blank" rel="noopener" class="content-ad-button">
								Try Customodoro
								<svg width="16" height="16" viewBox="0 0 24 24" fill="none">
									<path d="M5 12h14M12 5l7 7-7 7" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
								</svg>
							</a>
							<div class="content-ad-url">customodoro.vercel.app</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<!-- Start portfolio -->
		<section class="portfolio section" id="install">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section-title">
							<h2>Get Started with Our Mobile App</h2>
							<img src="img/Logooo.png" alt="#">
							<p>Follow our step-by-step tutorial to easily install and start using our mobile application. From downloading to navigating key features, we've got you covered for a seamless experience.</p>
						</div>
					</div>
				</div>
			</div>
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-12 col-12">
						<div class="owl-carousel portfolio-slider">
							<div class="single-pf">
								<img src="img/000.png" alt="#">
								<a href="{{ route('lrt') }}" class="btn">View Details</a>
							</div>
							<div class="single-pf">
								<img src="img/111.png" alt="#">
								<a href="{{ route('lrt') }}" class="btn">View Details</a>
							</div>
							<div class="single-pf">
								<img src="img/222.png" alt="#">
								<a href="{{ route('lrt') }}" class="btn">View Details</a>
							</div>
							<div class="single-pf">
								<img src="img/333.png" alt="#">
								<a href="{{ route('lrt') }}" class="btn">View Details</a>
							</div>
							<div class="single-pf">
								<img src="img/000.png" alt="#">
								<a href="{{ route('lrt') }}" class="btn">View Details</a>
							</div>
							<div class="single-pf">
								<img src="img/111.png" alt="#">
								<a href="{{ route('lrt') }}" class="btn">View Details</a>
							</div>
							<div class="single-pf">
								<img src="img/222.png" alt="#">
								<a href="{{ route('lrt') }}" class="btn">View Details</a>
							</div>
							<div class="single-pf">
								<img src="img/333.png" alt="#">
								<a href="{{ route('lrt') }}" class="btn">View Details</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/ End portfolio -->
		
		<!-- Start service -->
		<section class="services section" id="announce">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section-title">
							<h2>Announcement</h2>
							<img src="img/Logooo1.png" alt="#">
							<p>Recent News about LRT-1 and LRMC. Click the headlines to read more about the announcements.</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-4 col-md-6 col-12">
						<!-- Start Single Service -->
						<div class="single-service">
							<i class="icofont-free-delivery"></i>
							<h4><a href="https://lrmc.ph/2024/06/11/lrmc-to-offer-free-lrt-1-rides-for-126th-philippine-independence-day/">LRMC to offer free LRT-1 rides</a></h4>
							<p>LRT-1 private operator (LRMC) joins the nation in celebrating the <b>126th anniversary</b> of the <b>Philippine Independence Day</b> on Wednesday. </p>	
						</div>
						<!-- End Single Service -->
					</div>
					<div class="col-lg-4 col-md-6 col-12">
						<!-- Start Single Service -->
						<div class="single-service">
							<i class="icofont-check-circled"></i>
							<h4><a href="https://lrmc.ph/2024/06/07/lrt-1-cavite-extension-ph1-nears-completion/">Cavite Extension nears completion</a></h4>
							<p>The construction of the LRT-1 <b>Cavite Extension Phase 1</b> is progressing as scheduled with its <b>98.2%</b> completion rate as of end April 2024.</p>	
						</div>
						<!-- End Single Service -->
					</div>
					<div class="col-lg-4 col-md-6 col-12">
						<!-- Start Single Service -->
						<div class="single-service">
							<i class="icofont-chair"></i>
							<h4><a href="https://lrmc.ph/2024/04/01/lrmc-welcomes-new-president-and-ceo-general-manager/">New General Manager</a></h4>
							<p>LRT-1 private operator (LRMC) welcomes the appointment of <b>Mr. Enrico R. Benipayo</b> as General Manager effective April 2024.</p>	
						</div>
						<!-- End Single Service -->
					</div>
					<div class="col-lg-4 col-md-6 col-12">
						<!-- Start Single Service -->
						<div class="single-service">
							<i class="icofont-businesswoman"></i>
							<h4><a href="https://lrmc.ph/2024/03/21/lrmc-caps-off-womens-month-with-her-story-campaign/">Women’s Month & HER Story campaign</a></h4>
							<p>LRMC caps off <b>Women’s Month</b> with <b>“HER Story” Campaign</b> last March 21 – 22, 2024 at LRT-1 Central and United Nations stations</p>	
						</div>
						<!-- End Single Service -->
					</div>
					<div class="col-lg-4 col-md-6 col-12">
						<!-- Start Single Service -->
						<div class="single-service">
							<i class="icofont-award"></i>
							<h4><a href="https://lrmc.ph/2024/02/08/lrmc-wins-big-at-20th-philippine-quill-59th-anvil-awards/">LRMC wins big at 59th Anvil Awards</a></h4>
							<p>LRT-1 private operator (LRMC) is celebrating a double victory after receiving <b>multiple awards</b> at the <b>20th Philippine Quill Awards</b>. </p>	
						</div>
						<!-- End Single Service -->
					</div>
					<div class="col-lg-4 col-md-6 col-12">
						<!-- Start Single Service -->
						<div class="single-service">
							<i class="icofont-train-line"></i>
							<h4><a href="https://lrmc.ph/2023/12/20/lrt-1-completes-first-test-run-on-cavite-extension-phase-1/">LRT-1 completes first test run</a></h4>
							<p>LRT 1 marked another <b>milestone</b> on December 19, 2023, with the 1st successful <b>test run</b> on the tracks of Cavite Extension Phase 1.</p>	
						</div>
						<!-- End Single Service -->
					</div>
				</div><br><br><br>
							<center><div class="button">
								<a href="https://www.pna.gov.ph/articles/1226461" target="_blank" class="btn pers">Know more about Cavite Extension?</a>
								<a href="https://lrmc.ph/" target="_blank" class="btn second">Learn More<i class="fa fa-long-arrow-right"></i></a>
							</div></center>
			</div>
		</section>
		<!--/ End service -->
		
		<!-- Inline Ad Block -->
		<div class="inline-ad-container" data-ad-id="inline-1">
			<div class="container">
				<div class="inline-ad-unit">
					<div class="inline-ad-header">
						<span class="inline-ad-label">Advertisement</span>
						<button class="inline-ad-close" onclick="closeAd('inline-1')">×</button>
					</div>
					<div class="inline-ad-content">
						<div class="inline-ad-left">
							<div class="inline-ad-logo">
								<img src="{{ asset('img/customodoro-icon.png') }}" alt="Customodoro Logo" class="ad-logo-img">
							</div>
							<div class="inline-ad-info">
								<h4 class="inline-ad-title">Customodoro - Pomodoro Timer</h4>
								<p class="inline-ad-subtitle">The ultimate customizable Pomodoro timer for focused and productive work.</p>
								<div class="inline-ad-rating">
									<span class="stars">★★★★★</span>
									<span class="rating-text">4.9/5 • 100+ users</span>
								</div>
							</div>
						</div>
						<div class="inline-ad-right">
							<div class="inline-ad-features">
								<div class="feature-highlight">⏰ Classic & Reverse Timer • 🍅 Pomodoro Modes • 💪 Earn Bigger Breaks</div>
							</div>
							<a href="https://customodoro.vercel.app/" target="_blank" rel="noopener" class="inline-ad-cta">
								Start Boosting Now
							</a>
						</div>
					</div>
					<div class="inline-ad-footer">
						<span class="sponsored-label">Sponsored • customodoro.vercel.app</span>
					</div>
				</div>
			</div>
		</div>
		
		<!-- Pricing Table -->
		<section class="pricing-table section" id="tix">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section-title">
							<h2>LRT-1 Ticket Options Comparison</h2>
							<img src="img/Logooo.png" alt="#">
							<p>Explore our range of ticketing options to suit your travel needs. Choose from the Single Journey Ticket for one-time rides, the Stored Value Card for multiple trips, or our innovative TransitEase NFC available on our application, offering both single journey and stored value options for a seamless travel experience.</p>
						</div>
					</div>
				</div>
				<div class="row">
					<!-- Single Table -->
					<div class="col-lg-4 col-md-12 col-12">
						<div class="single-table">
							<!-- Table Head -->
							<div class="table-head">
								<div class="icon">
								<i class="icofont-card"></i>
								</div>
								<h4 class="title">Single Journey Ticket</h4>
								<div class="price">
									<p class="amount"><i class="icofont-peso"></i>13<span>/ Per 1st Station</span></p>
								</div>	
							</div>
							<!-- Table List -->
							<ul class="table-list">
								<li><i class="icofont icofont-ui-check"></i>Single Journey</li>
								<li class="cross"><i class="icofont icofont-ui-close"></i></i>Stored Value</li>
								<li><i class="icofont icofont-ui-check"></i>Tap to Enter</li>
								<li class="cross"><i class="icofont icofont-ui-close"></i>Tap to Exit</li>
								<li><i class="icofont icofont-ui-check"></i>Insert to Exit</li>
								
							</ul>
							<div class="table-bottom">
								<a class="btn" href="{{ route('fp') }}">Check Fare Matrix</a>
							</div>
							<!-- Table Bottom -->
						</div>
					</div>
					<!-- End Single Table-->
					<!-- Single Table -->
					<div class="col-lg-4 col-md-12 col-12">
						<div class="single-table">
							<!-- Table Head -->
							<div class="table-head">
								<div class="icon">
								<i class="icofont-credit-card"></i>
								</div>
								<h4 class="title">Stored Value Card</h4>
								<div class="price">
									<p class="amount"><i class="icofont-peso"></i>15<span>/ Per 1st Station</span></p>
								</div>	
							</div>
							<!-- Table List -->
							<ul class="table-list">
								<li class="cross"><i class="icofont icofont-ui-close"></i>Single Journey</li>
								<li><i class="icofont icofont-ui-check"></i></i>Stored Value</li>
								<li><i class="icofont icofont-ui-check"></i>Tap to Enter</li>
								<li><i class="icofont icofont-ui-check"></i>Tap to Exit</li>
								<li class="cross"><i class="icofont icofont-ui-close"></i>Insert to Exit</li>
							</ul>
							<div class="table-bottom">
								<a class="btn" href="{{ route('fp') }}">Check Fare Matrix</a>
							</div>
							<!-- Table Bottom -->
						</div>
					</div>
					<!-- End Single Table-->
					<!-- Single Table -->
					<div class="col-lg-4 col-md-12 col-12">
						<div class="single-table">
							<!-- Table Head -->
							<div class="table-head">
								<div class="icon">
								<i class="icofont-penalty-card"></i>
								</div>
								<h4 class="title">TransitEase NFC</h4>
								<div class="price">
									<p class="amount"><i class="icofont-peso"></i>15<span>/ Per 1st Station</span></p>
								</div>	
							</div>
							<!-- Table List -->
							<ul class="table-list">
								<li><i class="icofont icofont-ui-check"></i>Single Journey</li>
							    <li class="cross"><i class="icofont icofont-ui-close"></i>Stored Value</li>
								<li><i class="icofont icofont-ui-check"></i>Tap to Enter</li>
								<li><i class="icofont icofont-ui-check"></i>Tap to Exit</li>
								<li class="cross"><i class="icofont icofont-ui-close"></i>Insert to Exit</li>
							</ul>
							<div class="table-bottom">
								<a class="btn" href="{{ route('fp') }}">Check Fare Matrix</a>
							</div>
							<!-- Table Bottom -->
						</div>
					</div>
					<!-- End Single Table-->
				</div>	
			</div>	
		</section>	
		<!--/ End Pricing Table -->
		
		
		
		<!-- Start Blog Area -->
		<section class="blog section" id="blog">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section-title">
							<h2>Articles about LRT-1.</h2>
							<img src="img/Logooo.png" alt="#">
							<p>Stay informed with the latest updates and essential guides on the LRT-1. From comprehensive station lists to the introduction of new trains aimed at reducing wait times, and the much-anticipated Cavite extension project, we've got all the important details covered. Discover how these developments enhance commuting in Metro Manila and keep you on track with the LRT-1's progress.</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-4 col-md-6 col-12">
						<!-- Single Blog -->
						<div class="single-news">
							<div class="news-head">
								<img src="img/122.jpeg" alt="https://www.moneymax.ph/lifestyle/articles/lrt-1-stations-guide">
							</div>
							<div class="news-body">
								<div class="news-content">
									<div class="date">10 Aug, 2023</div>
									<h2><a href="https://www.moneymax.ph/lifestyle/articles/lrt-1-stations-guide" target="_blank">LRT-1 Stations Guide by Moneymax PH</a></h2>
									<p class="text">LRT-1 Stations List in Order From <b>Baclaran</b> to <b>Fernando Poe Jr.</b></p>
								</div>
							</div>
						</div>
						<!-- End Single Blog -->
					</div>
					<div class="col-lg-4 col-md-6 col-12">
						<!-- Single Blog -->
						<div class="single-news">
							<div class="news-head">
								<img src="img/143.jpg" alt="#">
							</div>
							<div class="news-body">
								<div class="news-content">
									<div class="date">20 Jul, 2023</div>
									<h2><a href="https://www.spot.ph/newsfeatures/mobility/105611/looks-features-of-the-new-lrt-1-trains-a5229-20230720" target="_blank">Everything You Need to Know About the New Trains</a></h2>
									<p class="text">LRT-1 Adds <b>New Trains</b> to Cut Passenger's Waiting Time At Stations.</p>
								</div>
							</div>
						</div>
						<!-- End Single Blog -->
					</div>
					<div class="col-lg-4 col-md-6 col-12">
						<!-- Single Blog -->
						<div class="single-news">
							<div class="news-head">
								<img src="img/125.jpg" alt="#">
							</div>
							<div class="news-body">
								<div class="news-content">
									<div class="date">07 June, 2024</div>
									<h2><a href="https://www.pna.gov.ph/articles/1226461" target="_blank">LRT-1 Cavite Extension to be completed by 2031</a></h2>
									<p class="text"><b>MANILA</b> – The Light Rail Transit Line 1 (LRT-1) Cavite Extension is expected to ...</p>
								</div>
							</div>
						</div>
						<!-- End Single Blog -->
					</div>
				</div>
			</div>
		</section>
		<!-- End Blog Area -->
		
		<!-- Start clients -->
		<div class="clients overlay">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-12">
						<div class="owl-carousel clients-slider">
							<div class="single-clients">
								<img src="img/c1.png" alt="LRMC">
							</div>
							<div class="single-clients">
								<img src="img/PLEASE.png" alt="#">
							</div>
							<div class="single-clients">
								<img src="img/c3.png" alt="#">
							</div>
							<div class="single-clients">
								<img src="img/c2.png" alt="#">
							</div>
							<div class="single-clients">
								<img src="img/c4.png" alt="#">
							</div>
							<div class="single-clients">
								<img src="img/c1.png" alt="LRMC">
							</div>
							<div class="single-clients">
								<img src="img/PLEASE.png" alt="#">
							</div>
							<div class="single-clients">
								<img src="img/c3.png" alt="#">
							</div>
							<div class="single-clients">
								<img src="img/c2.png" alt="#">
							</div>
							<div class="single-clients">
								<img src="img/c4.png" alt="#">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--/Ens clients -->
		
		<!-- Start Appointment -->
		<section class="appointment">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section-title">
							<h2>We Value Your Feedback</h2>
							<img src="img/Logooo.png" alt="#">
							<p>Your opinions and suggestions are important to us! Please share your thoughts to help us improve and provide a better experience. Whether it's praise, issues, or ideas for new features, we want to hear from you. Thank you for helping us grow!</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6 col-md-12 col-12">
						<form class="form" action="#">
							<div class="row">
								<div class="col-lg-6 col-md-6 col-12">
									<div class="form-group">
										<input name="name" type="text" placeholder="Name">
									</div>
								</div>
								<div class="col-lg-6 col-md-6 col-12">
									<div class="form-group">
										<input name="email" type="email" placeholder="Email">
									</div>
								</div>
								<div class="col-lg-6 col-md-6 col-12">
									<div class="form-group">
										<input name="phone" type="text" placeholder="Phone">
									</div>
								</div>
								<div class="col-lg-6 col-md-6 col-12">
									<div class="form-group">
										<div class="nice-select form-control wide" tabindex="0"><span class="current">About LRT-1</span>
											<ul class="list">
												<li data-value="1" class="option selected ">About LRT-1</li>
												<li data-value="2" class="option">LRT-1 Stations</li>
												<li data-value="3" class="option">Train Schedule</li>
												<li data-value="4" class="option">Fare Matrix</li>
												<li data-value="5" class="option">Route</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="col-lg-6 col-md-6 col-12">
									<div class="form-group">
										<div class="nice-select form-control wide" tabindex="0"><span class="current">About Website</span>
											<ul class="list">
												<li data-value="1" class="option selected ">About Website</li>
												<li data-value="2" class="option">Home Page</li>
												<li data-value="3" class="option">LRT-1 Services</li>
												<li data-value="4" class="option">About Us</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="col-lg-6 col-md-6 col-12">
									<div class="form-group">
										<input type="text" placeholder="Date" id="datepicker">
									</div>
								</div>
								<div class="col-lg-12 col-md-12 col-12">
									<div class="form-group">
										<textarea name="message" placeholder="Write Your Message Here....."></textarea>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-5 col-md-4 col-12">
									<div class="form-group">
										<div class="button">
											<button type="submit" class="btn">Submit Feedback</button>
										</div>
									</div>
								</div>
								<div class="col-lg-7 col-md-8 col-12">
									<p>( Thank you for sharing your feedback! )</p>
								</div>
							</div>
						</form>
					</div>
					<div class="col-lg-6 col-md-12 ">
						<div class="appointment-image">
							<img src="img/1 Logo.png" alt="#">
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Appointment -->
		
		<!-- Start Newsletter Area -->
		<section class="newsletter section">
			<div class="container">
				<div class="row ">
					<div class="col-lg-6  col-12">
						<!-- Start Newsletter Form -->
						<div class="subscribe-text ">
							<h6>Sign up for newsletter</h6>
							<p class="">Stay updated with the latest news, tips, and exclusive offers! Sign up for our newsletter to receive updates straight to your inbox.<br><br> Don't miss out—join our community today!</p>
						</div>
						<!-- End Newsletter Form -->
					</div>
					<div class="col-lg-6  col-12">
						<!-- Start Newsletter Form -->
						<div class="subscribe-form ">
							<form action="mail/mail.php" method="get" target="_blank" class="newsletter-inner">
								<input name="EMAIL" placeholder="Your email address" class="common-input" onfocus="this.placeholder = ''"
									onblur="this.placeholder = 'Your email address'" required="" type="email">
								<button class="btn">Subscribe</button>
							</form>
						</div>
						<!-- End Newsletter Form -->
					</div>
				</div>
			</div>
		</section>
		<!-- /End Newsletter Area -->
		
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

		<script>
$(document).ready(function() {
    $('.video-popup').magnificPopup({
        type: 'iframe',
        iframe: {
            patterns: {
                youtube: {
                    index: 'youtube.com/', 
                    id: function(url) {        
                        var m = url.match(/[\\?\\&]v=([^\\?\\&]+)/);
                        if ( !m || !m[1] ) return null;
                        return m[1];
                    },
                    src: 'https://www.youtube.com/embed/%id%?autoplay=1' 
                }
            }
        }
    });
});
</script>
<script>
        function toggleCard() {
            var card = document.getElementById('proFeatures');
            if (card.style.right === '0px') {
                card.style.right = '-300px';
                document.getElementById('getProBtn').style.display = 'block';
            } else {
                card.style.right = '0';
                document.getElementById('getProBtn').style.display = 'none';
            }
        }

        document.getElementById('getProBtn').addEventListener('click', function(event) {
            event.preventDefault();
            toggleCard();
        });
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

<script>
    // Professional Ad Management
    function closeAd(adId) {
        try {
            // Store dismissal in localStorage
            localStorage.setItem('ad_dismissed_' + adId, Date.now().toString());
            
            // Find and remove the ad with smooth animation
            const adElement = document.querySelector('[data-ad-id="' + adId + '"]');
            if (adElement) {
                const container = adElement.closest('.ad-container');
                if (container) {
                    container.style.transition = 'opacity 0.3s ease, max-height 0.3s ease';
                    container.style.opacity = '0';
                    container.style.maxHeight = '0';
                    container.style.overflow = 'hidden';
                    container.style.margin = '0';
                    container.style.padding = '0';
                    
                    setTimeout(() => {
                        container.remove();
                    }, 300);
                }
            }
        } catch (error) {
            console.warn('Ad dismissal error:', error);
            // Fallback: just hide the ad
            const adElement = document.querySelector('[data-ad-id="' + adId + '"]');
            if (adElement) {
                adElement.closest('.ad-container').style.display = 'none';
            }
        }
    }

    // Check for previously dismissed ads on page load
    document.addEventListener('DOMContentLoaded', function() {
        document.querySelectorAll('[data-ad-id]').forEach(function(adElement) {
            const adId = adElement.getAttribute('data-ad-id');
            const dismissedTime = localStorage.getItem('ad_dismissed_' + adId);
            
            if (dismissedTime) {
                // Check if ad was dismissed within the last 24 hours
                const dismissedTimestamp = parseInt(dismissedTime);
                const now = Date.now();
                const twentyFourHours = 24 * 60 * 60 * 1000;
                
                if (now - dismissedTimestamp < twentyFourHours) {
                    // Hide the ad if dismissed recently
                    const container = adElement.closest('.ad-container');
                    if (container) {
                        container.style.display = 'none';
                    }
                }
            }
        });
        
        // Add click tracking for ad headline
        document.querySelectorAll('.ad-headline').forEach(function(headline) {
            headline.addEventListener('click', function() {
                // Track ad click (you can extend this for analytics)
                console.log('Ad clicked:', headline.textContent);
            });
        });
    });
</script>

@endsection
