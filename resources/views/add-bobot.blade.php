@extends('layouts.master')
@section('title')Add Data Bobot @endsection
@section('css')
    <!-- DataTables -->
    <link href="{{ URL::asset('/assets/libs/jquery-vectormap/jquery-vectormap.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- Responsive datatable examples -->
    <link href="{{ URL::asset('/assets/libs/datatables/datatables.min.css')}}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
<section class="add-bobot">
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="mb-0">Add Data Bobot</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="/home">Home</a></li>
                                <li class="breadcrumb-item active">Add Data Bobot</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->


            <div class="row">
               

                <div class="col-xl-12">
            
                    <div class="card">
                        
                       <div class="card-body">
                            <h4 class="card-title">Add Data Bobot</h4>
                            <div class="table-responsive">
                                <table class="table table-bordered mb-0">

                                    <thead>
                                        <tr>
                                            <th>KSA</th>
                                            <th>KPI</th>
                                            <th>QTY</th>
                                            <th>Bobot</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <select name="" id="" class="form-control">
                                                    <option value="">-</option>
                                                    <option value="">KSA-1</option>
                                                    <option value="">KSA-2</option>
                                                    <option value="">KSA-3</option>
                                                    <option value="">KSA-4</option>
                                                    <option value="">KSA-5</option>
                                                    <option value="">KSA-6</option>
                                                </select>
                                            </td>
                                            <td>
                                                <select name="" id="" class="form-control">
                                                    <option value="">-</option>
                                                    <option value="">OTD (LPG)</option>
                                                    <option value="">OTD (Petkim)</option>
                                                    <option value="">Down-Time (LPG)</option>
                                                    <option value="">Down-Time (Petkim)</option>
                                                    <option value="">Down-Time (Late Document)</option>
                                                    <option value="">Susut Barang (Gudang - Menguap)</option>
                                                    <option value="">Susut Barang (Gudang - Tidak Menguap)</option>
                                                    <option value="">Susut Barang (Mobil - Menguap)</option>
                                                    <option value="">Susut Barang (Mobil - Tidak Menguap)</option>
                                                    <option value="">Lainnya (Dropping Gagal)</option>
                                                    <option value="">Lainnya (Penyerapan Alokasi Kilang)</option>
                                                </select>
                                            </td>
                                            <td>
                                                <input type="number" class="form-control" name="" id="">
                                            </td>
                                            <td>
                                                <input type="number" class="form-control" name="" id="">
                                            </td>
                                            <td>
                                                <button class="btn btn-primary">Add <i class="ri-add-line"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>KSA-2</td>
                                            <td>Down-Time (LPG)</td>
                                            <td>30</td>
                                            <td>20%</td>
                                            <td>
                                                <span class="edit">
                                                    <button class="btn btn-warning"><i class="ri-pencil-line"></i></button>
                                                </span>

                                                <span class="delete">
                                                    <button class="btn btn-danger"><i class="ri-delete-bin-line"></i></button>
                                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>KSA-2</td>
                                            <td>OTD (Petkim)</td>
                                            <td>30</td>
                                            <td>20%</td>
                                            <td>
                                                <span class="edit">
                                                    <button class="btn btn-warning"><i class="ri-pencil-line"></i></button>
                                                </span>

                                                <span class="delete">
                                                    <button class="btn btn-danger"><i class="ri-delete-bin-line"></i></button>
                                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>KSA-2</td>
                                            <td>OTD (LPG)</td>
                                            <td>30</td>
                                            <td>20%</td>
                                            <td>
                                                <span class="edit">
                                                    <button class="btn btn-warning"><i class="ri-pencil-line"></i></button>
                                                </span>

                                                <span class="delete">
                                                    <button class="btn btn-danger"><i class="ri-delete-bin-line"></i></button>
                                                </span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                       </div>
                        
                    </div>
                    
                </div>
            </div>
            <!-- end row -->


        </div> <!-- container-fluid -->
    </div>
</section>
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