@extends('layout')
@section('title', 'TransitEase: A Rail Transport Management System with Crowd Control for LRT & MRT')
@section('content')

<style>
    .bg-password-image {
        background: url('img/143.jpg') no-repeat center center;
        background-position:center;
        background-size:cover
    }
</style>
<body class="bg-secondary">

<div class="container">
    <br><br>
    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-xl-10 col-lg-12 col-md-9">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-6 d-none d-lg-block bg-password-image"></div>
                        <div class="col-lg-6">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-2">Forgot Your Password?</h1>
                                    <p class="mb-4">We get it, stuff happens. Just enter your email address below
                                        and we'll send you a link to reset your password!</p>
                                </div>
                                <form method="POST" action="{{ route('forgot.password.post') }}" class="user">
                                    @csrf
                                    @if (session('status'))
                                        <div>{{ session('status') }}</div>
                                    @endif
                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control form-control-user"
                                               id="exampleInputEmail" aria-describedby="emailHelp"
                                               placeholder="Enter Email Address..." required>
                                        @error('email')
                                        <div>{{ $message }}</div>
                                        @enderror
                                    </div>
                                  <!-- Rectangular Reset Password button with hover effect -->
<button type="submit" class="btn btn-primary btn-user btn-block" style="background-color: #007bff; color: #fff; border: none; padding: 10px 20px; border-radius: 5px; transition: background-color 0.3s;"
    onmouseover="this.style.backgroundColor='#0056b3';"
    onmouseout="this.style.backgroundColor='#007bff';">
    Reset Password
</button>
                                </form>
                                <hr>
                                <div class="text-center">
                                    <a class="small" href="register">Create an Account!</a>
                                </div>
                                <div class="text-center">
                                    <a class="small" href="login">Already have an account? Login!</a>
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
