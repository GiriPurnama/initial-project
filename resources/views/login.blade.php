@extends('layouts.master-without-nav')
@section('title')
Login
@endsection
@section('body')
<body class="auth-body-bg">
@endsection
@section('content')
<div class="home-btn d-none d-sm-block">
    <a href="{{url('index')}}"><i class="mdi mdi-home-variant h2 text-white"></i></a>
</div>
<div>
    <div class="container-fluid p-0 login-page">
        <div class="row no-gutters">
            <div class="col-lg-4">
                @if(\Session::has('alert-success'))
                    <div class="alert alert-success alert-dismissable" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                        <p class="mb-0">{{Session::get('alert-success')}}</p>
                    </div>
                @endif
                @if(\Session::has('alert-danger'))
                    <div class="alert alert-danger alert-dismissable" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                        <p class="mb-0">{{Session::get('alert-danger')}}</p>
                    </div>
                @endif
                <div class="authentication-page-content p-4 d-flex align-items-center min-vh-100">
                    <div class="w-100">
                        <div class="row justify-content-center">
                            <div class="col-lg-9">
                                <div>
                                    <div class="text-center">
                                        <div>
                                            <a href="{{url('index')}}" class="logo"><img src="{{ URL::asset('/assets/images/logo.png')}}" height="50" style="margin-top:35px" alt="logo"></a>
                                        </div>

                                        <h4 class="font-size-18 mt-4">Welcome Back !</h4>
                                        <p class="text-muted">Sign in to continue to Dashboard Logicnesia.</p>
                                    </div>

                                    <div class="p-2 mt-5">
                                        <form method="post" action="/login">
                                            @csrf
                                            @if(session('errors'))
                                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                                        Something it's wrong:
                                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                            <span aria-hidden="true">×</span>
                                                        </button>
                                                        <ul>
                                                        @foreach ($errors->all() as $error)
                                                        <li>{{ $error }}</li>
                                                        @endforeach
                                                        </ul>
                                                    </div>
                                                @endif
                                                @if (Session::has('error'))
                                                    <div class="alert alert-danger">
                                                        {{ Session::get('error') }}
                                                    </div>
                                                @endif

                                            <div class="form-group auth-form-group-custom mb-4">
                                                <i class="ri-user-2-line auti-custom-input-icon"></i>
                                                <label for="username">Username</label>
                                                <input id="username" type="text" class="form-control" name="username" required autocomplete="off" placeholder="Enter Username">
                                            </div>

                                            <div class="form-group auth-form-group-custom mb-4">
                                                <i class="ri-lock-2-line auti-custom-input-icon"></i>
                                                <label for="password">Password</label>
                                                <input type="password" class="form-control" name="password" required autocomplete="off" id="password" placeholder="Enter password">
                                            </div>

                                            <div class="mt-4 text-center">
                                                <button class="btn btn-primary w-md waves-effect waves-light" type="submit" onclick="validate()">Login</button>
                                            </div>

                                            <div class="mt-4 text-center">
                                                @if (Route::has('password.request'))
                                                    <a href="{{ route('password.request') }}" class="text-muted"><i class="mdi mdi-lock mr-1"></i> {{ __('Forgot your password?') }}</a>
                                                @endif
                                            </div>
                                        </form>
                                    </div>

                                    <div class="mt-5 text-center">
                                        <!-- <p class="mg-0">Activation Account? <a href="javascirpt:void(0);" data-toggle="modal" data-target="#activate" class="font-weight-medium text-primary"> Activation </a> </p> -->
                                        <p>Forgot Password? <a href="javascirpt:void(0);" data-toggle="modal" data-target="#forgot-password" class="font-weight-medium text-primary"> Reset Password </a> </p>
                                        <p><script>document.write(new Date().getFullYear())</script>© PT. Logistik Optimisasi Logicnesia </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="authentication-bg">
                <div class="bg-overlay"></div>
            </div>
        </div>
    </div>
</div>

<div id="forgot-password" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title mt-0" id="myModalLabel">Forgot Password</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="text-forgot">
                    Please Contact Administrator: 
                </div>
            </div>

               
            
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<script type="text/javascript">

    // $('form').submit(false);
    //     var attempt = 3; // Variable to count number of attempts.
    //     // Below function Executes on click of login button.
    //     function validate(){
    //         var username = document.getElementById("email").value;
    //         var password = document.getElementById("password").value;
    //         if ( username == "admin@gmail.com" && password == "admin12345"){
    //             // alert ("Login successfully");
    //             window.location = "home"; // Redirecting to other page.
    //             return false;
    //         }
    //         else{
    //             attempt --;// Decrementing by one.
    //             alert("You have left "+attempt+" attempt;");
    //             // Disabling fields after 3 attempts.
    //             if( attempt == 0){
    //                 document.getElementById("username").disabled = true;
    //                 document.getElementById("password").disabled = true;
    //                 document.getElementById("submit").disabled = true;
    //                 return false;
    //             }
    //         }
    // }
    $( document ).ready(function() {
        $("#submit-user").click(function(){
            $('.form-username').addClass('hide');
            $('.form-otp').removeClass('hide');
        })
        $("#submit-otp").click(function(){
            $('.form-password').removeClass('hide');
            $('.form-otp').addClass('hide');
        })

    })

</script>
@endsection