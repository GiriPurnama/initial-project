@extends('layouts.master')
@section('title') Dashboard @endsection
@section('css')
    <!-- DataTables -->
    <link href="{{ URL::asset('/assets/libs/jquery-vectormap/jquery-vectormap.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- Responsive datatable examples -->
    <link href="{{ URL::asset('/assets/libs/datatables/datatables.min.css')}}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="mb-0">Dashboard</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Logicnesia</a></li>
                                <li class="breadcrumb-item active">Dashboard</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->


            <div class="row">
               

                <div class="col-xl-12">
            
                    <div class="card">
                        
                    <div class="dropdown dropdown-mega d-none d-lg-block ml-2">
                <button type="button" class="btn header-item waves-effect" data-toggle="dropdown" aria-haspopup="false" aria-expanded="false">
                    Mega Menu
                    <i class="mdi mdi-chevron-down"></i> 
                </button>
                <div class="dropdown-menu dropdown-megamenu">
                    <div class="row">
                        <div class="col-sm-8">
    
                            <div class="row">
                                <div class="col-md-4">
                                    <h5 class="font-size-14 mt-0">UI Components</h5>
                                    <ul class="list-unstyled megamenu-list">
                                        <li>
                                            <a href="javascript:void(0);">Lightbox</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Range Slider</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Sweet Alert</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Rating</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Forms</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Tables</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Charts</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="row">
                                <div class="col-sm-6">
                                    <h5 class="font-size-14 mt-0">UI Components</h5>
                                    <ul class="list-unstyled megamenu-list">
                                        <li>
                                            <a href="javascript:void(0);">Lightbox</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Range Slider</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Sweet Alert</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Rating</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Forms</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Tables</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Charts</a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="col-sm-5">
                                    <div>
                                        <img src="assets/images/megamenu-img.png" alt="" class="img-fluid mx-auto d-block">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

                        <div class="card-body line">
                            <h4 class="card-title line mb-4">On Time Delivery Order</h4>
                        </div>
                        
                        <div class="card-body">
                            <div class="row">
    
                                <div class="col-md-3">
                                    <div class="text-center">
                                        <div class="count-title">
                                            <span>OTD Target</span>
                                        </div>
                                        <div class="count-number">
                                            <span>98.2</span>
                                        </div>
                                    </div>
                                </div>
    
                                <div class="col-md-3">
                                    <div class="text-center">
                                        <div class="count-title">
                                            <span>OTD Actual</span>
                                        </div>
                                        <div class="count-number">
                                            <span>98.2</span>
                                        </div>
                                    </div>
                                </div>
    
                                <div class="col-md-3">
                                    <div class="text-center">
                                        <div class="count-title">
                                            <span>OTD Petkim Target</span>
                                        </div>
                                        <div class="count-number">
                                            <span>98.2</span>
                                        </div>
                                    </div>
                                </div>
    
                                <div class="col-md-3">
                                    <div class="text-center">
                                        <div class="count-title">
                                            <span>OTD Petkim Actual</span>
                                        </div>
                                        <div class="count-number">
                                            <span>98.2</span>
                                        </div>
                                    </div>
                                </div>
    
                            </div>
                        </div>

                        <div class="card-body line">
                            <h4 class="card-title line mb-4">Penurunan Downtime Kendaraan </h4>
                        </div>
                        
                        <div class="card-body">
                            <div class="row">
    
                                <div class="col-md-3">
                                    <div class="text-center">
                                        <div class="count-title">
                                            <span>LPG Kerusakan Target</span>
                                        </div>
                                        <div class="count-number">
                                            <span>4</span>
                                        </div>
                                    </div>
                                </div>
    
                                <div class="col-md-3">
                                    <div class="text-center">
                                        <div class="count-title">
                                            <span>LPG Kerusakan Actual</span>
                                        </div>
                                        <div class="count-number">
                                            <span>4</span>
                                        </div>
                                    </div>
                                </div>
    
                                <div class="col-md-3">
                                    <div class="text-center">
                                        <div class="count-title">
                                            <span>Petkim Kerusakan Target</span>
                                        </div>
                                        <div class="count-number">
                                            <span>4</span>
                                        </div>
                                    </div>
                                </div>
    
                                <div class="col-md-3">
                                    <div class="text-center">
                                        <div class="count-title">
                                            <span>Petkim Kerusakan Actual</span>
                                        </div>
                                        <div class="count-number">
                                            <span>4</span>
                                        </div>
                                    </div>
                                </div>
    
                            </div>
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
    <script src="{{ URL::asset('/assets/js/pages/datatables.init.js')}}"></script>

    <!-- <script src="{{ URL::asset('/assets/js/pages/dashboard.init.js')}}"></script> -->

    <script type="text/javascript">
        $('.tab-pane-dashboard:first-child').addClass('active');
        $('ul.nav-dashboard li:first-child').find('a').addClass('active');
        
        $( document ).ready(function() {
            $('#dashboard-modal').owlCarousel({
                loop:true,
                margin:10,
                nav:false,
                dots: true,
                navText:["<div class='nav-btn left'><i class='fa fa-chevron-left'></i></div>","<div class='nav-btn right'><i class='fa fa-chevron-right'></i></div>"],
                responsive:{
                    0:{
                        items:1
                    },
                    600:{
                        items:1
                    },
                    1000:{
                        items:1
                    }
                }
            })

            $('#slide-indicator').owlCarousel({
                loop:true,
                margin:10,
                nav:true,
                dots: false,
                navText:["<div class='nav-btn left'><i class='fa fa-chevron-left'></i></div>","<div class='nav-btn right'><i class='fa fa-chevron-right'></i></div>"],
                responsive:{
                    0:{
                        items:1
                    },
                    600:{
                        items:1
                    },
                    1000:{
                        items:1
                    }
                }
            })

            $(".dashboard-home").click(function() {
                $(".right-bar-toggle.float-right").click();
            });

        })

    </script>

@endsection