@extends('layouts.master')
@section('title') Categorization @endsection
@section('css')
    <!-- DataTables -->
    <link href="{{ URL::asset('/assets/libs/jquery-vectormap/jquery-vectormap.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- Responsive datatable examples -->
    <link href="{{ URL::asset('/assets/libs/datatables/datatables.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('/assets/libs/uikits/css/uikits.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('/assets/libs/bootstrap-rating/bootstrap-rating.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('/assets/libs/jquery-ui-rating/dist/themes/bars-reversed.css')}}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
    <div class="row bread-static">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between header-title" style="margin-bottom:25px;">
                <!-- <h4 class="mb-0">Order Management</h4> -->
                <div class="header-nav">
                    <span class="header-word md-0">Categorization  &nbsp;&nbsp;</span>
                    <a href="/home">&nbsp;&nbsp;&nbsp;<i class="ri-home-3-line home"></i></a>
                    <span>&nbsp;<i class="ri-arrow-right-s-line"></i></span>
                    <span>&nbsp;Categorization  </span>
                </div>
                <div class="page-title-right">
                    <a class="btn btn-back" href="/home"><i class="ri-arrow-left-s-line"></i> Back</a>
                </div>
            </div>
        </div>
    </div>
    <div class="page-content categorization">
        <div class="container-fluid">

            <div class="card">
                <div class="card-body">
                    
                    <div class="row">

                        <div class="col-md-12">
                            
                            <ul class="nav nav-tabs nav-tabs-custom nav-justified" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#KeepDoing" role="tab">
                                        <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                                        <span class="d-none d-sm-block">Keep Doing</span> 
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#DoMore" role="tab">
                                        <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                                        <span class="d-none d-sm-block">Do More</span> 
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#DoDifferently" role="tab">
                                        <span class="d-block d-sm-none"><i class="far fa-envelope"></i></span>
                                        <span class="d-none d-sm-block">Do Differently</span>   
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#settings1" role="tab">
                                        <span class="d-block d-sm-none"><i class="fas fa-cog"></i></span>
                                        <span class="d-none d-sm-block">Comments</span>    
                                    </a>
                                </li>
                            </ul>
    
                            <!-- Tab panes -->
                            <div class="tab-content p-3 text-muted">
                                
                                <div class="tab-pane active" id="KeepDoing" role="tabpanel">
                                    <div class="uk-container uk-padding">
                                        <div class="uk-timeline">

                                            <a data-toggle="modal" data-target=".identifying-modal" href="javascript:void(0);">
                                                <div class="uk-timeline-item">
                                                    <div class="uk-timeline-icon">
                                                        <span class="uk-badge"><span uk-icon="check"></span></span>
                                                    </div>
                                                    <div class="uk-timeline-content">
                                                        <div class="uk-card uk-card-default uk-margin-medium-bottom uk-overflow-auto">
                                                            <div class="uk-card-header">
                                                                <div class="uk-grid-small uk-flex-middle" uk-grid>
                                                                    <h3 class="uk-card-title">Amanah</h3>
                                                                    <!-- <span class="uk-label uk-label-success uk-margin-auto-left">Feature</span> -->
                                                                </div>
                                                            </div>
                                                            <div class="uk-card-body">
                                                                <p >Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>

                                            <a data-toggle="modal" data-target=".identifying-modal" href="javascript:void(0);">
                                                <div class="uk-timeline-item">
                                                    <div class="uk-timeline-icon">
                                                        <span class="uk-badge"><span uk-icon="check"></span></span>
                                                    </div>
                                                    <div class="uk-timeline-content">
                                                        <div class="uk-card uk-card-default uk-margin-medium-bottom uk-overflow-auto">
                                                            <div class="uk-card-header">
                                                                <div class="uk-grid-small uk-flex-middle" uk-grid>
                                                                    <h3 class="uk-card-title">Harmonis</h3>
                                                                    <!-- <span class="uk-label uk-label-warning uk-margin-auto-left">Test</span> -->
                                                                </div>
                                                            </div>
                                                            <div class="uk-card-body">
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                            
                                            <a data-toggle="modal" data-target=".identifying-modal" href="javascript:void(0);">
                                                <div class="uk-timeline-item">
                                                    <div class="uk-timeline-icon">
                                                        <span class="uk-badge"><span uk-icon="check"></span></span>
                                                    </div>
                                                    <div class="uk-timeline-content">
                                                        <div class="uk-card uk-card-default uk-margin-medium-bottom uk-overflow-auto">
                                                            <div class="uk-card-header">
                                                                <div class="uk-grid-small uk-flex-middle" uk-grid>
                                                                    <h3 class="uk-card-title">Kompeten</h3>
                                                                    <!-- <span class="uk-label uk-label-danger uk-margin-auto-left">Fix</span> -->
                                                                </div>
                                                            </div>
                                                            <div class="uk-card-body">
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.
                                                                </p>
                                                            </div>
                                                        </div>
    
                                                        <a href="#"><span class="uk-margin-small-right" uk-icon="triangle-down"></span>Load more</a>
                                                    </div>
                                                </div>
                                            </a>

                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane" id="DoMore" role="tabpanel">
                                    <div class="uk-container uk-padding">
                                        <div class="uk-timeline">

                                            <a data-toggle="modal" data-target=".identifying-modal" href="javascript:void(0);">
                                                <div class="uk-timeline-item">
                                                    <div class="uk-timeline-icon">
                                                        <span class="uk-badge"><span uk-icon="check"></span></span>
                                                    </div>
                                                    <div class="uk-timeline-content">
                                                        <div class="uk-card uk-card-default uk-margin-medium-bottom uk-overflow-auto">
                                                            <div class="uk-card-header">
                                                                <div class="uk-grid-small uk-flex-middle" uk-grid>
                                                                    <h3 class="uk-card-title">Amanah</h3>
                                                                    <!-- <span class="uk-label uk-label-success uk-margin-auto-left">Feature</span> -->
                                                                </div>
                                                            </div>
                                                            <div class="uk-card-body">
                                                                <p >Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>

                                            <a data-toggle="modal" data-target=".identifying-modal" href="javascript:void(0);">
                                                <div class="uk-timeline-item">
                                                    <div class="uk-timeline-icon">
                                                        <span class="uk-badge"><span uk-icon="check"></span></span>
                                                    </div>
                                                    <div class="uk-timeline-content">
                                                        <div class="uk-card uk-card-default uk-margin-medium-bottom uk-overflow-auto">
                                                            <div class="uk-card-header">
                                                                <div class="uk-grid-small uk-flex-middle" uk-grid>
                                                                    <h3 class="uk-card-title">Harmonis</h3>
                                                                    <!-- <span class="uk-label uk-label-warning uk-margin-auto-left">Test</span> -->
                                                                </div>
                                                            </div>
                                                            <div class="uk-card-body">
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                            
                                            <a data-toggle="modal" data-target=".identifying-modal" href="javascript:void(0);">
                                                <div class="uk-timeline-item">
                                                    <div class="uk-timeline-icon">
                                                        <span class="uk-badge"><span uk-icon="check"></span></span>
                                                    </div>
                                                    <div class="uk-timeline-content">
                                                        <div class="uk-card uk-card-default uk-margin-medium-bottom uk-overflow-auto">
                                                            <div class="uk-card-header">
                                                                <div class="uk-grid-small uk-flex-middle" uk-grid>
                                                                    <h3 class="uk-card-title">Kompeten</h3>
                                                                    <!-- <span class="uk-label uk-label-danger uk-margin-auto-left">Fix</span> -->
                                                                </div>
                                                            </div>
                                                            <div class="uk-card-body">
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.
                                                                </p>
                                                            </div>
                                                        </div>
    
                                                        <a href="#"><span class="uk-margin-small-right" uk-icon="triangle-down"></span>Load more</a>
                                                    </div>
                                                </div>
                                            </a>

                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane" id="DoDifferently" role="tabpanel">
                                    <div class="uk-container uk-padding">
                                        <div class="uk-timeline">

                                            <a data-toggle="modal" data-target=".identifying-modal" href="javascript:void(0);">
                                                <div class="uk-timeline-item">
                                                    <div class="uk-timeline-icon">
                                                        <span class="uk-badge"><span uk-icon="check"></span></span>
                                                    </div>
                                                    <div class="uk-timeline-content">
                                                        <div class="uk-card uk-card-default uk-margin-medium-bottom uk-overflow-auto">
                                                            <div class="uk-card-header">
                                                                <div class="uk-grid-small uk-flex-middle" uk-grid>
                                                                    <h3 class="uk-card-title">Amanah</h3>
                                                                    <!-- <span class="uk-label uk-label-success uk-margin-auto-left">Feature</span> -->
                                                                </div>
                                                            </div>
                                                            <div class="uk-card-body">
                                                                <p >Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>

                                            <a data-toggle="modal" data-target=".identifying-modal" href="javascript:void(0);">
                                                <div class="uk-timeline-item">
                                                    <div class="uk-timeline-icon">
                                                        <span class="uk-badge"><span uk-icon="check"></span></span>
                                                    </div>
                                                    <div class="uk-timeline-content">
                                                        <div class="uk-card uk-card-default uk-margin-medium-bottom uk-overflow-auto">
                                                            <div class="uk-card-header">
                                                                <div class="uk-grid-small uk-flex-middle" uk-grid>
                                                                    <h3 class="uk-card-title">Harmonis</h3>
                                                                    <!-- <span class="uk-label uk-label-warning uk-margin-auto-left">Test</span> -->
                                                                </div>
                                                            </div>
                                                            <div class="uk-card-body">
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                            
                                            <a data-toggle="modal" data-target=".identifying-modal" href="javascript:void(0);">
                                                <div class="uk-timeline-item">
                                                    <div class="uk-timeline-icon">
                                                        <span class="uk-badge"><span uk-icon="check"></span></span>
                                                    </div>
                                                    <div class="uk-timeline-content">
                                                        <div class="uk-card uk-card-default uk-margin-medium-bottom uk-overflow-auto">
                                                            <div class="uk-card-header">
                                                                <div class="uk-grid-small uk-flex-middle" uk-grid>
                                                                    <h3 class="uk-card-title">Kompeten</h3>
                                                                    <!-- <span class="uk-label uk-label-danger uk-margin-auto-left">Fix</span> -->
                                                                </div>
                                                            </div>
                                                            <div class="uk-card-body">
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.
                                                                </p>
                                                            </div>
                                                        </div>
    
                                                        <a href="#"><span class="uk-margin-small-right" uk-icon="triangle-down"></span>Load more</a>
                                                    </div>
                                                </div>
                                            </a>

                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane" id="settings1" role="tabpanel">
                                    <p class="mb-0">
                                        Trust fund seitan letterpress, keytar raw denim keffiyeh etsy
                                        art party before they sold out master cleanse gluten-free squid
                                        scenester freegan cosby sweater. Fanny pack portland seitan DIY,
                                        art party locavore wolf cliche high life echo park Austin. Cred
                                        vinyl keffiyeh DIY salvia PBR, banh mi before they sold out
                                        farm-to-table VHS viral locavore cosby sweater. Lomo wolf viral,
                                        mustache readymade keffiyeh craft.
                                    </p>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- end row -->
                </div>
            </div>


        </div> <!-- container-fluid -->
        
        <!-- Modal -->
        <div class="modal fade bs-example-modal-sm identifying-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title mt-0" id="myLargeModalLabel">Identifying Behavior Importance</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="row">
                                
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <p>Vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?</p>
                                    </div>
                                </div>

                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="">Use the scale below to share your thoughts</label>
                                        <div class="input-rating">
                                            <select id="example">
                                
                                                <option value="1">Strongly Agree</option>
                                                <option value="2">Strongly Agree</option>
                                                <option value="3">Agree</option>
                                                <option value="4">Agree</option>
                                                <option value="5">Agree or Disagree</option>
                                                <option value="6">Agree or Disagree</option>
                                                <option value="7">Disagree</option>
                                                <option value="8">Disagree</option>
                                                <option value="9">Strongly Disagree</option>
                                                <option value="10">Strongly Disagree</option>
                                                
                                            </select>
                                            <!-- <input type="hidden" class="rating" data-filled="mdi mdi-star text-primary" data-empty="mdi mdi-star-outline text-primary" data-fractions="2"/> -->
                                        </div>
                                    </div>         
                                </div>

                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <textarea class="form-control" placeholder="Why do you think this is important?"></textarea>
                                    </div>
                                </div>

                                <div class="col-sm-12">
                                    <div class="form-group float-right">
                                        <input type="submit" class="btn btn-primary" value="Submit">
                                    </div>
                                </div>

                            </div>
                        </form>
                      
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
        <!-- End Modal -->
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

    <script src="{{ URL::asset('/assets/libs/bootstrap-rating/bootstrap-rating.min.js')}}"></script>
    <script src="{{ URL::asset('/assets/libs/jquery-ui-rating/dist/jquery.barrating.min.js')}}"></script>

    <script src="{{ URL::asset('/assets/js/pages/rating-init.js')}}"></script>

    <script src="{{ URL::asset('/assets/libs/uikits/js/uikits.min.js')}}"></script>
    <script src="{{ URL::asset('/assets/libs/uikits/js/uikits-icon.min.js')}}"></script>

    <!-- <script src="{{ URL::asset('/assets/js/pages/dashboard.init.js')}}"></script> -->

    <script type="text/javascript">
        
        
        $( document ).ready(function() {
            $('#example').barrating({
                theme: 'bars-reversed'
            });
        })

    </script>

@endsection