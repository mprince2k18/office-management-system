@extends('layout.master')
@section('title', 'Student Profile')
@section('parentPageTitle', 'Pages')
@section('page-style')
<link rel="stylesheet" href="{{asset('assets/plugins/light-gallery/css/lightgallery.css')}}">
<link rel="stylesheet" href="{{asset('assets/plugins/fullcalendar/fullcalendar.min.css')}}">
@stop
@section('content')
<div class="row clearfix">
    <div class="col-lg-4 col-md-12">
        <div class="card mcard_3">
            <div class="body">
                <a href="{{ url('student/profile') }}/{{ $student->id }}"><img src="{{ asset('uploads/student') }}/{{ $student->avatar }}" class="rounded-circle shadow " alt="profile-image"></a>
                <h4 class="m-t-10">{{ $student->name }}</h4>
                <div class="row">

                    <div class="col-12">
                        <ul class="social-links list-unstyled">
                            <li><a title="facebook" href="javascript:void(0);"><i class="zmdi zmdi-facebook"></i></a></li>
                            <li><a title="twitter" href="javascript:void(0);"><i class="zmdi zmdi-twitter"></i></a></li>
                            <li><a title="instagram" href="javascript:void(0);"><i class="zmdi zmdi-instagram"></i></a></li>
                        </ul>

                        @if (!isset( $student->relationBetweenEnroll->relationBetweenCourse->course_name) ===  NULL)
                          <p class="text-muted">{{ $student->relationBetweenEnroll->relationBetweenCourse->course_name }}</p>
                        @else
                          <p class="text-muted">No Course Enrolled</p>
                        @endif

                    </div>

                    <div class="col-4">
                        <small>Batch</small>
                        @if (!isset( $student->relationBetweenEnroll->relationBetweenCourse->batch_no) ===  NULL)
                        <p class="text-muted">No Batch</p>
                        @else
                        <h5>{{ $student->relationBetweenEnroll->relationBetweenBatch->batch_no }}</h5>
                        @endif
                    </div>

                    <div class="col-4">
                        <small>Roll No:</small>
                        @if (!isset( $student->relationBetweenEnroll->student_roll) ===  NULL)
                          <p class="text-muted">No Roll</p>
                        @else
                        <h5>{{ $student->relationBetweenEnroll->student_roll }}</h5>
                        @endif
                    </div>

                    <div class="col-4">
                        <small>Course Enrolled</small>
                        @if($student->relationBetweenEnroll != null)
                        <h5>{{ $student->relationBetweenEnroll->where('student_name',$student->id)->count() }}</h5>
                        @else
                        <p class="text-muted">No Enroll</p>
                        @endif

                    </div>

                </div>
            </div>
        </div>

        <a href="{{ url('student/edit') }}/{{ $student->id }}">
          <div class="card info-box-2 hover-zoom-effect social-widget facebook-widget">
              <div class="icon"><i class="zmdi zmdi-edit"></i></div>
              <div class="content">
                  <div class="text">Edit Profile</div>
              </div>
          </div>
        </a>



        <div class="card">
            <div class="header">
                <h2><strong>Activities</strong></h2>
                <ul class="header-dropdown">
                    <li><a href="javascript:void(0);" title="add new"><i class="zmdi zmdi-plus"></i></a></li>
                    <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                        <ul class="dropdown-menu dropdown-menu-right slideUp">
                            <li><a href="javascript:void(0);">Edit</a></li>
                            <li><a href="javascript:void(0);">Delete</a></li>
                            <li><a href="javascript:void(0);">Report</a></li>
                        </ul>
                    </li>
                    <li class="remove">
                        <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                    </li>
                </ul>
            </div>
            <div class="body">
                <ul class="list-unstyled activity">
                    <li class="a_birthday">
                        <h4>Admin Birthday</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing</p>
                        <small>1 months ago.</small>
                    </li>
                    <li class="a_code">
                        <h4>Code Change</h4>
                        <p>It is a long established fact that a reader will be distracted</p>
                        <small>1 week ago.</small>
                    </li>
                    <li class="a_contact">
                        <h4>Add New Contact</h4>
                        <code>maryamamiri@gmail.com</code>
                        <code>fideltonn@gmail.com</code>
                        <small>1 months ago.</small>
                    </li>

                </ul>
            </div>
        </div>

    </div>
    <div class="col-lg-8 col-md-12">

      <div class="card">
          <div class="body">

            <small class="text-muted">Name: </small>
            <p>{{ $student->name }}</p>
            <hr>


            <small class="text-muted">Father's Name: </small>
            <p>{{ $student->father_name }}</p>
            <hr>

            <small class="text-muted">Mother's Name: </small>
            <p>{{ $student->mother_name }}</p>
            <hr>


              <small class="text-muted">Email address: </small>
              <p>{{ $student->email }}</p>
              <hr>

              <small class="text-muted">Gender: </small>
              <p>{{ $student->gender }}</p>
              <hr>

              <small class="text-muted">Natonality: </small>
              <p>{{ $student->nationality }}</p>
              <hr>

              <small class="text-muted">Blood Group: </small>
              <p>{{ $student->blood_group }}</p>
              <hr>

              <small class="text-muted">Occupation: </small>
              <p>{{ $student->occupation }}</p>
              <hr>

              <small class="text-muted">Date Of Birth: </small>
              <p>{{ $student->dob }}</p>
              <hr>

              <small class="text-muted">Present Address: </small>
              <p>{{ $student->present_address }}</p>
              <hr>

              <small class="text-muted">Permanent Address: </small>
              <p>{{ $student->permanent_address }}</p>
              <hr>

              <small class="text-muted">Contact Number: </small>
              <p>{{ $student->phone }}</p>
              <hr>

              <small class="text-muted">Marketplace Profile Links: </small>
              <p>{{ $student->marketplace }}</p>
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
                              <!-- <th>Passing year</th> -->
                              <th>Subject</th>
                          </tr>
                      </thead>
                      <tbody>
                          <tr>
                              <td><span class="list-name"></span>
                                  <span class="text-muted">SSC</span>
                              </td>
                              <td>{{ $student->ssc_inst }}</td>
                              <td>{{ $student->ssc_board }}</td>
                              <td>{{ $student->ssc_subject }}</td>
                              <td>{{ $student->ssc_passing}}</td>
                          </tr>
                          <tr>
                              <td><span class="list-name"></span>
                                  <span class="text-muted">HSC</span>
                              </td>
                              <td>{{ $student->hsc_inst }}</td>
                              <td>{{ $student->hsc_board }}</td>
                              <td>{{ $student->hsc_subject }}</td>
                              <td>{{ $student->hsc_passing}}</td>

                          </tr>
                          <tr>
                              <td><span class="list-name"></span>
                                  <span class="text-muted">Graduation</span>
                              </td>
                              <td>{{ $student->grad_inst }}</td>
                              <td>{{ $student->grad_board }}</td>
                              <td>{{ $student->grad_subject }}</td>
                              <td>{{ $student->grad_passing}}</td>

                          </tr>
                          <tr>
                              <td><span class="list-name"></span>
                                  <span class="text-muted">Masters</span>
                              </td>
                              <td>{{ $student->masters_inst }}</td>
                              <td>{{ $student->masters_board }}</td>
                              <td>{{ $student->masters_subject }}</td>
                              <td>{{ $student->masters_passing}}</td>

                          </tr>




                      </tbody>
                  </table>
              </div>
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
@stop
