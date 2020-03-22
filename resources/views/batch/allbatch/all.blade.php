@extends('layout.master')
@section('title', 'All Batch')
@section('parentPageTitle', 'Course Area')
@section('page-style')
<link rel="stylesheet" href="{{asset('assets/plugins/jquery-datatable/dataTables.bootstrap4.min.css')}}"/>
  <style media="screen">
  .mcard_4 {
    border: 3px solid #f5f5f5 !important;
  }
  .title{
    font-size: 17px;
  }
  .fee_title{
    font-size: 16px;
  }

  a{
    color: #000 !important;
  }
  </style>
@stop
@section('content')

<!-- Exportable Table -->
<div class="row clearfix">
    <div class="col-lg-12">
        <div class="card">
            <div class="header">
                <h2><strong>All</strong> Batch </h2>
                <ul class="header-dropdown">
                    <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                        <ul class="dropdown-menu dropdown-menu-right slideUp">
                            <li><a href="javascript:void(0);">Action</a></li>
                            <li><a href="javascript:void(0);">Another action</a></li>
                            <li><a href="javascript:void(0);">Something else</a></li>
                        </ul>
                    </li>
                    <li class="remove">
                        <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                    </li>
                </ul>
            </div>
            <div class="body">



              <div class="row clearfix">


  @foreach ($batches as $batch)

      <div class="col-xl-3 col-lg-3 col-md-6">
          <div class="card mcard_4">
              <div class="body">
                  <ul class="header-dropdown list-unstyled">
                      <li class="dropdown">
                          <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-menu"></i> </a>
                          <ul class="dropdown-menu slideUp">
                              <li><a href="javascript:void(0);">Edit</a></li>
                              <li><a href="javascript:void(0);">Delete</a></li>
                              <li><a href="javascript:void(0);">Report</a></li>
                          </ul>
                      </li>
                  </ul>
                  <div class="img">
                      <img src="{{ asset('uploads/course') }}/{{ $batch->relationBetweenTeacher->relationBetweenCourse->course_thumb }}" class="rounded-circle" alt="profile-image">
                  </div>
                  <a href="{{ url('batch/profile') }}/{{ $batch->id }}">
                    <div class="user">
                        <h5 class="mt-3 mb-1 title">{{ $batch->batch_no }}</h5>
                        <h6 class="mt-3 mb-1 fee_title">{{ $batch->relationBetweenTeacher->name }}</h6>
                    </div>
                  </a>

                  <ul class="list-unstyled social-links">
                      <li><a href="javascript:void(0);">Enrolled: 10</a></li>
                  </ul>
              </div>
          </div>
      </div>
@endforeach


  </div>

            </div>
        </div>
    </div>
</div>
@stop
@section('page-script')
<script src="{{asset('assets/bundles/datatablescripts.bundle.js')}}"></script>
<script src="{{asset('assets/plugins/jquery-datatable/buttons/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('assets/plugins/jquery-datatable/buttons/buttons.bootstrap4.min.js')}}"></script>
<script src="{{asset('assets/plugins/jquery-datatable/buttons/buttons.colVis.min.js')}}"></script>
<script src="{{asset('assets/plugins/jquery-datatable/buttons/buttons.flash.min.js')}}"></script>
<script src="{{asset('assets/plugins/jquery-datatable/buttons/buttons.html5.min.js')}}"></script>
<script src="{{asset('assets/plugins/jquery-datatable/buttons/buttons.print.min.js')}}"></script>
<script src="{{asset('assets/js/pages/tables/jquery-datatable.js')}}"></script>
@stop
