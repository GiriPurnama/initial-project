@extends('layouts.print')
@section('title') Order @endsection
@section('css')
    <!-- DataTables -->
    <link href="{{ URL::asset('/assets/libs/jquery-vectormap/jquery-vectormap.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- Responsive datatable examples -->
    <link href="{{ URL::asset('/assets/libs/datatables/datatables.min.css')}}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('/assets/libs/datatables-responsive/responsive.bootstrap.min.css')}}">
    <link href="{{ URL::asset('/assets/libs/select2/select2.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('/assets/libs/bootstrap-datepicker/bootstrap-datepicker.min.css')}}" rel="stylesheet" type="text/css" />
@endsection

@section('content')

<div class="row">
    <div class="col-md-6">
        <div class="img-center">
            <img src="{{ URL::asset('/assets/images/transmarco.png')}}" style="width: 200px;margin-left: 20%;margin-bottom: 20px;" alt="">
        </div>
        <table class="table mb-0">
            <tr>
                <td>DO NO</td>
                <td>:</td>
                <td>{{Request::input('do_number')}}</td>
            </tr>
            <tr>
                <td>TRF FROM</td>
                <td>:</td>
                <td>{{Request::input('pickup_name')}}</td>
            </tr>
            <tr>
                <td>TRF TO</td>
                <td>:</td>
                <td>{{Request::input('drop_name')}}</td>
            </tr>
            <tr>
                <td>QTY</td>
                <td>:</td>
                <td>{{Request::input('goods_qty')}}</td>
            </tr>
            <tr>
                <td>PACKAGE</td>
                <td>:</td>
                <td>        of      </td>
            </tr>
        </table>
    </div>
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

    <script type="text/javascript" src="{{ URL::asset('/assets/libs/moments/moment.min.js')}}"></script>
    <script type="text/javascript" src="{{ URL::asset('/assets/libs/bootstrap-datepicker/bootstrap-datepicker.min.js')}}"></script>
    <script type="text/javascript" src="{{ URL::asset('/assets/libs/daterangepicker/daterangepicker.js')}}"></script>
    <script type="text/javascript" src="{{ URL::asset('/assets/libs/select2/select2.min.js')}}"></script>

    <!-- <script src="{{ URL::asset('/assets/js/pages/dashboard.init.js')}}"></script> -->

    <script type="text/javascript">

        window.print();

    </script>

@endsection