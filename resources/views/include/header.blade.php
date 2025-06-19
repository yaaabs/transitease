

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
                            <a href="https://transitease.tech/"><img src="img/Logoo.png" alt="#"></a>
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
                                            <li><a href="fp">Fare Price</a></li>
                                            <li><a href="a">Announcement</a></li>
                                            <li><a href="route">Route</a></li>
                                        </ul>
                                    </li>
                                    <li class="{{ Request::is('newpage') ? 'active' : '' }}"><a href="newpage">About Us</a></li>
                                    <li class="{{ Request::is('page') ? 'active' : '' }}"><a href="{{ route('page') }}">TransitEase<i class="icofont-train-line" aria-hidden="true"></i></a></li>
                                    @auth
                                    <li><a href="another">Admin Page </a></li>
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

/*=============================
    Global CSS 
===============================*/
body {
    font-family: 'Poppins', sans-serif;
    font-weight: 400;
    font-size: 14px;
    color: #888;
}

/* Color Plate */
.color-plate {
    position: fixed;
    display: block;
    z-index: 99998;
    padding: 20px;
    width: 245px;
    background: #fff;
    right: -245px;
    text-align: left;
    top: 30%;
    transition: all 0.4s ease;
    box-shadow: -3px 0px 25px -2px rgba(0, 0, 0, 0.2);
}

.color-plate.active {
    right: 0;
}

.color-plate .color-plate-icon {
    position: absolute;
    left: -48px;
    width: 48px;
    height: 45px;
    line-height: 45px;
    font-size: 21px;
    border-radius: 5px 0 0 5px;
    background: #1A76D1;
    text-align: center;
    color: #fff !important;
    top: 0;
    cursor: pointer;
    box-shadow: -4px 0px 5px #00000036;
}

.color-plate h4 {
    display: block;
    font-size: 15px;
    margin-bottom: 5px;
    font-weight: 500;
}

.color-plate p {
    font-size: 13px;
    margin-bottom: 15px;
    line-height: 20px;
}

.color-plate span {
    width: 42px;
    height: 35px;
    border-radius: 0;
    cursor: pointer;
    display: inline-block;
    margin-right: 3px;
}

.color-plate span:hover {
    cursor: pointer;
}

.color-plate span.color1 {
    background: #1A76D1;
}

.color-plate span.color2 {
    background: #2196F3;
}

.color-plate span.color3 {
    background: #32B87D;
}

.color-plate span.color4 {
    background: #FE754A;
}

.color-plate span.color5 {
    background: #F82F56;
}

.color-plate span.color6 {
    background: #01B2B7;
}

.color-plate span.color7 {
    background: #6c5ce7;
}

.color-plate span.color8 {
    background: #85BA46;
}

.color-plate span.color9 {
    background: #273c75;
}

.color-plate span.color10 {
    background: #FD7272;
}

.color-plate span.color11 {
    background: #badc58;
}

.color-plate span.color12 {
    background: #44ce6f;
}

/*=============================
    End Global CSS 
===============================*/

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

</style>
