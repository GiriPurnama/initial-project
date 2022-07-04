@extends('layouts.master')
@section('title') Inventory Status @endsection
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
                    <span class="header-word md-0">Dashboard Inventory &nbsp;&nbsp;</span>
                    <a href="/home">&nbsp;&nbsp;&nbsp;<i class="ri-home-3-line home"></i></a>
                    <span>&nbsp;<i class="ri-arrow-right-s-line"></i></span>
                    <span>&nbsp;Dashboard Inventory</span>
                    <span>&nbsp;<i class="ri-arrow-right-s-line"></i></span>
                    <span>&nbsp;Proses Cek Status Pengiriman</span>
                </div>
                <div class="page-title-right">
                    <a class="btn btn-back" href="/home"><i class="ri-arrow-left-s-line"></i> Back</a>
                </div>
            </div>
        </div>
    </div>
    <div class="page-content detail-inventory">
        <div class="container-fluid">


            <div class="row">
               

                <div class="col-xl-12">
            
                    <div class="card no-bg">
                        
                        <div class="row">
                            
                            <div class="col-md-4">
                                <a class="btn-card red" href="javascript:void(0)">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="media">
                                                <div class="media-body overflow-hidden">
                                                    <p class="text-truncate font-size-24 mb-2 text-red">High Risk</p>
                                                    <h3 class="mb-0 text-red font-bold">60%</h3>
                                                </div>
                                                <div class="text-primary">
                                                    <!-- <i class="ri-alert-line text-red font-size-36"></i> -->
                                                </div>
                                            </div>
                                        </div>
    
                                        <div class="card-body border-top py-0 line-box-alert bg-red">
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="media">
                                            <div class="media-body overflow-hidden">
                                                <p class="text-truncate font-size-14 mb-2">Proses Cek Status Pengiriman</p>
                                                <h4 class="mb-0">10% / 60%</h4>
                                            </div>
                                            <div class="text-primary">
                                                <i class="ri-radio-button-line text-red font-size-24"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card-body border-top py-3">
                                        <div class="text-truncate">
                                           
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="media">
                                            <div class="media-body overflow-hidden">
                                                <p class="text-truncate font-size-14 mb-2">Grand Total</p>
                                                <h4 class="mb-0">40635</h4>
                                            </div>
                                            <div class="text-primary">
                                                <i class="ri-radio-button-line text-red font-size-24"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card-body border-top py-3">
                                        <div class="text-truncate">
                                           
                                        </div>
                                    </div>

                                </div>
                            </div>


                            <!-- Detail Card -->
                                <div class="col-md-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="media">
                                                <div class="media-body overflow-hidden">
                                                    <p class="text-truncate font-size-14 mb-2">0 - 7 Days </p>
                                                    <h4 class="mb-0">0 / 40635</h4>
                                                </div>
                                                <div class="text-primary">
                                                    <i class="ri-radio-button-line text-red font-size-24"></i>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card-body border-top py-3">
                                            <div class="text-truncate">
                                            
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="media">
                                                <div class="media-body overflow-hidden">
                                                    <p class="text-truncate font-size-14 mb-2">8 - 14 Days </p>
                                                    <h4 class="mb-0">0 / 40635</h4>
                                                </div>
                                                <div class="text-primary">
                                                    <i class="ri-radio-button-line text-red font-size-24"></i>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card-body border-top py-3">
                                            <div class="text-truncate">
                                            
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="media">
                                                <div class="media-body overflow-hidden">
                                                    <p class="text-truncate font-size-14 mb-2">15 - 30 Days </p>
                                                    <h4 class="mb-0">0 / 40635</h4>
                                                </div>
                                                <div class="text-primary">
                                                    <i class="ri-radio-button-line text-red font-size-24"></i>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card-body border-top py-3">
                                            <div class="text-truncate">
                                            
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="media">
                                                <div class="media-body overflow-hidden">
                                                    <p class="text-truncate font-size-14 mb-2">1 - 2 Month </p>
                                                    <h4 class="mb-0">60 / 40635</h4>
                                                </div>
                                                <div class="text-primary">
                                                    <i class="ri-radio-button-line text-red font-size-24"></i>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card-body border-top py-3">
                                            <div class="text-truncate">
                                            
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="media">
                                                <div class="media-body overflow-hidden">
                                                    <p class="text-truncate font-size-14 mb-2">2 - 3 Month </p>
                                                    <h4 class="mb-0">700 / 40635</h4>
                                                </div>
                                                <div class="text-primary">
                                                    <i class="ri-radio-button-line text-red font-size-24"></i>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card-body border-top py-3">
                                            <div class="text-truncate">
                                            
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="media">
                                                <div class="media-body overflow-hidden">
                                                    <p class="text-truncate font-size-14 mb-2"> > 3 Month </p>
                                                    <h4 class="mb-0">39875 / 40635</h4>
                                                </div>
                                                <div class="text-primary">
                                                    <i class="ri-radio-button-line text-red font-size-24"></i>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card-body border-top py-3">
                                            <div class="text-truncate">
                                            
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            <!-- End Detail Card -->

                            
                            
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