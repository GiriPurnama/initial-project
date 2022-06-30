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

                                <div class="card ">
                                    <div class="card-body">
                                        <div class="text-left">
                                            <div class="text-primary">
                                                <!-- <i class="ri-stack-line font-size-24"></i> -->
                                                <div class="box-alert">
                                                    <!-- <i class="ri-alert-line font-size-36 text-red"></i> -->
                                                    <h4 class="text-red font-bold">High Risk</h4> 
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card-body border-top py-0 line-box-alert bg-red">
                                    </div>
                                </div>

                            </div>

                            <div class="col-md-4">

                                <div class="card ">
                                    <div class="card-body">
                                        <div class="text-left">
                                            <div class="text-primary">
                                                <!-- <i class="ri-stack-line font-size-24"></i> -->
                                                <div class="box-alert">
                                                    <!-- <i class="ri-alert-line font-size-36 text-orange"></i> -->
                                                    <h4 class="text-orange font-bold">Medium Risk</h4> 
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card-body border-top py-0 line-box-alert bg-orange">
                                    </div>
                                </div>
                           
                            </div>

                            <div class="col-md-4">

                                <div class="card">
                                    <div class="card-body">
                                        <div class="text-left">
                                            <div class="text-primary">
                                                <!-- <i class="ri-stack-line font-size-24"></i> -->
                                                <div class="box-alert">
                                                    <!-- <i class="ri-alert-line font-size-36 text-green"></i> -->
                                                    <h4 class="text-green font-bold">Low Risk</h4> 
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card-body border-top py-0 line-box-alert bg-green">
                                    </div>
                                </div>

                            </div>
                            
                        </div>
                        
                    </div>

                    <div class="card">

                        <div class="card-body">
                            <div class="row">
                                
                                <div class="col-xs-8 col-xs-offset-2">
                                    <div class="input-group wrapper-search">
                                        <div class="search-panel">
                                            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                                                <span id="search_concept">Filter By All</span> <span class="caret"></span>
                                            </button>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="#all">All</a></li>
                                                <li><a href="#date">Date</a></li>
                                                <li><a href="#location">Location</a></li>
                                                <li><a href="#delivery_status">Delivery Status</a></li>
                                            </ul>
                                        </div>
                                        <input type="hidden" name="search_param" value="all" id="search_param">         
                                        <input type="text" class="form-control dateSrc" name="date" placeholder="Search By Date">
                                        <select name="pickup_code" id="" class="form-control pickupCode">
                                                <option value="all">All Pickup Code</option>
                                                <option value="">990</option>
                                                <option value="">B-KLG-4</option>
                                                <option value="">B-KLG-2</option>
                                        </select>
                                        <select name="drop_code" id="" class="form-control dropCode">
                                                <option value="all">All Drop Code</option>
                                                <option value="">990</option>
                                                <option value="">B-KLG-4</option>
                                                <option value="">B-KLG-2</option>
                                        </select>
                                        <select name="delivery_status" id="" class="form-control deliveryStatus">
                                                <option value="all">All Delivery Status</option>
                                                <option value="">In Delivery</option>
                                                <option value="">Waiting for Reconcile</option>
                                                <option value="">Completed</option>
                                        </select>
                                        <span class="input-group-btn">
                                            <button class="btn btn-primary" type="button"><i class="ri-search-line"></i></button>
                                        </span>
                                    </div>
                                </div>

                            </div>
                            <div class="table-responsive">
                                <table class="table mb-0 table-detail-inventory">

                                    <thead>
                                        <tr>
                                            <th>Company</th>
                                            <th>From</th>
                                            <th>To</th>
                                            <th>TO Number</th>
                                            <th>DO Number</th>
                                            <th>Shipment Date</th>
                                            <th>Received Date</th>
                                            <th>Days</th>
                                            <th>Status</th>
                                            <th>Brand</th>
                                            <th>Item Category</th>
                                            <th>Item QTY</th>
                                            <th>Channel</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>PTT</td>
                                            <td>960</td>
                                            <td>A-AEON-BSD</td>
                                            <td>MER/20/36522670</td>
                                            <td>TS/PTT/20/0312720738</td>
                                            <td>2022-06-15</td>
                                            <td>2022-06-17</td>
                                            <td>2</td>
                                            <td>COMPLETED</td>
                                            <td>RO</td>
                                            <td>LADIES</td>
                                            <td>18</td>
                                            <td>Event</td>
                                            <td>
                                                <div class="form-group width-250">
                                                    <select name="" id="" class="form-control width-200 float-left">
                                                        <option value="">-</option>
                                                        <option value="">Proses Cek Delivery</option>
                                                        <option value="">Waiting for Delivery</option>
                                                        <option value="">In Transit Ekspedisi</option>
                                                        <option value="">Waiting Posting Receive System</option>
                                                        <option value="">Sales E-Commerce</option>
                                                        <option value="">Stock Write Off</option>
                                                    </select>

                                                    <a href="javascript:void(0);">
                                                        <button class="btn btn-warning">
                                                            <i class="ri-pencil-line font-16"></i>
                                                        </button>
                                                    </a>
                                                </div>
                                               
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>PTT</td>
                                            <td>960</td>
                                            <td>A-AEON-BSD</td>
                                            <td>MER/20/36522670</td>
                                            <td>TS/PTT/20/0312720738</td>
                                            <td>2022-06-15</td>
                                            <td>2022-06-17</td>
                                            <td>2</td>
                                            <td>COMPLETED</td>
                                            <td>RO</td>
                                            <td>LADIES</td>
                                            <td>18</td>
                                            <td>Event</td>
                                            <td>
                                                <div class="form-group width-250">
                                                    <select name="" id="" class="form-control width-200 float-left">
                                                        <option value="">-</option>
                                                        <option value="">Proses Cek Delivery</option>
                                                        <option value="">Waiting for Delivery</option>
                                                        <option value="">In Transit Ekspedisi</option>
                                                        <option value="">Waiting Posting Receive System</option>
                                                        <option value="">Sales E-Commerce</option>
                                                        <option value="">Stock Write Off</option>
                                                    </select>

                                                    <a href="javascript:void(0);">
                                                        <button class="btn btn-warning">
                                                            <i class="ri-pencil-line font-16"></i>
                                                        </button>
                                                    </a>
                                                </div>
                                               
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>PTT</td>
                                            <td>960</td>
                                            <td>A-AEON-BSD</td>
                                            <td>MER/20/36522670</td>
                                            <td>TS/PTT/20/0312720738</td>
                                            <td>2022-06-15</td>
                                            <td>2022-06-17</td>
                                            <td>2</td>
                                            <td>COMPLETED</td>
                                            <td>RO</td>
                                            <td>LADIES</td>
                                            <td>18</td>
                                            <td>Event</td>
                                            <td>
                                                <div class="form-group width-250">
                                                    <select name="" id="" class="form-control width-200 float-left">
                                                        <option value="">-</option>
                                                        <option value="">Proses Cek Delivery</option>
                                                        <option value="">Waiting for Delivery</option>
                                                        <option value="">In Transit Ekspedisi</option>
                                                        <option value="">Waiting Posting Receive System</option>
                                                        <option value="">Sales E-Commerce</option>
                                                        <option value="">Stock Write Off</option>
                                                    </select>

                                                    <a href="javascript:void(0);">
                                                        <button class="btn btn-warning">
                                                            <i class="ri-pencil-line font-16"></i>
                                                        </button>
                                                    </a>
                                                </div>
                                               
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>PTT</td>
                                            <td>960</td>
                                            <td>A-AEON-BSD</td>
                                            <td>MER/20/36522670</td>
                                            <td>TS/PTT/20/0312720738</td>
                                            <td>2022-06-15</td>
                                            <td>2022-06-17</td>
                                            <td>2</td>
                                            <td>COMPLETED</td>
                                            <td>RO</td>
                                            <td>LADIES</td>
                                            <td>18</td>
                                            <td>Event</td>
                                            <td>
                                                <div class="form-group width-250">
                                                    <select name="" id="" class="form-control width-200 float-left">
                                                        <option value="">-</option>
                                                        <option value="">Proses Cek Delivery</option>
                                                        <option value="">Waiting for Delivery</option>
                                                        <option value="">In Transit Ekspedisi</option>
                                                        <option value="">Waiting Posting Receive System</option>
                                                        <option value="">Sales E-Commerce</option>
                                                        <option value="">Stock Write Off</option>
                                                    </select>

                                                    <a href="javascript:void(0);">
                                                        <button class="btn btn-warning">
                                                            <i class="ri-pencil-line font-16"></i>
                                                        </button>
                                                    </a>
                                                </div>
                                               
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>PTT</td>
                                            <td>960</td>
                                            <td>A-AEON-BSD</td>
                                            <td>MER/20/36522670</td>
                                            <td>TS/PTT/20/0312720738</td>
                                            <td>2022-06-15</td>
                                            <td>2022-06-17</td>
                                            <td>2</td>
                                            <td>COMPLETED</td>
                                            <td>RO</td>
                                            <td>LADIES</td>
                                            <td>18</td>
                                            <td>Event</td>
                                            <td>
                                                <div class="form-group width-250">
                                                    <select name="" id="" class="form-control width-200 float-left">
                                                        <option value="">-</option>
                                                        <option value="">Proses Cek Delivery</option>
                                                        <option value="">Waiting for Delivery</option>
                                                        <option value="">In Transit Ekspedisi</option>
                                                        <option value="">Waiting Posting Receive System</option>
                                                        <option value="">Sales E-Commerce</option>
                                                        <option value="">Stock Write Off</option>
                                                    </select>

                                                    <a href="javascript:void(0);">
                                                        <button class="btn btn-warning">
                                                            <i class="ri-pencil-line font-16"></i>
                                                        </button>
                                                    </a>
                                                </div>
                                               
                                            </td>
                                        </tr>
                                        
                                    </tbody>
                                </table>
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

             $('.search-panel .dropdown-menu').find('a').click(function(e) {
                e.preventDefault();
                var param = $(this).attr("href").replace("#","");
                var concept = $(this).text();
                var joinText = "Filter By " + concept;
                $('.search-panel span#search_concept').text(joinText);
                $('.input-group #search_param').val(param);
                console.log(concept);
                if(concept == 'All'){
                    $(".dateSrc").removeClass("hide");
                    $(".pickupCode").removeClass("hide");
                    $(".dropCode").removeClass("hide");
                    $(".deliveryStatus").removeClass("hide");
                } else if(concept == 'Date'){
                    $(".dateSrc").removeClass("hide");
                    $(".pickupCode").addClass("hide");
                    $(".dropCode").addClass("hide");
                    $(".deliveryStatus").addClass("hide");
                } else if(concept == 'Location'){
                    $(".dateSrc").addClass("hide");
                    $(".pickupCode").removeClass("hide");
                    $(".dropCode").removeClass("hide");
                    $(".deliveryStatus").addClass("hide");
                } else if(concept == 'Delivery Status'){
                    $(".dateSrc").addClass("hide");
                    $(".pickupCode").addClass("hide");
                    $(".dropCode").addClass("hide");
                    $(".deliveryStatus").removeClass("hide");
                }
            });
          
            var table = $('.table-detail-inventory').DataTable({
                lengthChange: false,
                "pageLength": 10,
                responsive: false,
                searching: false,
                scrollX:true,
                scrollCollapse:true,
                fixedColumns:{
                    left:0,
                    right: 1
                },
                "language": {
                "paginate": {
                    "previous": "<i class='mdi mdi-chevron-left'>",
                    "next": "<i class='mdi mdi-chevron-right'>"
                }
                },
                "drawCallback": function drawCallback() {
                    $('.dataTables_paginate > .pagination').addClass('pagination-rounded');
                },
                dom: 'frtip'
            });
            
            new $.fn.dataTable.FixedHeader( table );

        });

    </script>

@endsection