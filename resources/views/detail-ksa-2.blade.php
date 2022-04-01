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
                            <div class="row">

                                <div class="form-group filter-src">
                                    <label for="">Date Range</label> <br>
                                    <select name="" id="">
                                        <option value="">All Time</option>
                                        <option value="">This Week</option>
                                        <option value="">Last Week</option>
                                        <option value="">Last 2 Week</option>
                                        <option value="">This Month</option>
                                        <option value="">Last Month</option>
                                        <option value="">Last 2 Month</option>
                                    </select>
                                </div>

                                <div class="form-group filter-src">
                                    <label for="" style="position: relative;left: 11px;">Area</label> <br>
                                    <select name="" id="">
                                        <option value="">All Area</option>
                                        <option value="">Gudang Bogor</option>
                                        <option value="">Gudang Bekasi</option>
                                        <option value="">Gudang Solo</option>
                                        <option value="">Gudang Surabaya</option>
                                        <option value="">Gudang Depok</option>
                                        <option value="">Gudang Tangerang</option>
                                    </select>
                                </div>

                                <div class="form-group filter-src">
                                    <label for="" style="position: relative;left: 11px;">Month</label> <br>
                                    <select name="" id="">
                                        <option value="">All Month</option>
                                        <option value="">January</option>
                                        <option value="">February</option>
                                        <option value="">March</option>
                                        <option value="">April</option>
                                        <option value="">May</option>
                                        <option value="">June</option>
                                        <option value="">July</option>
                                        <option value="">August</option>
                                        <option value="">September</option>
                                        <option value="">October</option>
                                        <option value="">November</option>
                                        <option value="">December</option>
                                    </select>
                                </div>


                            </div>
                        </div>

                        <div class="card-body">

                                <div class="row">
                                    <div class="col-md-6">
        
                                        <div class="text-center" style="margin-top : 15%">
                                            <div class="count-title">
                                                <span>Total Score</span>
                                                <span class="text-primary">
                                                    <i class="ri-home-3-line font-size-24"></i>
                                                </span>
                                            </div>
                                            <div class="count-number">
                                                <span class="font-bold">35.2%</span>
                                                <div class="compare">
                                                    <div class="row">
                                                        
                                                        <div class="col-md-6">
                                                            <div class="sub-percent">
                                                                <span class="sub-number ">
                                                                    <span class="badge badge-soft-success"><i class="mdi mdi-menu-up"> </i> 2% </span>
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
                                        <!-- <div id="chart"></div> -->
                                        <div>
                                            <div id="line-column-chart" class="apex-charts" dir="ltr"></div>
                                        </div>
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
                                                <span class="text-primary">
                                                    <i class="ri-archive-line font-size-24"></i>
                                                </span>
                                            </div>
                                            <div class="count-number">
                                                <span class="font-bold">8%</span>
                                                <div class="compare">
                                                    <div class="row">
                                                        
                                                        <div class="col-md-6">
                                                            <div class="sub-percent">
                                                                <span class="sub-number ">
                                                                    <span class="badge badge-soft-success"><i class="mdi mdi-menu-up"> </i> 2% </span>
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
                                                <span class="text-primary">
                                                    <i class="ri-archive-line font-size-24"></i>
                                                </span>
                                            </div>
                                            <div class="count-number">
                                                <span class="font-bold">8%</span>
                                                <div class="compare">
                                                    <div class="row">
                                                        
                                                        <div class="col-md-6">
                                                            <div class="sub-percent">
                                                                <span class="sub-number ">
                                                                    <span class="badge badge-soft-success"><i class="mdi mdi-menu-up"> </i> 2% </span>
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
                                                <span class="text-primary">
                                                    <i class="ri-archive-line font-size-24"></i>
                                                </span>
                                            </div>
                                            <div class="count-number">
                                                <span class="font-bold">5%</span>
                                                <div class="compare">
                                                    <div class="row">
                                                        
                                                        <div class="col-md-6">
                                                            <div class="sub-percent">
                                                                <span class="sub-number ">
                                                                    <span class="badge badge-soft-success"><i class="mdi mdi-menu-up"> </i> 2% </span>
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
                                                <span class="text-primary">
                                                    <i class="ri-archive-line font-size-24"></i>
                                                </span>
                                            </div>
                                            <div class="count-number">
                                                <span class="font-bold">5%</span>
                                                <div class="compare">
                                                    <div class="row">
                                                        
                                                        <div class="col-md-6">
                                                            <div class="sub-percent">
                                                                <span class="sub-number ">
                                                                    <span class="badge badge-soft-success"><i class="mdi mdi-menu-up"> </i> 2% </span>
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
                                                <span class="text-primary">
                                                    <i class="ri-archive-line font-size-24"></i>
                                                </span>
                                            </div>
                                            <div class="count-number">
                                                <span class="font-bold">5%</span>
                                                <div class="compare">
                                                    <div class="row">
                                                        
                                                        <div class="col-md-6">
                                                            <div class="sub-percent">
                                                                <span class="sub-number ">
                                                                    <span class="badge badge-soft-success"><i class="mdi mdi-menu-up"> </i> 2% </span>
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
                                                <span class="text-primary">
                                                    <i class="ri-archive-line font-size-24"></i>
                                                </span>
                                            </div>
                                            <div class="count-number">
                                                <span class="font-bold">5%</span>
                                                <div class="compare">
                                                    <div class="row">
                                                        
                                                        <div class="col-md-6">
                                                            <div class="sub-percent">
                                                                <span class="sub-number ">
                                                                    <span class="badge badge-soft-success"><i class="mdi mdi-menu-up"> </i> 2% </span>
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
                                                <span class="text-primary">
                                                    <i class="ri-archive-line font-size-24"></i>
                                                </span>
                                            </div>
                                            <div class="count-number">
                                                <span class="font-bold">5%</span>
                                                <div class="compare">
                                                    <div class="row">
                                                        
                                                        <div class="col-md-6">
                                                            <div class="sub-percent">
                                                                <span class="sub-number ">
                                                                    <span class="badge badge-soft-success"><i class="mdi mdi-menu-up"> </i> 2% </span>
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
                                                <span class="text-primary">
                                                    <i class="ri-archive-line font-size-24"></i>
                                                </span>
                                            </div>
                                            <div class="count-number">
                                                <span class="font-bold">5%</span>
                                                <div class="compare">
                                                    <div class="row">
                                                        
                                                        <div class="col-md-6">
                                                            <div class="sub-percent">
                                                                <span class="sub-number ">
                                                                    <span class="badge badge-soft-success"><i class="mdi mdi-menu-up"> </i> 2% </span>
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
                                                <span class="text-primary">
                                                    <i class="ri-archive-line font-size-24"></i>
                                                </span>
                                            </div>
                                            <div class="count-number">
                                                <span class="font-bold">5%</span>
                                                <div class="compare">
                                                    <div class="row">
                                                        
                                                        <div class="col-md-6">
                                                            <div class="sub-percent">
                                                                <span class="sub-number ">
                                                                    <span class="badge badge-soft-success"><i class="mdi mdi-menu-up"> </i> 2% </span>
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
                                                <span class="text-primary">
                                                    <i class="ri-archive-line font-size-24"></i>
                                                </span>
                                            </div>
                                            <div class="count-number">
                                                <span class="font-bold">5%</span>
                                                <div class="compare">
                                                    <div class="row">
                                                        
                                                        <div class="col-md-6">
                                                            <div class="sub-percent">
                                                                <span class="sub-number ">
                                                                    <span class="badge badge-soft-success"><i class="mdi mdi-menu-up"> </i> 2% </span>
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
                                                <span class="text-primary">
                                                    <i class="ri-archive-line font-size-24"></i>
                                                </span>
                                            </div>
                                            <div class="count-number">
                                                <span class="font-bold">5%</span>
                                                <div class="compare">
                                                    <div class="row">
                                                        
                                                        <div class="col-md-6">
                                                            <div class="sub-percent">
                                                                <span class="sub-number ">
                                                                    <span class="badge badge-soft-success"><i class="mdi mdi-menu-up"> </i> 2% </span>
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
        // Lama
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
        
        // End Lama

        var options = {
            series: [{
                name: 'Target',
                type: 'column',
                data: [23, 42, 35, 27, 43, 22, 17, 31, 22, 22, 12, 16]
            }, {
                name: 'Actual',
                type: 'line',
                data: [23, 32, 27, 20, 27, 18, 17, 25, 22, 20, 11, 16]
            }],
            chart: {
                height: 280,
                type: 'line',
                toolbar: {
                show: false
                }
            },
            stroke: {
                width: [0, 3],
                curve: 'smooth'
            },
            plotOptions: {
                bar: {
                horizontal: false,
                columnWidth: '20%'
                }
            },
            dataLabels: {
                enabled: false
            },
            legend: {
                show: false
            },
            colors: ['#5664d2', '#1cbb8c'],
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
        };

        var chart = new ApexCharts(document.querySelector("#line-column-chart"), options);
        chart.render(); 
        
        $('.tab-pane-dashboard:first-child').addClass('active');
        $('ul.nav-dashboard li:first-child').find('a').addClass('active');
        
        $( document ).ready(function() {
           

        })

    </script>

@endsection