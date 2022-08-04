@extends('layouts.master')
@section('title') Console Loading @endsection
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
                    <span class="header-word md-0">Console Loading &nbsp;&nbsp;</span>
                    <a href="/home">&nbsp;&nbsp;&nbsp;<i class="ri-home-3-line home"></i></a>
                    <span>&nbsp;<i class="ri-arrow-right-s-line"></i></span>
                    <span>&nbsp;Console Loading</span>
                </div>
                <div class="page-title-right">
                    <a class="btn btn-back" href="/home"><i class="ri-arrow-left-s-line"></i> Back</a>
                </div>
            </div>
        </div>
    </div>
    <div class="page-content console-loading">
        <div class="container-fluid">

            <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-flex align-items-center justify-content-between">
                            <h4 class="mb-0">Detail Console Loading</h4>
                        </div>
                    </div>
                </div>
            <!-- end page title -->
            
            <div class="row">
                <div class="col-lg-12">
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
                                        <span class="input-group-btn">
                                            <button class="btn btn-success right-btn waves-effect waves-light" type="button" data-toggle="modal" data-target=".form-console-loading"><i class="ri-add-line"></i> Add Data</button>
                                        </span>
                                    </div>
                                </div>

                            </div>
                            <div class="table-responsive">
                                <table class="table mb-0 table-console-loading">

                                    <thead>
                                        <tr>

                                            <th>Batch No</th>
                                            <th>Resi No</th>
                                            <th>Expedition</th>
                                            <th>TO Number</th>
                                            <th>DO Number</th>
                                            <th>Pickup Name</th>
                                            <th>Drop Name</th>
                                            <th>Driver Name</th>
                                            <th>Vehicle License Plate</th>
                                            <th>Vehicle Type</th>
                                            <th>Delivery Status</th>
                                            <th>Weight</th>
                                            <th>Volume</th>
                                            <th>Goods QTY</th>
                                            <th>Koli QTY</th>
                                            <th>Loading Date</th>
                                            <th>Delivery Date</th>
                                            <th>Created By</th>
                                            <th>Created Date</th>
                                          
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>00034557</td>
                                            <td>02245511</td>
                                            <td>ANUGRAH</td>
                                            <td>MER/20/36522670</td>
                                            <td>TS/PTT/20/0312720738</td>
                                            <td>A-AEON-BSD</td>
                                            <td>E-AEON-BSD</td>
                                            <td>Sudirman</td>
                                            <td>B 1234 CC</td>
                                            <td>CDE</td>
                                            <td>IN DELIVERY</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>200</td>
                                            <td>41</td>
                                            <td>2022-08-07</td>
                                            <td>2022-08-07</td>
                                            <td>Giri Purnama</td>
                                            <td>2022-08-07</td>
                                            
                                        </tr>

                                        <tr>
                                            <td>00034557</td>
                                            <td>02245511</td>
                                            <td>ANUGRAH</td>
                                            <td>MER/20/36522670</td>
                                            <td>TS/PTT/20/0312720738</td>
                                            <td>A-AEON-BSD</td>
                                            <td>E-AEON-BSD</td>
                                            <td>Sudirman</td>
                                            <td>B 1234 CC</td>
                                            <td>CDE</td>
                                            <td>IN DELIVERY</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>200</td>
                                            <td>41</td>
                                            <td>2022-08-07</td>
                                            <td>2022-08-07</td>
                                            <td>Giri Purnama</td>
                                            <td>2022-08-07</td>
                                            
                                        </tr>

                                        <tr>
                                            <td>00034557</td>
                                            <td>02245511</td>
                                            <td>ANUGRAH</td>
                                            <td>MER/20/36522670</td>
                                            <td>TS/PTT/20/0312720738</td>
                                            <td>A-AEON-BSD</td>
                                            <td>E-AEON-BSD</td>
                                            <td>Sudirman</td>
                                            <td>B 1234 CC</td>
                                            <td>CDE</td>
                                            <td>IN DELIVERY</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>200</td>
                                            <td>41</td>
                                            <td>2022-08-07</td>
                                            <td>2022-08-07</td>
                                            <td>Giri Purnama</td>
                                            <td>2022-08-07</td>
                                            
                                        </tr>

                                        <tr>
                                            <td>00034557</td>
                                            <td>02245511</td>
                                            <td>ANUGRAH</td>
                                            <td>MER/20/36522670</td>
                                            <td>TS/PTT/20/0312720738</td>
                                            <td>A-AEON-BSD</td>
                                            <td>E-AEON-BSD</td>
                                            <td>Sudirman</td>
                                            <td>B 1234 CC</td>
                                            <td>CDE</td>
                                            <td>IN DELIVERY</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>200</td>
                                            <td>41</td>
                                            <td>2022-08-07</td>
                                            <td>2022-08-07</td>
                                            <td>Giri Purnama</td>
                                            <td>2022-08-07</td>
                                            
                                        </tr>

                                        <tr>
                                            <td>00034557</td>
                                            <td>02245511</td>
                                            <td>ANUGRAH</td>
                                            <td>MER/20/36522670</td>
                                            <td>TS/PTT/20/0312720738</td>
                                            <td>A-AEON-BSD</td>
                                            <td>E-AEON-BSD</td>
                                            <td>Sudirman</td>
                                            <td>B 1234 CC</td>
                                            <td>CDE</td>
                                            <td>IN DELIVERY</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>200</td>
                                            <td>41</td>
                                            <td>2022-08-07</td>
                                            <td>2022-08-07</td>
                                            <td>Giri Purnama</td>
                                            <td>2022-08-07</td>
                                            
                                        </tr>
                                        
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>

        </div> <!-- container-fluid -->


        <!-- Modal -->
            <div class="modal fade form-console-loading" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title mt-0" id="myExtraLargeModalLabel">Detail Information</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">

                            <form>
                                <div class="row">
                                  
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Select DO Number</label>
                                            <select name="" class="form-control select2 do_number_val" required>
                                                <option value="">-</option>
                                                <option value="TS/PTT/20/0312648319">TS/PTT/20/0312648319</option>
                                                <option value="TS/PTT/20/0312648320">TS/PTT/20/0312648320</option>
                                                <option value="TS/PTT/20/0312648321">TS/PTT/20/0312648321</option>
                                                <option value="TS/PTT/20/0312648322">TS/PTT/20/0312648322</option>
                                                <option value="TS/PTT/20/0312648323">TS/PTT/20/0312648323</option>
                                                <option value="TS/PTT/20/0312648324">TS/PTT/20/0312648324</option>
                                            </select>
                                        </div>
                                    </div>

                                    <!-- input hidden -->
                                        <input type="hidden" class="pickup_name_val" name="pickup_name" value="A-AEON-BSD">
                                        <input type="hidden" class="drop_name_val" name="drop_name" value="E-AEON-BSD">
                                    <!-- end input hidden -->

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">TO Number</label>
                                            <input type="text" class="form-control to_number_val" readonly>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="group-box">
                                            <!-- <h5>Detail Information</h5>
                                            <hr> -->
                                            
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label for="">Expedition</label>
                                                        <select name="" class="form-control select2 expedition_val" required>
                                                            <option value="">-</option>
                                                            <option value="UNIT LOGISTIC">UNIT LOGISTIC</option>
                                                            <option value="KOPKAR">KOPKAR</option>
                                                            <option value="OFFICE">OFFICE</option>
                                                            <option value="ANUGRAH">ANUGRAH</option>
                                                            <option value="GEMA EXPRESS">GEMA EXPRESS</option>
                                                            <option value="APM">APM</option>
                                                        </select>
                                                    </div>
                                                </div>
            
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label for="">Batch No</label>
                                                        <input type="text" class="form-control batch_no_val">
                                                    </div>
                                                </div>
            
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label for="">Resi No</label>
                                                        <input type="text" class="form-control resi_no_val">
                                                    </div>
                                                </div>

                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label for="">Driver Name</label>
                                                        <input type="text" class="form-control driver_name_val">
                                                    </div>
                                                </div>

                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label for="">Vehicle License Plate</label>
                                                        <input type="text" class="form-control vehicle_license_plate_val">
                                                    </div>
                                                </div>

                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label for="">Vehicle Type</label>
                                                        <select name="" class="form-control vehicle_type_val" required>
                                                            <option value="">-</option>
                                                            <option value="CDD">CDD</option>
                                                            <option value="CDE">CDE</option>
                                                            <option value="BOX">BOX</option>
                                                        </select>
                                                    </div>
                                                </div>


                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label for="">Delivery Status</label>
                                                        <select name="" class="form-control delivery_status_val" required>
                                                            <option value="">-</option>
                                                            <option value="IN DELIVERY">IN DELIVERY</option>
                                                            <option value="COMPLETED">COMPLETED</option>
                                                            <option value="WAITING FOR DELIVERY">WAITING FOR DELIVERY</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label for="">Weight</label>
                                                        <input type="number" class="form-control weight_val">
                                                    </div>
                                                </div>


                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label for="">Volume</label>
                                                        <input type="number" class="form-control volume_val">
                                                    </div>
                                                </div>

                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for="">Goods QTY</label>
                                                        <input type="number" class="form-control goods_qty_val">
                                                    </div>
                                                </div>

                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for="">Koli QTY</label>
                                                        <input type="number" class="form-control koli_qty_val">
                                                    </div>
                                                </div>

                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for="">Loading Date</label>
                                                        <input type="text" data-provide="datepicker" data-date-format="yyyy-mm-dd" data-date-autoclose="true" class="form-control datePicker loading_date_val">
                                                    </div>
                                                </div>

                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for="">Delivery Date</label>
                                                        <input type="text" data-provide="datepicker" data-date-format="yyyy-mm-dd" data-date-autoclose="true" class="form-control datePicker delivery_date_val">
                                                    </div>
                                                </div>


                                            </div>
    
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-12">
                                        <div class="form-group text-right">
                                            <input type="button" class="add-row btn btn-primary" value="Add Row">
                                            <button type="button" class="delete-row btn btn-danger">Delete Row</button>
                                        </div>
                                    </div>

                                </div>


                            </form>

                            <table class="table mb-0 tableAddLoading">
                                <thead>
                                    <tr>
                                        <th>Select</th>
                                        <th>DO Number</th>
                                        <th>TO Number</th>
                                        <th>Batch No</th>
                                        <th>Resi No</th>
                                        <th>Expedition</th>
                                        <th>Pickup Name</th>
                                        <th>Drop Name</th>
                                        <th>Driver Name</th>
                                        <th>Vehicle License Plate</th>
                                        <th>Vehicle Type</th>
                                        <th>Delivery Status</th>
                                        <th>Weight</th>
                                        <th>Volume</th>
                                        <th>Goods QTY</th>
                                        <th>Koli QTY</th>
                                        <th>Loading Date</th>
                                        <th>Delivery Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                </tbody>
                            </table>
                            
                        </div>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div>
        <!-- End Modal -->
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
        $(".select2").select2();

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

            var table = $('.table-console-loading').DataTable({
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

            $(".add-row").click(function(){
                var do_number = $(".do_number_val").val();
                var to_number = $(".to_number_val").val();
                var pickup_name = $(".pickup_name_val").val();
                var drop_name = $(".drop_name_val").val();
                var batch_no =  $(".batch_no_val").val();
                var resi_no =  $(".resi_no_val").val();
                var expedition =  $(".expedition_val").val();
                var driver_name =  $(".driver_name_val").val();
                var vehicle_license_plate =  $(".vehicle_license_plate_val").val();
                var vehicle_type =  $(".vehicle_type_val").val();
                var delivery_status =  $(".delivery_status_val").val();
                var weight =  $(".weight_val").val();
                var volume =  $(".volume_val").val();
                var goods_qty =  $(".goods_qty_val").val();
                var koli_qty =  $(".koli_qty_val").val();
                var loading_date =  $(".loading_date_val").val();
                var delivery_date =  $(".delivery_date_val").val();
                
                var markup = "<tr><td><input type='checkbox' name='record'></td><td>" + do_number + "</td><td>" + to_number + "</td><td>" + batch_no + "</td><td>" + resi_no + "</td><td>" + expedition + "</td><td>" + pickup_name + "</td><td>" + drop_name + "</td><td>" + driver_name + "</td><td>" + vehicle_license_plate + "</td><td>" + vehicle_type + "</td><td>" + delivery_status + "</td><td>" + weight + "</td><td>" + volume + "</td><td>" + goods_qty + "</td><td>" + koli_qty + "</td><td>" + loading_date + "</td><td>" + delivery_date + "</td></tr>";

                $(".tableAddLoading tbody").append(markup);
            });
            
            // Find and remove selected table rows
            $(".delete-row").click(function(){
                $(".tableAddLoading tbody").find('input[name="record"]').each(function(){
                    if($(this).is(":checked")){
                        $(this).parents("tr").remove();
                    }
                });
            });

            $('.datePicker').datepicker();


        });

    </script>

@endsection