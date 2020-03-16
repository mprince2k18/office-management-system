@extends('layout.master')
@section('title', 'Edit Employee')
@section('parentPageTitle', 'Employee Area')
@section('page-style')
<link rel="stylesheet" href="{{asset('assets/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css')}}"/>
<link rel="stylesheet" href="{{asset('assets/plugins/bootstrap-select/css/bootstrap-select.css')}}"/>

<link rel="stylesheet" href="{{asset('assets/plugins/dropify/css/dropify.min.css')}}"/>
<link rel="stylesheet" href="{{asset('assets/plugins/morrisjs/morris.css')}}"/>
<link rel="stylesheet" href="{{asset('assets/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.css')}}"/>
<link rel="stylesheet" href="{{asset('assets/plugins/multi-select/css/multi-select.css')}}"/>
<link rel="stylesheet" href="{{asset('assets/plugins/jquery-spinner/css/bootstrap-spinner.css')}}"/>
<link rel="stylesheet" href="{{asset('assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css')}}"/>
<link rel="stylesheet" href="{{asset('assets/plugins/bootstrap-select/css/bootstrap-select.css')}}"/>
<link rel="stylesheet" href="{{asset('assets/plugins/nouislider/nouislider.min.css')}}"/>
<link rel="stylesheet" href="{{asset('assets/plugins/select2/select2.css')}}"/>

@stop
@section('content')
<!-- Basic Validation -->

<div class="row clearfix">
  <div class="card">
    <div class="body">

<button type="button" class="btn btn-raised btn-primary waves-effect m-r-20" data-toggle="modal" data-target="#largeModal">Add Designation</button>
<button type="button" class="btn btn-raised btn-primary waves-effect m-r-20" data-toggle="modal" data-target="#largeModal1">Add Duties</button>
      </div>

    </div>
  </div>
</div>



<div class="modal fade" id="largeModal" tabindex="-1" role="dialog" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="title" id="largeModalLabel">Add New Designation</h4>
            </div>
            <div class="modal-body">

              <form id="desig_form" method="POST" action="{{ route('designation.create') }}" enctype="multipart/form-data">
                @csrf
                <!-- fullname -->
                  <div class="form-group form-float">
                      <input type="text" class="form-control name" placeholder="Add Designation" name="name" required autofocus>
                  </div>

              </form>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-round waves-effect" id="submit_desig">SUBMIT</button>
                <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">CLOSE</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="largeModal1" tabindex="-1" role="dialog" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="title" id="largeModalLabel">Add New Duty</h4>
            </div>
            <div class="modal-body">

              <form id="duty_form" method="POST" action="{{ route('duties.create') }}" enctype="multipart/form-data">
                @csrf
                <!-- fullname -->
                  <div class="form-group form-float">
                      <input type="text" class="form-control name" placeholder="Add Duties" name="name" required autofocus>
                  </div>

              </form>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-round waves-effect" id="submit_duty">SUBMIT</button>
                <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">CLOSE</button>
            </div>
        </div>
    </div>
</div>



<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="card">
            <div class="header">
                <h2><strong>Employee</strong> Information</h2>
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
                <form id="form_validation" method="POST" action="{{ url('employee/update') }}/{{ $edit_employee->id }}" enctype="multipart/form-data">
                  @csrf
                  <!-- fullname -->
                    <div class="form-group form-float">
                        <input type="text" class="form-control name" value="{{ $edit_employee->name }}" placeholder="Name" name="name" required>
                    </div>



                      <!-- Blood Group -->
                      <div class="form-group form-float">
                        <select name="designation" class="form-control show-tick ms select2" data-placeholder="Designation">
                            <option value="{{ $edit_employee->relationBetweenDesignation->id }}">{{ $edit_employee->relationBetweenDesignation->name }}</option>

                            @foreach($designations as $designation)
                              <option value="{{ $designation->id }}">{{ $designation->name }}</option>
                            @endforeach

                        </select>
                      </div>

                      <!-- Blood Group -->
                      <div class="form-group form-float">
                        <select name="duties" class="form-control show-tick ms select2" data-placeholder="Duties">
                            <option value="{{ $edit_employee->relationBetweenDuty->id }}">{{ $edit_employee->relationBetweenDuty->name }}</option>

                            @foreach($duties as $dutiy)
                              <option value="{{ $dutiy->id }}">{{ $dutiy->name }}</option>
                            @endforeach

                        </select>
                      </div>


                    <!-- Present Address -->
                    <div class="form-group form-float">
                        <textarea name="address" cols="30" rows="5" placeholder="Present Address" class="form-control no-resize" required>{{ $edit_employee->address }}</textarea>
                    </div>


                    <!-- Contact Number -->
                    <div class="form-group form-float">
                        <input type="number" value="{{ $edit_employee->phone }}" placeholder="Contact Number.  Ex: 01825731327" class="form-control" name="phone" maxlength="14" minlength="11" required>
                        <div class="help-info">Min. 11, Max. 14 characters</div>
                    </div>

                    <!-- fullname -->
                      <div class="form-group form-float">
                          <input type="number" value="{{ $edit_employee->salary }}" class="form-control" placeholder="Salary" name="salary" required>
                      </div>


                    <div class="card">
                        <div class="body">
                            <p>Employee Photo</p>
                            <input type="file" name="photo" id="dropify-event" data-default-file="{{ asset('uploads/employee') }}/{{ $edit_employee->photo }}">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="checkbox">
                            <input id="checkbox" type="checkbox">
                            <label for="checkbox">I have read and accept the terms</label>
                        </div>
                    </div>

                    <button class="btn btn-raised btn-primary waves-effect" type="submit">SUBMIT</button>
                </form>
            </div>
        </div>
    </div>
</div>

@stop
@section('page-script')
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

<script type="text/javascript">

$(document).ready(function(){
  $('#submit_desig').click(function(){
      $('#desig_form').submit();
  });

  $('#submit_duty').click(function(){
      $('#duty_form').submit();
  });

  $(".name").focus();

  $('#largeModal1').on('shown.bs.modal', function() {
  $(this).find('.name').focus();
})

});

</script>


@stop
