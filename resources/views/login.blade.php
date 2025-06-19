@extends('layout')
@section('title', 'TransitEase - Login')
@section('content')

<style>
    .bg-login-image {
        background: url('img/122.jpeg') no-repeat center center;
        background-position:center;
        background-size:cover;
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
 
<body class="bg-warning">

    <div class="container">
<br><br>
        <!-- Outer Row -->
      <div class="row justify-content-center">
    <div class="col-xl-10 col-lg-12 col-md-9">
        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <div class="row">
                    <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                    <div class="col-lg-6">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Welcome to the <b>Transit</b>Ease's Admin Portal!</h1>
                                <p class="mb-4 text-muted">Please log in if you are an <b><i>admin</i></b></b> or <b><i>super admin</i></b>.</p>
                            </div>
                            <div class="alert alert-warning text-center">
                                <strong>Note:</strong> This portal is for admin access only. Unauthorized login attempts are prohibited.
                            </div>
                            <div class="text-center mt-4">
                                <h2 class="h5 text-gray-900 mb-3">Admin Login</h2>
                                        <a href="ADMINLINK" class="btn btn-primary btn-user btn-block" style="background-color: #007bff; color: #fff; border: none; padding: 10px 20px; border-radius: 5px; transition: background-color 0.3s;"
                                            onmouseover="this.style.backgroundColor='#0056b3';"
                                            onmouseout="this.style.backgroundColor='#007bff';">
                                          <i class="fas fa-user-shield"></i> Login as Admin
                                        </a>

                                 <hr>   
                                </a>
                            </div>
                            <div class="text-center mt-4">
                                <h2 class="h5 text-gray-900 mb-3">Super Admin Login</h2>
                                 <a href="ADMINLINK" class="btn btn-google btn-user btn-block" style="background-color: #db4437; color: #fff; border: none; padding: 10px 20px; border-radius: 5px; transition: background-color 0.3s;"
                                            onmouseover="this.style.backgroundColor='#c23321';"
                                            onmouseout="this.style.backgroundColor='#db4437';">
                                       <i class="fas fa-user-shield"></i> Login as Super Admin 
                                        </a>
                                   
                                
                            </div>
                            <hr>
                           <p class="small text-muted text-center mt-4">
    <i class="fas fa-info-circle" style="color: #007bff; margin-right: 5px;"></i> 
    Unauthorized access is prohibited. Contact the system administrator for assistance.
</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

@endsection
