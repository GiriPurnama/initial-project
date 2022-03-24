@extends('layouts.master')
@section('title') Dashboard @endsection
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
                        <h4 class="mb-0">Dashboard</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Logicnesia</a></li>
                                <li class="breadcrumb-item active">Dashboard</li>
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
                        </div>
                        
                        <!-- KSA 1 Title -->
                        <div class="card-body line">
                            <h4 class="card-title line mb-4">KSA-1 Pengembangan SDM Unggul</h4>
                        </div>

                        <!-- KSA 1 Content -->
                        <div class="card-body">
                            <div class="row">

                                <div class="col-md-4">

                                    <div class="text-center border-carding">
                                        <div class="count-title">
                                            <span># of Final JD Actual</span>
                                        </div>
                                        <div class="count-number">
                                            <span class="font-bold">90</span>
                                            <div class="compare">
                                                <div class="row">
                                                    
                                                    <div class="col-md-6">
                                                        <div class="sub-percent">
                                                            <span class="sub-number red">
                                                                <div class="icon"><i class="mdi mdi-arrow-bottom-right"></i></div>
                                                                -1%
                                                            </span>
                                                            <span class="sub-title">
                                                                Versus
                                                            </span>
                                                        </div>
                                                        <span class="line-dot"></span>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="sub-compare">
                                                            <span class="sub-number ">
                                                                100
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
                                            <span># of Development Team Actual</span>
                                        </div>
                                        <div class="count-number">
                                            <span class="font-bold">90</span>
                                            <div class="compare">
                                                <div class="row">
                                                    
                                                    <div class="col-md-6">
                                                        <div class="sub-percent">
                                                            <span class="sub-number red">
                                                                <div class="icon"><i class="mdi mdi-arrow-bottom-right"></i></div>
                                                                -1%
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
                                                                100
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
                                            <span># of Turn Over Driver Actual</span>
                                        </div>
                                        <div class="count-number">
                                            <span class="font-bold">90</span>
                                            <div class="compare">
                                                <div class="row">
                                                    
                                                    <div class="col-md-6">
                                                        <div class="sub-percent">
                                                            <span class="sub-number green">
                                                                <div class="icon"><i class="mdi mdi-arrow-top-left"></i></div>
                                                                1%
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
                                                                100
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

                        <!-- KSA 2 Title -->
                        <div class="card-body line">
                            <h4 class="card-title line mb-4">KSA-2 Operasional Handal & Terpercaya</h4>
                        </div>

                        <!-- KSA 2 Content -->
                        <div class="card-body">
                            <div class="row">

                                <div class="col-md-6">

                                    <div class="text-center border-carding">
                                        <div class="count-title">
                                            <span># of OTD Actual</span>
                                        </div>
                                        <div class="count-number">
                                            <span class="font-bold">90</span>
                                            <div class="compare">
                                                <div class="row">
                                                    
                                                    <div class="col-md-6">
                                                        <div class="sub-percent">
                                                            <span class="sub-number green">
                                                                <div class="icon"><i class="mdi mdi-arrow-top-left"></i></div>
                                                                1%
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
                                                                100
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
                                            <span># of OTD Petkim Actual</span>
                                        </div>
                                        <div class="count-number">
                                            <span class="font-bold">90</span>
                                            <div class="compare">
                                                <div class="row">
                                                    
                                                    <div class="col-md-6">
                                                        <div class="sub-percent">
                                                            <span class="sub-number green">
                                                                <div class="icon"><i class="mdi mdi-arrow-top-left"></i></div>
                                                                1%
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
                                                                100
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
                                            <span># of LPG (Kerusakan) Actual</span>
                                        </div>
                                        <div class="count-number">
                                            <span class="font-bold">90</span>
                                            <div class="compare">
                                                <div class="row">
                                                    
                                                    <div class="col-md-6">
                                                        <div class="sub-percent">
                                                            <span class="sub-number green">
                                                                <div class="icon"><i class="mdi mdi-arrow-top-left"></i></div>
                                                                1%
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
                                                                100
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
                                            <span># of Petkim (Kerusakan) Actual</span>
                                        </div>
                                        <div class="count-number">
                                            <span class="font-bold">90</span>
                                            <div class="compare">
                                                <div class="row">
                                                    
                                                    <div class="col-md-6">
                                                        <div class="sub-percent">
                                                            <span class="sub-number green">
                                                                <div class="icon"><i class="mdi mdi-arrow-top-left"></i></div>
                                                                1%
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
                                                                100
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
                                            <span># of Surat Terlambat Actual</span>
                                        </div>
                                        <div class="count-number">
                                            <span class="font-bold">90</span>
                                            <div class="compare">
                                                <div class="row">
                                                    
                                                    <div class="col-md-6">
                                                        <div class="sub-percent">
                                                            <span class="sub-number green">
                                                                <div class="icon"><i class="mdi mdi-arrow-top-left"></i></div>
                                                                1%
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
                                                                100
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
                                            <span># of Droping Gagal Actual</span>
                                        </div>
                                        <div class="count-number">
                                            <span class="font-bold">90</span>
                                            <div class="compare">
                                                <div class="row">
                                                    
                                                    <div class="col-md-6">
                                                        <div class="sub-percent">
                                                            <span class="sub-number green">
                                                                <div class="icon"><i class="mdi mdi-arrow-top-left"></i></div>
                                                                1%
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
                                                                100
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
                                            <span># of Omset Penjualan Divisi Actual</span>
                                        </div>
                                        <div class="count-number">
                                            <span class="font-bold">90</span>
                                            <div class="compare">
                                                <div class="row">
                                                    
                                                    <div class="col-md-6">
                                                        <div class="sub-percent">
                                                            <span class="sub-number green">
                                                                <div class="icon"><i class="mdi mdi-arrow-top-left"></i></div>
                                                                1%
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
                                                                100
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
                                            <span># of Susut Barang Petkim Gudang (Menguap) Actual</span>
                                        </div>
                                        <div class="count-number">
                                            <span class="font-bold">90</span>
                                            <div class="compare">
                                                <div class="row">
                                                    
                                                    <div class="col-md-6">
                                                        <div class="sub-percent">
                                                            <span class="sub-number green">
                                                                <div class="icon"><i class="mdi mdi-arrow-top-left"></i></div>
                                                                1%
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
                                                                100
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
                                            <span># of Susut Barang Petkim Gudang (Tidak Menguap) Actual</span>
                                        </div>
                                        <div class="count-number">
                                            <span class="font-bold">90</span>
                                            <div class="compare">
                                                <div class="row">
                                                    
                                                    <div class="col-md-6">
                                                        <div class="sub-percent">
                                                            <span class="sub-number green">
                                                                <div class="icon"><i class="mdi mdi-arrow-top-left"></i></div>
                                                                1%
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
                                                                100
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
                                            <span># of Susut Barang Mobil (Menguap) Actual</span>
                                        </div>
                                        <div class="count-number">
                                            <span class="font-bold">90</span>
                                            <div class="compare">
                                                <div class="row">
                                                    
                                                    <div class="col-md-6">
                                                        <div class="sub-percent">
                                                            <span class="sub-number green">
                                                                <div class="icon"><i class="mdi mdi-arrow-top-left"></i></div>
                                                                1%
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
                                                                100
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
                                            <span># of Susut Barang Mobil (Tidak Menguap) Actual</span>
                                        </div>
                                        <div class="count-number">
                                            <span class="font-bold">90</span>
                                            <div class="compare">
                                                <div class="row">
                                                    
                                                    <div class="col-md-6">
                                                        <div class="sub-percent">
                                                            <span class="sub-number green">
                                                                <div class="icon"><i class="mdi mdi-arrow-top-left"></i></div>
                                                                1%
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
                                                                100
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
                                            <span># of Penyerapan Alokasi Kilang Actual</span>
                                        </div>
                                        <div class="count-number">
                                            <span class="font-bold">90</span>
                                            <div class="compare">
                                                <div class="row">
                                                    
                                                    <div class="col-md-6">
                                                        <div class="sub-percent">
                                                            <span class="sub-number green">
                                                                <div class="icon"><i class="mdi mdi-arrow-top-left"></i></div>
                                                                1%
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
                                                                100
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

                        <!-- KSA 3 Title -->
                        <div class="card-body line">
                            <h4 class="card-title line mb-4">KSA-3 Peningkatan Kapasitas & Infrastruktur </h4>
                        </div>

                        <!-- KSA 3 Content -->
                        <div class="card-body">
                            <div class="row">

                                <div class="col-md-6">

                                    <div class="text-center border-carding">
                                        <div class="count-title">
                                            <span># of Penambahan Kendaraan Actual</span>
                                        </div>
                                        <div class="count-number">
                                            <span class="font-bold">90</span>
                                            <div class="compare">
                                                <div class="row">
                                                    
                                                    <div class="col-md-6">
                                                        <div class="sub-percent">
                                                            <span class="sub-number green">
                                                                <div class="icon"><i class="mdi mdi-arrow-top-left"></i></div>
                                                                1%
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
                                                                100
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
                                            <span># of Mobil Tabung (Engkel Bak) Actual</span>
                                        </div>
                                        <div class="count-number">
                                            <span class="font-bold">90</span>
                                            <div class="compare">
                                                <div class="row">
                                                    
                                                    <div class="col-md-6">
                                                        <div class="sub-percent">
                                                            <span class="sub-number green">
                                                                <div class="icon"><i class="mdi mdi-arrow-top-left"></i></div>
                                                                1%
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
                                                                100
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
                                            <span># of Mobil Tabung (L300) Actual</span>
                                        </div>
                                        <div class="count-number">
                                            <span class="font-bold">90</span>
                                            <div class="compare">
                                                <div class="row">
                                                    
                                                    <div class="col-md-6">
                                                        <div class="sub-percent">
                                                            <span class="sub-number green">
                                                                <div class="icon"><i class="mdi mdi-arrow-top-left"></i></div>
                                                                1%
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
                                                                100
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
                                            <span># of Bulk Actual</span>
                                        </div>
                                        <div class="count-number">
                                            <span class="font-bold">90</span>
                                            <div class="compare">
                                                <div class="row">
                                                    
                                                    <div class="col-md-6">
                                                        <div class="sub-percent">
                                                            <span class="sub-number green">
                                                                <div class="icon"><i class="mdi mdi-arrow-top-left"></i></div>
                                                                1%
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
                                                                100
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

                        <!-- KSA 4 Title -->
                        <div class="card-body line">
                            <h4 class="card-title line mb-4">KSA-4 Sistem Terintegrasi</h4>
                        </div>

                        <!-- KSA 4 Content -->
                        <div class="card-body">
                            <div class="row">

                                <div class="col-md-6">

                                    <div class="text-center border-carding">
                                        <div class="count-title">
                                            <span># of Progress Integrasi Actual</span>
                                        </div>
                                        <div class="count-number">
                                            <span class="font-bold">90</span>
                                            <div class="compare">
                                                <div class="row">
                                                    
                                                    <div class="col-md-6">
                                                        <div class="sub-percent">
                                                            <span class="sub-number green">
                                                                <div class="icon"><i class="mdi mdi-arrow-top-left"></i></div>
                                                                1%
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
                                                                100
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
                                            <span># of Pemahaman Penggunaan Actual</span>
                                        </div>
                                        <div class="count-number">
                                            <span class="font-bold">90</span>
                                            <div class="compare">
                                                <div class="row">
                                                    
                                                    <div class="col-md-6">
                                                        <div class="sub-percent">
                                                            <span class="sub-number green">
                                                                <div class="icon"><i class="mdi mdi-arrow-top-left"></i></div>
                                                                1%
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
                                                                100
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

                        <!-- KSA 5 Title -->
                        <div class="card-body line">
                            <h4 class="card-title line mb-4">KSA-5 Inovasi Product & Servis</h4>
                        </div>

                        <!-- KSA 5 Content -->
                        <div class="card-body">
                            <div class="row">

                                <div class="col-md-12">

                                    <div class="text-center border-carding">
                                        <div class="count-title">
                                            <span># of Inisiatif Improvement Actual</span>
                                        </div>
                                        <div class="count-number">
                                            <span class="font-bold">90</span>
                                            <div class="compare">
                                                <div class="row">
                                                    
                                                    <div class="col-md-6">
                                                        <div class="sub-percent">
                                                            <span class="sub-number green">
                                                                <div class="icon"><i class="mdi mdi-arrow-top-left"></i></div>
                                                                1%
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
                                                                100
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


                        <!-- KSA 6 Title -->
                        <div class="card-body line">
                            <h4 class="card-title line mb-4">KSA-6 Safety & Kualitas</h4>
                        </div>

                        <!-- KSA 6 Content -->
                        <div class="card-body">
                            <div class="row">

                                <div class="col-md-6">

                                    <div class="text-center border-carding">
                                        <div class="count-title">
                                            <span># of Customer Complaint Actual</span>
                                        </div>
                                        <div class="count-number">
                                            <span class="font-bold">90</span>
                                            <div class="compare">
                                                <div class="row">
                                                    
                                                    <div class="col-md-6">
                                                        <div class="sub-percent">
                                                            <span class="sub-number green">
                                                                <div class="icon"><i class="mdi mdi-arrow-top-left"></i></div>
                                                                1%
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
                                                                100
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
                                            <span># of Complaint Divisi Actual</span>
                                        </div>
                                        <div class="count-number">
                                            <span class="font-bold">90</span>
                                            <div class="compare">
                                                <div class="row">
                                                    
                                                    <div class="col-md-6">
                                                        <div class="sub-percent">
                                                            <span class="sub-number green">
                                                                <div class="icon"><i class="mdi mdi-arrow-top-left"></i></div>
                                                                1%
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
                                                                100
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
                                            <span># of Audit Kebersihan Gudang Actual</span>
                                        </div>
                                        <div class="count-number">
                                            <span class="font-bold">90</span>
                                            <div class="compare">
                                                <div class="row">
                                                    
                                                    <div class="col-md-6">
                                                        <div class="sub-percent">
                                                            <span class="sub-number green">
                                                                <div class="icon"><i class="mdi mdi-arrow-top-left"></i></div>
                                                                1%
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
                                                                100
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
                                            <span># of Audit Kebersihan Kendaraan Actual</span>
                                        </div>
                                        <div class="count-number">
                                            <span class="font-bold">90</span>
                                            <div class="compare">
                                                <div class="row">
                                                    
                                                    <div class="col-md-6">
                                                        <div class="sub-percent">
                                                            <span class="sub-number green">
                                                                <div class="icon"><i class="mdi mdi-arrow-top-left"></i></div>
                                                                1%
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
                                                                100
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
                                            <span># of Kecelakaan Kerja (Gudang) Actual</span>
                                        </div>
                                        <div class="count-number">
                                            <span class="font-bold">90</span>
                                            <div class="compare">
                                                <div class="row">
                                                    
                                                    <div class="col-md-6">
                                                        <div class="sub-percent">
                                                            <span class="sub-number green">
                                                                <div class="icon"><i class="mdi mdi-arrow-top-left"></i></div>
                                                                1%
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
                                                                100
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
                                            <span># of Kecelakaan Kerja (Transportasi) Actual</span>
                                        </div>
                                        <div class="count-number">
                                            <span class="font-bold">90</span>
                                            <div class="compare">
                                                <div class="row">
                                                    
                                                    <div class="col-md-6">
                                                        <div class="sub-percent">
                                                            <span class="sub-number green">
                                                                <div class="icon"><i class="mdi mdi-arrow-top-left"></i></div>
                                                                1%
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
                                                                100
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
                                            <span># of Kebakaran Actual</span>
                                        </div>
                                        <div class="count-number">
                                            <span class="font-bold">90</span>
                                            <div class="compare">
                                                <div class="row">
                                                    
                                                    <div class="col-md-6">
                                                        <div class="sub-percent">
                                                            <span class="sub-number green">
                                                                <div class="icon"><i class="mdi mdi-arrow-top-left"></i></div>
                                                                1%
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
                                                                100
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
                                            <span># of Pencemaran Actual</span>
                                        </div>
                                        <div class="count-number">
                                            <span class="font-bold">90</span>
                                            <div class="compare">
                                                <div class="row">
                                                    
                                                    <div class="col-md-6">
                                                        <div class="sub-percent">
                                                            <span class="sub-number green">
                                                                <div class="icon"><i class="mdi mdi-arrow-top-left"></i></div>
                                                                1%
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
                                                                100
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
                                            <span># of Penurunan Cost Budget (Gudang) Actual</span>
                                        </div>
                                        <div class="count-number">
                                            <span class="font-bold">90</span>
                                            <div class="compare">
                                                <div class="row">
                                                    
                                                    <div class="col-md-6">
                                                        <div class="sub-percent">
                                                            <span class="sub-number green">
                                                                <div class="icon"><i class="mdi mdi-arrow-top-left"></i></div>
                                                                1%
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
                                                                100
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
                                            <span># of Penurunan Cost Budget (Petkim) Actual</span>
                                        </div>
                                        <div class="count-number">
                                            <span class="font-bold">90</span>
                                            <div class="compare">
                                                <div class="row">
                                                    
                                                    <div class="col-md-6">
                                                        <div class="sub-percent">
                                                            <span class="sub-number green">
                                                                <div class="icon"><i class="mdi mdi-arrow-top-left"></i></div>
                                                                1%
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
                                                                100
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
                                            <span># of Penurunan Cost Budget (Divisi Transport) Actual</span>
                                        </div>
                                        <div class="count-number">
                                            <span class="font-bold">90</span>
                                            <div class="compare">
                                                <div class="row">
                                                    
                                                    <div class="col-md-6">
                                                        <div class="sub-percent">
                                                            <span class="sub-number green">
                                                                <div class="icon"><i class="mdi mdi-arrow-top-left"></i></div>
                                                                1%
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
                                                                100
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
                                            <span># of Akurasi Stock Tabung Actual</span>
                                        </div>
                                        <div class="count-number">
                                            <span class="font-bold">90</span>
                                            <div class="compare">
                                                <div class="row">
                                                    
                                                    <div class="col-md-6">
                                                        <div class="sub-percent">
                                                            <span class="sub-number green">
                                                                <div class="icon"><i class="mdi mdi-arrow-top-left"></i></div>
                                                                1%
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
                                                                100
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
                                            <span># of Akurasi Kelengkapan Actual</span>
                                        </div>
                                        <div class="count-number">
                                            <span class="font-bold">90</span>
                                            <div class="compare">
                                                <div class="row">
                                                    
                                                    <div class="col-md-6">
                                                        <div class="sub-percent">
                                                            <span class="sub-number green">
                                                                <div class="icon"><i class="mdi mdi-arrow-top-left"></i></div>
                                                                1%
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
                                                                100
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

                                <div class="col-md-12">

                                    <div class="text-center border-carding">
                                        <div class="count-title">
                                            <span># of Legalitas Kendaraan Actual</span>
                                        </div>
                                        <div class="count-number">
                                            <span class="font-bold">90</span>
                                            <div class="compare">
                                                <div class="row">
                                                    
                                                    <div class="col-md-6">
                                                        <div class="sub-percent">
                                                            <span class="sub-number green">
                                                                <div class="icon"><i class="mdi mdi-arrow-top-left"></i></div>
                                                                1%
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
                                                                100
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