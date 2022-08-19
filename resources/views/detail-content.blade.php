@extends('layouts.master')
@section('title') Detail Content Amanah @endsection
@section('css')
    <!-- DataTables -->
    <link href="{{ URL::asset('/assets/libs/jquery-vectormap/jquery-vectormap.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- Responsive datatable examples -->
    <link href="{{ URL::asset('/assets/libs/datatables/datatables.min.css')}}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
    <div class="row bread-static">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between header-title" style="margin-bottom:25px;">
                <!-- <h4 class="mb-0">Order Management</h4> -->
                <div class="header-nav">
                    <span class="header-word md-0">Dashboard &nbsp;&nbsp;</span>
                    <a href="/home">&nbsp;&nbsp;&nbsp;<i class="ri-home-3-line home"></i></a>
                    <span>&nbsp;<i class="ri-arrow-right-s-line"></i></span>
                    <span>&nbsp;Detail Content Amanah  </span>
                </div>
            </div>
        </div>
    </div>
    <div class="page-content home">
        <div class="container-fluid">

            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="title-card">
                                <div class="text-center" dir="ltr">
                                    <input class="knob" data-width="150" data-height="150" data-linecap=round data-fgColor="#66CC66" value="17" data-skin="tron" data-angleOffset="-125" data-angleArc=250 data-readOnly=true data-thickness=".2"/>
                                    <h4 class="mb-3 font-bold">Amanah</h4>
                                </div>
                            </div>
                            
                        </div>
                        <div class="col-md-4">

                            <div class="content-card">
                                <h5>Amanah Description</h5>
                                <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. 
                                </p>
                            </div>

                        </div>
                     
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <h3 class="text-center margin-top-20 margin-bottom-20">What does the number mean?</h3>
                            <p class="text-center">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua
                            </p>
                            <ol>
                                <li>Vestibulum commodo felis quis tortor.</li>
                                <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, Vestibulum auctor dapibus neque.</li>
                            </ol>
                        </div>
                        <div class="col-md-4">
                            <h3 class="text-center margin-top-20 margin-bottom-20">More about 6 AKHLAK</h3>
                            <p class="text-justify">
                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede. <br>

                                Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis. <br>

                                Morbi in sem quis dui placerat ornare. Pellentesque odio nisi, euismod in, pharetra a, ultricies in, diam. Sed arcu. Cras consequat. <br>

                                Praesent dapibus, neque id cursus faucibus, tortor neque egestas auguae, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus. <br>

                                Phasellus ultrices nulla quis nibh. Quisque a lectus. Donec consectetuer ligula vulputate sem tristique cursus. Nam nulla quam, gravida non, commodo a, sodales sit amet, nisi. <br>
                            </p>

                        </div>
                        <div class="col-md-4">
                            <h3 class="text-center margin-top-20 margin-bottom-20">What does the meter mean?</h3>
                            <p class="text-center">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- end row -->


        </div> <!-- container-fluid -->
    </div>
@endsection

@section('script')
    <!-- plugin js -->
    <script src="{{ URL::asset('assets/libs/apexcharts/apexcharts.min.js')}}"></script>
    
    <!-- jquery.vectormap map -->
    <script src="{{ URL::asset('/assets/libs/jquery-vectormap/jquery-vectormap.min.js')}}"></script>

    <!-- Responsive examples -->
    <script src="{{ URL::asset('/assets/libs/datatables/datatables.min.js')}}"></script>

    <script src="{{ URL::asset('/assets/libs/jquery-knob/jquery-knob.min.js')}}"></script>

    <script src="{{ URL::asset('/assets/js/pages/datatables.init.js')}}"></script>

    <!-- <script src="{{ URL::asset('/assets/js/pages/dashboard.init.js')}}"></script> -->

    <script type="text/javascript">
        
        
        $( document ).ready(function() {
            $(function(){
                $(".knob").knob({
                    'min':10,
                    'max':50
                })
            });
        })

    </script>

@endsection