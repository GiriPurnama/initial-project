@extends('layouts.master')
@section('title') Home @endsection
@section('css')
    <!-- DataTables -->
    <link href="{{ URL::asset('/assets/libs/jquery-vectormap/jquery-vectormap.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- Responsive datatable examples -->
    <link href="{{ URL::asset('/assets/libs/datatables/datatables.min.css')}}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('/assets/libs/datatables-responsive/responsive.bootstrap.min.css')}}">

@endsection

@section('content')
    <div class="row bread-static">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between header-title" style="margin-bottom:25px;">
                <!-- <h4 class="mb-0">Order Management</h4> -->
                <div class="header-nav">
                    <span class="header-word md-0">Home &nbsp;&nbsp;</span>
                    <a href="/home">&nbsp;&nbsp;&nbsp;<i class="ri-home-3-line home"></i></a>
                    <span>&nbsp;<i class="ri-arrow-right-s-line"></i></span>
                    <span>&nbsp;Home</span>
                </div>
                <!-- <div class="page-title-right">
                    <a class="btn btn-back" href="/home"><i class="ri-arrow-left-s-line"></i> Back</a>
                </div> -->
            </div>
        </div>
    </div>
    <div class="page-content inventory-status">
        <div class="container-fluid">


            <div class="row">

                <div class="col-lg-12">

                    <div class="card no-bg wrapper-red">
                        
                        <div class="center-line">
                            <div class="row">
                                <div class="col-md-12">
                                    <!-- <div class="card no-bg"> -->
                                        <h5 class="text-gray font-bold">
                                            Logistic
                                        </h5> 
                                    <!-- </div> -->
                                </div>
                                <div class="col-md-12">
                                    <div class="card no-bg">
                                        <hr class="gray line-default">
                                    </div>
                                </div>
                            </div>
                        </div>
        
                        <div class="card-body">
        
                            <div class="row">
        
                                <div class="col-md-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="media">
                                                <div class="media-body overflow-hidden">
                                                    <p class="text-truncate font-size-18 mb-2">Open</p>
                                                    <h4 class="mb-0">10% / 60%</h4>
                                                </div>
                                                <div class="text-primary">
                                                    <!-- <i class="ri-radio-button-line text-red font-size-24"></i> -->
                                                </div>
                                            </div>
                                        </div>
        
                                        <div class="card-body border-top py-3">
                                            <div class="text-truncate">
                                                <!-- <span class="badge badge-soft-success font-size-11"><i class="mdi mdi-menu-up"> </i> 2.4% </span> -->
                                                <a href="/detail-dashboard" class="float-right">
                                                    <span class="text-muted ml-2">Detail <i class="ri-arrow-right-line"></i></span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
        
                                <div class="col-md-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="media">
                                                <div class="media-body overflow-hidden">
                                                    <p class="text-truncate font-size-18 mb-2">Pending</p>
                                                    <h4 class="mb-0">5% / 60%</h4>
                                                </div>
                                                <div class="text-primary">
                                                    <!-- <i class="ri-radio-button-line text-red font-size-24"></i> -->
                                                </div>
                                            </div>
                                        </div>
        
                                        <div class="card-body border-top py-3">
                                            <div class="text-truncate">
                                                <!-- <span class="badge badge-soft-success font-size-11"><i class="mdi mdi-menu-up"> </i> 2.4% </span> -->
                                                <a href="/detail-dashboard" class="float-right">
                                                    <span class="text-muted ml-2">Detail <i class="ri-arrow-right-line"></i></span>
                                                </a>
                                            </div>
                                        </div>
        
                                    </div>
                                </div>
        
                                <div class="col-md-4">     
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="media">
                                                <div class="media-body overflow-hidden">
                                                    <p class="text-truncate font-size-18 mb-2">Closed</p>
                                                    <h4 class="mb-0">10% / 60%</h4>
                                                </div>
                                                <div class="text-primary">
                                                    <!-- <i class="ri-radio-button-line text-red font-size-24"></i> -->
                                                </div>
                                            </div>
                                        </div>
        
                                        <div class="card-body border-top py-3">
                                            <div class="text-truncate">
                                                <!-- <span class="badge badge-soft-success font-size-11"><i class="mdi mdi-menu-up"> </i> 2.4% </span> -->
                                                <a href="/detail-dashboard" class="float-right">
                                                    <span class="text-muted ml-2">Detail <i class="ri-arrow-right-line"></i></span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
        
                            
        
                            </div>
                        </div>
        
                    </div>


                    <div class="card no-bg wrapper-red">
                        
                        <div class="center-line">
                            <div class="row">
                                <div class="col-md-12">
                                    <!-- <div class="card no-bg"> -->
                                        <h5 class="text-gray font-bold">
                                            Operations
                                        </h5> 
                                    <!-- </div> -->
                                </div>
                                <div class="col-md-12">
                                    <div class="card no-bg">
                                        <hr class="gray line-default">
                                    </div>
                                </div>
                            </div>
                        </div>
        
                        <div class="card-body">
        
                            <div class="row">
        
                                <div class="col-md-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="media">
                                                <div class="media-body overflow-hidden">
                                                    <p class="text-truncate font-size-18 mb-2">Open</p>
                                                    <h4 class="mb-0">10% / 60%</h4>
                                                </div>
                                                <div class="text-primary">
                                                    <!-- <i class="ri-radio-button-line text-red font-size-24"></i> -->
                                                </div>
                                            </div>
                                        </div>
        
                                        <div class="card-body border-top py-3">
                                            <div class="text-truncate">
                                                <!-- <span class="badge badge-soft-success font-size-11"><i class="mdi mdi-menu-up"> </i> 2.4% </span> -->
                                                <a href="/detail-dashboard" class="float-right">
                                                    <span class="text-muted ml-2">Detail <i class="ri-arrow-right-line"></i></span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
        
                                <div class="col-md-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="media">
                                                <div class="media-body overflow-hidden">
                                                    <p class="text-truncate font-size-18 mb-2">Pending</p>
                                                    <h4 class="mb-0">5% / 60%</h4>
                                                </div>
                                                <div class="text-primary">
                                                    <!-- <i class="ri-radio-button-line text-red font-size-24"></i> -->
                                                </div>
                                            </div>
                                        </div>
        
                                        <div class="card-body border-top py-3">
                                            <div class="text-truncate">
                                                <!-- <span class="badge badge-soft-success font-size-11"><i class="mdi mdi-menu-up"> </i> 2.4% </span> -->
                                                <a href="/detail-dashboard" class="float-right">
                                                    <span class="text-muted ml-2">Detail <i class="ri-arrow-right-line"></i></span>
                                                </a>
                                            </div>
                                        </div>
        
                                    </div>
                                </div>
        
                                <div class="col-md-4">     
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="media">
                                                <div class="media-body overflow-hidden">
                                                    <p class="text-truncate font-size-18 mb-2">Closed</p>
                                                    <h4 class="mb-0">10% / 60%</h4>
                                                </div>
                                                <div class="text-primary">
                                                    <!-- <i class="ri-radio-button-line text-red font-size-24"></i> -->
                                                </div>
                                            </div>
                                        </div>
        
                                        <div class="card-body border-top py-3">
                                            <div class="text-truncate">
                                                <!-- <span class="badge badge-soft-success font-size-11"><i class="mdi mdi-menu-up"> </i> 2.4% </span> -->
                                                <a href="/detail-dashboard" class="float-right">
                                                    <span class="text-muted ml-2">Detail <i class="ri-arrow-right-line"></i></span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
        
                            
        
                            </div>
                        </div>
        
                    </div>


                    <div class="card no-bg wrapper-red">
                        
                        <div class="center-line">
                            <div class="row">
                                <div class="col-md-12">
                                    <!-- <div class="card no-bg"> -->
                                        <h5 class="text-gray font-bold">
                                            Inventory
                                        </h5> 
                                    <!-- </div> -->
                                </div>
                                <div class="col-md-12">
                                    <div class="card no-bg">
                                        <hr class="gray line-default">
                                    </div>
                                </div>
                            </div>
                        </div>
        
                        <div class="card-body">
        
                            <div class="row">
        
                                <div class="col-md-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="media">
                                                <div class="media-body overflow-hidden">
                                                    <p class="text-truncate font-size-18 mb-2">Open</p>
                                                    <h4 class="mb-0">10% / 60%</h4>
                                                </div>
                                                <div class="text-primary">
                                                    <!-- <i class="ri-radio-button-line text-red font-size-24"></i> -->
                                                </div>
                                            </div>
                                        </div>
        
                                        <div class="card-body border-top py-3">
                                            <div class="text-truncate">
                                                <!-- <span class="badge badge-soft-success font-size-11"><i class="mdi mdi-menu-up"> </i> 2.4% </span> -->
                                                <a href="/detail-dashboard" class="float-right">
                                                    <span class="text-muted ml-2">Detail <i class="ri-arrow-right-line"></i></span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
        
                                <div class="col-md-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="media">
                                                <div class="media-body overflow-hidden">
                                                    <p class="text-truncate font-size-18 mb-2">Pending</p>
                                                    <h4 class="mb-0">5% / 60%</h4>
                                                </div>
                                                <div class="text-primary">
                                                    <!-- <i class="ri-radio-button-line text-red font-size-24"></i> -->
                                                </div>
                                            </div>
                                        </div>
        
                                        <div class="card-body border-top py-3">
                                            <div class="text-truncate">
                                                <!-- <span class="badge badge-soft-success font-size-11"><i class="mdi mdi-menu-up"> </i> 2.4% </span> -->
                                                <a href="/detail-dashboard" class="float-right">
                                                    <span class="text-muted ml-2">Detail <i class="ri-arrow-right-line"></i></span>
                                                </a>
                                            </div>
                                        </div>
        
                                    </div>
                                </div>
        
                                <div class="col-md-4">     
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="media">
                                                <div class="media-body overflow-hidden">
                                                    <p class="text-truncate font-size-18 mb-2">Closed</p>
                                                    <h4 class="mb-0">10% / 60%</h4>
                                                </div>
                                                <div class="text-primary">
                                                    <!-- <i class="ri-radio-button-line text-red font-size-24"></i> -->
                                                </div>
                                            </div>
                                        </div>
        
                                        <div class="card-body border-top py-3">
                                            <div class="text-truncate">
                                                <!-- <span class="badge badge-soft-success font-size-11"><i class="mdi mdi-menu-up"> </i> 2.4% </span> -->
                                                <a href="/detail-dashboard" class="float-right">
                                                    <span class="text-muted ml-2">Detail <i class="ri-arrow-right-line"></i></span>
                                                </a>
                                            </div>
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
    <script type="text/javascript" src="{{ URL::asset('/assets/libs/datatables-responsive/dataTables.responsive.min.js')}}"></script>
    <script type="text/javascript" src="{{ URL::asset('/assets/libs/datatables-responsive/responsive.bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{ URL::asset('/assets/libs/datatables-responsive/dataTables.fixedColumns.min.js')}}"></script>
    <script type="text/javascript" src="{{ URL::asset('/assets/libs/datatables/dataTables.fixedHeader.min.js')}}"></script>

    <!-- <script src="{{ URL::asset('/assets/js/pages/dashboard.init.js')}}"></script> -->

    <script type="text/javascript">
        
        $( document ).ready(function() {
            $(".btn-card").click(function(){
                
                if($(this).hasClass('red')){
                   
                    // Tab
                    $(".bg-red").removeClass("hide");
                    $(".bg-orange").addClass("hide");
                    $(".bg-green").addClass("hide");

                    // wrapper
                    $(".wrapper-red").removeClass("hide");
                    $(".wrapper-orange").addClass("hide");
                    $(".wrapper-green").addClass("hide");
                
                } else if($(this).hasClass('orange')){
                   
                    // Tab
                    $(".bg-red").addClass("hide");
                    $(".bg-orange").removeClass("hide");
                    $(".bg-green").addClass("hide");

                    // wrapper
                    $(".wrapper-red").addClass("hide");
                    $(".wrapper-orange").removeClass("hide");
                    $(".wrapper-green").addClass("hide");
                
                } else if($(this).hasClass('green')){

                    // Tab
                    $(".bg-red").addClass("hide");
                    $(".bg-orange").addClass("hide");
                    $(".bg-green").removeClass("hide");

                    // wrapper
                    $(".wrapper-red").addClass("hide");
                    $(".wrapper-orange").addClass("hide");
                    $(".wrapper-green").removeClass("hide");
                }
            });
            

        });

    </script>

@endsection