@extends('layouts.master')
@section('title') Dashboard Expedition @endsection
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
                    <span class="header-word md-0">Dashboard Expedition &nbsp;&nbsp;</span>
                    <a href="/home">&nbsp;&nbsp;&nbsp;<i class="ri-home-3-line home"></i></a>
                    <span>&nbsp;<i class="ri-arrow-right-s-line"></i></span>
                    <span>&nbsp;Dashboard Expedition</span>
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
                                <h3 class="title-content">Expedition</h3>
                            </div>
                            <div class="col-md-4 bg-white border-line content-size">
                                <span>Grand Total</span>
                                <h4 class="font-bold">21468</h4>
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
                                                <span>TRANSDEMA</span>
                                                <h4 class="mb-0">4625</h4>
                                            </div>
                                            <div class="content-size">
                                                <span>Contribution</span>
                                                <h4>22%</h4>
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
                                                <span>GEMA EKSPRES</span>
                                                <h4 class="mb-0">4564</h4>
                                            </div>
                                            <div class="content-size">
                                                <span>Contribution</span>
                                                <h4>21%</h4>
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
                                                <span>KSL</span>
                                                <h4 class="mb-0">3940</h4>
                                            </div>
                                            <div class="content-size">
                                                <span>Contribution</span>
                                                <h4>18%</h4>
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
                                                <span>LAKIEKSPRES</span>
                                                <h4 class="mb-0">3153</h4>
                                            </div>
                                            <div class="content-size">
                                                <span>Contribution</span>
                                                <h4>15%</h4>
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
                                                <span>ANUGRAH</span>
                                                <h4 class="mb-0">2844</h4>
                                            </div>
                                            <div class="content-size">
                                                <span>Contribution</span>
                                                <h4>13%</h4>
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
                                                <span>APM</span>
                                                <h4 class="mb-0">2360</h4>
                                            </div>
                                            <div class="content-size">
                                                <span>Contribution</span>
                                                <h4>11%</h4>
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