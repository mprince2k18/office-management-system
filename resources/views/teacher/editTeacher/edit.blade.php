@extends('layout.master')
@section('title', 'teacher Profile')
@section('parentPageTitle', 'Pages')
@section('page-style')
<link rel="stylesheet" href="{{asset('assets/plugins/light-gallery/css/lightgallery.css')}}">
<link rel="stylesheet" href="{{asset('assets/plugins/fullcalendar/fullcalendar.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/plugins/dropify/css/dropify.min.css')}}"/>

@stop
@section('content')
<div class="row clearfix">
    <div class="col-lg-4 col-md-12">
      <div class="make-me-sticky"style="position: -webkit-sticky;position: sticky;	top: 0;">

        <div class="card mcard_3">
            <div class="body">
                <a href="{{ url('teacher/profile') }}/{{ $edit_teacher->id }}"><img src="{{asset('uploads/teacher')}}/{{ $edit_teacher->avatar }}" class="rounded-circle shadow " alt="profile-image"></a>
                <h4 class="m-t-10">{{ $edit_teacher->name }}</h4>
                <div class="row">
                    <div class="col-12">
                        <p class="text-muted">{{ $edit_teacher->relationBetweenCourse->course_name }}</p>
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

      <form action="{{ url('teacher/update') }}/{{ $edit_teacher->id }}" id="updateForm" method="post" enctype="multipart/form-data">

@csrf

      <div class="card">
          <div class="body">

            <small class="text-muted">Name: </small>
            <input type="text" class="form-control" name="name" value="{{ $edit_teacher->name }}">
            <hr>


            <small class="text-muted">Father's Name: </small>
            <input type="text" class="form-control" name="father_name" value="{{ $edit_teacher->father_name }}">

            <hr>

            <small class="text-muted">Mother's Name: </small>
            <input type="text" class="form-control" name="mother_name" value="{{ $edit_teacher->mother_name }}">

            <hr>


              <small class="text-muted">Email address: </small>
              <input type="email" class="form-control" name="email" value="{{ $edit_teacher->email }}">

              <hr>

              <small class="text-muted">Gender: </small>
              @if( $edit_teacher->gender === 'Male')
              <div class="form-group">
                  <div class="radio inlineblock m-r-20">
                      <input type="radio" name="gender" id="male" class="with-gap" value="Male" checked="">
                      <label for="male">Male</label>
                  </div>
                  <div class="radio inlineblock">
                      <input type="radio" name="gender" id="Female" class="with-gap" value="Female">
                      <label for="Female">Female</label>
                  </div>
              </div>

              @else
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
              @endif
              <hr>

              <small class="text-muted">Natonality: </small>
              <input type="text" class="form-control" name="nationality" value="{{ $edit_teacher->nationality }}">

              <hr>

              <small class="text-muted">Blood Group: </small>
              <div class="form-group form-float">
                <select name="blood_group" class="form-control show-tick ms select2" data-placeholder="Blood Group">
                    <option value="{{ $edit_teacher->blood_group }}" class="bg-dark text-white">{{ $edit_teacher->blood_group }}</option>
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
              <hr>

              <small class="text-muted">Occupation: </small>
              <input type="email" class="form-control" name="occupation" value="{{ $edit_teacher->occupation }}">

              <hr>

              <small class="text-muted">Date Of Birth: </small>
              <div class="input-group masked-input form-group form-float">
                  <div class="input-group-prepend">
                      <span class="input-group-text"><i class="zmdi zmdi-calendar"></i></span>
                  </div>
                  <input type="text" value="{{ $edit_teacher->dob }}" name="dob" class="form-control date" placeholder="{{ $edit_teacher->dob }}">
              </div>
              <hr>

              <small class="text-muted">Present Address: </small>

              <div class="form-group form-float">
                  <textarea name="present_address" cols="30" rows="5" placeholder="Present Address" class="form-control no-resize" required>{{ $edit_teacher->present_address }}</textarea>
              </div>
              <hr>

              <small class="text-muted">Permanent Address: </small>
              <div class="form-group form-float">
                  <textarea name="permanent_address" cols="30" rows="5" placeholder="Present Address" class="form-control no-resize" required>{{ $edit_teacher->permanent_address }}</textarea>
              </div>
              <hr>

              <small class="text-muted">Contact Number: </small>
              <input type="number" class="form-control" name="phone" value="{{ $edit_teacher->phone }}">

              <hr>

              <small class="text-muted">Marketplace Profile Links: </small>

              <!-- @foreach ($y as $value)
              <input type="text" class="form-control" name="marketplace" value="{{ $value }}">
              @endforeach -->

              <!-- marketplace Profile Links -->
              <div id="dynamic-field-1" class="form-group form-float dynamic-field">
                @foreach ($y as $value)
                <input type="text" placeholder="Marketplace Profile Links" value="{{ $value }}" id="field" class="form-control" name="marketplace[]" />
                @endforeach
              </div>
              <button type="button" id="add-button" class="btn btn-secondary float-left text-uppercase shadow-sm"><i class="fas fa-plus fa-fw"></i> Add</button>


              <hr>

              <div class="card">
                  <div class="body">
                      <p>teacher Photo</p>
                      <input name="avatar" type="file" id="dropify-event" data-default-file="{{asset('uploads/teacher')}}/{{ $edit_teacher->avatar }}">
                  </div>
              </div>

              <hr>


                            <small class="text-muted">Password: </small>
                            <input type="password" class="form-control" name="password" value="{{ $edit_teacher->password }}">
                            <hr>

              <div class="card">
              <div class="header">
                  <h2><strong>Education</strong> Background</h2>
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
              <div class="table-responsive social_media_table">
                  <table class="table table-hover c_table">
                      <thead>
                          <tr>
                              <th>Degree</th>
                              <th>Institute</th>
                              <th>Board</th>
                              <th>Subject</th>
                          </tr>
                      </thead>
                      <tbody>
                          <tr>
                              <td><span class="list-name"></span>
                                  <span class="text-muted">SSC</span>
                              </td>
                              <td>
                                <input type="text" class="form-control" name="ssc_inst" value="{{ $edit_teacher->ssc_inst }}">
                              </td>
                              <td>
                                <input type="text" class="form-control" name="ssc_board" value="{{ $edit_teacher->ssc_board }}">
                              </td>
                              <td>
                                <input type="text" class="form-control" name="ssc_subject" value="{{ $edit_teacher->ssc_subject }}">
                              </td>
                              <td>
                                <input type="text" class="form-control" name="ssc_passing" value="{{ $edit_teacher->ssc_passing }}">
                              </td>

                          </tr>

                          <tr>
                              <td><span class="list-name"></span>
                                  <span class="text-muted">HSC</span>
                              </td>
                              <td>
                                <input type="text" class="form-control" name="hsc_inst" value="{{ $edit_teacher->hsc_inst }}">
                              </td>
                              <td>
                                <input type="text" class="form-control" name="hsc_board" value="{{ $edit_teacher->hsc_board }}">
                              </td>
                              <td>
                                <input type="text" class="form-control" name="hsc_subject" value="{{ $edit_teacher->hsc_subject }}">
                              </td>
                              <td>
                                <input type="text" class="form-control" name="hsc_passing" value="{{ $edit_teacher->hsc_passing }}">
                              </td>

                          </tr>

                          <tr>
                              <td><span class="list-name"></span>
                                  <span class="text-muted">Graduation</span>
                              </td>
                              <td>
                                <input type="text" class="form-control" name="grad_inst" value="{{ $edit_teacher->grad_inst }}">
                              </td>
                              <td>
                                <input type="text" class="form-control" name="grad_board" value="{{ $edit_teacher->grad_board }}">
                              </td>
                              <td>
                                <input type="text" class="form-control" name="grad_subject" value="{{ $edit_teacher->grad_subject }}">
                              </td>
                              <td>
                                <input type="text" class="form-control" name="grad_passing" value="{{ $edit_teacher->grad_subject }}">
                              </td>

                          </tr>

                          <tr>
                              <td><span class="list-name"></span>
                                  <span class="text-muted">Masters</span>
                              </td>
                              <td>
                                <input type="text" class="form-control" name="masters_inst" value="{{ $edit_teacher->masters_inst }}">
                              </td>
                              <td>
                                <input type="text" class="form-control" name="masters_board" value="{{ $edit_teacher->masters_board }}">
                              </td>
                              <td>
                                <input type="text" class="form-control" name="masters_subject" value="{{ $edit_teacher->masters_subject }}">
                              </td>
                              <td>
                                <input type="text" class="form-control" name="masters_passing" value="{{ $edit_teacher->masters_passing }}">
                              </td>

                          </tr>

                      </tbody>
                  </table>
              </div>
          </div>

          </div>
      </div>
</form>
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

<script type="text/javascript">

$("#updateButton").click(function(){
  $("#updateForm").submit();
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
