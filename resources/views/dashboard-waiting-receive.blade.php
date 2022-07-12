@extends('layouts.master')
@section('title') Dashboard Waiting Received System @endsection
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
                    <span class="header-word md-0">Dashboard Waiting Received System &nbsp;&nbsp;</span>
                    <a href="/home">&nbsp;&nbsp;&nbsp;<i class="ri-home-3-line home"></i></a>
                    <span>&nbsp;<i class="ri-arrow-right-s-line"></i></span>
                    <span>&nbsp;Dashboard Waiting Received System</span>
                </div>
                <div class="page-title-right">
                    <a class="btn btn-back" href="/home"><i class="ri-arrow-left-s-line"></i> Back</a>
                </div>
            </div>
        </div>
    </div>
    <div class="page-content expedition">
        <div class="container-fluid">


            <div class="row margin-left-right-0">
               
                <div class="col-xl-12">
            
                    <div class="card no-bg">
                        
                        <div class="row">
                            <div class="col-md-4 bg-white border-line content-size">
                                <h3 class="title-content left-10">Waiting Received System</h3>
                            </div>
                            <div class="col-md-4 bg-white border-line content-size">
                                <span>Grand Total</span>
                                <h4 class="font-bold">15940</h4>
                            </div>
                            <div class="col-md-4 bg-white border-line content-size">
                                <span>Contribution</span>
                                <h4 class="font-bold">100%</h4>
                            </div>
                            
                        </div>
                        
                    </div>

                    <div class="card no-bg">
                        
                       <div class="row">
                            
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="media">
                                            <div class="media-body overflow-hidden content-size">
                                                <span>LOGISTIC</span>
                                                <h4 class="mb-0">8300</h4>
                                            </div>
                                            <div class="content-size">
                                                <span>Contribution</span>
                                                <h4>52%</h4>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card-body border-top py-3">
                                        <div class="text-truncate">
                                            <!-- <span class="badge badge-soft-success font-size-11"><i class="mdi mdi-menu-up"> </i> 2.4% </span> -->
                                            <a href="javascript:void(0);" class="float-right">
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
                                            <div class="media-body overflow-hidden content-size">
                                                <span>RETAIL PTT</span>
                                                <h4 class="mb-0">3950</h4>
                                            </div>
                                            <div class="content-size">
                                                <span>Contribution</span>
                                                <h4>25%</h4>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card-body border-top py-3">
                                        <div class="text-truncate">
                                            <!-- <span class="badge badge-soft-success font-size-11"><i class="mdi mdi-menu-up"> </i> 2.4% </span> -->
                                            <a href="javascript:void(0);" class="float-right">
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
                                            <div class="media-body overflow-hidden content-size">
                                                <span>WHOLESALE</span>
                                                <h4 class="mb-0">2692</h4>
                                            </div>
                                            <div class="content-size">
                                                <span>Contribution</span>
                                                <h4>17%</h4>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card-body border-top py-3">
                                        <div class="text-truncate">
                                            <!-- <span class="badge badge-soft-success font-size-11"><i class="mdi mdi-menu-up"> </i> 2.4% </span> -->
                                            <a href="javascript:void(0);" class="float-right">
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
                                            <div class="media-body overflow-hidden content-size">
                                                <span>E-COMMERCE</span>
                                                <h4 class="mb-0">3153</h4>
                                            </div>
                                            <div class="content-size">
                                                <span>Contribution</span>
                                                <h4>4%</h4>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card-body border-top py-3">
                                        <div class="text-truncate">
                                            <!-- <span class="badge badge-soft-success font-size-11"><i class="mdi mdi-menu-up"> </i> 2.4% </span> -->
                                            <a href="javascript:void(0);" class="float-right">
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
                                            <div class="media-body overflow-hidden content-size">
                                                <span>EVENT</span>
                                                <h4 class="mb-0">202</h4>
                                            </div>
                                            <div class="content-size">
                                                <span>Contribution</span>
                                                <h4>1%</h4>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card-body border-top py-3">
                                        <div class="text-truncate">
                                            <!-- <span class="badge badge-soft-success font-size-11"><i class="mdi mdi-menu-up"> </i> 2.4% </span> -->
                                            <a href="javascript:void(0);" class="float-right">
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
                                            <div class="media-body overflow-hidden content-size">
                                                <span>RETAIL PTM</span>
                                                <h4 class="mb-0">149</h4>
                                            </div>
                                            <div class="content-size">
                                                <span>Contribution</span>
                                                <h4>1%</h4>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card-body border-top py-3">
                                        <div class="text-truncate">
                                            <!-- <span class="badge badge-soft-success font-size-11"><i class="mdi mdi-menu-up"> </i> 2.4% </span> -->
                                            <a href="javascript:void(0);" class="float-right">
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


        });

    </script>

@endsection