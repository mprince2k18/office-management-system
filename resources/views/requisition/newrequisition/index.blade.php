@extends('layout.master')
@section('title', 'New Requisition')
@section('parentPageTitle', 'Requisition Area')
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
                <h2><strong>Requisition</strong> Information</h2>
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
                <form id="form_validation" method="POST" action="{{ route('requisition.create') }}" enctype="multipart/form-data">
                  @csrf
                  <!-- fullname -->
                    <div class="form-group form-float">
                        <input type="text" class="form-control name" placeholder="Requisition For" name="for_whom" required>
                    </div>

                  <!-- fullname -->
                    <div class="form-group form-float">
                        <input type="text" class="form-control" placeholder="Buy From" name="buy_from" required>
                    </div>

                  <!-- fullname -->
                    <div class="form-group form-float">
                        <input type="number" class="form-control" placeholder="Cost" name="cost" required>
                    </div>

                  <!-- fullname -->
                    <div class="form-group form-float">
                        <input type="number" class="form-control" placeholder="Quantity" name="quantity" required>
                    </div>

                  <!-- fullname -->
                    <div class="form-group form-float">
                        <input type="number" class="form-control" placeholder="Transport fee" name="transport_fee" required>
                    </div>



                      <!-- Blood Group -->
                      <div class="form-group form-float">
                        <select name="assigned_person" class="form-control show-tick ms select2" data-placeholder="Duties">
                            <option></option>

                            @foreach($employees as $employee)
                              <option value="{{ $employee->id }}">{{ $employee->name }}</option>
                            @endforeach

                        </select>
                      </div>

                      <!-- Blood Group -->
                      <div class="form-group form-float">
                        <select name="payment_source" class="form-control show-tick ms select2" data-placeholder="Payment Source">
                            <option></option>
                              <option value="Office">Office</option>
                              <option value="Personal">Personal</option>
                        </select>
                      </div>


                    <!-- Present Address -->
                    <div class="form-group form-float">
                        <textarea name="note" cols="30" rows="5" placeholder="Present Address" class="form-control no-resize" required></textarea>
                    </div>





                    <div class="card">
                        <div class="body">
                            <p>Money Receipt Photo</p>
                            <input type="file" name="money_receipt" id="dropify-event" data-default-file="{{asset('assets/images/image-gallery/1.jpg')}}">
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
