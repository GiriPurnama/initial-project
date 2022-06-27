@extends('layouts.master')
@section('title') Dashboard @endsection
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
                    <span class="header-word md-0">Inventory Status &nbsp;&nbsp;</span>
                    <a href="/home">&nbsp;&nbsp;&nbsp;<i class="ri-home-3-line home"></i></a>
                    <span>&nbsp;<i class="ri-arrow-right-s-line"></i></span>
                    <span>&nbsp;Inventory Status</span>
                </div>
                <div class="page-title-right">
                    <a class="btn btn-back" href="/home"><i class="ri-arrow-left-s-line"></i> Back</a>
                </div>
            </div>
        </div>
    </div>
    <div class="page-content inventory-status">
        <div class="container-fluid">


            <div class="row">
               

                <div class="col-xl-12">
            
                    <div class="card no-bg">
                        
                    <div class="row">
                        
                        <div class="col-md-4">
                            <div class="box-alert text-center bg-soft-red">
                                <i class="ri-alert-line text-red font-100"></i>
                                <h4 class="text-red font-bold">High Risk</h4> 
                            </div>
                            <div class="line-box-alert bg-red"></div>
                        </div>

                        <div class="col-md-4">
                            <div class="box-alert text-center bg-soft-orange">
                                <i class="ri-alert-line text-orange font-100"></i>
                                <h4 class="text-orange font-bold">Medium Risk</h4> 
                            </div>
                            <div class="line-box-alert bg-orange"></div>
                        </div>

                        <div class="col-md-4">
                            <div class="box-alert text-center bg-soft-green">
                                <i class="ri-alert-line text-green font-100"></i>
                                <h4 class="text-green font-bold">Low Risk</h4> 
                            </div>
                            <div class="line-box-alert bg-green"></div>
                        </div>
                        

                        
                    </div>
                      <!-- <div class="card-body">

                      </div> -->

                        
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
        
        $( document ).ready(function() {
          

        });

    </script>

@endsection