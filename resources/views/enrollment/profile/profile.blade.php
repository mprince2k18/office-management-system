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
                <a href="{{ url('teacher/profile') }}/{{ $teacher->id }}"><img src="{{ asset('uploads/teacher') }}/{{ $teacher->avatar }}" class="rounded-circle shadow " alt="profile-image"></a>
                <h4 class="m-t-10">{{ $teacher->name }}</h4>
                <div class="row">

                    <div class="col-12">
                        <ul class="social-links list-unstyled">
                            <li><a title="facebook" href="javascript:void(0);"><i class="zmdi zmdi-facebook"></i></a></li>
                            <li><a title="twitter" href="javascript:void(0);"><i class="zmdi zmdi-twitter"></i></a></li>
                            <li><a title="instagram" href="javascript:void(0);"><i class="zmdi zmdi-instagram"></i></a></li>
                        </ul>
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

        <a href="{{ url('teacher/edit') }}/{{ $teacher->id }}">
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
                    <li class="a_email">
                        <h4>New Email</h4>
                        <p>Contrary to popular belief, Lorem Ipsum is not simply</p>
                        <small>3 months ago.</small>
                    </li>
                    <li class="a_contact">
                        <h4>Add New Contact</h4>
                        <code>maryamamiri@gmail.com</code>
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
            <p>{{ $teacher->name }}</p>
            <hr>


            <small class="text-muted">Father's Name: </small>
            <p>{{ $teacher->father_name }}</p>
            <hr>

            <small class="text-muted">Mother's Name: </small>
            <p>{{ $teacher->mother_name }}</p>
            <hr>


              <small class="text-muted">Email address: </small>
              <p>{{ $teacher->email }}</p>
              <hr>

              <small class="text-muted">Gender: </small>
              <p>{{ $teacher->gender }}</p>
              <hr>

              <small class="text-muted">Natonality: </small>
              <p>{{ $teacher->nationality }}</p>
              <hr>

              <small class="text-muted">Blood Group: </small>
              <p>{{ $teacher->blood_group }}</p>
              <hr>

              <small class="text-muted">Occupation: </small>
              <p>{{ $teacher->occupation }}</p>
              <hr>

              <small class="text-muted">Date Of Birth: </small>
              <p>{{ $teacher->dob }}</p>
              <hr>

              <small class="text-muted">Present Address: </small>
              <p>{{ $teacher->present_address }}</p>
              <hr>

              <small class="text-muted">Permanent Address: </small>
              <p>{{ $teacher->permanent_address }}</p>
              <hr>

              <small class="text-muted">Contact Number: </small>
              <p>{{ $teacher->phone }}</p>
              <hr>

              <small class="text-muted">Marketplace Profile Links: </small>
              <p>{{ $teacher->marketplace }}</p>

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
                              <td>{{ $teacher->ssc_inst }}</td>
                              <td>{{ $teacher->ssc_board }}</td>
                              <td>{{ $teacher->ssc_subject }}</td>
                              <td>{{ $teacher->ssc_passing}}</td>
                          </tr>
                          <tr>
                              <td><span class="list-name"></span>
                                  <span class="text-muted">HSC</span>
                              </td>
                              <td>{{ $teacher->hsc_inst }}</td>
                              <td>{{ $teacher->hsc_board }}</td>
                              <td>{{ $teacher->hsc_subject }}</td>
                              <td>{{ $teacher->hsc_passing}}</td>

                          </tr>
                          <tr>
                              <td><span class="list-name"></span>
                                  <span class="text-muted">Graduation</span>
                              </td>
                              <td>{{ $teacher->grad_inst }}</td>
                              <td>{{ $teacher->grad_board }}</td>
                              <td>{{ $teacher->grad_subject }}</td>
                              <td>{{ $teacher->grad_passing}}</td>

                          </tr>
                          <tr>
                              <td><span class="list-name"></span>
                                  <span class="text-muted">Masters</span>
                              </td>
                              <td>{{ $teacher->masters_inst }}</td>
                              <td>{{ $teacher->masters_board }}</td>
                              <td>{{ $teacher->masters_subject }}</td>
                              <td>{{ $teacher->masters_passing}}</td>

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
