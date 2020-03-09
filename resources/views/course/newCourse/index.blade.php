@extends('layout.master')
@section('title', 'New Course')
@section('parentPageTitle', 'Course Area')
@section('page-style')
<link rel="stylesheet" href="{{asset('assets/plugins/summernote/dist/summernote.css')}}" />
<link rel="stylesheet" href="{{asset('assets/plugins/dropify/css/dropify.min.css')}}" />
<link rel="stylesheet" href="{{asset('assets/plugins/morrisjs/morris.css')}}" />
<link rel="stylesheet" href="{{asset('assets/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.css')}}" />
<link rel="stylesheet" href="{{asset('assets/plugins/multi-select/css/multi-select.css')}}" />
<link rel="stylesheet" href="{{asset('assets/plugins/jquery-spinner/css/bootstrap-spinner.css')}}" />
<link rel="stylesheet" href="{{asset('assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css')}}" />
<link rel="stylesheet" href="{{asset('assets/plugins/bootstrap-select/css/bootstrap-select.css')}}" />
<link rel="stylesheet" href="{{asset('assets/plugins/nouislider/nouislider.min.css')}}" />
<link rel="stylesheet" href="{{asset('assets/plugins/select2/select2.css')}}" />
<style>
    .input-group-text {
        padding: 0 .75rem;
    }

</style>
@stop
@section('content')




<!-- Advanced Select2 -->
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12">

        <form action="{{ route('course.create') }}" enctype="multipart/form-data" method="post">
            @csrf

            <div class="card">
                <div class="header">
                    <h2><strong>New</strong> Course</h2>
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
                                <input type="text" class="form-control" placeholder="Course Name" name="course_name"
                                    required="" aria-required="true">
                            </div>
                        </div>
                    </div>

                    <div class="row clearfix">
                        <div class="col-lg-12 col-md-12">
                            <div class="form-group form-float">
                                <input type="number" class="form-control" placeholder="Course Fee" name="course_fee"
                                    required="" aria-required="true">
                            </div>
                        </div>
                    </div>

                    <!-- <div class="row clearfix">

                    <div class="col-lg-12 col-md-12">
                        <select class="form-control show-tick ms select2" multiple data-placeholder="Assing Teacher" name="course_teacher[]">
                            <option value="Mustard">Mustard</option>
                            <option value="Ketchup">Ketchup</option>
                            <option value="Relish">Relish</option>
                        </select>
                    </div>

                </div> -->


                    <div class="row clearfix">

                        <div class="col-lg-12 col-md-12">
                            <textarea name="course_outline" class="summernote" style="display: none;">
                                Hello there,
                                <br>
                                <p>The toolbar can be customized and it also supports various callbacks such as
                                    <code>oninit</code>, <code>onfocus</code>, <code>onpaste</code> and many more.</p>
                                <p>Please try <b>paste some texts</b> here</p>
                            </textarea>
                        </div>
                    </div>


                    <div class="row clearfix">


                        <div class="card">
                            <div class="body">
                                <input type="file" name="course_thumb" id="dropify-event"
                                    data-default-file="{{asset('assets/images/image-gallery/1.jpg')}}">
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
<script src="{{asset('assets/plugins/jquery-validation/jquery.validate.js')}}"></script>
<script src="{{asset('assets/plugins/jquery-steps/jquery.steps.js')}}"></script>
<script src="{{asset('assets/js/pages/forms/form-validation.js')}}"></script>

<script src="{{asset('assets/plugins/dropify/js/dropify.min.js')}}"></script>
<script src="{{asset('assets/js/pages/forms/dropify.js')}}"></script>
<script src="{{asset('assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.js')}}"></script>
<script src="{{asset('assets/plugins/jquery-inputmask/jquery.inputmask.bundle.js')}}"></script>
<script src="{{asset('assets/plugins/multi-select/js/jquery.multi-select.js')}}"></script>
<script src="{{asset('assets/plugins/jquery-spinner/js/jquery.spinner.js')}}"></script>
<script src="{{asset('assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js')}}"></script>
<script src="{{asset('assets/plugins/nouislider/nouislider.js')}}"></script>
<script src="{{asset('assets/plugins/select2/select2.min.js')}}"></script>
<script src="{{asset('assets/js/pages/forms/advanced-form-elements.js')}}"></script>
@stop
