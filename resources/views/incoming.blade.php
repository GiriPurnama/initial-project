@extends('layouts.master')
@section('title') Incoming @endsection
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
                    <span class="header-word md-0">Incoming &nbsp;&nbsp;</span>
                    <a href="/home">&nbsp;&nbsp;&nbsp;<i class="ri-home-3-line home"></i></a>
                    <span>&nbsp;<i class="ri-arrow-right-s-line"></i></span>
                    <span>&nbsp;Incoming</span>
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
                            <h4 class="mb-0">Detail Incoming</h4>
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
                                        <!-- <span class="input-group-btn">
                                            <button class="btn btn-success right-btn waves-effect waves-light" type="button" data-toggle="modal" data-target=".form-console-loading"><i class="ri-add-line"></i> Add Data</button>
                                        </span> -->
                                    </div>
                                </div>

                            </div>
                            <div class="table-responsive">
                                <table class="table mb-0 table-button table-console-loading">

                                    <thead>
                                        <tr>

                                            <th>Batch No</th>
                                            <th>Resi No</th>
                                            <th>TO Number</th>
                                            <th>DO Number</th>
                                            <th>Drop Name</th>
                                            <th>Pickup Name</th>
                                            <th>Driver Name</th>
                                            <th>Expedition</th>
                                            <th>Vehicle License Plate</th>
                                            <th>Goods QTY</th>
                                            <th>Release Date</th>
                                            <th>Action</th>
                                          
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <tr>
                                            
                                            <td>0001231</td>
                                            <td>1234551</td>
                                            <td>MER/20/36522670</td>
                                            <td>TS/PTT/20/0312720738</td>
                                            <td>E-AEON-BSD</td>
                                            <td>A-AEON-BSD</td>
                                            <td>UNIT LOGISTIC</td>
                                            <td>DIDIN</td>
                                            <td>B 3455 CD</td>
                                            <td>200</td>
                                            <td>2022-01-03</td>
                                            <td>
                                                <a href="javascript:void(0);" data-toggle="modal" data-target=".add-data"><span class="edit"><i class="ri-pencil-line"></i></span></a>
                                                <!-- <a href="javascript:void(0);" data-toggle="modal" data-target=".print-data"><span class="print"><i class=" ri-printer-line"></i></span></a> -->                                                            
                                            </td>
                                            
                                        </tr>

                                        <tr>
                                            
                                            <td>0001232</td>
                                            <td>1234552</td>
                                            <td>MER/20/36522670</td>
                                            <td>TS/PTT/20/0312720738</td>
                                            <td>E-AEON-BSD</td>
                                            <td>A-AEON-BSD</td>
                                            <td>UNIT LOGISTIC</td>
                                            <td>DIDIN</td>
                                            <td>B 3455 CD</td>
                                            <td>200</td>
                                            <td>2022-01-03</td>
                                            <td>
                                                <a href="javascript:void(0);" data-toggle="modal" data-target=".add-data"><span class="edit"><i class="ri-pencil-line"></i></span></a>
                                                <!-- <a href="javascript:void(0);" data-toggle="modal" data-target=".print-data"><span class="print"><i class=" ri-printer-line"></i></span></a> -->                                                            
                                            </td>
                                            
                                        </tr>

                                        <tr>
                                            
                                            <td>0001233</td>
                                            <td>1234553</td>
                                            <td>MER/20/36522670</td>
                                            <td>TS/PTT/20/0312720738</td>
                                            <td>E-AEON-BSD</td>
                                            <td>A-AEON-BSD</td>
                                            <td>UNIT LOGISTIC</td>
                                            <td>DIDIN</td>
                                            <td>B 3455 CD</td>
                                            <td>200</td>
                                            <td>2022-01-03</td>
                                            <td>
                                                <a href="javascript:void(0);" data-toggle="modal" data-target=".add-data"><span class="edit"><i class="ri-pencil-line"></i></span></a>
                                                <!-- <a href="javascript:void(0);" data-toggle="modal" data-target=".print-data"><span class="print"><i class=" ri-printer-line"></i></span></a> -->                                                            
                                            </td>
                                            
                                        </tr>

                                        <tr>
                                            
                                            <td>0001234</td>
                                            <td>1234554</td>
                                            <td>MER/20/36522670</td>
                                            <td>TS/PTT/20/0312720738</td>
                                            <td>E-AEON-BSD</td>
                                            <td>A-AEON-BSD</td>
                                            <td>UNIT LOGISTIC</td>
                                            <td>DIDIN</td>
                                            <td>B 3455 CD</td>
                                            <td>200</td>
                                            <td>2022-01-03</td>
                                            <td>
                                                <a href="javascript:void(0);" data-toggle="modal" data-target=".add-data"><span class="edit"><i class="ri-pencil-line"></i></span></a>
                                                <!-- <a href="javascript:void(0);" data-toggle="modal" data-target=".print-data"><span class="print"><i class=" ri-printer-line"></i></span></a> -->                                                            
                                            </td>
                                            
                                        </tr>

                                        <tr>
                                            
                                            <td>0001235</td>
                                            <td>1234555</td>
                                            <td>MER/20/36522670</td>
                                            <td>TS/PTT/20/0312720738</td>
                                            <td>E-AEON-BSD</td>
                                            <td>A-AEON-BSD</td>
                                            <td>UNIT LOGISTIC</td>
                                            <td>DIDIN</td>
                                            <td>B 3455 CD</td>
                                            <td>200</td>
                                            <td>2022-01-03</td>
                                            <td>
                                                <a href="javascript:void(0);" data-toggle="modal" data-target=".add-data"><span class="edit"><i class="ri-pencil-line"></i></span></a>
                                                <!-- <a href="javascript:void(0);" data-toggle="modal" data-target=".print-data"><span class="print"><i class=" ri-printer-line"></i></span></a> -->                                                            
                                            </td>
                                            
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
            <div class="modal fade add-data" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title mt-0" id="myExtraLargeModalLabel">Detail Information</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">

                            <form class='form-print'>
                                <div class="row">
                                  
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">DO Number</label>
                                            <input type="text" name="do_number" value="TS/PTT/20/0312720738" class="form-control to_number_val" readonly>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">TO Number</label>
                                            <input type="text" name="to_number" value="MER/20/36522670" class="form-control" readonly>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Pickup Name</label>
                                            <input type="text" name="pickup_name" value="A-AEON-BSD" class="form-control" readonly>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Drop Name</label>
                                            <input type="text" name="drop_name" value="E-AEON-BSD" class="form-control" readonly>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="group-box">
                                            
                                            <div class="row">

                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label for="">Koli QTY</label>
                                                        <input name="koli_qty" type="number" class="form-control koli_qty_val" value="10" readonly>
                                                    </div>
                                                </div>

                                                
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label for="">Goods QTY Update</label>
                                                        <input name="goods_qty" type="number" class="form-control goods_qty_val" value="120" readonly>
                                                    </div>
                                                </div>

                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label for="">Received Date</label>
                                                        <input name="loading_date" type="text" data-provide="datepicker" data-date-format="yyyy-mm-dd" data-date-autoclose="true" class="form-control datePicker loading_date_val" required>
                                                    </div>
                                                </div>

                                            </div>
    
                                        </div>
                                    </div>

                                    <div class="col-md-12 ">
                                        <div class="table-responsive detail-qty">
                                            <table class="tableEditQty table mb-0">
                                                <thead>
                                                    <tr>
                                                        <th>TO Number</th>
                                                        <th>DO Number</th>
                                                        <th>Goods ID</th>
                                                        <th>Goods Quantity</th>
                                                        <th>Update Quantity </th>
                                                    </tr>
                                                </thead>
                                                <tbody class="addEditQty">
                                                    <tr>
                                                        <td>MER/20/36522670</td>
                                                        <td>TS/PTT/20/0312720738</td>
                                                        <td>LH22111MD</td>
                                                        <td>24</td>
                                                        <td>
                                                            <form>
                                                                <div class="row">
                                                                    <div class="col-sm-6">
                                                                        <input type="number" class="form-control goods_qty_detail" name="goods_qty[]" value="" required>
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <button class="btn btn-primary"><i class="ri-send-plane-2-line"></i></button>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>MER/20/36522670</td>
                                                        <td>TS/PTT/20/0312720738</td>
                                                        <td>LH22111MB</td>
                                                        <td>24</td>
                                                        <td>
                                                            <form>
                                                                <div class="row">
                                                                    <div class="col-sm-6">
                                                                        <input type="number" class="form-control goods_qty_detail" name="goods_qty[]" value="" required>
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <button class="btn btn-primary"><i class="ri-send-plane-2-line"></i></button>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>MER/20/36522670</td>
                                                        <td>TS/PTT/20/0312720738</td>
                                                        <td>LH22111M1</td>
                                                        <td>24</td>
                                                        <td>
                                                            <form>
                                                                <div class="row">
                                                                    <div class="col-sm-6">
                                                                        <input type="number" class="form-control goods_qty_detail" name="goods_qty[]" value="" required>
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <button class="btn btn-primary"><i class="ri-send-plane-2-line"></i></button>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>MER/20/36522670</td>
                                                        <td>TS/PTT/20/0312720738</td>
                                                        <td>LH22111MG</td>
                                                        <td>24</td>
                                                        <td>
                                                            <form>
                                                                <div class="row">
                                                                    <div class="col-sm-6">
                                                                        <input type="number" class="form-control goods_qty_detail" name="goods_qty[]" value="" required>
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <button class="btn btn-primary"><i class="ri-send-plane-2-line"></i></button>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>MER/20/36522670</td>
                                                        <td>TS/PTT/20/0312720738</td>
                                                        <td>LH22111MR</td>
                                                        <td>24</td>
                                                        <td>
                                                            <form>
                                                                <div class="row">
                                                                    <div class="col-sm-6">
                                                                        <input type="number" class="form-control goods_qty_detail" name="goods_qty[]" value="" required>
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <button class="btn btn-primary"><i class="ri-send-plane-2-line"></i></button>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-12">
                                        <div class="form-group text-right">
                                            <!-- <button type="button" class="btn btn-warning assign-order">Assign Order</button> -->
                                            <input type="submit" class="add-row btn btn-primary" value="Submit">
                                            <!-- <a href="/print-order" target="_BLANK" class="add-row btn btn-primary">Print</a> -->
                                        </div>
                                    </div>

                                </div>
                            </form>

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


            $('.tableEditQty').DataTable({
                lengthChange: false,
                "pageLength": 10,
                responsive: false,
                scrollX:true,
                scrollCollapse:true,
                "language": {
                "paginate": {
                    "previous": "<i class='mdi mdi-chevron-left'>",
                    "next": "<i class='mdi mdi-chevron-right'>"
                }
                },
                "drawCallback": function drawCallback() {
                    $('.dataTables_paginate > .pagination').addClass('pagination-rounded');
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

            $(".assign-order").click(function(){
                $(".form-print").addClass("hide");
                $(".form-delivery").removeClass("hide");
            });

            $(".back-assign-order").click(function(){
                $(".form-print").removeClass("hide");
                $(".form-delivery").addClass("hide");
            })
           
            $(".type-expedition").change(function() {
                var value = $(this).val();
                $(".delivery-date").removeClass("hide");
                $(".submit-order").removeClass("hide");

                if(value == 'Internal'){
                    $(".group-internal").removeClass("hide");
                    $(".group-vendor").addClass("hide");

                } else if(value == 'Vendor'){

                    $(".group-internal").addClass("hide");
                    $(".group-vendor").removeClass("hide");

                }
            });


        });

    </script>

@endsection