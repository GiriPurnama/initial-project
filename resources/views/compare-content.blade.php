@extends('layouts.master')
@section('title') Compare @endsection
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
                    <span>&nbsp;Compare  </span>
                </div>
            </div>
        </div>
    </div>
    <div class="page-content home">
        <div class="container-fluid">

            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="title-card">
                                <h3>Our culture signature</h3>
                            </div>
                            <div class="subtitle-card">
                                <span>
                                    is made up of the following 6 AKHLAK
                                </span> 
                            </div>
                        </div>
                        <div class="col-md-4">

                            <div class="content-card">
                                <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. 
                                </p>
                            </div>

                        </div>
                        <div class="col-md-4">
                            <div class="content-card">
                                <div class="box-content text-center">
                                    <h3>Overall</h3>
                                    <span class="font-size-40">34</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="card">
                <div class="card-body">
                    <h3>Filter</h3>
                    <hr>
                    <div class="row">
                        <div class="col-md-2">
                            <div class="form-group text-center">
                                <label for="">My Performance</label>
                                <div class="wrapper-switch">
                                    <input type="checkbox" id="switch1" switch="none" checked/>
                                    <label for="switch1" data-on-label="On" data-off-label="Off"></label>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-2">
                            <div class="form-group text-center">
                                <label for="">My Region</label>
                                <div class="wrapper-switch">
                                    <input type="checkbox" id="switch2" switch="none" checked/>
                                    <label for="switch2" data-on-label="On" data-off-label="Off"></label>
                                </div>
                            </div>
                        </div>


                        <div class="col-md-2">
                            <div class="form-group text-center">
                                <label for="">Overall PMI</label>
                                <div class="wrapper-switch">
                                    <input type="checkbox" id="switch3" switch="none"/>
                                    <label for="switch3" data-on-label="On" data-off-label="Off"></label>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-2">
                            <div class="form-group text-center">
                                <label for="">Strongest Performance</label>
                                <div class="wrapper-switch">
                                    <input type="checkbox" id="switch4" switch="none"/>
                                    <label for="switch4" data-on-label="On" data-off-label="Off"></label>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-2">
                            <div class="form-group text-center">
                                <label for="">Strongest Region</label>
                                <div class="wrapper-switch">
                                    <input type="checkbox" id="switch5" switch="none"/>
                                    <label for="switch5" data-on-label="On" data-off-label="Off"></label>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            
            <div id="myPerformance" class="card">
                <div class="card-body">
                    <h3>My Performance</h3>
                    <hr>
                    <div class="row">
        
                        <div class="col-md-2">
                            <div class="text-center" dir="ltr">
                                <input class="knob" data-width="150" data-height="150" data-linecap=round data-fgColor="#66CC66" value="17" data-skin="tron" data-angleOffset="-125" data-angleArc=250 data-readOnly=true data-thickness=".2"/>
                                <a href="/detail-content">
                                    <h4 class="mb-3 font-bold">Amanah</h4>
                                </a>
                            </div>
                        </div>

                        <div class="col-md-2">
                            <div class="text-center" dir="ltr">
                                <input class="knob" data-width="150" data-height="150" data-linecap=round data-fgColor="#66CC66" value="20" data-skin="tron" data-angleOffset="-125" data-angleArc=250 data-readOnly=true data-thickness=".2"/>
                                <h4 class="mb-3 font-bold">Kompeten</h4>
                            </div>
                        </div>

                        <div class="col-md-2">
                            <div class="text-center" dir="ltr">
                                <input class="knob" data-width="150" data-height="150" data-linecap=round data-fgColor="#66CC66" value="19" data-skin="tron" data-angleOffset="-125" data-angleArc=250 data-readOnly=true data-thickness=".2"/>
                                <h4 class="font-bold mb-3">Harmonis</h4>
                            </div>
                        </div>

                        <div class="col-md-2">
                            <div class="text-center" dir="ltr">
                                <input class="knob" data-width="150" data-height="150" data-linecap=round data-fgColor="#66CC66" value="22" data-skin="tron" data-angleOffset="-125" data-angleArc=250 data-readOnly=true data-thickness=".2"/>
                                <h4 class="font-bold mb-3">Loyal</h4>
                            </div>
                        </div>

                        <div class="col-md-2">
                            <div class="text-center" dir="ltr">
                                <input class="knob" data-width="150" data-height="150" data-linecap=round data-fgColor="#66CC66" value="24" data-skin="tron" data-angleOffset="-125" data-angleArc=250 data-readOnly=true data-thickness=".2"/>
                                <h4 class="font-bold mb-3">Adaptif</h4>
                            </div>
                        </div>

                        <div class="col-md-2">
                            <div class="text-center" dir="ltr">
                                <input class="knob" data-width="150" data-height="150" data-linecap=round data-fgColor="#66CC66" value="30" data-skin="tron" data-angleOffset="-125" data-angleArc=250 data-readOnly=true data-thickness=".2"/>
                                <h4 class="font-bold mb-3">Kolaboratif</h4>
                            </div>
                        </div>
        
                    </div>
                </div>
            </div>

            <div id="myRegion" class="card">
                <div class="card-body">
                    <h3>My Region</h3>
                    <hr>
                    <div class="row">
        
                        <div class="col-md-2">
                            <div class="text-center" dir="ltr">
                                <input class="knob" data-width="150" data-height="150" data-linecap=round data-fgColor="#66CC66" value="17" data-skin="tron" data-angleOffset="-125" data-angleArc=250 data-readOnly=true data-thickness=".2"/>
                                <a href="/detail-content">
                                    <h4 class="mb-3 font-bold">Amanah</h4>
                                </a>
                            </div>
                        </div>

                        <div class="col-md-2">
                            <div class="text-center" dir="ltr">
                                <input class="knob" data-width="150" data-height="150" data-linecap=round data-fgColor="#66CC66" value="20" data-skin="tron" data-angleOffset="-125" data-angleArc=250 data-readOnly=true data-thickness=".2"/>
                                <h4 class="mb-3 font-bold">Kompeten</h4>
                            </div>
                        </div>

                        <div class="col-md-2">
                            <div class="text-center" dir="ltr">
                                <input class="knob" data-width="150" data-height="150" data-linecap=round data-fgColor="#66CC66" value="19" data-skin="tron" data-angleOffset="-125" data-angleArc=250 data-readOnly=true data-thickness=".2"/>
                                <h4 class="font-bold mb-3">Harmonis</h4>
                            </div>
                        </div>

                        <div class="col-md-2">
                            <div class="text-center" dir="ltr">
                                <input class="knob" data-width="150" data-height="150" data-linecap=round data-fgColor="#66CC66" value="22" data-skin="tron" data-angleOffset="-125" data-angleArc=250 data-readOnly=true data-thickness=".2"/>
                                <h4 class="font-bold mb-3">Loyal</h4>
                            </div>
                        </div>

                        <div class="col-md-2">
                            <div class="text-center" dir="ltr">
                                <input class="knob" data-width="150" data-height="150" data-linecap=round data-fgColor="#66CC66" value="24" data-skin="tron" data-angleOffset="-125" data-angleArc=250 data-readOnly=true data-thickness=".2"/>
                                <h4 class="font-bold mb-3">Adaptif</h4>
                            </div>
                        </div>

                        <div class="col-md-2">
                            <div class="text-center" dir="ltr">
                                <input class="knob" data-width="150" data-height="150" data-linecap=round data-fgColor="#66CC66" value="30" data-skin="tron" data-angleOffset="-125" data-angleArc=250 data-readOnly=true data-thickness=".2"/>
                                <h4 class="font-bold mb-3">Kolaboratif</h4>
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

            $('#switch2').change(function() {
                // this will contain a reference to the checkbox   
                if (this.checked) {
                    console.log("checked");
                    $("#myRegion").removeClass("hide");
                } else {
                    console.log("not checked");
                    $("#myRegion").addClass("hide");
                }
            });

            $('#switch1').change(function() {
                // this will contain a reference to the checkbox   
                if (this.checked) {
                    console.log("checked");
                    $("#myPerformance").removeClass("hide");
                } else {
                    console.log("not checked");
                    $("#myPerformance").addClass("hide");
                }
            });
            

        })

    </script>

@endsection