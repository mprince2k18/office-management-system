@extends('layout.master')
@section('title', 'teacher Profile')
@section('parentPageTitle', 'Pages')
@section('page-style')
<link rel="stylesheet" href="{{asset('assets/plugins/light-gallery/css/lightgallery.css')}}">
<link rel="stylesheet" href="{{asset('assets/plugins/fullcalendar/fullcalendar.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/plugins/dropify/css/dropify.min.css')}}"/>
<link rel="stylesheet" href="{{asset('assets/plugins/summernote/dist/summernote.css')}}" />

@stop
@section('content')
<div class="row clearfix">
    <div class="col-lg-4 col-md-12">
      <div class="make-me-sticky"style="position: -webkit-sticky;position: sticky;	top: 0;">

        <div class="card mcard_3">
            <div class="body">
                <a href="{{ url('course/profile') }}/{{ $edit_course->id }}"><img src="{{asset('uploads/course')}}/{{ $edit_course->course_thumb }}" class="rounded-circle shadow " alt="profile-image"></a>
                <h4 class="m-t-10">{{ $edit_course->course_name }}</h4>
                <div class="row">

                    <div class="col-4">
                        <small>Batch</small>
                        <h5>STIT 2020</h5>
                    </div>
                    <div class="col-4">
                        <small>Roll No:</small>
                        <h5>001</h5>
                    </div>
                    <div class="col-4">
                        <small>Course Enrolled</small>
                        <h5>02</h5>
                    </div>
                </div>
            </div>
        </div>

        <a href="#" id="updateButton">
          <div class="card info-box-2 hover-zoom-effect social-widget facebook-widget">
              <div class="icon"><i class="zmdi zmdi-edit"></i></div>
              <div class="content">
                  <div class="text">Update Profile</div>
              </div>
          </div>
        </a>
      </div>






    </div>
    <div class="col-lg-8 col-md-12">

      <form id="updateForm" action="{{ url('course/update') }}/{{ $edit_course->id }}" enctype="multipart/form-data" method="post">
          @csrf

          <div class="card">
              <div class="header">
                  <h2><strong>{{ $edit_course->course_name }}</strong></h2>
                  <ul class="header-dropdown">
                      <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle"
                              data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i
                                  class="zmdi zmdi-more"></i> </a>
                          <ul class="dropdown-menu">
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
                      <div class="col-lg-12 col-md-12">
                          <div class="form-group form-float">
                              <input type="text" value="{{ $edit_course->course_name }}" class="form-control" placeholder="Course Name" name="course_name"
                                  required="" aria-required="true">
                          </div>
                      </div>
                  </div>

                  <div class="row clearfix">
                      <div class="col-lg-12 col-md-12">
                          <div class="form-group form-float">
                              <input type="number" value="{{ $edit_course->course_fee }}" class="form-control" placeholder="Course Fee" name="course_fee"
                                  required="" aria-required="true">
                          </div>
                      </div>
                  </div>


                  <div class="row clearfix">

                      <div class="col-lg-12 col-md-12">
                          <textarea name="course_outline" class="summernote" style="display: none;">
                              {{ $edit_course->course_outline }}
                          </textarea>
                      </div>
                  </div>


                  <div class="row clearfix">


                      <div class="card">
                          <div class="body">
                              <input type="file" name="course_thumb" id="dropify-event"
                                  data-default-file="{{asset('uploads/course')}}/{{ $edit_course->course_thumb }}">
                          </div>
                      </div>
                  </div>

                  <div class="row clearfix">

                      <div class="col-lg-12 col-md-12">
                          <button type="submit" class="btn btn-primary">SUBMIT</button>
                      </div>

                  </div>

              </div>
          </div>

      </form>

    </div>
</div>
@stop
@section('page-script')
<script src="{{asset('assets/plugins/summernote/dist/summernote.js')}}"></script>
<script src="{{asset('assets/plugins/light-gallery/js/lightgallery-all.min.js')}}"></script>
<script src="{{asset('assets/bundles/fullcalendarscripts.bundle.js')}}"></script>
<script src="{{asset('assets/plugins/dropify/js/dropify.min.js')}}"></script>
<script src="{{asset('assets/js/pages/forms/dropify.js')}}"></script>
<script src="{{asset('assets/js/pages/medias/image-gallery.js')}}"></script>
<script src="{{asset('assets/js/pages/calendar/calendar.js')}}"></script>

<script type="text/javascript">

$("#updateButton").click(function(){
  $("#updateForm").submit();
});

</script>

@stop
