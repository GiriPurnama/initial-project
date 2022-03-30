@extends('layouts.master')
@section('title')Detail KSA 2 @endsection
@section('css')
    <!-- DataTables -->
    <link href="{{ URL::asset('/assets/libs/jquery-vectormap/jquery-vectormap.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- Responsive datatable examples -->
    <link href="{{ URL::asset('/assets/libs/datatables/datatables.min.css')}}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="mb-0">Detail KSA 2</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="/home">Home</a></li>
                                <li class="breadcrumb-item active">Detail KSA 2</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->


            <div class="row">
               

                <div class="col-xl-12">
            
                    <div class="card">
                        
                        <div class="dropdown dropdown-mega small line d-none d-lg-block ml-2">
                            <button type="button" class="btn header-item waves-effect" data-toggle="dropdown" aria-haspopup="false" aria-expanded="false">
                                Date Range
                                <div class="font-bold">
                                    All Time
                                    <i class="mdi mdi-chevron-down"></i> 
                                </div>
                            </button>

                            <button type="button" class="btn header-item waves-effect" data-toggle="dropdown" aria-haspopup="false" aria-expanded="false">
                                Area
                                <div class="font-bold">
                                    All Time
                                    <i class="mdi mdi-chevron-down"></i> 
                                </div>
                            </button>


                            <button type="button" class="btn header-item waves-effect" data-toggle="dropdown" aria-haspopup="false" aria-expanded="false">
                                Month
                                <div class="font-bold">
                                    All Time
                                    <i class="mdi mdi-chevron-down"></i> 
                                </div>
                            </button>
                        </div>

                        <div class="card-body">

                                <div class="row">
                                    <div class="col-md-6">
        
                                        <div class="text-center" style="margin-top : 15%">
                                            <div class="count-title">
                                                <span>Total Score</span>
                                            </div>
                                            <div class="count-number">
                                                <span class="font-bold">35.2%</span>
                                                <div class="compare">
                                                    <div class="row">
                                                        
                                                        <div class="col-md-6">
                                                            <div class="sub-percent">
                                                                <span class="sub-number ">
                                                                    <!-- <div class="icon"><i class="mdi mdi-arrow-top-left"></i></div> -->
                                                                    2%
                                                                </span>
                                                                <span class="sub-title">
                                                                    Versus
                                                                </span>
                                                            </div>
                                                            <span class="line-dot"></span>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="sub-compare">
                                                                <span class="sub-number">
                                                                    8%
                                                                </span>
                                                                <span class="sub-title">
                                                                # of Target
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
        
                                    </div>
                                    
                                    <div class="col-md-6">
                                        <div id="chart"></div>
                                    </div>
                                </div>

                                <div class="card-body line">
                                    <h4 class="card-title line mb-4">On Time Delivery </h4>
                                </div>
                                <div class="row">
    
                                    <div class="col-md-6">
                                        
                                        <div class="text-center border-carding">
                                            <div class="count-title">
                                                <span>LPG</span>
                                            </div>
                                            <div class="count-number">
                                                <span class="font-bold">8%</span>
                                                <div class="compare">
                                                    <div class="row">
                                                        
                                                        <div class="col-md-6">
                                                            <div class="sub-percent">
                                                                <span class="sub-number ">
                                                                    <!-- <div class="icon"><i class="mdi mdi-arrow-top-left"></i></div> -->
                                                                    2%
                                                                </span>
                                                                <span class="sub-title">
                                                                    Versus
                                                                </span>
                                                            </div>
                                                            <span class="line-dot"></span>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="sub-compare">
                                                                <span class="sub-number">
                                                                    8%
                                                                </span>
                                                                <span class="sub-title">
                                                                # of Target
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
    
                                    </div>
    
                                    <div class="col-md-6">
                                        
                                        <div class="text-center border-carding">
                                            <div class="count-title">
                                                <span>Petkim</span>
                                            </div>
                                            <div class="count-number">
                                                <span class="font-bold">8%</span>
                                                <div class="compare">
                                                    <div class="row">
                                                        
                                                        <div class="col-md-6">
                                                            <div class="sub-percent">
                                                                <span class="sub-number ">
                                                                    <!-- <div class="icon"><i class="mdi mdi-arrow-top-left"></i></div> -->
                                                                    2%
                                                                </span>
                                                                <span class="sub-title">
                                                                    Versus
                                                                </span>
                                                            </div>
                                                            <span class="line-dot"></span>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="sub-compare">
                                                                <span class="sub-number">
                                                                    8%
                                                                </span>
                                                                <span class="sub-title">
                                                                # of Target
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
    
                                    </div>
                                </div>

                                <div class="card-body line">
                                    <h4 class="card-title line mb-4">Down Time </h4>
                                </div>
                                <div class="row">
    
    
                                    <div class="col-md-4">
                                        
                                        <div class="text-center border-carding">
                                            <div class="count-title">
                                                <span>LPG</span>
                                            </div>
                                            <div class="count-number">
                                                <span class="font-bold">5%</span>
                                                <div class="compare">
                                                    <div class="row">
                                                        
                                                        <div class="col-md-6">
                                                            <div class="sub-percent">
                                                                <span class="sub-number ">
                                                                    <!-- <div class="icon"><i class="mdi mdi-arrow-top-left"></i></div> -->
                                                                    2%
                                                                </span>
                                                                <span class="sub-title">
                                                                    Versus
                                                                </span>
                                                            </div>
                                                            <span class="line-dot"></span>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="sub-compare">
                                                                <span class="sub-number">
                                                                    8%
                                                                </span>
                                                                <span class="sub-title">
                                                                # of Target
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
    
                                    </div>
    
                                    <div class="col-md-4">
                                        
                                        <div class="text-center border-carding">
                                            <div class="count-title">
                                                <span>Petkim</span>
                                            </div>
                                            <div class="count-number">
                                                <span class="font-bold">5%</span>
                                                <div class="compare">
                                                    <div class="row">
                                                        
                                                        <div class="col-md-6">
                                                            <div class="sub-percent">
                                                                <span class="sub-number ">
                                                                    <!-- <div class="icon"><i class="mdi mdi-arrow-top-left"></i></div> -->
                                                                    2%
                                                                </span>
                                                                <span class="sub-title">
                                                                    Versus
                                                                </span>
                                                            </div>
                                                            <span class="line-dot"></span>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="sub-compare">
                                                                <span class="sub-number">
                                                                    8%
                                                                </span>
                                                                <span class="sub-title">
                                                                # of Target
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
    
                                    </div>
    
                                    <div class="col-md-4">
                                        
                                        <div class="text-center border-carding">
                                            <div class="count-title">
                                                <span>Late Documents</span>
                                            </div>
                                            <div class="count-number">
                                                <span class="font-bold">5%</span>
                                                <div class="compare">
                                                    <div class="row">
                                                        
                                                        <div class="col-md-6">
                                                            <div class="sub-percent">
                                                                <span class="sub-number ">
                                                                    <!-- <div class="icon"><i class="mdi mdi-arrow-top-left"></i></div> -->
                                                                    2%
                                                                </span>
                                                                <span class="sub-title">
                                                                    Versus
                                                                </span>
                                                            </div>
                                                            <span class="line-dot"></span>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="sub-compare">
                                                                <span class="sub-number">
                                                                    8%
                                                                </span>
                                                                <span class="sub-title">
                                                                # of Target
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
    
                                    </div>
                                    
                                </div>

                                <div class="card-body line">
                                    <h4 class="card-title line mb-4">Susut Barang </h4>
                                </div>
                                <div class="row">
    
                                    <div class="col-md-6">
                                        
                                        <div class="text-center border-carding">
                                            <div class="count-title">
                                                <span>Gudang - Menguap</span>
                                            </div>
                                            <div class="count-number">
                                                <span class="font-bold">5%</span>
                                                <div class="compare">
                                                    <div class="row">
                                                        
                                                        <div class="col-md-6">
                                                            <div class="sub-percent">
                                                                <span class="sub-number ">
                                                                    <!-- <div class="icon"><i class="mdi mdi-arrow-top-left"></i></div> -->
                                                                    2%
                                                                </span>
                                                                <span class="sub-title">
                                                                    Versus
                                                                </span>
                                                            </div>
                                                            <span class="line-dot"></span>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="sub-compare">
                                                                <span class="sub-number">
                                                                    8%
                                                                </span>
                                                                <span class="sub-title">
                                                                # of Target
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
    
                                    </div>
    
                                    <div class="col-md-6">
                                        
                                        <div class="text-center border-carding">
                                            <div class="count-title">
                                                <span>Gudang - Tidak Menguap</span>
                                            </div>
                                            <div class="count-number">
                                                <span class="font-bold">5%</span>
                                                <div class="compare">
                                                    <div class="row">
                                                        
                                                        <div class="col-md-6">
                                                            <div class="sub-percent">
                                                                <span class="sub-number ">
                                                                    <!-- <div class="icon"><i class="mdi mdi-arrow-top-left"></i></div> -->
                                                                    2%
                                                                </span>
                                                                <span class="sub-title">
                                                                    Versus
                                                                </span>
                                                            </div>
                                                            <span class="line-dot"></span>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="sub-compare">
                                                                <span class="sub-number">
                                                                    8%
                                                                </span>
                                                                <span class="sub-title">
                                                                # of Target
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
    
                                    </div>

                                    <div class="col-md-6">
                                        
                                        <div class="text-center border-carding">
                                            <div class="count-title">
                                                <span>Mobil - Menguap</span>
                                            </div>
                                            <div class="count-number">
                                                <span class="font-bold">5%</span>
                                                <div class="compare">
                                                    <div class="row">
                                                        
                                                        <div class="col-md-6">
                                                            <div class="sub-percent">
                                                                <span class="sub-number ">
                                                                    <!-- <div class="icon"><i class="mdi mdi-arrow-top-left"></i></div> -->
                                                                    2%
                                                                </span>
                                                                <span class="sub-title">
                                                                    Versus
                                                                </span>
                                                            </div>
                                                            <span class="line-dot"></span>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="sub-compare">
                                                                <span class="sub-number">
                                                                    8%
                                                                </span>
                                                                <span class="sub-title">
                                                                # of Target
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
    
                                    </div>
    
                                    <div class="col-md-6">
                                        
                                        <div class="text-center border-carding">
                                            <div class="count-title">
                                                <span>Mobil - Tidak Menguap</span>
                                            </div>
                                            <div class="count-number">
                                                <span class="font-bold">5%</span>
                                                <div class="compare">
                                                    <div class="row">
                                                        
                                                        <div class="col-md-6">
                                                            <div class="sub-percent">
                                                                <span class="sub-number ">
                                                                    <!-- <div class="icon"><i class="mdi mdi-arrow-top-left"></i></div> -->
                                                                    2%
                                                                </span>
                                                                <span class="sub-title">
                                                                    Versus
                                                                </span>
                                                            </div>
                                                            <span class="line-dot"></span>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="sub-compare">
                                                                <span class="sub-number">
                                                                    8%
                                                                </span>
                                                                <span class="sub-title">
                                                                # of Target
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
    
                                    </div>

                                </div>

                                <div class="card-body line">
                                    <h4 class="card-title line mb-4">Lainnya </h4>
                                </div>
                                <div class="row">
    
                                    <div class="col-md-6">
                                        
                                        <div class="text-center border-carding">
                                            <div class="count-title">
                                                <span>Droping Gagal</span>
                                            </div>
                                            <div class="count-number">
                                                <span class="font-bold">5%</span>
                                                <div class="compare">
                                                    <div class="row">
                                                        
                                                        <div class="col-md-6">
                                                            <div class="sub-percent">
                                                                <span class="sub-number ">
                                                                    <!-- <div class="icon"><i class="mdi mdi-arrow-top-left"></i></div> -->
                                                                    2%
                                                                </span>
                                                                <span class="sub-title">
                                                                    Versus
                                                                </span>
                                                            </div>
                                                            <span class="line-dot"></span>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="sub-compare">
                                                                <span class="sub-number">
                                                                    8%
                                                                </span>
                                                                <span class="sub-title">
                                                                # of Target
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
    
                                    </div>
    
                                    <div class="col-md-6">
                                        
                                        <div class="text-center border-carding">
                                            <div class="count-title">
                                                <span>Penyerapan Alokasi Kilang</span>
                                            </div>
                                            <div class="count-number">
                                                <span class="font-bold">5%</span>
                                                <div class="compare">
                                                    <div class="row">
                                                        
                                                        <div class="col-md-6">
                                                            <div class="sub-percent">
                                                                <span class="sub-number ">
                                                                    <!-- <div class="icon"><i class="mdi mdi-arrow-top-left"></i></div> -->
                                                                    2%
                                                                </span>
                                                                <span class="sub-title">
                                                                    Versus
                                                                </span>
                                                            </div>
                                                            <span class="line-dot"></span>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="sub-compare">
                                                                <span class="sub-number">
                                                                    8%
                                                                </span>
                                                                <span class="sub-title">
                                                                # of Target
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
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
        var options = {
                series: [{
                name: 'Target',
                data: [76, 85, 101, 98, 87, 105]
               
            }, {
                name: 'Actual',
                data: [44, 55, 57, 56, 61, 58]
            }],
            chart: {
                type: 'bar',
                height: 350,
            },
            colors: ['#008cff', '#dddddd'],
            plotOptions: {
                bar: {
                    horizontal: false,
                    columnWidth: '55%',
                },
            },
            dataLabels: {
                enabled: false,
                style: {
                    colors: ['#008cff', '#dddddd']
                }
            },
            stroke: {
                show: true,
                width: 2,
                colors: ['transparent']
            },
            xaxis: {
                categories: ['November', 'December', 'January', 'February', 'March', 'April'],
            },
            yaxis: {
                title: {
                    text: 'Total'
                }
            },
            fill: {
                opacity: 1,
                colors: ['#008cff', '#dddddd']
            },
            tooltip: {
                y: {
                    formatter: function (val) {
                    return "Total " + val 
                    }
                }
            }
        };

        var chart = new ApexCharts(document.querySelector("#chart"), options);
        chart.render();
      
        
        $('.tab-pane-dashboard:first-child').addClass('active');
        $('ul.nav-dashboard li:first-child').find('a').addClass('active');
        
        $( document ).ready(function() {
            $('#dashboard-modal').owlCarousel({
                loop:true,
                margin:10,
                nav:false,
                dots: true,
                navText:["<div class='nav-btn left'><i class='fa fa-chevron-left'></i></div>","<div class='nav-btn right'><i class='fa fa-chevron-right'></i></div>"],
                responsive:{
                    0:{
                        items:1
                    },
                    600:{
                        items:1
                    },
                    1000:{
                        items:1
                    }
                }
            })

            $('#slide-indicator').owlCarousel({
                loop:true,
                margin:10,
                nav:true,
                dots: false,
                navText:["<div class='nav-btn left'><i class='fa fa-chevron-left'></i></div>","<div class='nav-btn right'><i class='fa fa-chevron-right'></i></div>"],
                responsive:{
                    0:{
                        items:1
                    },
                    600:{
                        items:1
                    },
                    1000:{
                        items:1
                    }
                }
            })

            $(".dashboard-home").click(function() {
                $(".right-bar-toggle.float-right").click();
            });

        })

    </script>

@endsection