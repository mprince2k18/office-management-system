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
                <a href="{{ url('enroll/profile') }}/{{ $enroll->id }}"><img
                        src="{{ asset('uploads/student') }}/{{ $enroll->relationBetweenStudent->avatar }}"
                        class="rounded-circle shadow " alt="profile-image"></a>
                <h4 class="m-t-10">{{ $enroll->relationBetweenStudent->name }}</h4>
                <div class="row">

                    <div class="col-12">
                        <ul class="social-links list-unstyled">
                            <li><a title="facebook" href="javascript:void(0);"><i class="zmdi zmdi-facebook"></i></a>
                            </li>
                            <li><a title="twitter" href="javascript:void(0);"><i class="zmdi zmdi-twitter"></i></a></li>
                            <li><a title="instagram" href="javascript:void(0);"><i class="zmdi zmdi-instagram"></i></a>
                            </li>
                        </ul>
                        <p class="text-muted">
                            {{ $installments->relationBetweenEnroll->relationBetweenCourse->course_name }}</p>
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

        <a href="{{ url('enroll/edit') }}/{{ $enroll->id }}">
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
                    <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown"
                            role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i>
                        </a>
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

            </div>
        </div>

    </div>
    <div class="col-lg-8 col-md-12">


        <div class="card">
            <div class="body">

                <div class="d-flex bd-highlight text-center mb-3">
                    <div class="bg-red flex-fill bd-highlight">
                        <h3 class="mt-3 mb-0">{{ $installments->relationBetweenEnroll->course_fee }}</h3>
                        <p>Fee</p>
                    </div>
                    @php
                    $course_fee = $installments->relationBetweenEnroll->course_fee;



                    $discount = $installments->course_discount;
                    $secondPayCheck = $installments->secondInstallmentCheck;
                    $thirdPayCheck = $installments->thirdInstallmentCheck;
                    $fourPayCheck = $installments->fourInstallmentCheck;
                    $fivePayCheck = $installments->fiveInstallmentCheck;

                    $secondPayCheck === 'paid';
                    $thirdPayCheck === 'paid';
                    $fourPayCheck === 'paid';
                    $fivePayCheck === 'paid';

                    $firstPay = $installments->firstInstallment;
                    $secondPay = $installments->secondInstallment;
                    $thirdPay = $installments->thirdInstallment;
                    $fourPay = $installments->fourInstallment;
                    $fivePay = $installments->fiveInstallment;

                    $paid = $installments->firstInstallment;

                      $due  = 0;


                    @endphp


                    @if ($installments->secondInstallmentCheck === 'paid' )

                    @php $paid += $installments->secondInstallment;   $due  = $course_fee - $paid - $discount; @endphp

                    @endif

                    @if ($installments->thirdInstallmentCheck === 'paid' )

                    @php $paid += $installments->thirdInstallment;   $due  = $course_fee - $paid - $discount; @endphp

                    @endif

                    @if ($installments->fourInstallmentCheck === 'paid' )

                    @php $paid += $installments->fourInstallment;   $due  = $course_fee - $paid - $discount; @endphp

                    @endif

                    @if ($installments->fiveInstallmentCheck === 'paid' )

                    @php $paid += $installments->fiveInstallment; $due  = $course_fee - $paid - $discount; @endphp

                    @endif

                    <div class="bg-blue flex-fill bd-highlight">
                        <h3 class="mt-3 mb-0">

                            {{ $paid }}


                            <p>Paid</p>
                    </div>
                    <div class="bg-green flex-fill bd-highlight">

                        <h3 class="mt-3 mb-0">
                            {{ $due }}
                        </h3>
                        <p>Due </p>
                    </div>
                    <div class="bg-info flex-fill bd-highlight">

                        <h3 class="mt-3 mb-0">
                            {{ $installments->course_discount }}
                        </h3>
                        <p>Discount </p>
                    </div>
                    <div class="bg-orange flex-fill bd-highlight">
                        <h3 class="mt-3 mb-0">

                            @php
                            $check = 'paid';
                            @endphp

                            @switch($check)


                            @case($installments->secondInstallmentCheck != $check)
                            {{ $installments->secondInstallmentDate }}
                            @break

                            @case($installments->thirdInstallmentCheck != $check)
                            {{ $installments->thirdInstallmentDate }}
                            @break

                            @case($installments->fourInstallmentCheck != $check)
                            {{ $installments->fourInstallmentDate }}
                            @break

                            @case($installments->fiveInstallmentCheck != $check)
                            {{ $installments->fiveInstallmentDate }}
                            @break

                            @default

                            Paid

                            @endswitch

                        </h3>
                        <p>Next Payment</p>
                    </div>
                </div>

            </div>
        </div>

        <div class="card">

            <div class="body {{ $installments->firstInstallmentCheck = 'paid' ? "bg-success" : " "}} ">

                <h6>1st Installment Payment: {{ $installments->firstInstallmentDate }}</h6>
                <p>{{ $installments->firstInstallment }}</p>
                <hr>

            </div>

        </div>

        <div class="card">



            <div class="body {{ $installments->secondInstallmentCheck === 'paid' ? "bg-success" : " "}} ">

                <h6>2nd Installment Payment: {{ $installments->secondInstallmentDate }}</h6>
                <p>{{ $installments->secondInstallment }}</p>
                <hr>

            </div>

        </div>

        <div class="card">





          <div class="body {{ $installments->thirdInstallmentCheck === 'paid' ? "bg-success" : " "}}">

              <h6>3rd Installment Payment: {{ $installments->thirdInstallmentDate }}</h6>
              <p>{{ $installments->thirdInstallment }}</p>
              <hr>

          </div>


        </div>

        <div class="card">


            <div class="body {{ $installments->fourInstallmentCheck === 'paid' ? "bg-success" : " "}} ">

                <h6>4th Installment Payment: {{ $installments->fourInstallmentDate }}</h6>
                <p>{{ $installments->fourInstallment }}</p>
                <hr>

            </div>

        </div>

        <div class="card">



            <div class="body {{ $installments->fiveInstallmentCheck === 'paid' ? "bg-success" : " "}} ">

                <h6>5th Installment Payment: {{ $installments->fiveInstallmentDate }}</h6>
                <p>{{ $installments->fiveInstallment }}</p>
                <hr>

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
