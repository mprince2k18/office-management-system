@extends('layout.master')
@section('title', 'Activity Log')
@section('parentPageTitle', 'logs')
@section('page-style')

<link rel="stylesheet" href="{{ asset('assets/plugins/jvectormap/jquery-jvectormap-2.0.3.min.css') }}"/>
<link rel="stylesheet" href="{{ asset('assets/plugins/charts-c3/plugin.css') }}"/>
<link rel="stylesheet" href="{{ asset('assets/plugins/morrisjs/morris.min.css') }}" />

@stop
@section('content')

<div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">

                        <p>Search</p>
                        <form id="searchForm" action="{{ route('activity.search') }}" method="post">
                        <div class="row clearfix">

                          @csrf
                          <div class="col-md-4">
                              <div class="mb-3">
                                  <label>From</label>
                                  <div class="input-group masked-input mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="zmdi zmdi-calendar-note"></i></span>
                                    </div>
                                    <input id="from" name="from" type="date" class="form-control datetime" placeholder="Ex: 30/07/2016 23:59">
                                </div>
                              </div>
                          </div>
                          <div class="col-md-4">
                              <div class="mb-3">
                                  <label>To</label>
                                  <div class="input-group masked-input mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="zmdi zmdi-calendar-note"></i></span>
                                    </div>
                                    <input id="to" name="to" type="date" class="form-control datetime" placeholder="Ex: 30/07/2016 23:59">
                                </div>
                              </div>
                          </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label>Name</label>
                                    <div class="input-group colorpicker colorpicker-element">
                                        <input id="userName" name="userName" type="text" class="form-control" placeholder="Ex: Name">
                                    </div>
                                </div>
                            </div>





                            <div class="col-md-12">
                                <div class="mb-3">
                                    <div class="input-group colorpicker colorpicker-element">
                                        <button class="form-control btn btn-info" style="background:#1cbfd0 !important;" type="submit">Find <i class="zmdi zmdi-arrow-right"></i></button>
                                    </div>
                                </div>
                            </div>

                        </div>
                      </form>
                </div>
            </div>
        </div>





        <div class="row clearfix">
                <div class="col-lg-3 col-md-6 col-sm-6">


                  <a href="#">
                    <div class="card state_w1">
                        <div class="body d-flex justify-content-between">
                            <div>
                                <h5>{{ $students_count }}</h5>
                                <span><i class="zmdi zmdi-eye col-amber"></i>Students</span>
                            </div>
                            <div class="sparkline" data-type="bar" data-width="97%" data-height="55px" data-bar-Width="3" data-bar-Spacing="5" data-bar-Color="#FFC107">{{ $student_last6daysAgo }},{{ $student_last5daysAgo }},{{ $student_last4daysAgo }},{{ $student_last3daysAgo }},{{ $student_last2daysAgo }},{{ $student_yesterday }},{{ $student_today }}</div>
                        </div>
                    </div>
                  </a>




                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card state_w1">
                        <div class="body d-flex justify-content-between">
                            <div>
                                <h5>{{ $teachers_count }}</h5>
                                <span><i class="zmdi zmdi-thumb-up col-blue"></i>Teachers</span>
                            </div>
                            <div class="sparkline" data-type="bar" data-width="97%" data-height="55px" data-bar-Width="3" data-bar-Spacing="5" data-bar-Color="#46b6fe">{{ $teacher_last6daysAgo }},{{ $teacher_last5daysAgo }},{{ $teacher_last4daysAgo }},{{ $teacher_last3daysAgo }},{{ $teacher_last2daysAgo }},{{ $teacher_yesterday }},{{ $teacher_today }}</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card state_w1">
                        <div class="body d-flex justify-content-between">
                            <div>
                                <h5>50</h5>
                                <span><i class="zmdi zmdi-comment-text col-red"></i> Visitors</span>
                            </div>
                            <div class="sparkline" data-type="bar" data-width="97%" data-height="55px" data-bar-Width="3" data-bar-Spacing="5" data-bar-Color="#ee2558">4,4,3,9,2,1,5,7</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card state_w1">
                        <div class="body d-flex justify-content-between">
                            <div>
                                <h5>50</h5>
                                <span><i class="zmdi zmdi-comment-text col-green"></i> Enrolled</span>
                            </div>
                            <div class="sparkline" data-type="bar" data-width="97%" data-height="55px" data-bar-Width="3" data-bar-Spacing="5" data-bar-Color="#ee2558">4,4,3,9,2,1,5,7</div>
                        </div>
                    </div>
                </div>
            </div>







<div class="row clearfix">
    <div class="col-sm-12">
        <ul class="cbp_tmtimeline">

          @forelse ($activities as $activity)

          @if (!isset($activity->subject_id))

          <li>
              <div class="cbp_tmicon bg-info"><i class="zmdi zmdi-label"></i></div>
              <div class="cbp_tmlabel">
                  <div class="cbp_tmtime">
                      <span>{{ $activity->created_at }}</span>
                      <!-- <span>Today</span> -->
                  </div>
                  <h5>
                    <span>{{ $activity->description }}</span>
                    <a href="javascript:void(0);">
                      @foreach ($activity->properties as  $value)
                          {{ $value }}
                      @endforeach
                    </a>
                  </h5>
              </div>
          </li>

          @endif

          @empty

          @endforelse

            <!-- <li>
                <div class="cbp_tmicon bg-green"> <i class="zmdi zmdi-case"></i></div>
                <div class="cbp_tmlabel">
                    <div class="cbp_tmtime">
                        <span>2019-11-04 03:45AM</span> <span>Today</span>
                    </div>
                    <h5><a href="javascript:void(0);">Job Meeting</a></h5>
                    <p>You have a meeting at <strong>Laborator Office</strong> Today.</p>
                </div>
            </li>
            <li>
                <div class="cbp_tmicon bg-blush"><i class="zmdi zmdi-pin"></i></div>
                <div class="cbp_tmlabel">
                    <div class="cbp_tmtime">
                        <span>2019-11-04 03:45AM</span> <span>Today</span>
                    </div>

                    <h5><a href="javascript:void(0);">Arlind Nushi</a> <span>checked in at</span> <a href="javascript:void(0);">New York</a></h5>
                    <blockquote>
                        <div class="blockquote">
                            "It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout."
                            <br><br>
                            <small>- Isabella</small>
                        </div>
                    </blockquote>
                </div>
            </li>
            <li>
                <div class="cbp_tmicon bg-orange"><i class="zmdi zmdi-camera"></i></div>
                <div class="cbp_tmlabel">
                    <div class="cbp_tmtime">
                        <span>2019-11-04 03:45AM</span> <span>Two weeks ago</span>
                    </div>

                    <h5><a href="javascript:void(0);">Eroll Maxhuni</a> <span>uploaded 4 new photos to album</span> <a href="javascript:void(0);">Summer Trip</a></h5>
                    <p>Pianoforte principles our unaffected not for astonished travelling are particular.</p>

                    <div>
                        <img src="{{asset('assets/images/image-gallery/1.jpg')}}" alt="" class="img-fluid img-thumbnail w200"></a>
                        <img src="{{asset('assets/images/image-gallery/2.jpg')}}" alt="" class="img-fluid img-thumbnail w200"></a>
                        <img src="{{asset('assets/images/image-gallery/3.jpg')}}" alt="" class="img-fluid img-thumbnail w200"> </a>
                        <img src="{{asset('assets/images/image-gallery/4.jpg')}}" alt="" class="img-fluid img-thumbnail w200"> </a>
                    </div>
                </div>
            </li>
            <li>
                <div class="cbp_tmicon bg-green"> <i class="zmdi zmdi-case"></i></div>
                <div class="cbp_tmlabel">
                    <div class="cbp_tmtime">
                        <span>2019-11-04 03:45AM</span> <span>Two weeks ago</span>
                    </div>
                    <h5><a href="javascript:void(0);">Job Meeting</a></h5>
                    <p>You have a meeting at <strong>Laborator Office</strong> Today.</p>
                </div>
            </li>
            <li>
                <div class="cbp_tmicon bg-blush"><i class="zmdi zmdi-pin"></i></div>
                <div class="cbp_tmlabel">
                    <div class="cbp_tmtime">
                        <span>2019-11-04 03:45AM</span> <span>Month ago</span>
                    </div>
                    <h5><a href="javascript:void(0);">Arlind Nushi</a> <span>checked in at</span> <a href="javascript:void(0);">Laborator</a></h5>
                    <blockquote>Great place, feeling like in home.</blockquote>
                </div>
            </li> -->
        </ul>

        {{ $activities->links() }}

    </div>
</div>
@stop
@section('page-script')

<script src="{{asset('assets/bundles/countTo.bundle.js')}}"></script>
<script src="{{asset('assets/bundles/knob.bundle.js')}}"></script>
<script src="{{asset('assets/bundles/sparkline.bundle.js')}}"></script>
<script src="{{asset('assets/js/pages/widgets/infobox/infobox-1.js')}}"></script>
<script src="{{asset('assets/js/pages/charts/jquery-knob.js')}}"></script>
<script src="{{asset('assets/js/pages/charts/sparkline.js')}}"></script>

<script>
  let searchForm = document.getElementById('searchForm');
  searchForm.addEventListener('submit', e => {
    e.preventDefault();
    let from = $('#from').val();
    let to = $('#to').val();
    let userName = $('#userName').val();
    if (from != '' || to!= '') {
      if (from == '') {
          document.getElementById("from").style.border = "1px solid red";
      }
      else{
        $('#from').css('border','none');
        if (to == '') {
            document.getElementById("to").style.border = "1px solid red";
        }
        else{
          $('#to').css('border','none');
          searchForm.submit();
        }
      }
    }
    else{
      $('#from').css('border','none');
      $('#to').css('border','none');
      if (
      userName == '' &&
      orderId == '' &&
      phone == '') {
        alert("All input can not be empty");
      }
      else {
        searchForm.submit();
      }
    }
  });
  </script>

@stop
