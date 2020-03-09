@extends('layout.master')
@section('title', 'teacher Profile')
@section('parentPageTitle', 'Pages')
@section('page-style')
<link rel="stylesheet" href="{{asset('assets/plugins/light-gallery/css/lightgallery.css')}}">
<link rel="stylesheet" href="{{asset('assets/plugins/fullcalendar/fullcalendar.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/plugins/dropify/css/dropify.min.css')}}"/>

<link rel="stylesheet" href="{{ asset('assets/plugins/jvectormap/jquery-jvectormap-2.0.3.min.css') }}"/>
<link rel="stylesheet" href="{{ asset('assets/plugins/charts-c3/plugin.css') }}"/>
<link rel="stylesheet" href="{{ asset('assets/plugins/morrisjs/morris.min.css') }}" />

@stop
@section('content')
<div class="row clearfix">
    <div class="col-lg-4 col-md-12">
      <div class="make-me-sticky"style="position: -webkit-sticky;position: sticky;	top: 0;">

        <div class="card mcard_3">
            <div class="body">
                <a href="{{ url('course/profile') }}/{{ $course->id }}"><img src="{{asset('uploads/course')}}/{{ $course->course_thumb }}" class="rounded-circle shadow " alt="profile-image"></a>
                <h4 class="m-t-10">{{ $course->course_name }}</h4>
                <div class="row">
                    <div class="col-12">
                        <!-- <ul class="social-links list-unstyled">
                            <li><a title="facebook" href="javascript:void(0);"><i class="zmdi zmdi-facebook"></i></a></li>
                            <li><a title="twitter" href="javascript:void(0);"><i class="zmdi zmdi-twitter"></i></a></li>
                            <li><a title="instagram" href="javascript:void(0);"><i class="zmdi zmdi-instagram"></i></a></li>
                        </ul> -->
                        <p class="text-muted">Wordpress Development</p>
                    </div>
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

        <a href="{{ url('course/edit') }}/{{ $course->id }}" id="updateButton">
          <div class="card info-box-2 hover-zoom-effect social-widget facebook-widget">
              <div class="icon"><i class="zmdi zmdi-edit"></i></div>
              <div class="content">
                  <div class="text">Edit Profile</div>
              </div>
          </div>
        </a>
      </div>






    </div>
    <div class="col-lg-8 col-md-12">

        <div class="card">
            <div class="body">

                <div class="d-flex bd-highlight text-center mb-3">
                                    <div class="bg-blue flex-fill bd-highlight">
                                        <h3 class="mt-3 mb-0">08</h3>
                                        <p>Enrolled</p>
                                    </div>
                                    <div class="bg-green flex-fill bd-highlight">
                                        <h3 class="mt-3 mb-0">83</h3>
                                        <p>Students </p>
                                    </div>
                                    <div class="bg-orange flex-fill bd-highlight">
                                        <h3 class="mt-3 mb-0">5</h3>
                                        <p>Interests</p>
                                    </div>
                                </div>

            </div>
        </div>







        <div class="card">
            <div class="body">


                {!! html_entity_decode($course->course_outline) !!}


            </div>
        </div>

    </div>
</div>
@stop
@section('page-script')
<script src="{{asset('assets/plugins/light-gallery/js/lightgallery-all.min.js')}}"></script>
<script src="{{asset('assets/bundles/fullcalendarscripts.bundle.js')}}"></script>
<script src="{{asset('assets/plugins/dropify/js/dropify.min.js')}}"></script>
<script src="{{asset('assets/js/pages/forms/dropify.js')}}"></script>
<script src="{{asset('assets/js/pages/medias/image-gallery.js')}}"></script>
<script src="{{asset('assets/js/pages/calendar/calendar.js')}}"></script>

<script src="{{asset('assets/bundles/countTo.bundle.js')}}"></script>
<script src="{{asset('assets/bundles/knob.bundle.js')}}"></script>
<script src="{{asset('assets/bundles/sparkline.bundle.js')}}"></script>
<script src="{{asset('assets/js/pages/widgets/infobox/infobox-1.js')}}"></script>
<script src="{{asset('assets/js/pages/charts/jquery-knob.js')}}"></script>
<script src="{{asset('assets/js/pages/charts/sparkline.js')}}"></script>

<script type="text/javascript">

$("#updateButton").click(function(){
  $("#updateForm").submit();
});

</script>

@stop
