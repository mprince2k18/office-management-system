@extends('layout.master')
@section('title', 'New Student')
@section('parentPageTitle', 'Student Area')
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
                <h2><strong>Student</strong> Information</h2>
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
                <form id="form_validation" method="POST" action="{{ route('student.create') }}" enctype="multipart/form-data">
                  @csrf
                  <!-- fullname -->
                    <div class="form-group form-float">
                        <input type="text" class="form-control" placeholder="Name" name="name" required>
                    </div>

                  <!-- Fathers name -->
                    <div class="form-group form-float">
                        <input type="text" class="form-control" placeholder="Father's Name" name="father_name" required>
                    </div>

                  <!-- mothers name -->
                    <div class="form-group form-float">
                        <input type="text" class="form-control" placeholder="Mother's Name" name="mother_name" required>
                    </div>

                    <!-- email -->
                    <!-- <div class="form-group form-float">
                        <input type="email" class="form-control" placeholder="Email" name="email" required>
                    </div> -->

                      <!-- email -->
                        <div class="input-group masked-input mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="zmdi zmdi-email"></i></span>
                            </div>
                            <input type="text" name="email" class="form-control email" placeholder="Ex: example@example.com">
                        </div>


                    <!-- Gender -->
                    <div class="form-group">
                        <div class="radio inlineblock m-r-20">
                            <input type="radio" name="gender" id="male" class="with-gap" value="Male">
                            <label for="male">Male</label>
                        </div>
                        <div class="radio inlineblock">
                            <input type="radio" name="gender" id="Female" class="with-gap" value="Female" checked="">
                            <label for="Female">Female</label>
                        </div>
                    </div>



                    <!-- Nationality -->
                      <div class="form-group form-float">
                          <input type="text" class="form-control" placeholder="Nationality" name="nationality" required>
                      </div>

                      <!-- Blood Group -->
                      <div class="form-group form-float">
                        <select name="blood_group" class="form-control show-tick ms select2" data-placeholder="Blood Group">
                            <option></option>
                            <option value="A+">A+</option>
                            <option value="A-">A-</option>
                            <option value="B+">B+</option>
                            <option value="B-">B-</option>
                            <option value="O+">O+</option>
                            <option value="O-">O-</option>
                            <option value="AB+">AB+</option>
                            <option value="AB-">AB-</option>
                        </select>
                      </div>

                      <!-- Ocupation -->
                      <div class="form-group form-float">
                        <select name="occupation" class="form-control show-tick ms select2" data-placeholder="Occupation">
                            <option></option>
                            <option value="Student">Student</option>
                            <option value="Jobless">Jobless</option>
                            <option value="Business">Business</option>
                            <option value="Service">Service</option>
                        </select>
                      </div>


                        <div class="input-group masked-input form-group form-float">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="zmdi zmdi-calendar"></i></span>
                            </div>
                            <input type="date" class="form-control date" name="dob" placeholder="Date of Birth Ex: 30/07/2016">
                        </div>

                    <!-- Present Address -->
                    <div class="form-group form-float">
                        <textarea name="present_address" cols="30" rows="5" placeholder="Present Address" class="form-control no-resize" required></textarea>
                    </div>

                    <!-- Permanent Address -->
                    <div class="form-group form-float">
                        <textarea name="permanent_address" cols="30" rows="5" placeholder="Permanent Address" class="form-control no-resize" required></textarea>
                    </div>


                    <!-- marketplace Profile Links -->
                    <div id="dynamic-field-1" class="form-group form-float dynamic-field">
                      <input type="text" placeholder="Marketplace Profile Links" id="field" class="form-control" name="marketplace[]" />
                    </div>
                    <button type="button" id="add-button" class="btn btn-secondary float-left text-uppercase shadow-sm"><i class="fas fa-plus fa-fw"></i> Add</button>

                    <!-- Contact Number -->
                    <div class="form-group form-float">
                        <input type="number" placeholder="Contact Number.  Ex: 01825731327" class="form-control" name="phone" maxlength="14" minlength="11" required>
                        <div class="help-info">Min. 11, Max. 14 characters</div>
                    </div>

                    <!-- Password -->
                    <div class="form-group form-float">
                        <input type="text" name="password" class="form-control" placeholder="Password" rel="gp" data-size="8" data-character-set="a-z,A-Z,0-9,#" required>
                        <button type="button" class="btn btn-outline-primary getNewPass btn-sm kt-margin-t-5 kt-margin-b-5">Generate Password</button>
                    </div>





                    <div class="card">
                        <div class="body">
                            <p>Student Photo</p>
                            <input type="file" name="avatar" id="dropify-event" data-default-file="{{asset('assets/images/image-gallery/1.jpg')}}">
                        </div>
                    </div>




                    <div class="card">
            <div class="header">
                <h2><strong>Education</strong> Background</h2>
            </div>
            <div class="body">

                    <div class="row clearfix">
                        <div class="col-lg-3 col-md-3 col-sm-3">
                            <div class="form-group">
                              <h3>SSC</h3>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3">
                            <div class="form-group">
                              <label for="">Institute</label>
                                <input type="text" name="ssc_inst" class="form-control" placeholder="Institute">
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2">
                            <div class="form-group">
                              <label for="">Board</label>
                                <input type="text" name="ssc_board" class="form-control" placeholder="Institute">
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2">
                            <div class="form-group">
                              <label for="">Subject</label>
                                <input type="text" name="ssc_subject" class="form-control" placeholder="Subject">
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2">
                            <div class="form-group">
                              <label for="">Passing Year</label>
                                <input type="text" name="ssc_passing" class="form-control" placeholder="Passing Year">
                            </div>
                        </div>

                    </div>

            </div>


            <div class="body">

                    <div class="row clearfix">
                      <div class="col-lg-3 col-md-3 col-sm-3">
                          <div class="form-group">
                            <h3>HSC</h3>
                          </div>
                      </div>
                      <div class="col-lg-3 col-md-3 col-sm-3">
                          <div class="form-group">
                            <label for="">Institute</label>
                              <input type="text" name="hsc_inst" class="form-control" placeholder="Institute">
                          </div>
                      </div>
                      <div class="col-lg-2 col-md-2 col-sm-2">
                          <div class="form-group">
                            <label for="">Board</label>
                              <input type="text" name="hsc_board" class="form-control" placeholder="Institute">
                          </div>
                      </div>
                      <div class="col-lg-2 col-md-2 col-sm-2">
                          <div class="form-group">
                            <label for="">Subject</label>
                              <input type="text" name="hsc_subject" class="form-control" placeholder="Subject">
                          </div>
                      </div>
                      <div class="col-lg-2 col-md-2 col-sm-2">
                          <div class="form-group">
                            <label for="">Passing Year</label>
                              <input type="text" name="hsc_passing" class="form-control" placeholder="Passing Year">
                          </div>
                      </div>

                    </div>

            </div>

            <div class="body">

                    <div class="row clearfix">
                      <div class="col-lg-3 col-md-3 col-sm-3">
                          <div class="form-group">
                            <h3>Grduation</h3>
                          </div>
                      </div>
                      <div class="col-lg-3 col-md-3 col-sm-3">
                          <div class="form-group">
                            <label for="">Institute</label>
                              <input type="text" name="grad_inst" class="form-control" placeholder="Institute">
                          </div>
                      </div>
                      <div class="col-lg-2 col-md-2 col-sm-2">
                          <div class="form-group">
                            <label for="">Board</label>
                              <input type="text" name="grad_board" class="form-control" placeholder="Institute">
                          </div>
                      </div>
                      <div class="col-lg-2 col-md-2 col-sm-2">
                          <div class="form-group">
                            <label for="">Subject</label>
                              <input type="text" name="grad_subject" class="form-control" placeholder="Subject">
                          </div>
                      </div>
                      <div class="col-lg-2 col-md-2 col-sm-2">
                          <div class="form-group">
                            <label for="">Passing Year</label>
                              <input type="text" name="grad_passing" class="form-control" placeholder="Passing Year">
                          </div>
                      </div>

                    </div>

            </div>

            <div class="body">

                    <div class="row clearfix">
                      <div class="col-lg-3 col-md-3 col-sm-3">
                          <div class="form-group">
                            <h3>Masters</h3>
                          </div>
                      </div>
                      <div class="col-lg-3 col-md-3 col-sm-3">
                          <div class="form-group">
                            <label for="">Institute</label>
                              <input type="text" name="masters_inst" class="form-control" placeholder="Institute">
                          </div>
                      </div>
                      <div class="col-lg-2 col-md-2 col-sm-2">
                          <div class="form-group">
                            <label for="">Board</label>
                              <input type="text" name="masters_board" class="form-control" placeholder="Institute">
                          </div>
                      </div>
                      <div class="col-lg-2 col-md-2 col-sm-2">
                          <div class="form-group">
                            <label for="">Subject</label>
                              <input type="text" name="masters_subject" class="form-control" placeholder="Subject">
                          </div>
                      </div>
                      <div class="col-lg-2 col-md-2 col-sm-2">
                          <div class="form-group">
                            <label for="">Passing Year</label>
                              <input type="text" name="masters_passing" class="form-control" placeholder="Passing Year">
                          </div>
                      </div>

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


// Generate a password string
function randString(id){
var dataSet = $(id).attr('data-character-set').split(',');
var possible = '';
if($.inArray('a-z', dataSet) >= 0){
  possible += 'abcdefghijklmnopqrstuvwxyz';
}
if($.inArray('A-Z', dataSet) >= 0){
  possible += 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
}
if($.inArray('0-9', dataSet) >= 0){
  possible += '0123456789';
}
if($.inArray('#', dataSet) >= 0){
  possible += '![]{}()%&*$#^<>~@|';
}
var text = '';
for(var i=0; i < $(id).attr('data-size'); i++) {
  text += possible.charAt(Math.floor(Math.random() * possible.length));
}
return text;
}

// Create a new password on page load
$('input[rel="gp"]').each(function(){
$(this).val(randString($(this)));
});

// Create a new password
$(".getNewPass").click(function(){
var field = $(this).closest('div').find('input[rel="gp"]');
field.val(randString(field));
});

// Auto Select Pass On Focus
$('input[rel="gp"]').on("click", function () {
 $(this).select();
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
