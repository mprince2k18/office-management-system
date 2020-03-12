@extends('layout.master')
@section('title', 'Student Installment Profile')
@section('parentPageTitle', 'Enrollment Area')
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
                <a href="{{ url('enroll/profile') }}/{{ $edit_installment->id }}">
                  <img src="{{ asset('uploads/student') }}/{{ $enroll->relationBetweenStudent->avatar }}" class="rounded-circle shadow " alt="profile-image">
                </a>
                <h4 class="m-t-10">{{ $enroll->relationBetweenStudent->name }}</h4>
                <div class="row">
                    <div class="col-12">

                        <p class="text-muted">{{ $edit_installment->relationBetweenEnroll->relationBetweenCourse->course_name }}</p>
                    </div>
                    <div class="col-4">
                        <small>Batch</small>
                        <h6>{{ $enroll->relationBetweenBatch->batch_no }}</h6>
                    </div>
                    <div class="col-4">
                        <small>Roll No:</small>
                        <h6>{{ $enroll->student_roll }}</h6>
                    </div>
                    <div class="col-4">
                        <small>Course Enrolled</small>
                        <h6>{{ $enroll->created_at->format('d-M-Y') }}</h6>
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

      <form action="{{ url('enroll/update') }}/{{ $edit_installment->id }}" id="updateForm" method="post" enctype="multipart/form-data">

@csrf

      <div class="card">
          <div class="body">




            <div class="row clearfix">

              <div class="col-md-4">


                <div class="form-group">
                  @if($edit_installment->firstInstallment != NULL)
                    <div class="radio inlineblock m-r-20">
                        <input type="radio" name="firstInstallmentCheck" id="male" class="with-gap" value="paid" checked="">
                        <label for="firstInstallmentCheck">Paid</label>
                    </div>
                    @else
                    <div class="radio inlineblock">
                        <input type="radio" name="firstInstallmentCheck" id="firstInstallmentCheck2" class="with-gap" value="due">
                        <label for="firstInstallmentCheck2">Due</label>
                    </div>
                    @endif

                </div>


              </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <input type="text" value="{{ $edit_installment->firstInstallment }}" name="firstInstallment" class="form-control" placeholder="First Installment Amount">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <input type="date" value="{{ $edit_installment->firstInstallmentDate }}" name="firstInstallmentDate" class="form-control">
                    </div>
                </div>
            </div>



            <div class="row clearfix">

              <div class="col-md-4">

                <div class="form-group">
                    <div class="radio inlineblock m-r-20">
                        <input type="radio" name="secondInstallmentCheck" id="secondInstallmentCheck" class="with-gap" value="paid" @if( $edit_installment->secondInstallmentCheck === 'paid')  checked="" @endif>
                        <label for="secondInstallmentCheck">Paid</label>
                    </div>
                    <div class="radio inlineblock">
                        <input type="radio" name="secondInstallmentCheck" id="secondInstallmentCheck2" class="with-gap" value="due" @if( $edit_installment->secondInstallmentCheck === 'due')  checked="" @endif>
                        <label for="secondInstallmentCheck2">Due</label>
                    </div>
                </div>

              </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <input type="text" value="{{ $edit_installment->secondInstallment }}" name="secondInstallment" class="form-control" placeholder="Second Installment Amount">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <input type="date" value="{{ $edit_installment->secondInstallmentDate }}" name="secondInstallmentDate" class="form-control">
                    </div>
                </div>
            </div>



            <div class="row clearfix">

              <div class="col-md-4">

                <div class="form-group">
                    <div class="radio inlineblock m-r-20">
                        <input type="radio" name="thirdInstallmentCheck" id="thirdInstallmentCheck" class="with-gap" value="paid" @if( $edit_installment->thirdInstallmentCheck === 'paid')  checked="" @endif>
                        <label for="thirdInstallmentCheck">Paid</label>
                    </div>
                    <div class="radio inlineblock">
                        <input type="radio" name="thirdInstallmentCheck" id="thirdInstallmentCheck2" class="with-gap" value="due" @if( $edit_installment->thirdInstallmentCheck === 'due')  checked="" @endif>
                        <label for="thirdInstallmentCheck2">Due</label>
                    </div>
                </div>

              </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <input type="text" value="{{ $edit_installment->thirdInstallment }}" name="thirdInstallment" class="form-control" placeholder="Third Installment Amount">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <input type="date" value="{{ $edit_installment->thirdInstallmentDate }}" name="thirdInstallmentDate" class="form-control">
                    </div>
                </div>
            </div>



            <div class="row clearfix">

              <div class="col-md-4">

                <div class="form-group">
                    <div class="radio inlineblock m-r-20">
                        <input type="radio" name="fourInstallmentCheck" id="fourInstallmentCheck" class="with-gap" value="paid" @if( $edit_installment->fourInstallmentCheck === 'paid')  checked="" @endif>
                        <label for="fourInstallmentCheck">Paid</label>
                    </div>
                    <div class="radio inlineblock">
                        <input type="radio" name="fourInstallmentCheck" id="fourInstallmentCheck2" class="with-gap" value="due" @if( $edit_installment->fourInstallmentCheck === 'due')  checked="" @endif>
                        <label for="fourInstallmentCheck2">Due</label>
                    </div>
                </div>

              </div>


                <div class="col-md-4">
                    <div class="form-group">
                        <input type="text" value="{{ $edit_installment->fourInstallment }}" name="fourInstallment" class="form-control" placeholder="Four Installment Amount">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <input type="date" value="{{ $edit_installment->fourInstallmentDate }}" name="fourInstallmentDate" class="form-control">
                    </div>
                </div>
            </div>



            <div class="row clearfix">

              <div class="col-md-4">

                <div class="form-group">
                    <div class="radio inlineblock m-r-20">
                        <input type="radio" name="fiveInstallmentCheck" id="fiveInstallmentCheck" class="with-gap" value="paid" @if( $edit_installment->fiveInstallmentCheck === 'paid')  checked="" @endif>
                        <label for="fiveInstallmentCheck">Paid</label>
                    </div>
                    <div class="radio inlineblock">
                        <input type="radio" name="fiveInstallmentCheck" id="fiveInstallmentCheck2" class="with-gap" value="due"  @if( $edit_installment->fiveInstallmentCheck === 'due')  checked="" @endif>
                        <label for="fiveInstallmentCheck2">Due</label>
                    </div>
                </div>

              </div>


                <div class="col-md-4">
                    <div class="form-group">
                        <input type="text" value="{{ $edit_installment->fiveInstallment }}" name="fiveInstallment" class="form-control" placeholder="Five Installment Amount">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <input type="date" value="{{ $edit_installment->fiveInstallmentDate }}" name="fiveInstallmentDate" class="form-control">
                    </div>
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

@stop
