@extends('layouts.master')
@section('title') Manage Task @endsection
@section('css')
    <!-- DataTables -->
    <link href="{{ URL::asset('/assets/libs/jquery-vectormap/jquery-vectormap.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- Responsive datatable examples -->
    <link href="{{ URL::asset('/assets/libs/datatables/datatables.min.css')}}" rel="stylesheet" type="text/css" />

    <link href="{{ URL::asset('/assets/libs/select2/select2.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('/assets/libs/bootstrap-datepicker/bootstrap-datepicker.min.css')}}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.css" />
@endsection

@section('content')
    <div class="row bread-static">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between header-title" style="margin-bottom:25px;">
                <!-- <h4 class="mb-0">Order Management</h4> -->
                <div class="header-nav">
                    <span class="header-word md-0">Dashboard &nbsp;&nbsp;</span>
                    <a href="/home">&nbsp;&nbsp;&nbsp;<i class="ri-home-3-line home"></i></a>
                    <span>&nbsp;<i class="ri-arrow-right-s-line"></i></span>
                    <span>&nbsp;Manage Task  </span>
                </div>
            </div>
        </div>
    </div>
    <div class="page-content tacking-action">
        <div class="container-fluid">

            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-8">

                            <div class="content-card">
                                <h5>Taking Accountability for Result</h5>
                                <p>
                                    Clarifying Reporting lines and getting to single points of Accountability
                                </p>
                            </div>

                        </div>
                        
                        <div class="col-md-2">
                            <div class="content-card">
                                <div class="box-content text-center">
                                    <h5>Task Completed</h5>
                                    <span class="font-size-30">
                                        1 of 5
                                    </span>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-2">
                            <div class="content-card">
                                <div class="box-content text-center">
                                    <h5>Incomplete Task</h5>
                                    <span class="font-size-30">
                                        4 of 5 
                                    </span>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">

                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs nav-tabs-custom nav-justified" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#task" role="tab">
                                        <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                                        <span class="d-none d-sm-block">Task</span> 
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#reminders" role="tab">
                                        <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                                        <span class="d-none d-sm-block">Reminders</span> 
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#messages1" role="tab">
                                        <span class="d-block d-sm-none"><i class="far fa-envelope"></i></span>
                                        <span class="d-none d-sm-block">Action Plan</span>   
                                    </a>
                                </li>
                            
                            </ul>
                        </div>
                    </div>

                    <!-- Tab panes -->
                    <div class="tab-content p-3 text-muted">
                        <div class="tab-pane active" id="task" role="tabpanel">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <ul class="no-bullets">
                                                
                                                <li>
                                                    <div class="card-label mg-20">
                                                        <label class="label float-left">
                                                            <input  class="label__checkbox" type="checkbox"  />
                                                            <span class="label__text">
                                                                <span class="label__check">
                                                                    <i class="fa fa-check icon"></i>
                                                                </span>
                                                            </span>
                                                        </label>
                                                        <span class="label-title">
                                                            <p>
                                                                Lorem ipsum dolor sit amet, consectetuer adipiscing eli.
                                                            </p>
                                                        </span>
                                                    </div>
                                                </li>

                                                <li>
                                                    <div class="card-label mg-20">
                                                        <label class="label">
                                                            <input  class="label__checkbox" type="checkbox"  />
                                                            <span class="label__text">
                                                                <span class="label__check">
                                                                    <i class="fa fa-check icon"></i>
                                                                </span>
                                                            </span>
                                                        </label>
                                                        <span class="label-title">
                                                            <p>
                                                                Integer vitae libero ac risus egestas placerat.
                                                            </p>
                                                        </span>
                                                    </div>
                                                </li>

                                                <li>
                                                    <div class="card-label mg-20">
                                                        <label class="label float-left">
                                                            <input  class="label__checkbox" type="checkbox"  />
                                                            <span class="label__text">
                                                                <span class="label__check">
                                                                    <i class="fa fa-check icon"></i>
                                                                </span>
                                                            </span>
                                                        </label>
                                                        <span class="label-title">
                                                            <p>
                                                                Lorem ipsum dolor sit amet, consectetuer adipiscing eli.
                                                            </p>
                                                        </span>
                                                    </div>
                                                </li>

                                                <li>
                                                    <div class="card-label mg-20">
                                                        <label class="label">
                                                            <input  class="label__checkbox" type="checkbox"  />
                                                            <span class="label__text">
                                                                <span class="label__check">
                                                                    <i class="fa fa-check icon"></i>
                                                                </span>
                                                            </span>
                                                        </label>
                                                        <span class="label-title">
                                                            <p>
                                                                Integer vitae libero ac risus egestas placerat.
                                                            </p>
                                                        </span>
                                                    </div>
                                                </li>

                                                <li>
                                                    <div class="card-label mg-20">
                                                        <label class="label float-left">
                                                            <input  class="label__checkbox" type="checkbox"  checked />
                                                            <span class="label__text">
                                                                <span class="label__check">
                                                                    <i class="fa fa-check icon"></i>
                                                                </span>
                                                            </span>
                                                        </label>
                                                        <span class="label-title">
                                                            <p>
                                                                Lorem ipsum dolor sit amet, consectetuer adipiscing eli.
                                                            </p>
                                                        </span>
                                                    </div>
                                                </li>

                                                <li>
                                                    <div class="card-label mg-20">
                                                        <label class="label">
                                                            <input  class="label__checkbox" type="checkbox"  checked/>
                                                            <span class="label__text">
                                                                <span class="label__check">
                                                                    <i class="fa fa-check icon"></i>
                                                                </span>
                                                            </span>
                                                        </label>
                                                        <span class="label-title">
                                                            <p>
                                                                Integer vitae libero ac risus egestas placerat.
                                                            </p>
                                                        </span>
                                                    </div>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="warp-action">
                                                <h4>Lorem ipsum dolor sit amet</h4>
                                                <span class="subtitle">2022-01-08</span>
                                                <p class="content-action">
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                                </p>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="warp-form container">
                                            <form>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <textarea class="form-control"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group float-right">
                                                            <input type="button" class="btn btn-primary" value="Submit">
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="reminders" role="tabpanel">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <ul class="no-bullets">
                                                
                                                <li>
                                                    <div class="card-label mg-20">
                                                        <label class="label float-left">
                                                            <input  class="label__checkbox" type="checkbox"  />
                                                            <span class="label__text">
                                                                <span class="label__check">
                                                                    <i class="fa fa-check icon"></i>
                                                                </span>
                                                            </span>
                                                        </label>
                                                        <span class="label-title">
                                                            <p>
                                                                Lorem ipsum dolor sit amet, consectetuer adipiscing eli.
                                                            </p>
                                                        </span>
                                                    </div>
                                                </li>

                                                <li>
                                                    <div class="card-label mg-20">
                                                        <label class="label">
                                                            <input  class="label__checkbox" type="checkbox"  />
                                                            <span class="label__text">
                                                                <span class="label__check">
                                                                    <i class="fa fa-check icon"></i>
                                                                </span>
                                                            </span>
                                                        </label>
                                                        <span class="label-title">
                                                            <p>
                                                                Integer vitae libero ac risus egestas placerat.
                                                            </p>
                                                        </span>
                                                    </div>
                                                </li>

                                                <li>
                                                    <div class="card-label mg-20">
                                                        <label class="label float-left">
                                                            <input  class="label__checkbox" type="checkbox"  />
                                                            <span class="label__text">
                                                                <span class="label__check">
                                                                    <i class="fa fa-check icon"></i>
                                                                </span>
                                                            </span>
                                                        </label>
                                                        <span class="label-title">
                                                            <p>
                                                                Lorem ipsum dolor sit amet, consectetuer adipiscing eli.
                                                            </p>
                                                        </span>
                                                    </div>
                                                </li>

                                                <li>
                                                    <div class="card-label mg-20">
                                                        <label class="label">
                                                            <input  class="label__checkbox" type="checkbox"  />
                                                            <span class="label__text">
                                                                <span class="label__check">
                                                                    <i class="fa fa-check icon"></i>
                                                                </span>
                                                            </span>
                                                        </label>
                                                        <span class="label-title">
                                                            <p>
                                                                Integer vitae libero ac risus egestas placerat.
                                                            </p>
                                                        </span>
                                                    </div>
                                                </li>

                                                <li>
                                                    <div class="card-label mg-20">
                                                        <label class="label float-left">
                                                            <input  class="label__checkbox" type="checkbox"  checked />
                                                            <span class="label__text">
                                                                <span class="label__check">
                                                                    <i class="fa fa-check icon"></i>
                                                                </span>
                                                            </span>
                                                        </label>
                                                        <span class="label-title">
                                                            <p>
                                                                Lorem ipsum dolor sit amet, consectetuer adipiscing eli.
                                                            </p>
                                                        </span>
                                                    </div>
                                                </li>

                                                <li>
                                                    <div class="card-label mg-20">
                                                        <label class="label">
                                                            <input  class="label__checkbox" type="checkbox"  checked/>
                                                            <span class="label__text">
                                                                <span class="label__check">
                                                                    <i class="fa fa-check icon"></i>
                                                                </span>
                                                            </span>
                                                        </label>
                                                        <span class="label-title">
                                                            <p>
                                                                Integer vitae libero ac risus egestas placerat.
                                                            </p>
                                                        </span>
                                                    </div>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="warp-action">
                                                <h4>Lorem ipsum dolor sit amet</h4>
                                                <span class="subtitle">2022-01-08</span>
                                                <p class="content-action">
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                                </p>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="warp-form container">
                                            <form>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <textarea class="form-control"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group float-right">
                                                            <input type="button" class="btn btn-primary" value="Submit">
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane" id="messages1" role="tabpanel">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <ul class="no-bullets">
                                                
                                                <li>
                                                    <div class="card-label mg-20">
                                                        <label class="label float-left">
                                                            <input  class="label__checkbox" type="checkbox"  />
                                                            <span class="label__text">
                                                                <span class="label__check">
                                                                    <i class="fa fa-check icon"></i>
                                                                </span>
                                                            </span>
                                                        </label>
                                                        <span class="label-title">
                                                            <p>
                                                                Lorem ipsum dolor sit amet, consectetuer adipiscing eli.
                                                            </p>
                                                        </span>
                                                    </div>
                                                </li>

                                                <li>
                                                    <div class="card-label mg-20">
                                                        <label class="label">
                                                            <input  class="label__checkbox" type="checkbox"  />
                                                            <span class="label__text">
                                                                <span class="label__check">
                                                                    <i class="fa fa-check icon"></i>
                                                                </span>
                                                            </span>
                                                        </label>
                                                        <span class="label-title">
                                                            <p>
                                                                Integer vitae libero ac risus egestas placerat.
                                                            </p>
                                                        </span>
                                                    </div>
                                                </li>

                                                <li>
                                                    <div class="card-label mg-20">
                                                        <label class="label float-left">
                                                            <input  class="label__checkbox" type="checkbox"  />
                                                            <span class="label__text">
                                                                <span class="label__check">
                                                                    <i class="fa fa-check icon"></i>
                                                                </span>
                                                            </span>
                                                        </label>
                                                        <span class="label-title">
                                                            <p>
                                                                Lorem ipsum dolor sit amet, consectetuer adipiscing eli.
                                                            </p>
                                                        </span>
                                                    </div>
                                                </li>

                                                <li>
                                                    <div class="card-label mg-20">
                                                        <label class="label">
                                                            <input  class="label__checkbox" type="checkbox"  />
                                                            <span class="label__text">
                                                                <span class="label__check">
                                                                    <i class="fa fa-check icon"></i>
                                                                </span>
                                                            </span>
                                                        </label>
                                                        <span class="label-title">
                                                            <p>
                                                                Integer vitae libero ac risus egestas placerat.
                                                            </p>
                                                        </span>
                                                    </div>
                                                </li>

                                                <li>
                                                    <div class="card-label mg-20">
                                                        <label class="label float-left">
                                                            <input  class="label__checkbox" type="checkbox"  checked />
                                                            <span class="label__text">
                                                                <span class="label__check">
                                                                    <i class="fa fa-check icon"></i>
                                                                </span>
                                                            </span>
                                                        </label>
                                                        <span class="label-title">
                                                            <p>
                                                                Lorem ipsum dolor sit amet, consectetuer adipiscing eli.
                                                            </p>
                                                        </span>
                                                    </div>
                                                </li>

                                                <li>
                                                    <div class="card-label mg-20">
                                                        <label class="label">
                                                            <input  class="label__checkbox" type="checkbox"  checked/>
                                                            <span class="label__text">
                                                                <span class="label__check">
                                                                    <i class="fa fa-check icon"></i>
                                                                </span>
                                                            </span>
                                                        </label>
                                                        <span class="label-title">
                                                            <p>
                                                                Integer vitae libero ac risus egestas placerat.
                                                            </p>
                                                        </span>
                                                    </div>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="warp-action">
                                                <h4>Lorem ipsum dolor sit amet</h4>
                                                <span class="subtitle">2022-01-08</span>
                                                <p class="content-action">
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                                </p>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="warp-form container">
                                            <form>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <textarea class="form-control"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group float-right">
                                                            <input type="button" class="btn btn-primary" value="Submit">
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
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

        <!-- Modal -->
        <div class="modal fade bs-example-modal-sm identifying-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title mt-0" id="myLargeModalLabel">Detail Task</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="row">
                                
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="">What</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>

                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="">How</label>
                                        <textarea class="form-control"></textarea>
                                    </div>         
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="">Who</label>
                                        <select name="batch_no" class="form-control select2" required>
                                            <option value="">-</option>
                                            <option value="Giri">Giri</option>
                                            <option value="Adel">Adel</option>
                                            <option value="Michael">Michael</option>
                                            <option value="Ibnu">Ibnu</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="">When</label>
                                        <input type="text" name="date_delivered" class="form-control deliveredDate" data-provide="datepicker" data-date-format="yyyy-mm-dd" data-date-autoclose="true">
                                    </div>
                                </div>

                                <div class="col-sm-12">
                                    <div class="form-group float-right">
                                        <input type="submit" class="btn btn-primary" value="Submit">
                                    </div>
                                </div>

                            </div>
                        </form>
                      
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
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

    <script src="{{ URL::asset('/assets/libs/jquery-knob/jquery-knob.min.js')}}"></script>

    <script type="text/javascript" src="{{ URL::asset('/assets/libs/select2/select2.min.js')}}"></script>
    <script type="text/javascript" src="{{ URL::asset('/assets/libs/bootstrap-datepicker/bootstrap-datepicker.min.js')}}"></script>
    <script type="text/javascript" src="{{ URL::asset('/assets/libs/daterangepicker/daterangepicker.js')}}"></script>

    <script src="{{ URL::asset('/assets/js/pages/datatables.init.js')}}"></script>

    <!-- <script src="{{ URL::asset('/assets/js/pages/dashboard.init.js')}}"></script> -->

    <script type="text/javascript">
        
        
        $( document ).ready(function() {

            $(".select2").select2();

            $('.deliveredDate').datepicker();

            $(function(){
                $(".knob").knob({
                    'min':10,
                    'max':50
                })
            });
            

        })

    </script>

@endsection