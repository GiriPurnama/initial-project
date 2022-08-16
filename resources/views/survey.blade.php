@extends('layouts.master')
@section('title') Survey @endsection
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
                    <span class="header-word md-0">Survey &nbsp;&nbsp;</span>
                    <a href="/home">&nbsp;&nbsp;&nbsp;<i class="ri-home-3-line home"></i></a>
                    <span>&nbsp;<i class="ri-arrow-right-s-line"></i></span>
                    <span>&nbsp;Survey </span>
                </div>
                <div class="page-title-right">
                    <a class="btn btn-back" href="/home"><i class="ri-arrow-left-s-line"></i> Back</a>
                </div>
            </div>
        </div>
    </div>
    <div class="page-content">
        <div class="container-fluid">


            <div class="row">
               

                <div class="col-xl-12">
            
                    <div class="card">
                        <div class="card-body">
                        <div class="row col-5">
                            <h4 class="fw-bold text-center mt-3"></h4>
                                <form class=" bg-white px-4" action="">

                                    <div class="box-line">
                                        
                                        <p class="fw-bold">How satisfied are you with our product?</p>
                                        
                                        <div class="form-check mb-2">
                                            <input class="form-check-input" type="radio" name="exampleForm" id="radioExample1" />
                                            <label class="form-check-label" for="radioExample1">
                                                Option 1
                                            </label>
                                        </div>

                                        <div class="form-check mb-2">
                                            <input class="form-check-input" type="radio" name="exampleForm" id="radioExample2" />
                                            <label class="form-check-label" for="radioExample2">
                                                Option 2
                                            </label>
                                        </div>
                                        
                                        <div class="form-check mb-2">
                                            <input class="form-check-input" type="radio" name="exampleForm" id="radioExample3" />
                                            <label class="form-check-label" for="radioExample3">
                                                Option 3
                                            </label>
                                        </div>

                                    </div>

                                    <div class="box-line">

                                        <p class="fw-bold">Choose one or more options</p>
                                        
                                        <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Option 1
                                        </label>
                                        </div>
    
                                        <!-- Checked checkbox -->
                                        <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault2" />
                                        <label class="form-check-label" for="flexCheckDefault2">
                                            Option 2
                                        </label>
                                        </div>
    
                                        <!-- Checked checkbox -->
                                        <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault3" />
                                        <label class="form-check-label" for="flexCheckDefault3">
                                            Option 3
                                        </label>
                                        </div>

                                    </div>

                                    <div class="box-line">
                                        <p class=""><strong>What could we improve?</strong></p>

                                        <!-- Message input -->
                                        <div class="form-outline mb-4">
                                            <textarea class="form-control" id="form4Example4" rows="4"></textarea>
                                        </div>

                                    </div>


                                    <div class="box-line">
                                        <p class=""><strong>Input your answer?</strong></p>

                                        <!-- Message input -->
                                        <div class="form-outline mb-4">
                                            <input type="text" class="form-control">
                                        </div>

                                    </div>

                                    <div class="box-line">
                                        <div class="mx-0 mx-sm-auto">
                                            <div class="text-center">
                                                <p>
                                                <strong>How do you rate customer support</strong>
                                                </p>
                                            </div>

                                            <div class="text-center mb-3">
                                                <div class="d-inline mx-3">
                                                    Bad
                                                </div>

                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                                                        value="option1" />
                                                    <label class="form-check-label" for="inlineRadio1">1</label>
                                                </div>

                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                                                        value="option2" />
                                                    <label class="form-check-label" for="inlineRadio2">2</label>
                                                </div>

                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3"
                                                        value="option3" />
                                                    <label class="form-check-label" for="inlineRadio3">3</label>
                                                </div>

                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio4"
                                                        value="option4" />
                                                    <label class="form-check-label" for="inlineRadio4">4</label>
                                                </div>

                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio5"
                                                        value="option5" />
                                                    <label class="form-check-label" for="inlineRadio5">5</label>
                                                </div>

                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio6"
                                                        value="option6" />
                                                    <label class="form-check-label" for="inlineRadio6">6</label>

                                                </div>

                                                <div class="d-inline me-4">
                                                    Excellent
                                                </div>
                                        </div>
                                    </div>

                                    <div class="text-end">
                                        <button type="button" class="btn btn-primary">Submit</button>
                                    </div>
                                </form>
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
    <script src="{{ URL::asset('/assets/js/pages/datatables.init.js')}}"></script>

    <!-- <script src="{{ URL::asset('/assets/js/pages/dashboard.init.js')}}"></script> -->

    <script type="text/javascript">
        
        
        $( document ).ready(function() {
            
        })

    </script>

@endsection