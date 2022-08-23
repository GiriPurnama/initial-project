@extends('layouts.master')
@section('title') Detail Task @endsection
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
                    <span>&nbsp;Detail Task  </span>
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
                                <h5>Create Task for</h5>
                                <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
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
                <div class="col-lg-4">
                    <div class="card-body">
                        <h4 class="card-title font-bold">Incubate</h4>
                        <p class="mb-0">
                            Action we are taking on <b>incubating</b> our leadership team.
                        </p>
                    </div>
                    <div class="card">
                        <div class="card-body border-bottom survey">

                            <div id="todo-task" class="task-list">

                                <div class="card task-box card-primary card-outline">
                                    <div class="card-body">

                                        <div class="float-right ml-2">
                                            <div>
                                                2022-01-08
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            Created Date :
                                        </div>
                                       
                                        <div class="card-label">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <label class="label">
                                                        <input  class="label__checkbox" type="checkbox" checked />
                                                        <span class="label__text">
                                                            <span class="label__check">
                                                                <i class="fa fa-check icon"></i>
                                                            </span>
                                                        </span>
                                                    </label>
                                                </div>
                                                <div class="col-md-8">
                                                    <h5 class="font-size-16"><a href="javascript: void(0);" class="text-dark">Admin layout design</a></h5>
                                                    <p class="mb-4">Sed ut perspiciatis unde</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="mb-0">
                                            <table class="table">
                                                <tr>
                                                    <td>Assigned to</td>
                                                    <td>:</td>
                                                    <td class="font-bold">Giri Purnama</td>
                                                </tr>
                                                <tr>
                                                    <td>Completed Date</td>
                                                    <td>:</td>
                                                    <td class="font-bold">2022-01-08</td>
                                                </tr>
                                            </table>
                                        </div>

                                    </div>
                                </div>

                                <div class="card task-box card-primary card-outline">
                                    <div class="card-body">

                                        <div class="float-right ml-2">
                                            <div>
                                                2022-01-08
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            Created Date :
                                        </div>
                                       
                                        <div class="card-label">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <label class="label">
                                                        <input  class="label__checkbox" type="checkbox" checked />
                                                        <span class="label__text">
                                                            <span class="label__check">
                                                                <i class="fa fa-check icon"></i>
                                                            </span>
                                                        </span>
                                                    </label>
                                                </div>
                                                <div class="col-md-8">
                                                    <h5 class="font-size-16"><a href="javascript: void(0);" class="text-dark">Admin layout design</a></h5>
                                                    <p class="mb-4">Sed ut perspiciatis unde</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="mb-0">
                                            <table class="table">
                                                <tr>
                                                    <td>Assigned to</td>
                                                    <td>:</td>
                                                    <td class="font-bold">Giri Purnama</td>
                                                </tr>
                                                <tr>
                                                    <td>Completed Date</td>
                                                    <td>:</td>
                                                    <td class="font-bold">2022-01-08</td>
                                                </tr>
                                            </table>
                                        </div>

                                    </div>
                                </div>

                                <div class="card task-box">
                                    <div class="card-body">

                                        <div class="float-right ml-2">
                                            <div>
                                                2022-01-08
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            Created Date :
                                        </div>
                                       
                                        <div class="card-label">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <label class="label">
                                                        <input  class="label__checkbox" type="checkbox" />
                                                        <span class="label__text">
                                                            <span class="label__check">
                                                                <i class="fa fa-check icon"></i>
                                                            </span>
                                                        </span>
                                                    </label>
                                                </div>
                                                <div class="col-md-8">
                                                    <h5 class="font-size-16"><a href="javascript: void(0);" class="text-dark">Admin layout design</a></h5>
                                                    <p class="mb-4">Sed ut perspiciatis unde</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="mb-0">
                                            <table class="table">
                                                <tr>
                                                    <td>Assigned to</td>
                                                    <td>:</td>
                                                    <td class="font-bold">Giri Purnama</td>
                                                </tr>
                                                <tr>
                                                    <td>Completed Date</td>
                                                    <td>:</td>
                                                    <td class="font-bold"></td>
                                                </tr>
                                            </table>
                                        </div>

                                    </div>
                                </div>

                                <div class="text-center">
                                    <a data-toggle="modal" data-target=".identifying-modal" href="javascript:void(0);"  class="btn btn-primary mt-1 waves-effect waves-light"><i class="mdi mdi-plus mr-1"></i> Add New</a>
                                </div>

                            </div>
                            
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4">
                    <div class="card-body">
                        <h4 class="card-title font-bold">Compel</h4>
                        <p class="mb-0">
                            Action we are taking on <b>compeling</b> the people in our performance cell.
                        </p>
                    </div>
                    <div class="card">
                        <div class="card-body border-bottom survey">

                            <div id="todo-task" class="task-list">

                                <div class="card task-box">
                                    <div class="card-body">

                                        <div class="float-right ml-2">
                                            <div>
                                                2022-01-08
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            Created Date :
                                        </div>
                                       
                                        <div class="card-label">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <label class="label">
                                                        <input  class="label__checkbox" type="checkbox"  />
                                                        <span class="label__text">
                                                            <span class="label__check">
                                                                <i class="fa fa-check icon"></i>
                                                            </span>
                                                        </span>
                                                    </label>
                                                </div>
                                                <div class="col-md-8">
                                                    <h5 class="font-size-16"><a href="javascript: void(0);" class="text-dark">Admin layout design</a></h5>
                                                    <p class="mb-4">Sed ut perspiciatis unde</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="mb-0">
                                            <table class="table">
                                                <tr>
                                                    <td>Assigned to</td>
                                                    <td>:</td>
                                                    <td class="font-bold">Giri Purnama</td>
                                                </tr>
                                                <tr>
                                                    <td>Completed Date</td>
                                                    <td>:</td>
                                                    <td class="font-bold"></td>
                                                </tr>
                                            </table>
                                        </div>

                                    </div>
                                </div>

                                <div class="card task-box">
                                    <div class="card-body">

                                        <div class="float-right ml-2">
                                            <div>
                                                2022-01-08
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            Created Date :
                                        </div>
                                       
                                        <div class="card-label">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <label class="label">
                                                        <input  class="label__checkbox" type="checkbox"  />
                                                        <span class="label__text">
                                                            <span class="label__check">
                                                                <i class="fa fa-check icon"></i>
                                                            </span>
                                                        </span>
                                                    </label>
                                                </div>
                                                <div class="col-md-8">
                                                    <h5 class="font-size-16"><a href="javascript: void(0);" class="text-dark">Admin layout design</a></h5>
                                                    <p class="mb-4">Sed ut perspiciatis unde</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="mb-0">
                                            <table class="table">
                                                <tr>
                                                    <td>Assigned to</td>
                                                    <td>:</td>
                                                    <td class="font-bold">Giri Purnama</td>
                                                </tr>
                                                <tr>
                                                    <td>Completed Date</td>
                                                    <td>:</td>
                                                    <td class="font-bold"></td>
                                                </tr>
                                            </table>
                                        </div>

                                    </div>
                                </div>

                                <div class="card task-box card-primary card-outline">
                                    <div class="card-body">

                                        <div class="float-right ml-2">
                                            <div>
                                                2022-01-08
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            Created Date :
                                        </div>
                                       
                                        <div class="card-label">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <label class="label">
                                                        <input  class="label__checkbox" type="checkbox" checked/>
                                                        <span class="label__text">
                                                            <span class="label__check">
                                                                <i class="fa fa-check icon"></i>
                                                            </span>
                                                        </span>
                                                    </label>
                                                </div>
                                                <div class="col-md-8">
                                                    <h5 class="font-size-16"><a href="javascript: void(0);" class="text-dark">Admin layout design</a></h5>
                                                    <p class="mb-4">Sed ut perspiciatis unde</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="mb-0">
                                            <table class="table">
                                                <tr>
                                                    <td>Assigned to</td>
                                                    <td>:</td>
                                                    <td class="font-bold">Giri Purnama</td>
                                                </tr>
                                                <tr>
                                                    <td>Completed Date</td>
                                                    <td>:</td>
                                                    <td class="font-bold">2022-01-09</td>
                                                </tr>
                                            </table>
                                        </div>

                                    </div>
                                </div>

                                <div class="text-center">
                                    <a data-toggle="modal" data-target=".identifying-modal" href="javascript:void(0);" class="btn btn-primary mt-1 waves-effect waves-light"><i class="mdi mdi-plus mr-1"></i> Add New</a>
                                </div>

                            </div>
                            
                        </div>
                    </div>
                    
                </div>

                <div class="col-lg-4">
                    <div class="card-body">
                        <h4 class="card-title font-bold">Nudge</h4>
                        <p class="mb-0">
                            Action we are taking on <b>nudge</b> the environment around our people.
                        </p>
                    </div>
                    <div class="card">
                        <div class="card-body border-bottom survey">

                            <div id="todo-task" class="task-list">

                                <div class="card task-box card-primary card-outline">
                                    <div class="card-body">

                                        <div class="float-right ml-2">
                                            <div>
                                                2022-01-08
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            Created Date :
                                        </div>
                                       
                                        <div class="card-label">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <label class="label">
                                                        <input  class="label__checkbox" type="checkbox" checked />
                                                        <span class="label__text">
                                                            <span class="label__check">
                                                                <i class="fa fa-check icon"></i>
                                                            </span>
                                                        </span>
                                                    </label>
                                                </div>
                                                <div class="col-md-8">
                                                    <h5 class="font-size-16"><a href="javascript: void(0);" class="text-dark">Admin layout design</a></h5>
                                                    <p class="mb-4">Sed ut perspiciatis unde</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="mb-0">
                                            <table class="table">
                                                <tr>
                                                    <td>Assigned to</td>
                                                    <td>:</td>
                                                    <td class="font-bold">Giri Purnama</td>
                                                </tr>
                                                <tr>
                                                    <td>Completed Date</td>
                                                    <td>:</td>
                                                    <td class="font-bold">2022-01-08</td>
                                                </tr>
                                            </table>
                                        </div>

                                    </div>
                                </div>

                                <div class="card task-box card-primary card-outline">
                                    <div class="card-body">

                                        <div class="float-right ml-2">
                                            <div>
                                                2022-01-08
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            Created Date :
                                        </div>
                                       
                                        <div class="card-label">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <label class="label">
                                                        <input  class="label__checkbox" type="checkbox" checked />
                                                        <span class="label__text">
                                                            <span class="label__check">
                                                                <i class="fa fa-check icon"></i>
                                                            </span>
                                                        </span>
                                                    </label>
                                                </div>
                                                <div class="col-md-8">
                                                    <h5 class="font-size-16"><a href="javascript: void(0);" class="text-dark">Admin layout design</a></h5>
                                                    <p class="mb-4">Sed ut perspiciatis unde</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="mb-0">
                                            <table class="table">
                                                <tr>
                                                    <td>Assigned to</td>
                                                    <td>:</td>
                                                    <td class="font-bold">Giri Purnama</td>
                                                </tr>
                                                <tr>
                                                    <td>Completed Date</td>
                                                    <td>:</td>
                                                    <td class="font-bold">2022-01-08</td>
                                                </tr>
                                            </table>
                                        </div>

                                    </div>
                                </div>

                                <div class="card task-box">
                                    <div class="card-body">

                                        <div class="float-right ml-2">
                                            <div>
                                                2022-01-08
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            Created Date :
                                        </div>
                                       
                                        <div class="card-label">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <label class="label">
                                                        <input  class="label__checkbox" type="checkbox" />
                                                        <span class="label__text">
                                                            <span class="label__check">
                                                                <i class="fa fa-check icon"></i>
                                                            </span>
                                                        </span>
                                                    </label>
                                                </div>
                                                <div class="col-md-8">
                                                    <h5 class="font-size-16"><a href="javascript: void(0);" class="text-dark">Admin layout design</a></h5>
                                                    <p class="mb-4">Sed ut perspiciatis unde</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="mb-0">
                                            <table class="table">
                                                <tr>
                                                    <td>Assigned to</td>
                                                    <td>:</td>
                                                    <td class="font-bold">Giri Purnama</td>
                                                </tr>
                                                <tr>
                                                    <td>Completed Date</td>
                                                    <td>:</td>
                                                    <td class="font-bold"></td>
                                                </tr>
                                            </table>
                                        </div>

                                    </div>
                                </div>

                                <div class="text-center">
                                    <a data-toggle="modal" data-target=".identifying-modal" href="javascript:void(0);" class="btn btn-primary mt-1 waves-effect waves-light"><i class="mdi mdi-plus mr-1"></i> Add New</a>
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