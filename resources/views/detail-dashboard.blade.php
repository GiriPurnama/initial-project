@extends('layouts.master')
@section('title') Detail Dashboard @endsection
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
                    <span class="header-word md-0">Detail Dashboard &nbsp;&nbsp;</span>
                    <a href="/home">&nbsp;&nbsp;&nbsp;<i class="ri-home-3-line home"></i></a>
                    <span>&nbsp;<i class="ri-arrow-right-s-line"></i></span>
                    <span>&nbsp;Detail Dashboard</span>
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
                                <a class="btn-card red" href="javascript:void(0)">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="media">
                                                <div class="media-body overflow-hidden">
                                                    <p class="text-truncate font-size-18 mb-2 text-gray">Waiting for Delivery</p>
                                                    <h3 class="mb-0 text-gray font-bold">60%</h3>
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
                                <a class="btn-card orange" href="javascript:void(0)">
                                    <div class="card">
                                        <div class="card-body ">
                                            <div class="media">
                                                <div class="media-body overflow-hidden">
                                                    <p class="text-truncate font-size-18 mb-2 text-gray">In Transit Expedition</p>
                                                    <h3 class="mb-0 text-gray font-bold">30%</h3>
                                                </div>
                                                <div class="text-primary">
                                                    <!-- <i class="ri-alert-line text-orange font-size-36"></i> -->
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card-body border-top py-0 line-box-alert bg-orange hide">
                                        </div>
                                    </div>
                                </a>
                           
                            </div>

                            <div class="col-md-4">
                                <a class="btn-card green" href="javascript:void(0)">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="media">
                                                <div class="media-body overflow-hidden">
                                                    <p class="text-truncate font-size-18 mb-2 text-gray">Waiting Posting Receive System</p>
                                                    <h3 class="mb-0 text-gray font-bold">10%</h3>
                                                </div>
                                                <div class="text-primary">
                                                    <!-- <i class="ri-alert-line text-green font-size-36"></i> -->
                                                </div>
                                            </div>
                                        </div>
    
                                        <div class="card-body border-top py-0 line-box-alert bg-green hide">
                                        </div>
                                    </div>
                                </a>

                            </div>
                            
                        </div>
                        
                    </div>
                    
                    <div class="card no-bg wrapper-red">
                        
                        <div class="center-line">
                            <div class="row">
                                <div class="col-md-12">
                                    <!-- <div class="card no-bg"> -->
                                        <h5 class="text-gray font-bold">
                                            Waiting for Delivery
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
    
                                <div class="row">
    
                                    <div class="table-responsive">
                                        <table class="table mb-0 table-detail-dashboard">
    
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
                                                    <td>
                                                        <span class="badge badge-danger">High Risk</span>
                                                    </td>
                                                    <td>RO</td>
                                                    <td>LADIES</td>
                                                    <td>18</td>
                                                    <td>Event</td>
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
                                                    <td>
                                                        <span class="badge badge-warning">Medium Risk</span>
                                                    </td>
                                                    <td>RO</td>
                                                    <td>LADIES</td>
                                                    <td>18</td>
                                                    <td>Event</td>
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
                                                    <td>
                                                        <span class="badge badge-success">Low Risk</span>
                                                    </td>
                                                    <td>RO</td>
                                                    <td>LADIES</td>
                                                    <td>18</td>
                                                    <td>Event</td>
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
                                                    <td>
                                                        <span class="badge badge-danger">High Risk</span>
                                                    </td>
                                                    <td>RO</td>
                                                    <td>LADIES</td>
                                                    <td>18</td>
                                                    <td>Event</td>
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
                                                    <td>
                                                        <span class="badge badge-danger">High Risk</span>
                                                    </td>
                                                    <td>RO</td>
                                                    <td>LADIES</td>
                                                    <td>18</td>
                                                    <td>Event</td>
                                                </tr>
                                                
                                                
                                            </tbody>
    
                                        </table>
                                    </div>
    
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="card no-bg wrapper-orange hide">

                        <div class="center-line">
                            <div class="row">
                                <div class="col-md-12">
                                    <!-- <div class="card no-bg"> -->
                                        <h5 class="text-gray font-bold">
                                            In Transit Expedition
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
    
                                <div class="row">
    
                                    <div class="table-responsive">
                                        <table class="table mb-0 table-detail-dashboard">
    
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
                                                    <td>
                                                        <span class="badge badge-danger">High Risk</span>
                                                    </td>
                                                    <td>RO</td>
                                                    <td>LADIES</td>
                                                    <td>18</td>
                                                    <td>Event</td>
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
                                                    <td>
                                                        <span class="badge badge-warning">Medium Risk</span>
                                                    </td>
                                                    <td>RO</td>
                                                    <td>LADIES</td>
                                                    <td>18</td>
                                                    <td>Event</td>
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
                                                    <td>
                                                        <span class="badge badge-success">Low Risk</span>
                                                    </td>
                                                    <td>RO</td>
                                                    <td>LADIES</td>
                                                    <td>18</td>
                                                    <td>Event</td>
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
                                                    <td>
                                                        <span class="badge badge-danger">High Risk</span>
                                                    </td>
                                                    <td>RO</td>
                                                    <td>LADIES</td>
                                                    <td>18</td>
                                                    <td>Event</td>
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
                                                    <td>
                                                        <span class="badge badge-danger">High Risk</span>
                                                    </td>
                                                    <td>RO</td>
                                                    <td>LADIES</td>
                                                    <td>18</td>
                                                    <td>Event</td>
                                                </tr>
                                                
                                                
                                            </tbody>
    
                                        </table>
                                    </div>
    
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="card no-bg wrapper-green hide">

                        <div class="center-line">
                            <div class="row">
                                <div class="col-md-12">
                                    <!-- <div class="card no-bg"> -->
                                        <h5 class="text-gray font-bold">
                                            Waiting Posting Receive System
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
    
                                <div class="row">
    
                                    <div class="table-responsive">
                                        <table class="table mb-0 table-detail-dashboard">
    
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
                                                    <td>
                                                        <span class="badge badge-danger">High Risk</span>
                                                    </td>
                                                    <td>RO</td>
                                                    <td>LADIES</td>
                                                    <td>18</td>
                                                    <td>Event</td>
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
                                                    <td>
                                                        <span class="badge badge-warning">Medium Risk</span>
                                                    </td>
                                                    <td>RO</td>
                                                    <td>LADIES</td>
                                                    <td>18</td>
                                                    <td>Event</td>
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
                                                    <td>
                                                        <span class="badge badge-success">Low Risk</span>
                                                    </td>
                                                    <td>RO</td>
                                                    <td>LADIES</td>
                                                    <td>18</td>
                                                    <td>Event</td>
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
                                                    <td>
                                                        <span class="badge badge-danger">High Risk</span>
                                                    </td>
                                                    <td>RO</td>
                                                    <td>LADIES</td>
                                                    <td>18</td>
                                                    <td>Event</td>
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
                                                    <td>
                                                        <span class="badge badge-danger">High Risk</span>
                                                    </td>
                                                    <td>RO</td>
                                                    <td>LADIES</td>
                                                    <td>18</td>
                                                    <td>Event</td>
                                                </tr>
                                                
                                                
                                            </tbody>
    
                                        </table>
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

            var table = $('.table-detail-dashboard').DataTable({
                lengthChange: false,
                "pageLength": 10,
                responsive: false,
                searching: false,
                scrollX:true,
                scrollCollapse:true,
                fixedColumns:{
                    left:0,
                    right: 0
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