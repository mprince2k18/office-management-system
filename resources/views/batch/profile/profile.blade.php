@extends('layout.master')
@section('title', 'Batch Profile')
@section('parentPageTitle', 'Pages')
@section('page-style')
<link rel="stylesheet" href="{{asset('assets/plugins/light-gallery/css/lightgallery.css')}}">
<link rel="stylesheet" href="{{asset('assets/plugins/fullcalendar/fullcalendar.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/plugins/jquery-datatable/dataTables.bootstrap4.min.css')}}"/>
@stop
@section('content')
<div class="row clearfix">
    <div class="col-lg-3 col-md-12">
        <div class="card mcard_3">
            <div class="body">
                <a href="{{ url('batch/profile') }}/{{ $batch->id }}">
                  <img src="{{ asset('uploads/course') }}/{{ $batch->relationBetweenTeacher->relationBetweenCourse->course_thumb }}" class="rounded-circle shadow " alt="profile-image">
                </a>
                <h4 class="m-t-10">{{ $batch->batch_no }}</h4>
                <div class="row">

                    <div class="col-12">
                        <!-- <ul class="social-links list-unstyled">
                            <li><a title="facebook" href="javascript:void(0);"><i class="zmdi zmdi-facebook"></i></a></li>
                            <li><a title="twitter" href="javascript:void(0);"><i class="zmdi zmdi-twitter"></i></a></li>
                            <li><a title="instagram" href="javascript:void(0);"><i class="zmdi zmdi-instagram"></i></a></li>
                        </ul> -->
                        <p class="text-muted">{{ $batch->relationBetweenTeacher->name }}</p>
                    </div>

                    <div class="col-12">
                        <small>Date</small>
                        <h6>{{ $batch->created_at->format('d-M-Y') }}</h6>
                    </div>

                    <!-- <div class="col-4">
                        <small>Students</small>

                        @if($batch->find($batch->id)->where('batch_no', $batch->id)->get())
                          No Enroll
                        @else
                          <h5>{{ $batch->relationBetweenEnroll->where('batch_no', $batch->id)->count() }}</h5>
                        @endif


                    </div> -->

                    <!-- <div class="col-4">
                        <small>Course Enrolled</small>
                        <h5>02</h5>
                    </div> -->

                </div>
            </div>
        </div>

        <!-- <a href="{{ url('student/edit') }}/{{ $batch->id }}">
          <div class="card info-box-2 hover-zoom-effect social-widget facebook-widget">
              <div class="icon"><i class="zmdi zmdi-edit"></i></div>
              <div class="content">
                  <div class="text">Edit Profile</div>
              </div>
          </div>
        </a> -->




    </div>
    <div class="col-lg-9 col-md-12">

      <div class="card">
          <div class="body">


            <!-- Exportable Table -->
            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2><strong>All</strong> Student </h2>
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
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                        <tr>
                                            <th>Photo</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                          <th>Photo</th>
                                          <th>Name</th>
                                          <th>Email</th>
                                          <th>Phone</th>
                                          <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>

                                      @foreach( $batch_enrolles as $value)

                                        <tr>
                                            <td>
                                              <img src="{{ asset('uploads/student') }}/{{ $value->relationBetweenStudent->avatar }}" alt="">
                                            </td>
                                            <td>{{ $value->relationBetweenStudent->name }}</td>
                                            <td>{{ $value->relationBetweenStudent->email }}</td>
                                            <td>{{ $value->relationBetweenStudent->phone }}</td>
                                            <td>
                                              <a href="#" class="btn-sm btn-danger">Delete</a>
                                            </td>
                                        </tr>

                                      @endforeach







                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


      </div>
      </div>

    </div>
</div>
@stop
@section('page-script')
<script src="{{asset('assets/plugins/light-gallery/js/lightgallery-all.min.js')}}"></script>
<script src="{{asset('assets/bundles/fullcalendarscripts.bundle.js')}}"></script>
<script src="{{asset('assets/js/pages/medias/image-gallery.js')}}"></script>
<script src="{{asset('assets/js/pages/calendar/calendar.js')}}"></script>

<script src="{{asset('assets/bundles/datatablescripts.bundle.js')}}"></script>
<script src="{{asset('assets/plugins/jquery-datatable/buttons/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('assets/plugins/jquery-datatable/buttons/buttons.bootstrap4.min.js')}}"></script>
<script src="{{asset('assets/plugins/jquery-datatable/buttons/buttons.colVis.min.js')}}"></script>
<script src="{{asset('assets/plugins/jquery-datatable/buttons/buttons.flash.min.js')}}"></script>
<script src="{{asset('assets/plugins/jquery-datatable/buttons/buttons.html5.min.js')}}"></script>
<script src="{{asset('assets/plugins/jquery-datatable/buttons/buttons.print.min.js')}}"></script>
<script src="{{asset('assets/js/pages/tables/jquery-datatable.js')}}"></script>
@stop
