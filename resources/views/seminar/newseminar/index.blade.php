@extends('layout.master')
@section('title', 'New Visitor')
@section('parentPageTitle', 'Visitor Area')
@section('page-style')
<link rel="stylesheet" href="{{asset('assets/plugins/morrisjs/morris.css')}}"/>
<link rel="stylesheet" href="{{asset('assets/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.css')}}"/>
<link rel="stylesheet" href="{{asset('assets/plugins/multi-select/css/multi-select.css')}}"/>
<link rel="stylesheet" href="{{asset('assets/plugins/jquery-spinner/css/bootstrap-spinner.css')}}"/>
<link rel="stylesheet" href="{{asset('assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css')}}"/>
<link rel="stylesheet" href="{{asset('assets/plugins/bootstrap-select/css/bootstrap-select.css')}}"/>
<link rel="stylesheet" href="{{asset('assets/plugins/nouislider/nouislider.min.css')}}"/>
<link rel="stylesheet" href="{{asset('assets/plugins/select2/select2.css')}}"/>
<style>
.input-group-text {
    padding: 0 .75rem;
}
</style>
@stop
@section('content')










<!-- Basic Validation -->
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="card">
            <div class="header">
                <h2><strong>Visitor</strong> Information</h2>
                <ul class="header-dropdown">
                    <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                        <ul class="dropdown-menu dropdown-menu-right">
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
                <form id="form_validation" method="POST" action="{{ route('seminar.create') }}" enctype="multipart/form-data">
                  @csrf
                  <!-- fullname -->
                    <div class="form-group form-float">
                        <input type="text" class="form-control" placeholder="Visitor Name" name="name" required>
                    </div>

                  <!-- fullname -->
                    <div class="form-group form-float">
                        <input type="email" class="form-control" placeholder="Email" name="email" required>
                    </div>

                  <!-- fullname -->
                    <div class="form-group form-float">
                        <input type="number" class="form-control" placeholder="Contact Number" name="phone" required>
                    </div>

                  <!-- fullname -->
                    <div class="form-group form-float">
                        <textarea name="address" class="form-control" rows="8" cols="80"></textarea>
                    </div>


                                      <!-- fullname -->
                                        <div class="form-group form-float">
                                            <input type="date" class="form-control" placeholder="Seminar date" name="seminar_date" required>
                                        </div>

                    <!-- Ocupation -->
                    <div class="form-group form-float">
                      <select name="seminar_topic" class="form-control show-tick ms select2" data-placeholder="Seminar Topic">
                          <option></option>
                          @foreach($courses as $course)
                            <option value="{{ $course->id }}">{{ $course->course_name }}</option>
                          @endforeach
                      </select>
                    </div>

                    <!-- Ocupation -->
                    <div class="form-group form-float">
                      <select name="seminar_representer" class="form-control show-tick ms select2" data-placeholder="Seminar Representer">
                          <option></option>
                          @foreach($teachers as $teacher)
                            <option value="{{ $teacher->id }}">{{ $teacher->name }}</option>
                          @endforeach
                      </select>
                    </div>



                    <button class="btn btn-raised btn-primary waves-effect" type="submit">SUBMIT</button>
                </form>
            </div>
        </div>
    </div>
</div>

@stop
@section('page-script')
<script src="{{asset('assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.js')}}"></script>
<script src="{{asset('assets/plugins/jquery-inputmask/jquery.inputmask.bundle.js')}}"></script>
<script src="{{asset('assets/plugins/multi-select/js/jquery.multi-select.js')}}"></script>
<script src="{{asset('assets/plugins/jquery-spinner/js/jquery.spinner.js')}}"></script>
<script src="{{asset('assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js')}}"></script>
<script src="{{asset('assets/plugins/nouislider/nouislider.js')}}"></script>
<script src="{{asset('assets/plugins/select2/select2.min.js')}}"></script>
<script src="{{asset('assets/js/pages/forms/advanced-form-elements.js')}}"></script>
@stop
