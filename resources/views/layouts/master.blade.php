<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    <link rel="shortcut icon" href="{{ URL::asset('/assets/images/logo.png')}}">
    @include('layouts.head')
    <script type="text/javascript">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>
</head>
@section('body')
@show
<body data-sidebar="dark" class="custom-dashboard vertical-collpsed">
    <div class="wrapper-loader hide">
        <div class="lds-dual-ring"></div>
    </div>

     <!-- Begin page -->
     <div id="layout-wrapper">
        @include('layouts.topbar')
        @include('layouts.sidebar')
        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">
            @yield('content')
        </div>
             
        <!-- End Page-content -->
        @include('layouts.footer')
        
        <!-- end main content-->
    </div>
<!-- END layout-wrapper -->

<!-- Right Sidebar -->
<div class="right-bar">
    <div data-simplebar class="h-100">
        <div class="rightbar-title px-3 py-4">
            <a href="javascript:void(0);" class="right-bar-toggle float-right">
                <i class="mdi mdi-close noti-icon"></i>
            </a>
            <h5 class="m-0">Info</h5>
        </div>

        <!-- Settings -->
        <hr class="mt-0" />

    </div> <!-- end slimscroll-menu-->
</div>

<!-- Right bar overlay-->
<div class="rightbar-overlay"></div>

<!-- JAVASCRIPT -->
@include('layouts.vendor-scripts')
<script type="text/javascript">
$( "#vertical-menu-btn" ).click(function() {
    // $('iframe').toggleClass('resize');
    $('.rightbar-overlay').toggleClass('display-block');
    $('body').toggleClass('hide-overflow');
});
$("#confirmPassword").change(function(){    
    var password = $("#password").val();
    var confirmPassword = $("#confirmPassword").val();
    if(password != confirmPassword){
        $("#submit-user").prop('disabled', true);
        alert("Password not matching");
    } else if(password == confirmPassword){
        $("#submit-user").prop('disabled', false);
    }
});
$('#page').change(function(){
        $('.box-preview').html('<img src="'+$('#page').find(':selected').attr("data-img")+'"/>');
});
</script>
</body>
</html>

