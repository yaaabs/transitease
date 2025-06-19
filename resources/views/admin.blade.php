@extends('layout')
@section('title', 'TransitEase - Admin')
@section('content')

    <style>
        .bg-login-image {
            background: url('img/admin.jpg') no-repeat center center;
            background-position:center;
            background-size:cover
        }
    </style>
    
<body class="bg-info">

    <div class="container">
<br><br>
        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Welcome Super Admin!</h1>
                                    </div>
                                    @if($errors->any())
                                    <div class="alert alert-danger">
                                        @foreach($errors->all() as $error)
                                        <div>{{$error}}</div>
                                        @endforeach
                                    </div>
                                    @endif

                                    @if(session()->has('error'))
                                    <div class="alert alert-danger">{{session('error')}}</div>
                                    @endif

                                    @if(session()->has('success'))
                                    <div class="alert alert-success">{{session('success')}}</div>
                                    @endif

                                    <form class="user" action="{{route('login.post')}}" method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <input type="name" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="emailHelp"
                                                placeholder="Enter Username" name="name">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user"
                                                id="exampleInputPassword" placeholder="Password" name="password">
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                                <label class="custom-control-label" for="customCheck">Remember
                                                    Me</label>
                                            </div>
                                        </div>
                                        <!-- Login button with different color and hover effect -->
<button type="submit" class="btn btn-primary btn-user btn-block" style="background-color: #007bff; color: #fff; border: none; padding: 10px 20px; border-radius: 5px; transition: background-color 0.3s;"
    onmouseover="this.style.backgroundColor='#0056b3';"
    onmouseout="this.style.backgroundColor='#007bff';">
    Login
</button>
                                        <hr>
                                     <!-- Login as Admin button with different color and hover effect -->
<a href="login" class="btn btn-google btn-user btn-block" style="background-color: #db4437; color: #fff; border: none; padding: 10px 20px; border-radius: 5px; transition: background-color 0.3s;"
    onmouseover="this.style.backgroundColor='#c23321';"
    onmouseout="this.style.backgroundColor='#db4437';">
    Login as Admin
</a>
                                       
                                       <!-- Circular Login with Facebook button with hover effect -->
<a href="#" class="btn btn-facebook btn-user btn-block" style="background-color: #3b5998; color: #fff; border: none; padding: 10px 20px; border-radius: 5px; transition: background-color 0.3s; display: flex; align-items: center; justify-content: center;"
    onmouseover="this.style.backgroundColor='#2d4373';"
    onmouseout="this.style.backgroundColor='#3b5998';">
    Login with Facebook
</a>
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="forgot">Forgot Password?</a>
                                    </div>
                                    <div class="text-center">
                                        <a class="small" href="register">Create an Account!</a>
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
