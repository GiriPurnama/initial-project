@extends('layouts.master')
@section('title') Dashboard Company @endsection
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
                    <span class="header-word md-0">Dashboard Company &nbsp;&nbsp;</span>
                    <a href="/home">&nbsp;&nbsp;&nbsp;<i class="ri-home-3-line home"></i></a>
                    <span>&nbsp;<i class="ri-arrow-right-s-line"></i></span>
                    <span>&nbsp;Dashboard Company</span>
                </div>
                <div class="page-title-right">
                    <a class="btn btn-back" href="/home"><i class="ri-arrow-left-s-line"></i> Back</a>
                </div>
            </div>
        </div>
    </div>
    <div class="page-content detail-inventory">
        <div class="container-fluid">


            <div class="row">
               

                <div class="col-xl-12">
            
                    <div class="card no-bg">
                        
                        <div class="row">

                            <div class="col-md-4">
                                <div class="card pad-bottom-5">
                                    <div class="card-body title-expedition">
                                        <div class="row text-center">
                                            <div class="col-md-12">
                                                <h3 class="font-bold">COMPANY</h3>
                                            </div>
                                        </div>
                                        <div class="media">
                                            <div class="media-body overflow-hidden content-size">
                                                <span>Grand Total</span>
                                                <h4 class="font-bold margin-min-17">145275</h4>
                                            </div>
                                            <div class="content-size">
                                                <span>Contribution</span>
                                                <h4 class="font-bold margin-min-4">100%</h4>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card-body border-top py-3">
                                        <div class="text-truncate">
                                            <!-- <span class="badge badge-soft-success font-size-11"><i class="mdi mdi-menu-up"> </i> 2.4% </span> -->
                                            <a href="javascript:void(0);" class="float-right">
                                                <span class="text-muted ml-2">Detail <i class="ri-arrow-right-line"></i></span>
                                            </a>
                                        </div>
                                    </div>


                                </div>
                            </div>

                            <div class="col-md-8">
                                <div class="card">
                                    <div class="card-body">
                                      <div id="chartMixed"></div>
                                    </div>

                                </div>
                            </div>


                            <!-- Detail Card -->

                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="card-body title-expedition">
                                            <div class="media">
                                                <div class="media-body overflow-hidden content-size">
                                                    <h2 class="font-bold center">PTT</h2>
                                                </div>
                                                <div class="media-body overflow-hidden content-size">
                                                    <span>Grand Total</span>
                                                    <h4 class="font-bold margin-min-7">13338</h4>
                                                </div>
                                                <div class="content-size">
                                                    <span>Contribution</span>
                                                    <h4 class="font-bold">9%</h4>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card-body border-top py-3">
                                            <div class="text-truncate">
                                                <!-- <span class="badge badge-soft-success font-size-11"><i class="mdi mdi-menu-up"> </i> 2.4% </span> -->
                                                <a href="javascript:void(0);" class="float-right">
                                                    <span class="text-muted ml-2">Detail <i class="ri-arrow-right-line"></i></span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="card-body title-expedition">
                                            <div class="media">
                                                <div class="media-body overflow-hidden content-size">
                                                    <h2 class="font-bold center">PTM</h2>
                                                </div>
                                                <div class="media-body overflow-hidden content-size">
                                                    <span>Grand Total</span>
                                                    <h4 class="font-bold margin-min-7">131937</h4>
                                                </div>
                                                <div class="content-size">
                                                    <span>Contribution</span>
                                                    <h4 class="font-bold">91%</h4>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card-body border-top py-3">
                                            <div class="text-truncate">
                                                <!-- <span class="badge badge-soft-success font-size-11"><i class="mdi mdi-menu-up"> </i> 2.4% </span> -->
                                                <a href="javascript:void(0);" class="float-right">
                                                    <span class="text-muted ml-2">Detail <i class="ri-arrow-right-line"></i></span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="center-line col-md-12">
                                    <div class="row">
                                        <div class="col-md-1">
                                            <div class="card no-bg">
                                                <h5 class="text-gray font-bold">
                                                    PTT
                                                </h5> 
                                            </div>
                                        </div>
                                        <div class="col-md-11">
                                            <div class="card no-bg">
                                                <hr class="gray line-hr">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                              
                                <div class="col-md-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="media">
                                                <div class="media-body overflow-hidden content-size">
                                                    <span>0 - 7 Days </span>
                                                    <h4 >6426</h4>
                                                </div>
                                                <div class="content-size">
                                                    <span>Contribution</span>
                                                    <h4>48% / 9%</h4>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card-body border-top py-3">
                                            <div class="text-truncate">
                                                <span class="text-detail">PTT</span>
                                                <a href="javascript:void(0);" class="float-right">
                                                    <span class="text-muted ml-2">Detail <i class="ri-arrow-right-line"></i></span>
                                                </a>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="media">
                                                <div class="media-body overflow-hidden content-size">
                                                    <span>8 - 14 Days </span>
                                                    <h4 >2524</h4>
                                                </div>
                                                <div class="content-size">
                                                    <span>Contribution</span>
                                                    <h4>19% / 9%</h4>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card-body border-top py-3">
                                            <div class="text-truncate">
                                                <span class="text-detail">PTT</span>
                                                <a href="javascript:void(0);" class="float-right">
                                                    <span class="text-muted ml-2">Detail <i class="ri-arrow-right-line"></i></span>
                                                </a>
                                            </div>
                                        </div>


                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="media">
                                                <div class="media-body overflow-hidden content-size">
                                                    <span>15 - 30 Days </span>
                                                    <h4 >1098</h4>
                                                </div>
                                                <div class="content-size">
                                                    <span>Contribution</span>
                                                    <h4>9% / 9%</h4>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card-body border-top py-3">
                                            <div class="text-truncate">
                                                <span class="text-detail">PTT</span>
                                                <a href="javascript:void(0);" class="float-right">
                                                    <span class="text-muted ml-2">Detail <i class="ri-arrow-right-line"></i></span>
                                                </a>
                                            </div>
                                        </div>


                                    </div>
                                </div>


                                <div class="col-md-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="media">
                                                <div class="media-body overflow-hidden content-size">
                                                    <span>1 - 2 Month </span>
                                                    <h4 >2305</h4>
                                                </div>
                                                <div class="content-size">
                                                    <span>Contribution</span>
                                                    <h4>17% / 9%</h4>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card-body border-top py-3">
                                            <div class="text-truncate">
                                                <span class="text-detail">PTT</span>
                                                <a href="javascript:void(0);" class="float-right">
                                                    <span class="text-muted ml-2">Detail <i class="ri-arrow-right-line"></i></span>
                                                </a>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="media">
                                                <div class="media-body overflow-hidden content-size">
                                                    <span>2 - 3 Month </span>
                                                    <h4 >349</h4>
                                                </div>
                                                <div class="content-size">
                                                    <span>Contribution</span>
                                                    <h4>3% / 9%</h4>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card-body border-top py-3">
                                            <div class="text-truncate">
                                                <span class="text-detail">PTT</span>
                                                <a href="javascript:void(0);" class="float-right">
                                                    <span class="text-muted ml-2">Detail <i class="ri-arrow-right-line"></i></span>
                                                </a>
                                            </div>
                                        </div>


                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="media">
                                                <div class="media-body overflow-hidden content-size">
                                                    <span>> 3 Month </span>
                                                    <h4 >636</h4>
                                                </div>
                                                <div class="content-size">
                                                    <span>Contribution</span>
                                                    <h4>4% / 9%</h4>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card-body border-top py-3">
                                            <div class="text-truncate">
                                                <span class="text-detail">PTT</span>
                                                <a href="javascript:void(0);" class="float-right">
                                                    <span class="text-muted ml-2">Detail <i class="ri-arrow-right-line"></i></span>
                                                </a>
                                            </div>
                                        </div>


                                    </div>
                                </div>


                                <div class="center-line col-md-12">
                                    <div class="row">
                                        <div class="col-md-1">
                                            <div class="card no-bg">
                                                <h5 class="text-gray font-bold">
                                                    PTM
                                                </h5> 
                                            </div>
                                        </div>
                                        <div class="col-md-11">
                                            <div class="card no-bg">
                                                <hr class="gray line-hr">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                              
                                <div class="col-md-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="media">
                                                <div class="media-body overflow-hidden content-size">
                                                    <span>0 - 7 Days </span>
                                                    <h4 >6426</h4>
                                                </div>
                                                <div class="content-size">
                                                    <span>Contribution</span>
                                                    <h4>48% / 91%</h4>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card-body border-top py-3">
                                            <div class="text-truncate">
                                                <span class="text-detail">PTM</span>
                                                <a href="javascript:void(0);" class="float-right">
                                                    <span class="text-muted ml-2">Detail <i class="ri-arrow-right-line"></i></span>
                                                </a>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="media">
                                                <div class="media-body overflow-hidden content-size">
                                                    <span>8 - 14 Days </span>
                                                    <h4 >2524</h4>
                                                </div>
                                                <div class="content-size">
                                                    <span>Contribution</span>
                                                    <h4>19% / 91%</h4>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card-body border-top py-3">
                                            <div class="text-truncate">
                                                <span class="text-detail">PTM</span>
                                                <a href="javascript:void(0);" class="float-right">
                                                    <span class="text-muted ml-2">Detail <i class="ri-arrow-right-line"></i></span>
                                                </a>
                                            </div>
                                        </div>


                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="media">
                                                <div class="media-body overflow-hidden content-size">
                                                    <span>15 - 30 Days </span>
                                                    <h4 >1098</h4>
                                                </div>
                                                <div class="content-size">
                                                    <span>Contribution</span>
                                                    <h4>9% / 91%</h4>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card-body border-top py-3">
                                            <div class="text-truncate">
                                                <span class="text-detail">PTM</span>
                                                <a href="javascript:void(0);" class="float-right">
                                                    <span class="text-muted ml-2">Detail <i class="ri-arrow-right-line"></i></span>
                                                </a>
                                            </div>
                                        </div>


                                    </div>
                                </div>


                                <div class="col-md-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="media">
                                                <div class="media-body overflow-hidden content-size">
                                                    <span>1 - 2 Month </span>
                                                    <h4 >2305</h4>
                                                </div>
                                                <div class="content-size">
                                                    <span>Contribution</span>
                                                    <h4>17% / 91%</h4>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card-body border-top py-3">
                                            <div class="text-truncate">
                                                <span class="text-detail">PTM</span>
                                                <a href="javascript:void(0);" class="float-right">
                                                    <span class="text-muted ml-2">Detail <i class="ri-arrow-right-line"></i></span>
                                                </a>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="media">
                                                <div class="media-body overflow-hidden content-size">
                                                    <span>2 - 3 Month </span>
                                                    <h4 >349</h4>
                                                </div>
                                                <div class="content-size">
                                                    <span>Contribution</span>
                                                    <h4>3% / 91%</h4>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card-body border-top py-3">
                                            <div class="text-truncate">
                                                <span class="text-detail">PTM</span>
                                                <a href="javascript:void(0);" class="float-right">
                                                    <span class="text-muted ml-2">Detail <i class="ri-arrow-right-line"></i></span>
                                                </a>
                                            </div>
                                        </div>


                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="media">
                                                <div class="media-body overflow-hidden content-size">
                                                    <span>> 3 Month </span>
                                                    <h4 >636</h4>
                                                </div>
                                                <div class="content-size">
                                                    <span>Contribution</span>
                                                    <h4>4% / 91%</h4>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card-body border-top py-3">
                                            <div class="text-truncate">
                                                <span class="text-detail">PTM</span>
                                                <a href="javascript:void(0);" class="float-right">
                                                    <span class="text-muted ml-2">Detail <i class="ri-arrow-right-line"></i></span>
                                                </a>
                                            </div>
                                        </div>


                                    </div>
                                </div>

                            <!-- End Detail Card -->

                            
                            
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

        var options = {
            series: [{
                name: 'PTT',
                type: 'column',
                data: [1.4, 2, 2.5, 1.5, 2.5, 2.8, 3.8, 4.6, 2.5, 1.5, 2.5, 2.8, 3.8, 4.6]
                
            }, {
                name: 'PTM',
                type: 'column',
                data: [1.1, 3, 3.1, 4, 4.1, 4.9, 6.5, 8.5, 3.1, 4, 4.1, 4.9, 6.5, 8.5]
            }, {
                name: 'Contribution',
                type: 'line',
                data: [2, 9, 7, 3, 4, 4, 5, 8, 7, 6, 4, 4, 5, 8]
            }],
            chart: {
                height: 300,
                type: 'line',
                stacked: true
            },
            dataLabels: {
                enabled: false,
                formatter: function (val) {
                    return val + "%"
                },
            },
            stroke: {
            width: [1, 1, 4]
            },
            title: {
                text: 'Score Contribution',
                align: 'left',
                offsetX: 110
            },
            xaxis: {
                categories: ['W1', 'W2', 'W3', 'W4', 'W5', 'W6', 'W7', 'W8', 'W9','W10','W11','W12','W13','W14'],
            },
            yaxis: [
            {
                axisTicks: {
                    show: true,
                },
                axisBorder: {
                    show: true,
                    color: '#008FFB'
                },
                labels: {
                    style: {
                        colors: '#008FFB',
                    }
                },
                title: {
                    text: "",
                style: {
                    color: '#008FFB',
                }
                },
                tooltip: {
                    enabled: true
                }
            },
           
           
            ],
            tooltip: {
                x: {
                    formatter: function (val) {
                        return val + "%"
                    },
                },
                y: {
                    formatter: function (val) {
                        return val + "%"
                    },
                },
                fixed: {
                    enabled: true,
                    position: 'topLeft', // topRight, topLeft, bottomRight, bottomLeft
                    offsetY: 30,
                    offsetX: 60
                },
            },
            legend: {
                horizontalAlign: 'left',
                offsetX: 40
            }
        };

        var chart = new ApexCharts(document.querySelector("#chartMixed"), options);
        chart.render();
      
        });

    </script>

@endsection