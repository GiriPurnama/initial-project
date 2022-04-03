@extends('layouts.master')
@section('title')Add Data Bobot @endsection
@section('css')
    <!-- DataTables -->
    <link href="{{ URL::asset('/assets/libs/jquery-vectormap/jquery-vectormap.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- Responsive datatable examples -->
    <link href="{{ URL::asset('/assets/libs/datatables/datatables.min.css')}}" rel="stylesheet" type="text/css" />

    <!-- Plugins css -->
    <link href="{{ URL::asset('/assets/libs/dropzone/min/dropzone.min.css')}}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
<div class="row bread-static">
    <div class="col-12">
        <div class="page-title-box d-flex align-items-center justify-content-between header-title">
            <div class="header-nav">
                <span class="header-word md-0">Add Data Bulk &nbsp;&nbsp;</span>
                <a href="/home">&nbsp;&nbsp;&nbsp;<i class="ri-home-3-line home"></i></a>
                <span>&nbsp;<i class="ri-arrow-right-s-line"></i></span>
                <span>&nbsp;Add Data Bulk</span>
            </div>
            <div class="page-title-right">
                <a class="btn btn-back" href="/home"><i class="ri-arrow-left-s-line"></i> Back</a>
            </div>
        </div>
    </div>
</div>
<section class="add-data-bulk">
    <div class="page-content">
        <div class="container-fluid">

            <div class="row">
               

                <div class="col-xl-12">
            
                    <div class="card">
                        
                       <div class="card-body">
                            <!-- <h4 class="card-title">Add Data Bulk</h4> -->
                                <div id="basic-pills-wizard" class="twitter-bs-wizard">
                                    <ul class="twitter-bs-wizard-nav">
                                        <li class="nav-item">
                                            <a href="#seller-details" class="nav-link" data-toggle="tab">
                                                <span class="step-number">01</span>
                                                <span class="step-title">Add Data</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#company-document" class="nav-link" data-toggle="tab">
                                                <span class="step-number">02</span>
                                                <span class="step-title">Validate Data</span>
                                            </a>
                                        </li>
                                        
                                        <li class="nav-item">
                                            <a href="#bank-detail" class="nav-link" data-toggle="tab">
                                                <span class="step-number">03</span>
                                                <span class="step-title">Confirm Data</span>
                                            </a>
                                        </li>

                                    </ul>
                                    <ul class="pager wizard twitter-bs-wizard-pager-link">
                                        <li class="previous"><a href="#">Previous</a></li>
                                        <li class="next"><a href="#">Next</a></li>
                                    </ul>
                                    <div class="tab-content twitter-bs-wizard-tab-content">
                                        <div class="tab-pane" id="seller-details">
                                            <form>
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label for="basicpill-firstname-input">Area</label>
                                                            <input type="text" class="form-control" id="basicpill-firstname-input">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label for="basicpill-lastname-input">KPI</label>
                                                            <select name="" id="" class="select-kpi form-control">
                                                                <option value="">-</option>
                                                                <option value="">OTD (LPG)</option>
                                                                <option value="">OTD (Petkim)</option>
                                                                <option value="down-time">Down-Time (LPG)</option>
                                                                <option value="down-time">Down-Time (Petkim)</option>
                                                                <option value="down-time">Down-Time (Late Document)</option>
                                                                <option value="">Susut Barang (Gudang - Menguap)</option>
                                                                <option value="">Susut Barang (Gudang - Tidak Menguap)</option>
                                                                <option value="">Susut Barang (Mobil - Menguap)</option>
                                                                <option value="">Susut Barang (Mobil - Tidak Menguap)</option>
                                                                <option value="">Lainnya (Dropping Gagal)</option>
                                                                <option value="">Lainnya (Penyerapan Alokasi Kilang)</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label for="basicpill-month-input">Month</label>
                                                            <select name="" id="" class="form-control">
                                                                <option value="">-</option>
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

                                                    <div class="col-lg-6">
                                                        <div class="group-btn">
                                                            <span><a href="javascript:void(0);" class="btn btn-success" data-toggle="modal" data-target="#bulk-upload">Bulk Upload <i class=" ri-attachment-line"></i></a></span>
                                                            <span>or</span>
                                                            <span><a href="javascript:void(0);" class="btn btn-warning"> Integrate <i class=" ri-rotate-lock-line"></i></a></span>
                                                            <span>or</span>
                                                            <span><a href="javascript:void(0);" class="btn btn-primary show-form">Add Manual <i class=" ri-add-line"></i></a></span>

                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-manual hide">
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label for="labelCust">Total QTY Customer</label>
                                                                <input type="number" name="" id="" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <label for="labelTimbangan">Timbangan</label>
                                                            <input type="number" name="" id="" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <label for="labelLicense">License Plate</label>
                                                            <input type="text" name="" id="" class="form-control">
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <label for="labelLicense">Vehicle Type</label>
                                                            <select name="" id="" class="form-control">
                                                                <option value="">-</option>
                                                                <option value="">UOB</option>
                                                                <option value="">INB</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="wrapper-reupload">
                                                            <div class="form-group">
                                                                <button class="btn btn-success btn-submit">Submit <i class="ri-add-line"></i></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="preview-table">
                                                    <div class="row">
                                                        <table class="table table-bordered mb-0 down-time hide">
                                                            <thead>
                                                                <tr>
                                                                    <th>Area</th>
                                                                    <th>KPI</th>
                                                                    <th>Month</th>
                                                                    <th>Total QTY Customer</th>
                                                                    <th>Total Timbangan</th>
                                                                    <th>License Plate</th>
                                                                    <th>Vehicle Type</th>
                                                                    <th>Vehicle Status</th>
                                                                    <th>Action</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>Bogor</td>
                                                                    <td>Down-Time (LPG)</td>
                                                                    <td>January</td>
                                                                    <td>125</td>
                                                                    <td>100</td>
                                                                    <td>B9565UIO</td>
                                                                    <td>OUB</td>
                                                                    <td><div class="badge badge-soft-success font-size-12">Active</div></td>
                                                                    <td>
                                                                        <span class="edit">
                                                                            <a href="javascript:void(0);" class="btn btn-primary" data-toggle="modal" data-target="#offtime"><i class=" ri-calendar-event-line"></i></a>
                                                                        </span>

                                                                        <span class="delete">
                                                                            <button class="btn btn-danger"><i class="ri-delete-bin-line"></i></button>
                                                                        </span>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Bogor</td>
                                                                    <td>Down-Time (LPG)</td>
                                                                    <td>January</td>
                                                                    <td>125</td>
                                                                    <td>100</td>
                                                                    <td>B9565UIO</td>
                                                                    <td>OUB</td>
                                                                    <td><div class="badge badge-soft-success font-size-12">Active</div></td>
                                                                    <td>
                                                                        <span class="edit">
                                                                            <a href="javascript:void(0);" class="btn btn-primary" data-toggle="modal" data-target="#offtime"><i class=" ri-calendar-event-line"></i></a>
                                                                        </span>

                                                                        <span class="delete">
                                                                            <button class="btn btn-danger"><i class="ri-delete-bin-line"></i></button>
                                                                        </span>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Bogor</td>
                                                                    <td>Down-Time (LPG)</td>
                                                                    <td>January</td>
                                                                    <td>125</td>
                                                                    <td>100</td>
                                                                    <td>B9565UIO</td>
                                                                    <td>OUB</td>
                                                                    <td><div class="badge badge-soft-success font-size-12">Active</div></td>
                                                                    <td>
                                                                        <span class="edit">
                                                                            <a href="javascript:void(0);" class="btn btn-primary" data-toggle="modal" data-target="#offtime"><i class=" ri-calendar-event-line"></i></a>
                                                                        </span>

                                                                        <span class="delete">
                                                                            <button class="btn btn-danger"><i class="ri-delete-bin-line"></i></button>
                                                                        </span>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Bogor</td>
                                                                    <td>Down-Time (LPG)</td>
                                                                    <td>January</td>
                                                                    <td>125</td>
                                                                    <td>100</td>
                                                                    <td>B9565UIO</td>
                                                                    <td>OUB</td>
                                                                    <td><div class="badge badge-soft-success font-size-12">Active</div></td>
                                                                    <td>
                                                                        <span class="edit">
                                                                            <a href="javascript:void(0);" class="btn btn-primary" data-toggle="modal" data-target="#offtime"><i class=" ri-calendar-event-line"></i></a>
                                                                        </span>

                                                                        <span class="delete">
                                                                            <button class="btn btn-danger"><i class="ri-delete-bin-line"></i></button>
                                                                        </span>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Bogor</td>
                                                                    <td>Down-Time (LPG)</td>
                                                                    <td>January</td>
                                                                    <td>125</td>
                                                                    <td>100</td>
                                                                    <td>B9565UIO</td>
                                                                    <td>OUB</td>
                                                                    <td><div class="badge badge-soft-success font-size-12">Active</div></td>
                                                                    <td>
                                                                        <span class="edit">
                                                                            <a href="javascript:void(0);" class="btn btn-primary" data-toggle="modal" data-target="#offtime"><i class=" ri-calendar-event-line"></i></a>
                                                                        </span>

                                                                        <span class="delete">
                                                                            <button class="btn btn-danger"><i class="ri-delete-bin-line"></i></button>
                                                                        </span>
                                                                    </td>
                                                                </tr>
                                                            
                                                            </tbody>
                                                        </table>

                                                        <table class="table table-bordered mb-0 otd hide">
                                                            <thead>
                                                                <tr>
                                                                    <th>Area</th>
                                                                    <th>KPI</th>
                                                                    <th>Month</th>
                                                                    <th>Total QTY Customer</th>
                                                                    <th>Total Timbangan</th>
                                                                    <th>License Plate</th>
                                                                    <th>Vehicle Type</th>
                                                                    <th>Vehicle Status</th>
                                                                    <th>Action</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>Bogor</td>
                                                                    <td>Down-Time (LPG)</td>
                                                                    <td>January</td>
                                                                    <td>125</td>
                                                                    <td>100</td>
                                                                    <td>B9565UIO</td>
                                                                    <td>OUB</td>
                                                                    <td><div class="badge badge-soft-success font-size-12">Active</div></td>
                                                                    <td>
                                                                        <span class="delete">
                                                                            <button class="btn btn-danger"><i class="ri-delete-bin-line"></i></button>
                                                                        </span>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Bogor</td>
                                                                    <td>Down-Time (LPG)</td>
                                                                    <td>January</td>
                                                                    <td>125</td>
                                                                    <td>100</td>
                                                                    <td>B9565UIO</td>
                                                                    <td>OUB</td>
                                                                    <td><div class="badge badge-soft-success font-size-12">Active</div></td>
                                                                    <td>
                                                                        <span class="delete">
                                                                            <button class="btn btn-danger"><i class="ri-delete-bin-line"></i></button>
                                                                        </span>
                                                                    </td>
                                                                </tr>
                                                            
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        
                                        <div class="tab-pane" id="company-document">
                                            <div class="row">

                                                <div class="col-md-3">
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <div class="media">
                                                                <div class="media-body overflow-hidden">
                                                                    <p class="text-truncate font-size-14 mb-2">Total Customer</p>
                                                                    <h4 class="mb-0">100</h4>
                                                                </div>
                                                                <div class="text-primary">
                                                                    <i class="ri-stack-line font-size-24"></i>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="card-body border-top py-3">
                                                            <div class="text-truncate">
                                                                <span class="badge badge-soft-success font-size-11"><i class="mdi mdi-menu-up"> </i> 2.4% </span>
                                                                <span class="text-muted ml-2">From previous period</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-3">
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <div class="media">
                                                                <div class="media-body overflow-hidden">
                                                                    <p class="text-truncate font-size-14 mb-2">Total Timbangan</p>
                                                                    <h4 class="mb-0">50</h4>
                                                                </div>
                                                                <div class="text-primary">
                                                                    <i class="ri-stack-line font-size-24"></i>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="card-body border-top py-3">
                                                            <div class="text-truncate">
                                                                <span class="badge badge-soft-success font-size-11"><i class="mdi mdi-menu-up"> </i> 2.4% </span>
                                                                <span class="text-muted ml-2">From previous period</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-3">
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <div class="media">
                                                                <div class="media-body overflow-hidden">
                                                                    <p class="text-truncate font-size-14 mb-2">On Time</p>
                                                                    <h4 class="mb-0">50%</h4>
                                                                </div>
                                                                <div class="text-primary">
                                                                    <i class="ri-stack-line font-size-24"></i>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="card-body border-top py-3">
                                                            <div class="text-truncate">
                                                                <span class="badge badge-soft-success font-size-11"><i class="mdi mdi-menu-up"> </i> 2.4% </span>
                                                                <span class="text-muted ml-2">From previous period</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-3">
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <div class="media">
                                                                <div class="media-body overflow-hidden">
                                                                    <p class="text-truncate font-size-14 mb-2">Late</p>
                                                                    <h4 class="mb-0">50%</h4>
                                                                </div>
                                                                <div class="text-primary">
                                                                    <i class="ri-stack-line font-size-24"></i>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="card-body border-top py-3">
                                                            <div class="text-truncate">
                                                                <span class="badge badge-soft-success font-size-11"><i class="mdi mdi-menu-up"> </i> 2.4% </span>
                                                                <span class="text-muted ml-2">From previous period</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="wrapper-reupload">
                                                    <a href="javascript:void(0);" class="btn btn-warning">Reupload <i class="ri-contacts-book-upload-line"></i></a>
                                                </div>
                                                
                                                <table class="table table-bordered mb-0">
                                                    <thead>
                                                        <tr>
                                                            <th>Area</th>
                                                            <th>KPI</th>
                                                            <th>Month</th>
                                                            <th>QTY Customer</th>
                                                            <th>Timbangan</th>
                                                            <th>License Plate</th>
                                                            <th>Vehicle Type</th>
                                                            <th>Vehicle Status</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>Gudang Bogor</td>
                                                            <td>Down-time (LPG)</td>
                                                            <td>January</td>
                                                            <td>20</td>
                                                            <td>10</td>
                                                            <td>F5620CF</td>
                                                            <td>OUB</td>
                                                            <td><div class="badge badge-soft-success font-size-12">Active</div></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Gudang Bogor</td>
                                                            <td>Down-time (LPG)</td>
                                                            <td>January</td>
                                                            <td>20</td>
                                                            <td>10</td>
                                                            <td>F5620CF</td>
                                                            <td>OUB</td>
                                                            <td><div class="badge badge-soft-success font-size-12">Active</div></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Gudang Bogor</td>
                                                            <td>Down-time (LPG)</td>
                                                            <td>January</td>
                                                            <td>20</td>
                                                            <td>10</td>
                                                            <td>F5620CF</td>
                                                            <td>OUB</td>
                                                            <td><div class="badge badge-soft-success font-size-12">Active</div></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Gudang Bogor</td>
                                                            <td>Down-time (LPG)</td>
                                                            <td>January</td>
                                                            <td>20</td>
                                                            <td>10</td>
                                                            <td>F5620CF</td>
                                                            <td>OUB</td>
                                                            <td><div class="badge badge-soft-success font-size-12">Active</div></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Gudang Bogor</td>
                                                            <td>Down-time (LPG)</td>
                                                            <td>January</td>
                                                            <td>20</td>
                                                            <td>10</td>
                                                            <td>F5620CF</td>
                                                            <td>OUB</td>
                                                            <td><div class="badge badge-soft-success font-size-12">Active</div></td>
                                                        </tr>
                                                        
                                                    
                                                    </tbody>
                                                </table>


                                            </div>    
                                        </div>

                                        <div class="tab-pane" id="bank-detail">
                                            <div class="row">
                                                <table class="table table-bordered mb-0">
                                                    <thead>
                                                        <tr>
                                                            <th>Surat Jalan</th>
                                                            <th>Customer</th>
                                                            <th>Date</th>
                                                            <th>Category Reason</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>DO000111</td>
                                                            <td>Warung Berkah</td>
                                                            <td>2022-03-31</td>
                                                            <td>
                                                                <select name="" id="" class=" form-control">
                                                                    <option value="">-</option>
                                                                    <option value="REP">On Repair</option>
                                                                    <option value="BDO">Broken Down</option>
                                                                    <option value="REG">On Regular maintenance</option>
                                                                    <option value="ACI">Accident</option>
                                                                    <option value="KAR">Karoseri</option>
                                                                    <option value="BUP">Bulk Update</option>
                                                                </select>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>DO000111</td>
                                                            <td>Warung Berkah</td>
                                                            <td>2022-03-31</td>
                                                            <td>
                                                                <select name="" id="" class=" form-control">
                                                                    <option value="">-</option>
                                                                    <option value="REP">On Repair</option>
                                                                    <option value="BDO">Broken Down</option>
                                                                    <option value="REG">On Regular maintenance</option>
                                                                    <option value="ACI">Accident</option>
                                                                    <option value="KAR">Karoseri</option>
                                                                    <option value="BUP">Bulk Update</option>
                                                                </select>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>DO000111</td>
                                                            <td>Warung Berkah</td>
                                                            <td>2022-03-31</td>
                                                            <td>
                                                                <select name="" id="" class=" form-control">
                                                                    <option value="">-</option>
                                                                    <option value="REP">On Repair</option>
                                                                    <option value="BDO">Broken Down</option>
                                                                    <option value="REG">On Regular maintenance</option>
                                                                    <option value="ACI">Accident</option>
                                                                    <option value="KAR">Karoseri</option>
                                                                    <option value="BUP">Bulk Update</option>
                                                                </select>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>DO000111</td>
                                                            <td>Warung Berkah</td>
                                                            <td>2022-03-31</td>
                                                            <td>
                                                                <select name="" id="" class=" form-control">
                                                                    <option value="">-</option>
                                                                    <option value="REP">On Repair</option>
                                                                    <option value="BDO">Broken Down</option>
                                                                    <option value="REG">On Regular maintenance</option>
                                                                    <option value="ACI">Accident</option>
                                                                    <option value="KAR">Karoseri</option>
                                                                    <option value="BUP">Bulk Update</option>
                                                                </select>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>DO000111</td>
                                                            <td>Warung Berkah</td>
                                                            <td>2022-03-31</td>
                                                            <td>
                                                                <select name="" id="" class=" form-control">
                                                                    <option value="">-</option>
                                                                    <option value="REP">On Repair</option>
                                                                    <option value="BDO">Broken Down</option>
                                                                    <option value="REG">On Regular maintenance</option>
                                                                    <option value="ACI">Accident</option>
                                                                    <option value="KAR">Karoseri</option>
                                                                    <option value="BUP">Bulk Update</option>
                                                                </select>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>

                                                <div class="form-group wrapper-reupload">
                                                    <a href="javacsript:void(0);" class="btn btn-finish btn-success">Submit <i class="ri-add-line"></i></a>
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

    <!-- Modal -->
        <div class="modal fade animation bs-example-modal-sm" id="offtime" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title mt-0" id="mySmallModalLabel">Add Offtime</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="">
                            <div class="form-group mb-0">
                                <label>Date</label>
                                <div>
                                    <div class="input-daterange input-group" data-provide="datepicker" data-date-format="yyyy-mm-dd" data-date-autoclose="true">
                                        <input type="text" class="form-control" name="start" placeholder="Start" autocomplete="off" />
                                        <input type="text" class="form-control" name="end" placeholder="End" autocomplete="off"/>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group mb-0">
                                <label>Reason</label>
                                <div>
                                    <select name="vehicle-offtime-reason" class="form-control" required="">
                                        <option value="" hidden="" selected="" disabled="">Select Reason </option>
                                        <option value="REP">On Repair</option>
                                        <option value="BDO">Broken Down</option>
                                        <option value="REG">On Regular maintenance</option>
                                        <option value="ACI">Accident</option>
                                        <option value="KAR">Karoseri</option>
                                        <option value="BUP">Bulk Update</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group mb-0 btn-submit">
                                <button class="btn btn-primary">Submit</button>
                            </div>

                        </form>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div>

        <div class="modal fade animation" id="bulk-upload" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title mt-0" id="mySmallModalLabel">Bulk Upload</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div>
                            <form action="#" class="dropzone">
                                <div class="fallback">
                                    <input name="file" type="file" multiple="multiple">
                                </div>
                                <div class="dz-message needsclick">
                                    <div class="mb-3">
                                        <i class="display-4 text-muted ri-upload-cloud-2-line"></i>
                                    </div>
                                    
                                    <h4>Drop files here or click to upload.</h4>
                                </div>
                            </form>
                        </div>

                        <div class="text-center mt-4">
                            <button type="button" class="btn-send btn btn-primary waves-effect waves-light" data-dismiss="modal">Send Files</button>
                            <button type="button" class="btn btn-success waves-effect waves-light">Download Template</button>
                        </div>
                       
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div>

    <!-- End Modal -->
</section>
@endsection

@section('script')
    <!-- plugin js -->
    <script src="{{ URL::asset('assets/libs/apexcharts/apexcharts.min.js')}}"></script>
    <script src="{{ URL::asset('assets/libs/twitter-bootstrap-wizard/jquery.bootstrap.wizard.min.js')}}"></script>
    <script src="{{ URL::asset('assets/libs/bootstrap-datepicker/bootstrap-datepicker.min.js')}}"></script>
    <script src="{{ URL::asset('assets/libs/dropzone/min/dropzone.min.js')}}"></script>
    
    <!-- jquery.vectormap map -->
    <script src="{{ URL::asset('/assets/libs/jquery-vectormap/jquery-vectormap.min.js')}}"></script>
    
    <!-- Responsive examples -->
    <script src="{{ URL::asset('/assets/libs/datatables/datatables.min.js')}}"></script>
    <script src="{{ URL::asset('/assets/js/pages/datatables.init.js')}}"></script>
    <script src="{{ URL::asset('assets/js/pages/form-wizard.init.js')}}"></script>

    <!-- <script src="{{ URL::asset('/assets/js/pages/form-advanced.init.js')}}"></script> -->

    <script type="text/javascript">
        
        $( document ).ready(function() {
            $( ".btn-send" ).click(function() {
                if($(".select-kpi").val() == "down-time"){
                    $(".table.down-time").removeClass("hide");
                    $(".table.otd").addClass("hide");
                    $(".form-manual").addClass("hide");
                } else {
                    $(".table.otd").removeClass("hide");
                    $(".table.down-time").addClass("hide");
                    $(".form-manual").addClass("hide");
                }
            });

            $( ".show-form" ).click(function() {
                $(".form-manual").removeClass("hide");
                $(".table.down-time").addClass("hide");
                $(".table.otd").addClass("hide");
            })
        })

    </script>

@endsection