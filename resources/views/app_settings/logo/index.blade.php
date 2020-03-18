@extends('layout.master')
@section('title', 'App Settings')
@section('parentPageTitle', 'Settings')
@section('page-style')
<link rel="stylesheet" href="{{asset('assets/plugins/light-gallery/css/lightgallery.css')}}">
<link rel="stylesheet" href="{{asset('assets/plugins/fullcalendar/fullcalendar.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/plugins/dropify/css/dropify.min.css')}}"/>
@stop
@section('content')
<div class="row clearfix">
    <div class="col-lg-12 col-md-12">
        <div class="card mcard_3">


          <div class="body">
              <!-- Nav tabs -->
              <ul class="nav nav-tabs p-0 mb-3 nav-tabs-success" role="tablist">
                  <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#home_with_icon_title"> <i class="zmdi zmdi-home"></i> LOGO </a></li>
              </ul>

              <!-- Tab panes -->
              <div class="tab-content">
                  <div role="tabpanel" class="tab-pane in active" id="home_with_icon_title">


            <form id="form_validation" method="POST" action="{{ route('logo.create') }}" enctype="multipart/form-data">
              @csrf

                <div class="card">
                    <div class="body">
                        <input type="file" name="logo" id="dropify-event" data-default-file="{{asset('assets/images/image-gallery/1.jpg')}}">
                    </div>
                </div>

                <button class="btn btn-raised btn-primary waves-effect" type="submit">SUBMIT</button>
            </form>


                  </div>
              </div>
          </div>
    </div>
  </div>
</div>



<div class="row clearfix">
    <div class="col-lg-12 col-md-12">
        <div class="card mcard_3">


          <div class="body">
                <div id="aniimated-thumbnials" class="list-unstyled row clearfix">
                  @foreach ($logos as $logo)
                  <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 m-b-30">
                    <a href="{{ asset('uploads/logo') }}/{{ $logo->logo }}">
                      <img class="img-fluid img-thumbnail" src="{{ asset('uploads/logo') }}/{{ $logo->logo }}" alt="">
                    </a>

                          <button type="button" class="btn btn-{{ $logo->status === 1 ? 'warning' : 'primary' }}" onclick="window.location='{{ url('/application/settings/logo') }}/{{ $logo->id }}/change'">{{ $logo->status === 1 ? 'Deactive' : 'Active' }}</button>

                          <button type="button" onclick="window.location='{{ url('/application/settings/logo/delete') }}/{{ $logo->id }}'" class="btn btn-danger">Delete</a>

                  </div>

                  @endforeach
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
<script src="{{asset('assets/plugins/dropify/js/dropify.min.js')}}"></script>
<script src="{{asset('assets/js/pages/forms/dropify.js')}}"></script>
@stop
