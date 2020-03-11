@extends('layout.master')
@section('title', 'New Enrollment')
@section('parentPageTitle', 'Enrollment Area')
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
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="card">
            <div class="header">
                <h2><strong>New</strong> Enrollment</h2>
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
                <form id="form_validation" method="POST" action="{{ route('enroll.create') }}" enctype="multipart/form-data">
                  @csrf

                      <!-- student_name -->
                      <div class="form-group form-float">
                        <select name="student_name" class="form-control show-tick ms select2" data-placeholder="Find Student">
                            <option></option>

                            @foreach($students as $students)
                              <option value="{{ $students->id }}">{{ $students->name }} ( {{ $students->phone }} )</option>
                            @endforeach

                        </select>
                      </div>

                      <!-- course_name -->
                      <div class="form-group form-float">
                        <select name="batch_no" class="form-control show-tick ms select2" data-placeholder="Find Batch">
                            <option></option>
                            @foreach($batchs as $batch)
                              <option value="{{ $batch->id }}">{{ $batch->batch_no }}</option>
                            @endforeach

                        </select>
                      </div>


                      <!-- rollno -->
                        <div class="form-group form-float">
                          <input type='text' class='form-control' placeholder='Roll Number' name='student_roll'>
                        </div>

                      <!-- course_name -->
                      <div class="form-group form-float">
                        <select name="course_name" id="course" class="form-control show-tick ms select2" data-placeholder="Find Course">
                            <option></option>
                            @foreach($courses as $course)
                              <option value="{{ $course->id }}">{{ $course->course_name }}</option>
                            @endforeach

                        </select>
                      </div>


                      <!-- coursefee -->
                        <div class="form-group form-float" id="fee">
                          <!-- here is course fee -->
                        </div>

                      <!-- discount -->
                        <div class="form-group form-float">
                          <input type='number' id="value2" class='form-control' placeholder='Course Discount' name='course_discount'>
                        </div>

                        <div class="form-group form-float">
                           <input type="number" name="sum" placeholder="Total Amount" id="sum" class="form-control" readonly />
                        </div>



                        <div class="row clearfix">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" name="firstInstallment" class="form-control" placeholder="First Installment Amount">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="date" name="firstInstallmentDate" class="form-control">
                                </div>
                            </div>
                        </div>



                        <div class="row clearfix">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" name="secondInstallment" class="form-control" placeholder="Second Installment Amount">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="date" name="secondInstallmentDate" class="form-control">
                                </div>
                            </div>
                        </div>



                        <div class="row clearfix">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" name="thirdInstallment" class="form-control" placeholder="Third Installment Amount">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="date" name="thirdInstallmentDate" class="form-control">
                                </div>
                            </div>
                        </div>



                        <div class="row clearfix">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" name="fourInstallment" class="form-control" placeholder="Four Installment Amount">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="date" name="fourInstallmentDate" class="form-control">
                                </div>
                            </div>
                        </div>



                        <div class="row clearfix">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" name="fiveInstallment" class="form-control" placeholder="Five Installment Amount">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="date" name="fiveInstallmentDate" class="form-control">
                                </div>
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
    $(document).ready(function() {
	       $('#course').click(function(){
           var course_id = $(this).val();
           // alert(course_id);

           $.ajaxSetup({
          		headers: {
          		    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          		}
	          });


	        $.ajax({
        		type: 'POST',
        		url: '/get/course/fee',
        		data: {
        		    course_id: course_id
        		},
        		success: function(data) {
        		    $("#fee").html(data);

        		    // alert(data);

        		}
        	    });


         });
    });
</script>


<script type="text/javascript">
        $(function(){
          $('#value1, #value2').keyup(function(){
             var value1 = parseFloat($('#value1').val()) || 0;
             var value2 = parseFloat($('#value2').val()) || 0;
             $('#sum').val(value1 - value2);
          });
       });
</script>

<script type="text/javascript">

$('#course').change(function(){
  $('#value1').val(null);
  $('#value2').val(null);
  $('#sum').val(null);
});

</script>

<script type="text/javascript">

$(document).ready(function() {
  var buttonAdd = $("#add-button");
  var buttonRemove = $("#remove-button");
  var className = ".dynamic-field";
  var count = 0;
  var field = "";
  var maxFields = 5;

  function totalFields() {
    return $(className).length;
  }

  function addNewField() {
    count = totalFields() + 1;
    field = $("#dynamic-field-1").clone();
    field.attr("id", "dynamic-field-" + count);
    field.children("label").text("Field " + count);
    field.find("input").val("");
    $(className + ":last").after($(field));
  }

  function removeLastField() {
    if (totalFields() > 1) {
      $(className + ":last").remove();
    }
  }

  function enableButtonRemove() {
    if (totalFields() === 2) {
      buttonRemove.removeAttr("disabled");
      buttonRemove.addClass("shadow-sm");
    }
  }

  function disableButtonRemove() {
    if (totalFields() === 1) {
      buttonRemove.attr("disabled", "disabled");
      buttonRemove.removeClass("shadow-sm");
    }
  }

  function disableButtonAdd() {
    if (totalFields() === maxFields) {
      buttonAdd.attr("disabled", "disabled");
      buttonAdd.removeClass("shadow-sm");
    }
  }

  function enableButtonAdd() {
    if (totalFields() === (maxFields - 1)) {
      buttonAdd.removeAttr("disabled");
      buttonAdd.addClass("shadow-sm");
    }
  }

  buttonAdd.click(function() {
    addNewField();
    enableButtonRemove();
    disableButtonAdd();
  });

  buttonRemove.click(function() {
    removeLastField();
    disableButtonRemove();
    enableButtonAdd();
  });
});

</script>
@stop
