@extends('layouts.master')
@section('title') Detail Task @endsection
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
                                    <a href="javascript: void(0);" class="btn btn-primary mt-1 waves-effect waves-light"><i class="mdi mdi-plus mr-1"></i> Add New</a>
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
                                    <a href="javascript: void(0);" class="btn btn-primary mt-1 waves-effect waves-light"><i class="mdi mdi-plus mr-1"></i> Add New</a>
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
                                    <a href="javascript: void(0);" class="btn btn-primary mt-1 waves-effect waves-light"><i class="mdi mdi-plus mr-1"></i> Add New</a>
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

    <script src="{{ URL::asset('/assets/libs/jquery-knob/jquery-knob.min.js')}}"></script>

    <script src="{{ URL::asset('/assets/js/pages/datatables.init.js')}}"></script>

    <!-- <script src="{{ URL::asset('/assets/js/pages/dashboard.init.js')}}"></script> -->

    <script type="text/javascript">
        
        
        $( document ).ready(function() {

            $(function(){
                $(".knob").knob({
                    'min':10,
                    'max':50
                })
            });
            

        })

    </script>

@endsection