@extends('layouts.master')
@section('title') Taking Action @endsection
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
                    <span>&nbsp;Taking Action  </span>
                </div>
            </div>
        </div>
    </div>
    <div class="page-content tacking-action">
        <div class="container-fluid">

            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="title-card">
                                <h3>Taking action</h3>
                            </div>
                            <div class="subtitle-card">
                                <span>
                                    choose behaviors to action
                                </span> 
                            </div>
                        </div>
                        <div class="col-md-4">

                            <div class="content-card">
                                <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. 
                                <a href="">More...</a>
                                </p>
                            </div>

                        </div>
                        
                        <div class="col-md-2">
                            <div class="content-card">
                                <div class="box-content text-center">
                                    <h5>Actions in Progress</h5>
                                    <span class="font-size-30">34</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-2">
                            <div class="content-card">
                                <div class="box-content text-center">
                                    <h5>Actions Complete</h5>
                                    <span class="font-size-30">20</span>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            
            <div class="card-doMore">
                <div class="row">
    
                    <div class="col-lg-3">
    
                        <div class="card border border-primary">
                            <div class="card-header bg-transparent border-primary">
                                <h5 class="my-0 text-primary"><i class="mdi mdi-bullseye-arrow mr-3"></i>Do more</h5>
                            </div>
                            <div class="card-body">
                                <div class="card-content">
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                                <div class="text-center">
                                    <a href="#" class="btn btn-primary btn-rounded waves-effect waves-light">Create Action</a>
                                </div>
                            </div>
                        </div>
    
                    </div>

                    <div class="col-lg-3">
    
                        <div class="card border border-primary">
                            <div class="card-header bg-transparent border-primary">
                                <h5 class="my-0 text-primary"><i class="mdi mdi-bullseye-arrow mr-3"></i>Do more</h5>
                            </div>
                            <div class="card-body">
                                <div class="card-content">
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                                <div class="text-center">
                                    <a href="#" class="btn btn-primary btn-rounded waves-effect waves-light">Create Action</a>
                                </div>
                            </div>
                        </div>
    
                    </div>

                    <div class="col-lg-3">
    
                        <div class="card border border-primary">
                            <div class="card-header bg-transparent border-primary">
                                <h5 class="my-0 text-primary"><i class="mdi mdi-bullseye-arrow mr-3"></i>Do more</h5>
                            </div>
                            <div class="card-body">
                                <div class="card-content">
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                                <div class="text-center">
                                    <a href="#" class="btn btn-primary btn-rounded waves-effect waves-light">Create Action</a>
                                </div>
                            </div>
                        </div>
    
                    </div>
                    
                    <div class="col-lg-3">
    
                        <div class="card border border-primary">
                            <div class="card-header bg-transparent border-primary">
                                <h5 class="my-0 text-primary"><i class="mdi mdi-bullseye-arrow mr-3"></i>Do more</h5>
                            </div>
                            <div class="card-body">
                                <div class="card-content">
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                                <div class="text-center">
                                    <a href="#" class="btn btn-primary btn-rounded waves-effect waves-light">Create Action</a>
                                </div>
                            </div>
                        </div>
    
                    </div>
    
                </div>
            </div>


            <div class="card-doDifferently">
                <div class="row">
    
                    <div class="col-lg-3">
    
                        <div class="card border border-danger">
                            <div class="card-header bg-transparent border-danger">
                                <h5 class="my-0 text-danger"><i class="mdi mdi-block-helper mr-3"></i>Do differently</h5>
                            </div>
                            <div class="card-body">
                                <div class="card-content">
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                                <div class="text-center">
                                    <a href="#" class="btn btn-danger btn-rounded waves-effect waves-light">Create Action</a>
                                </div>
                            </div>
                        </div>
    
                    </div>

                    <div class="col-lg-3">
    
                        <div class="card border border-danger">
                            <div class="card-header bg-transparent border-danger">
                                <h5 class="my-0 text-danger"><i class="mdi mdi-block-helper mr-3"></i>Do differently</h5>
                            </div>
                            <div class="card-body">
                                <div class="card-content">
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                                <div class="text-center">
                                    <a href="#" class="btn btn-danger btn-rounded waves-effect waves-light">Create Action</a>
                                </div>
                            </div>
                        </div>
    
                    </div>

                    <div class="col-lg-3">
    
                        <div class="card border border-danger">
                            <div class="card-header bg-transparent border-danger">
                                <h5 class="my-0 text-danger"><i class="mdi mdi-block-helper mr-3"></i>Do differently</h5>
                            </div>
                            <div class="card-body">
                                <div class="card-content">
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                                <div class="text-center">
                                    <a href="#" class="btn btn-danger btn-rounded waves-effect waves-light">Create Action</a>
                                </div>
                            </div>
                        </div>
    
                    </div>

                    <div class="col-lg-3">
    
                        <div class="card border border-danger">
                            <div class="card-header bg-transparent border-danger">
                                <h5 class="my-0 text-danger"><i class="mdi mdi-block-helper mr-3"></i>Do differently</h5>
                            </div>
                            <div class="card-body">
                                <div class="card-content">
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                                <div class="text-center">
                                    <a href="#" class="btn btn-danger btn-rounded waves-effect waves-light">Create Action</a>
                                </div>
                            </div>
                        </div>
    
                    </div>
    
                </div>
            </div>

            <div class="card-keepDoing">
                <div class="row">
    
                    <div class="col-lg-3">
    
                        <div class="card border border-warning">
                            <div class="card-header bg-transparent border-warning">
                                <h5 class="my-0 text-warning"><i class="mdi mdi-alert-outline mr-3"></i>Keep doing</h5>
                            </div>
                            <div class="card-body">
                                <div class="card-content">
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                                <div class="text-center">
                                    <a href="#" class="btn btn-warning btn-rounded waves-effect waves-light">Create Action</a>
                                </div>
                            </div>
                        </div>
    
                    </div>

                    <div class="col-lg-3">
    
                        <div class="card border border-warning">
                            <div class="card-header bg-transparent border-warning">
                                <h5 class="my-0 text-warning"><i class="mdi mdi-alert-outline mr-3"></i>Keep doing</h5>
                            </div>
                            <div class="card-body">
                                <div class="card-content">
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                                <div class="text-center">
                                    <a href="#" class="btn btn-warning btn-rounded waves-effect waves-light">Create Action</a>
                                </div>
                            </div>
                        </div>
    
                    </div>

                    <div class="col-lg-3">
    
                        <div class="card border border-warning">
                            <div class="card-header bg-transparent border-warning">
                                <h5 class="my-0 text-warning"><i class="mdi mdi-alert-outline mr-3"></i>Keep doing</h5>
                            </div>
                            <div class="card-body">
                                <div class="card-content">
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                                <div class="text-center">
                                    <a href="#" class="btn btn-warning btn-rounded waves-effect waves-light">Create Action</a>
                                </div>
                            </div>
                        </div>

                    </div>


                    <div class="col-lg-3">
    
                        <div class="card border border-warning">
                            <div class="card-header bg-transparent border-warning">
                                <h5 class="my-0 text-warning"><i class="mdi mdi-alert-outline mr-3"></i>Keep doing</h5>
                            </div>
                            <div class="card-body">
                                <div class="card-content">
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                                <div class="text-center">
                                    <a href="#" class="btn btn-warning btn-rounded waves-effect waves-light">Create Action</a>
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