@extends('layout.master')
@section('title', 'Activity Log')
@section('parentPageTitle', 'logs')
@section('page-style')
<link rel="stylesheet" href="{{asset('assets/plugins/summernote/dist/summernote.css')}}"/>
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
    <div class="col-sm-12">
        <ul class="cbp_tmtimeline">

          @forelse ($afterSearch as $result)

              @if(!isset($result->subject_id))
              <li>
                  <div class="cbp_tmicon bg-info"><i class="zmdi zmdi-label"></i></div>
                  <div class="cbp_tmlabel">
                      <div class="cbp_tmtime">
                          <span>{{ $result->created_at }}</span>
                          <!-- <span>Today</span> -->
                      </div>
                      <h5>
                        <span> A student just been {{ $result->description }}</span>
                        <a href="javascript:void(0);">
                          @foreach ($result->properties as  $value)
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

        {{ $afterSearch->links() }}

    </div>
</div>
@stop
@section('page-script')
<script src="{{asset('assets/plugins/summernote/dist/summernote.js')}}"></script>

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
