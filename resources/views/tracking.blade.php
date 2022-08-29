@extends('layouts.master')
@section('title') Tracking @endsection
@section('css')
    <!-- DataTables -->
    <link href="{{ URL::asset('/assets/libs/jquery-vectormap/jquery-vectormap.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- Responsive datatable examples -->
    <link href="{{ URL::asset('/assets/libs/datatables/datatables.min.css')}}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('/assets/libs/datatables-responsive/responsive.bootstrap.min.css')}}">
    <link href="{{ URL::asset('/assets/libs/select2/select2.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('/assets/libs/bootstrap-datepicker/bootstrap-datepicker.min.css')}}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
    <div class="row bread-static">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between header-title" style="margin-bottom:25px;">
                <!-- <h4 class="mb-0">Order Management</h4> -->
                <div class="header-nav">
                    <span class="header-word md-0">Tracking &nbsp;&nbsp;</span>
                    <a href="/home">&nbsp;&nbsp;&nbsp;<i class="ri-home-3-line home"></i></a>
                    <span>&nbsp;<i class="ri-arrow-right-s-line"></i></span>
                    <span>&nbsp;Tracking</span>
                </div>
                <div class="page-title-right">
                    <a class="btn btn-back" href="/home"><i class="ri-arrow-left-s-line"></i> Back</a>
                </div>
            </div>
        </div>
    </div>
    <div class="page-content tracking">
        <div class="container-fluid">
            
            <div class="row">

                <div class="col-md-12 margin-bottom-20">
                  
                    <div class="box-tracking">
                        <div class="row">
                            <div class="col-md-10 box">
                                <div class="row">
                                    <div class="col-md-3">
                                        <span>Location</span>
                                        <span class="box-subtitle">Jakarta</span>
                                    </div>

                                    <div class="col-md-3">
                                        <span>Waiting for Delivery</span>
                                        <span class="box-subtitle">
                                            10
                                        </span>
                                    </div>

                                    <div class="col-md-3">
                                        <span>In Delivery</span>
                                        <span class="box-subtitle">
                                            5
                                        </span>
                                    </div>

                                    <div class="col-md-3">
                                        <span>Waiting for Reconcile</span>
                                        <span class="box-subtitle">
                                            3
                                        </span>
                                    </div>
                                    
                                </div>
                            </div>

                            <div class="col-md-2" id="delivery-link">
                                <div class="box-link">
                                    <a href="/delivery-management/tracking-detail/">View Detail <i class="ri-arrow-right-s-line"></i></a>
                                </div>
                            </div>
                        
                        </div>            
                    </div>
   
                </div>

                <div class="col-md-12 margin-bottom-20">
                  
                    <div class="box-tracking">
                        <div class="row">
                            <div class="col-md-10 box">
                                <div class="row">
                                    <div class="col-md-3">
                                        <span>Location</span>
                                        <span class="box-subtitle">Jakarta</span>
                                    </div>

                                    <div class="col-md-3">
                                        <span>Waiting for Delivery</span>
                                        <span class="box-subtitle">
                                            10
                                        </span>
                                    </div>

                                    <div class="col-md-3">
                                        <span>In Delivery</span>
                                        <span class="box-subtitle">
                                            5
                                        </span>
                                    </div>

                                    <div class="col-md-3">
                                        <span>Waiting for Reconcile</span>
                                        <span class="box-subtitle">
                                            3
                                        </span>
                                    </div>
                                    
                                </div>
                            </div>

                            <div class="col-md-2" id="delivery-link">
                                <div class="box-link">
                                    <a href="/delivery-management/tracking-detail/">View Detail <i class="ri-arrow-right-s-line"></i></a>
                                </div>
                            </div>
                        
                        </div>            
                    </div>
   
                </div>

                <div class="col-md-12 margin-bottom-20">
                  
                    <div class="box-tracking">
                        <div class="row">
                            <div class="col-md-10 box">
                                <div class="row">
                                    <div class="col-md-3">
                                        <span>Location</span>
                                        <span class="box-subtitle">Jakarta</span>
                                    </div>

                                    <div class="col-md-3">
                                        <span>Waiting for Delivery</span>
                                        <span class="box-subtitle">
                                            10
                                        </span>
                                    </div>

                                    <div class="col-md-3">
                                        <span>In Delivery</span>
                                        <span class="box-subtitle">
                                            5
                                        </span>
                                    </div>

                                    <div class="col-md-3">
                                        <span>Waiting for Reconcile</span>
                                        <span class="box-subtitle">
                                            3
                                        </span>
                                    </div>
                                    
                                </div>
                            </div>

                            <div class="col-md-2" id="delivery-link">
                                <div class="box-link">
                                    <a href="/delivery-management/tracking-detail/">View Detail <i class="ri-arrow-right-s-line"></i></a>
                                </div>
                            </div>
                        
                        </div>            
                    </div>
   
                </div>

                <div class="col-md-12 margin-bottom-20">
                  
                    <div class="box-tracking">
                        <div class="row">
                            <div class="col-md-10 box">
                                <div class="row">
                                    <div class="col-md-3">
                                        <span>Location</span>
                                        <span class="box-subtitle">Jakarta</span>
                                    </div>

                                    <div class="col-md-3">
                                        <span>Waiting for Delivery</span>
                                        <span class="box-subtitle">
                                            10
                                        </span>
                                    </div>

                                    <div class="col-md-3">
                                        <span>In Delivery</span>
                                        <span class="box-subtitle">
                                            5
                                        </span>
                                    </div>

                                    <div class="col-md-3">
                                        <span>Waiting for Reconcile</span>
                                        <span class="box-subtitle">
                                            3
                                        </span>
                                    </div>
                                    
                                </div>
                            </div>

                            <div class="col-md-2" id="delivery-link">
                                <div class="box-link">
                                    <a href="/delivery-management/tracking-detail/">View Detail <i class="ri-arrow-right-s-line"></i></a>
                                </div>
                            </div>
                        
                        </div>            
                    </div>
   
                </div>

                <div class="col-md-12 margin-bottom-20">
                  
                    <div class="box-tracking">
                        <div class="row">
                            <div class="col-md-10 box">
                                <div class="row">
                                    <div class="col-md-3">
                                        <span>Location</span>
                                        <span class="box-subtitle">Jakarta</span>
                                    </div>

                                    <div class="col-md-3">
                                        <span>Waiting for Delivery</span>
                                        <span class="box-subtitle">
                                            10
                                        </span>
                                    </div>

                                    <div class="col-md-3">
                                        <span>In Delivery</span>
                                        <span class="box-subtitle">
                                            5
                                        </span>
                                    </div>

                                    <div class="col-md-3">
                                        <span>Waiting for Reconcile</span>
                                        <span class="box-subtitle">
                                            3
                                        </span>
                                    </div>
                                    
                                </div>
                            </div>

                            <div class="col-md-2" id="delivery-link">
                                <div class="box-link">
                                    <a href="/delivery-management/tracking-detail/">View Detail <i class="ri-arrow-right-s-line"></i></a>
                                </div>
                            </div>
                        
                        </div>            
                    </div>
   
                </div>

            </div>

        </div>
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

    <script type="text/javascript" src="{{ URL::asset('/assets/libs/moments/moment.min.js')}}"></script>
    <script type="text/javascript" src="{{ URL::asset('/assets/libs/bootstrap-datepicker/bootstrap-datepicker.min.js')}}"></script>
    <script type="text/javascript" src="{{ URL::asset('/assets/libs/daterangepicker/daterangepicker.js')}}"></script>
    <script type="text/javascript" src="{{ URL::asset('/assets/libs/select2/select2.min.js')}}"></script>

    <!-- <script src="{{ URL::asset('/assets/js/pages/dashboard.init.js')}}"></script> -->

    <script type="text/javascript">
       
        $( document ).ready(function() {
           
        });

    </script>

@endsection