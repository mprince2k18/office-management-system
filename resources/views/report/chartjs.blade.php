@extends('layout.master')
@section('title', 'Report')
@section('parentPageTitle', 'Report Area')
@section('page-style')
<link rel="stylesheet" href="{{asset('assets/plugins/morrisjs/morris.min.css')}}"/>
@stop
@section('content')
<div class="row clearfix">
    <div class="col-lg-6 col-md-12">
        <div class="card">
            <div class="header">
                <h2><strong>STUDENT ADMISSION</strong> REPORT</h2>
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



            <!-- <div class="body">
                <canvas id="line_chart" class="chartjs_graph"></canvas>
            </div> -->






            <div class="body">

                <!-- Nav tabs -->
                <ul class="nav nav-tabs p-0 mb-3">
                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#studentYear">YEAR</a></li>
                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#studentMonth">MONTH</a></li>
                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#studentWeek">WEEK</a></li>
                    <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#studentDay">DAY</a></li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content">



                    <div role="tabpanel" class="tab-pane in" id="studentYear">
                        <canvas id="student_line_chart_year" class="chartjs_graph"></canvas>
                    </div>




                    <div role="tabpanel" class="tab-pane" id="studentMonth">
                        <canvas id="student_line_chart_month" class="chartjs_graph"></canvas>
                    </div>



                    <div role="tabpanel" class="tab-pane" id="studentWeek">
                        <canvas id="student_line_chart_week" class="chartjs_graph"></canvas>
                    </div>



                    <div role="tabpanel" class="tab-pane active" id="studentDay">
                        <canvas id="student_line_chart_day" class="chartjs_graph"></canvas>
                    </div>




                </div>
            </div>




        </div>
    </div>


    <div class="col-lg-6 col-md-12">
        <div class="card">
            <div class="header">
                <h2><strong>VISITOR</strong> REPORT</h2>
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

                <!-- Nav tabs -->
                <ul class="nav nav-tabs p-0 mb-3">
                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#visitorYear">YEAR</a></li>
                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#visitorMonth">MONTH</a></li>
                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#visitorWeek">WEEK</a></li>
                    <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#visitorDay">DAY</a></li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content">



                    <div role="tabpanel" class="tab-pane in" id="visitorYear">
                        <canvas id="visitor_line_chart_year" class="chartjs_graph"></canvas>
                    </div>




                    <div role="tabpanel" class="tab-pane" id="visitorMonth">
                        <canvas id="visitor_line_chart_month" class="chartjs_graph"></canvas>
                    </div>



                    <div role="tabpanel" class="tab-pane" id="visitorWeek">
                        <canvas id="visitor_line_chart_week" class="chartjs_graph"></canvas>
                    </div>



                    <div role="tabpanel" class="tab-pane active" id="visitorDay">
                        <canvas id="visitor_line_chart_day" class="chartjs_graph"></canvas>
                    </div>




                </div>
            </div>




        </div>
    </div>

    <div class="col-lg-6 col-md-12">
       <div class="card">
           <div class="header">
               <h2><strong>Enroll</strong> Report</h2>
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

             <!-- Nav tabs -->
             <ul class="nav nav-tabs p-0 mb-3">
                 <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#enrollYear">YEAR</a></li>
                 <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#enrollMonth">MONTH</a></li>
                 <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#enrollWeek">WEEK</a></li>
                 <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#enrollDay">DAY</a></li>
             </ul>
             <!-- Tab panes -->
             <div class="tab-content">



                 <div role="tabpanel" class="tab-pane in" id="enrollYear">
                     <canvas id="enroll_gradient_area_year" class="chartjs_graph"></canvas>

                 </div>


                 <div role="tabpanel" class="tab-pane" id="enrollMonth">
                     <canvas id="enroll_gradient_area_month" class="chartjs_graph"></canvas>

                 </div>


                 <div role="tabpanel" class="tab-pane" id="enrollWeek">
                     <canvas id="enroll_gradient_area_week" class="chartjs_graph"></canvas>

                 </div>


                 <div role="tabpanel" class="tab-pane active" id="enrollDay">
                     <canvas id="enroll_gradient_area_day" class="chartjs_graph"></canvas>

                 </div>

             </div>

           </div>
       </div>
   </div>

   <div class="col-lg-6 col-md-12">
      <div class="card">
          <div class="header">
              <h2><strong>Payment</strong> Report</h2>
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

            <!-- Nav tabs -->
            <ul class="nav nav-tabs p-0 mb-3">
                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#paymentYear">YEAR</a></li>
                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#paymentMonth">MONTH</a></li>
                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#paymentWeek">WEEK</a></li>
                <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#paymentDay">DAY</a></li>
            </ul>
            <!-- Tab panes -->
            <div class="tab-content">

                <div role="tabpanel" class="tab-pane in" id="paymentYear">
                    <canvas id="payment_gradient_area_year" class="chartjs_graph"></canvas>

                </div>

                <div role="tabpanel" class="tab-pane" id="paymentMonth">
                    <canvas id="payment_gradient_area_month" class="chartjs_graph"></canvas>

                </div>

                <div role="tabpanel" class="tab-pane" id="paymentWeek">
                    <canvas id="payment_gradient_area_week" class="chartjs_graph"></canvas>

                </div>

                <div role="tabpanel" class="tab-pane active" id="paymentDay">
                    <canvas id="payment_gradient_area_day" class="chartjs_graph"></canvas>

                </div>

            </div>

          </div>
      </div>
  </div>





  <div class="col-lg-6 col-md-12">
     <div class="card">
         <div class="header">
             <h2><strong>Expense</strong> Report</h2>
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

           <!-- Nav tabs -->
           <ul class="nav nav-tabs p-0 mb-3">
               <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#expenseYear">YEAR</a></li>
               <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#expenseMonth">MONTH</a></li>
               <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#expenseWeek">WEEK</a></li>
               <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#expenseDay">DAY</a></li>
           </ul>
           <!-- Tab panes -->
           <div class="tab-content">



               <div role="tabpanel" class="tab-pane in" id="expenseYear">
                   <canvas id="expense_gradient_area_year" class="chartjs_graph"></canvas>

               </div>


               <div role="tabpanel" class="tab-pane" id="expenseMonth">
                   <canvas id="expense_gradient_area_month" class="chartjs_graph"></canvas>

               </div>


               <div role="tabpanel" class="tab-pane" id="expenseWeek">
                   <canvas id="expense_gradient_area_week" class="chartjs_graph"></canvas>

               </div>


               <div role="tabpanel" class="tab-pane active" id="expenseDay">
                   <canvas id="expense_gradient_area_day" class="chartjs_graph"></canvas>

               </div>

           </div>

         </div>
     </div>
 </div>

    <!-- <div class="col-lg-6 col-md-12">
        <div class="card">
            <div class="header">
                <h2><strong>Filled Line</strong> Chart</h2>
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
                <canvas id="filled_line_chart" class="chartjs_graph"></canvas>
            </div>
        </div>
    </div> -->
   <!-- <div class="col-lg-6 col-md-12">
        <div class="card">
            <div class="header">
                <h2><strong>Bar</strong> Chart</h2>
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
                <canvas id="bar_chart" class="chartjs_graph"></canvas>
            </div>
        </div>
    </div> -->
     <!-- <div class="col-lg-6 col-md-12">
        <div class="card">
            <div class="header">
                <h2><strong>Area</strong> Chart</h2>
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
                <canvas id="gradient_area" class="chartjs_graph"></canvas>
            </div>
        </div>
    </div> -->
  <!--   <div class="col-lg-6 col-md-12">
        <div class="card">
            <div class="header">
                <h2><strong>Radar</strong> Chart</h2>
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
                <canvas id="radar_chart" class="chartjs_graph"></canvas>
            </div>
        </div>
    </div>
    <div class="col-lg-6 col-md-12">
        <div class="card">
            <div class="header">
                <h2><strong>Pie</strong> Chart</h2>
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
                <canvas id="pie_chart" class="chartjs_graph"></canvas>
            </div>
        </div>
    </div>
    <div class="col-lg-6 col-md-12">
        <div class="card">
            <div class="header">
                <h2><strong>Polar</strong> Area Chart</h2>
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
                <canvas id="chart-area" class="chartjs_graph"></canvas>
            </div>
        </div>
    </div> -->
</div>
@stop
@section('page-script')
<script src="{{asset('assets/plugins/chartjs/Chart.bundle.js')}}"></script>
<script src="{{asset('assets/plugins/chartjs/polar_area_chart.js')}}"></script>
<script src="{{asset('assets/js/pages/charts/chartjs.js')}}"></script>
<script src="{{asset('assets/js/pages/charts/polar_area_chart.js')}}"></script>

<script>

$(function () {
    // var fc = document.getElementById("filled_line_chart").getContext("2d");
    // new Chart(fc, getChartJs(fc, 'filled_line'));
    //
    // var bc = document.getElementById("bar_chart").getContext("2d");
    // new Chart(bc, getChartJs(bc, 'bar'));
    //
    // var ac = document.getElementById('gradient_area').getContext('2d');
    // new Chart(ac, getChartJs(ac, 'area'));
    //
    // var rc = document.getElementById("radar_chart").getContext("2d");
    // new Chart(rc, getChartJs(rc, 'radar'));
    //
    // var pc = document.getElementById("pie_chart").getContext("2d");
    // new Chart(pc, getChartJs(pc, 'pie'));



    // Student Admission Chart
    var lc = document.getElementById("student_line_chart_year").getContext("2d");
    new Chart(lc, getChartJs(lc, 'a'));

    var lc = document.getElementById("student_line_chart_month").getContext("2d");
    new Chart(lc, getChartJs(lc, 'b'));

    var lc = document.getElementById("student_line_chart_week").getContext("2d");
    new Chart(lc, getChartJs(lc, 'c'));

    var lc = document.getElementById("student_line_chart_day").getContext("2d");
    new Chart(lc, getChartJs(lc, 'd'));

    // Visitor Admission Chart
    var lc = document.getElementById("visitor_line_chart_year").getContext("2d");
    new Chart(lc, getChartJs(lc, 'e'));

    var lc = document.getElementById("visitor_line_chart_month").getContext("2d");
    new Chart(lc, getChartJs(lc, 'f'));

    var lc = document.getElementById("visitor_line_chart_week").getContext("2d");
    new Chart(lc, getChartJs(lc, 'g'));

    var lc = document.getElementById("visitor_line_chart_day").getContext("2d");
    new Chart(lc, getChartJs(lc, 'h'));

    // Enroll Admission Chart
    var ac = document.getElementById('enroll_gradient_area_year').getContext('2d');
    new Chart(ac, getChartJs(ac, 'i'));

    var ac = document.getElementById('enroll_gradient_area_month').getContext('2d');
    new Chart(ac, getChartJs(ac, 'j'));

    var ac = document.getElementById('enroll_gradient_area_week').getContext('2d');
    new Chart(ac, getChartJs(ac, 'k'));

    var ac = document.getElementById('enroll_gradient_area_day').getContext('2d');
    new Chart(ac, getChartJs(ac, 'l'));

    // Payment  Chart
    var ac = document.getElementById('payment_gradient_area_year').getContext('2d');
    new Chart(ac, getChartJs(ac, 'm'));

    var ac = document.getElementById('payment_gradient_area_month').getContext('2d');
    new Chart(ac, getChartJs(ac, 'n'));

    var ac = document.getElementById('payment_gradient_area_week').getContext('2d');
    new Chart(ac, getChartJs(ac, 'o'));

    var ac = document.getElementById('payment_gradient_area_day').getContext('2d');
    new Chart(ac, getChartJs(ac, 'p'));

    // eEpense  Chart
    var ac = document.getElementById('expense_gradient_area_year').getContext('2d');
    new Chart(ac, getChartJs(ac, 'q'));

    var ac = document.getElementById('expense_gradient_area_month').getContext('2d');
    new Chart(ac, getChartJs(ac, 'r'));

    var ac = document.getElementById('expense_gradient_area_week').getContext('2d');
    new Chart(ac, getChartJs(ac, 's'));

    var ac = document.getElementById('expense_gradient_area_day').getContext('2d');
    new Chart(ac, getChartJs(ac, 't'));

});




function getChartJs(obj, type) {
    var config = null;
    if (type === 'a') {

        var gradientData1 = obj.createLinearGradient(500, 0, 100, 0);

        gradientData1.addColorStop(0, "#80b6f4");
        gradientData1.addColorStop(0.2, "#94d973");
        gradientData1.addColorStop(0.5, "#fad874");
        gradientData1.addColorStop(1, "#f49080");



        config = {
            type: 'line',
            data: {
                labels: [{{ $year }}],
                datasets: [{
                    label: "STUDENT REPORT YEAR",
                    borderColor: gradientData1,
                    pointBorderColor: gradientData1,
                    pointBackgroundColor: gradientData1,
                    pointHoverBackgroundColor: gradientData1,
                    pointHoverBorderColor: gradientData1,
                    pointBorderWidth: 10,
                    pointHoverRadius: 10,
                    pointHoverBorderWidth: 1,
                    pointRadius: 3,
                    fill: false,
                    borderWidth: 4,
                    data: [ {{ $students_year }} ]
                }]
            },
            options: {
                legend: {
                    position: "bottom"
                },
                scales: {
                    yAxes: [{
                        ticks: {
                            fontColor: "rgba(0,0,0,0.5)",
                            fontStyle: "bold",
                            beginAtZero: true,
                            maxTicksLimit: 5,
                            padding: 20
                        },
                        gridLines: {
                            drawTicks: false,
                            display: false
                        }

                    }],
                    xAxes: [{
                        gridLines: {
                            zeroLineColor: "transparent"
                        },
                        ticks: {
                            padding: 20,
                            fontColor: "rgba(0,0,0,0.5)",
                            fontStyle: "bold"
                        }
                    }]
                }
            }
        }
    }

    else if (type === 'b') {

      var gradientData1 = obj.createLinearGradient(500, 0, 100, 0);

      gradientData1.addColorStop(0, "#80b6f4");
      gradientData1.addColorStop(0.2, "#94d973");
      gradientData1.addColorStop(0.5, "#fad874");
      gradientData1.addColorStop(1, "#f49080");

      config = {
          type: 'line',
          data: {
              labels: ["JAN", "FEB", "MAR", "APR", "MAY", "JUN", "JUL"],
              datasets: [{
                  label: "STUDENT REPORT MONTH",
                  borderColor: gradientData1,
                  pointBorderColor: gradientData1,
                  pointBackgroundColor: gradientData1,
                  pointHoverBackgroundColor: gradientData1,
                  pointHoverBorderColor: gradientData1,
                  pointBorderWidth: 10,
                  pointHoverRadius: 10,
                  pointHoverBorderWidth: 1,
                  pointRadius: 3,
                  fill: false,
                  borderWidth: 4,
                  data: [{{ $students_jan }}, {{ $students_feb }}, {{ $students_mar }}, {{ $students_apr }}, {{ $students_may }}, {{ $students_june }}, {{ $students_july }}]
              }]
          },
          options: {
              legend: {
                  position: "bottom"
              },
              scales: {
                  yAxes: [{
                      ticks: {
                          fontColor: "rgba(0,0,0,0.5)",
                          fontStyle: "bold",
                          beginAtZero: true,
                          maxTicksLimit: 5,
                          padding: 20
                      },
                      gridLines: {
                          drawTicks: false,
                          display: false
                      }

                  }],
                  xAxes: [{
                      gridLines: {
                          zeroLineColor: "transparent"
                      },
                      ticks: {
                          padding: 20,
                          fontColor: "rgba(0,0,0,0.5)",
                          fontStyle: "bold"
                      }
                  }]
              }
          }
      }

    }

    else if (type === 'c') {

      var gradientData1 = obj.createLinearGradient(500, 0, 100, 0);

      gradientData1.addColorStop(0, "#80b6f4");
      gradientData1.addColorStop(0.2, "#94d973");
      gradientData1.addColorStop(0.5, "#fad874");
      gradientData1.addColorStop(1, "#f49080");

      config = {
          type: 'line',
          data: {
              labels: ["First Week","Second Week","Third Week","Fourth Week"],
              datasets: [{
                  label: "STUDENT REPORT WEEK",
                  borderColor: gradientData1,
                  pointBorderColor: gradientData1,
                  pointBackgroundColor: gradientData1,
                  pointHoverBackgroundColor: gradientData1,
                  pointHoverBorderColor: gradientData1,
                  pointBorderWidth: 10,
                  pointHoverRadius: 10,
                  pointHoverBorderWidth: 1,
                  pointRadius: 3,
                  fill: false,
                  borderWidth: 4,
                  data: [{{ $students_1st_week }},{{ $students_2nd_week }},{{ $students_3rd_week }},{{ $students_4th_week }}]
              }]
          },
          options: {
              legend: {
                  position: "bottom"
              },
              scales: {
                  yAxes: [{
                      ticks: {
                          fontColor: "rgba(0,0,0,0.5)",
                          fontStyle: "bold",
                          beginAtZero: true,
                          maxTicksLimit: 5,
                          padding: 20
                      },
                      gridLines: {
                          drawTicks: false,
                          display: false
                      }

                  }],
                  xAxes: [{
                      gridLines: {
                          zeroLineColor: "transparent"
                      },
                      ticks: {
                          padding: 20,
                          fontColor: "rgba(0,0,0,0.5)",
                          fontStyle: "bold"
                      }
                  }]
              }
          }
      }

    }

    else if (type === 'd') {

      var gradientData1 = obj.createLinearGradient(500, 0, 100, 0);

      gradientData1.addColorStop(0, "#80b6f4");
      gradientData1.addColorStop(0.2, "#94d973");
      gradientData1.addColorStop(0.5, "#fad874");
      gradientData1.addColorStop(1, "#f49080");

      config = {
          type: 'line',
          data: {
              labels: [{{ $last10day->format('d') }}, {{ $last9day->format('d') }},{{ $last8day->format('d') }},{{ $last7day->format('d') }},{{ $last6day->format('d') }},{{ $last5day->format('d') }},{{ $last4day->format('d') }},{{ $last3day->format('d') }},{{ $last2day->format('d') }},{{ $lastday->format('d') }},{{ $today->format('d') }}],
              datasets: [{
                  label: "STUDENT REPORT LAST 10 DAYS",
                  borderColor: gradientData1,
                  pointBorderColor: gradientData1,
                  pointBackgroundColor: gradientData1,
                  pointHoverBackgroundColor: gradientData1,
                  pointHoverBorderColor: gradientData1,
                  pointBorderWidth: 10,
                  pointHoverRadius: 10,
                  pointHoverBorderWidth: 1,
                  pointRadius: 3,
                  fill: false,
                  borderWidth: 4,
                  data: [{{ $students_nov_last10day }},
                    {{ $students_oct_last9day }},
                    {{ $students_sep_last8day }},
                    {{ $students_aug_last7day }},
                    {{ $students_july_last6day }},
                    {{ $students_june_last5day }},
                    {{ $students_may_last4day }},
                    {{ $students_apr_last3day }},
                    {{ $students_last2day }},
                    {{ $students_lastday }},
                    {{ $students_today }}
                  ]
              }]
          },
          options: {
              legend: {
                  position: "bottom"
              },
              scales: {
                  yAxes: [{
                      ticks: {
                          fontColor: "rgba(0,0,0,0.5)",
                          fontStyle: "bold",
                          beginAtZero: true,
                          maxTicksLimit: 5,
                          padding: 20
                      },
                      gridLines: {
                          drawTicks: false,
                          display: false
                      }

                  }],
                  xAxes: [{
                      gridLines: {
                          zeroLineColor: "transparent"
                      },
                      ticks: {
                          padding: 20,
                          fontColor: "rgba(0,0,0,0.5)",
                          fontStyle: "bold"
                      }
                  }]
              }
          }
      }

    }

    // VISITOR REPORT

    else if (type === 'e') {

        var gradientData1 = obj.createLinearGradient(500, 0, 100, 0);

        gradientData1.addColorStop(0, "#80b6f4");
        gradientData1.addColorStop(0.2, "#94d973");
        gradientData1.addColorStop(0.5, "#fad874");
        gradientData1.addColorStop(1, "#f49080");



        config = {
            type: 'line',
            data: {
                labels: [{{ $year }}],
                datasets: [{
                    label: "VISITOR REPORT YEAR",
                    borderColor: gradientData1,
                    pointBorderColor: gradientData1,
                    pointBackgroundColor: gradientData1,
                    pointHoverBackgroundColor: gradientData1,
                    pointHoverBorderColor: gradientData1,
                    pointBorderWidth: 10,
                    pointHoverRadius: 10,
                    pointHoverBorderWidth: 1,
                    pointRadius: 3,
                    fill: false,
                    borderWidth: 4,
                    data: [ {{ $visitors_year }} ]
                }]
            },
            options: {
                legend: {
                    position: "bottom"
                },
                scales: {
                    yAxes: [{
                        ticks: {
                            fontColor: "rgba(0,0,0,0.5)",
                            fontStyle: "bold",
                            beginAtZero: true,
                            maxTicksLimit: 5,
                            padding: 20
                        },
                        gridLines: {
                            drawTicks: false,
                            display: false
                        }

                    }],
                    xAxes: [{
                        gridLines: {
                            zeroLineColor: "transparent"
                        },
                        ticks: {
                            padding: 20,
                            fontColor: "rgba(0,0,0,0.5)",
                            fontStyle: "bold"
                        }
                    }]
                }
            }
        }
    }

    else if (type === 'f') {

      var gradientData1 = obj.createLinearGradient(500, 0, 100, 0);

      gradientData1.addColorStop(0, "#80b6f4");
      gradientData1.addColorStop(0.2, "#94d973");
      gradientData1.addColorStop(0.5, "#fad874");
      gradientData1.addColorStop(1, "#f49080");

      config = {
          type: 'line',
          data: {
              labels: ["JAN", "FEB", "MAR", "APR", "MAY", "JUN", "JUL"],
              datasets: [{
                  label: "VISITOR REPORT MONTH",
                  borderColor: gradientData1,
                  pointBorderColor: gradientData1,
                  pointBackgroundColor: gradientData1,
                  pointHoverBackgroundColor: gradientData1,
                  pointHoverBorderColor: gradientData1,
                  pointBorderWidth: 10,
                  pointHoverRadius: 10,
                  pointHoverBorderWidth: 1,
                  pointRadius: 3,
                  fill: false,
                  borderWidth: 4,
                  data: [{{ $visitors_jan }}, {{ $visitors_feb }}, {{ $visitors_mar }}, {{ $visitors_apr }}, {{ $visitors_may }}, {{ $visitors_june }}, {{ $visitors_july }}]
              }]
          },
          options: {
              legend: {
                  position: "bottom"
              },
              scales: {
                  yAxes: [{
                      ticks: {
                          fontColor: "rgba(0,0,0,0.5)",
                          fontStyle: "bold",
                          beginAtZero: true,
                          maxTicksLimit: 5,
                          padding: 20
                      },
                      gridLines: {
                          drawTicks: false,
                          display: false
                      }

                  }],
                  xAxes: [{
                      gridLines: {
                          zeroLineColor: "transparent"
                      },
                      ticks: {
                          padding: 20,
                          fontColor: "rgba(0,0,0,0.5)",
                          fontStyle: "bold"
                      }
                  }]
              }
          }
      }

    }

    else if (type === 'g') {

      var gradientData1 = obj.createLinearGradient(500, 0, 100, 0);

      gradientData1.addColorStop(0, "#80b6f4");
      gradientData1.addColorStop(0.2, "#94d973");
      gradientData1.addColorStop(0.5, "#fad874");
      gradientData1.addColorStop(1, "#f49080");

      config = {
          type: 'line',
          data: {
              labels: ["First Week","Second Week","Third Week","Fourth Week"],
              datasets: [{
                  label: "VISITOR REPORT WEEK",
                  borderColor: gradientData1,
                  pointBorderColor: gradientData1,
                  pointBackgroundColor: gradientData1,
                  pointHoverBackgroundColor: gradientData1,
                  pointHoverBorderColor: gradientData1,
                  pointBorderWidth: 10,
                  pointHoverRadius: 10,
                  pointHoverBorderWidth: 1,
                  pointRadius: 3,
                  fill: false,
                  borderWidth: 4,
                  data: [{{ $visitors_1st_week }},{{ $visitors_2nd_week }},{{ $visitors_3rd_week }},{{ $visitors_4th_week }}]
              }]
          },
          options: {
              legend: {
                  position: "bottom"
              },
              scales: {
                  yAxes: [{
                      ticks: {
                          fontColor: "rgba(0,0,0,0.5)",
                          fontStyle: "bold",
                          beginAtZero: true,
                          maxTicksLimit: 5,
                          padding: 20
                      },
                      gridLines: {
                          drawTicks: false,
                          display: false
                      }

                  }],
                  xAxes: [{
                      gridLines: {
                          zeroLineColor: "transparent"
                      },
                      ticks: {
                          padding: 20,
                          fontColor: "rgba(0,0,0,0.5)",
                          fontStyle: "bold"
                      }
                  }]
              }
          }
      }

    }

    else if (type === 'h') {

      var gradientData1 = obj.createLinearGradient(500, 0, 100, 0);

      gradientData1.addColorStop(0, "#80b6f4");
      gradientData1.addColorStop(0.2, "#94d973");
      gradientData1.addColorStop(0.5, "#fad874");
      gradientData1.addColorStop(1, "#f49080");

      config = {
          type: 'line',
          data: {
              labels: [{{ $last10day->format('d') }}, {{ $last9day->format('d') }},{{ $last8day->format('d') }},{{ $last7day->format('d') }},{{ $last6day->format('d') }},{{ $last5day->format('d') }},{{ $last4day->format('d') }},{{ $last3day->format('d') }},{{ $last2day->format('d') }},{{ $lastday->format('d') }},{{ $today->format('d') }}],
              datasets: [{
                  label: "VISITOR REPORT LAST 10 DAYS",
                  borderColor: gradientData1,
                  pointBorderColor: gradientData1,
                  pointBackgroundColor: gradientData1,
                  pointHoverBackgroundColor: gradientData1,
                  pointHoverBorderColor: gradientData1,
                  pointBorderWidth: 10,
                  pointHoverRadius: 10,
                  pointHoverBorderWidth: 1,
                  pointRadius: 3,
                  fill: false,
                  borderWidth: 4,
                  data: [{{ $visitors_nov_last10day }},
                    {{ $visitors_oct_last9day }},
                    {{ $visitors_sep_last8day }},
                    {{ $visitors_aug_last7day }},
                    {{ $visitors_july_last6day }},
                    {{ $visitors_june_last5day }},
                    {{ $visitors_may_last4day }},
                    {{ $visitors_apr_last3day }},
                    {{ $visitors_last2day }},
                    {{ $visitors_lastday }},
                    {{ $visitors_today }}
                  ]
              }]
          },
          options: {
              legend: {
                  position: "bottom"
              },
              scales: {
                  yAxes: [{
                      ticks: {
                          fontColor: "rgba(0,0,0,0.5)",
                          fontStyle: "bold",
                          beginAtZero: true,
                          maxTicksLimit: 5,
                          padding: 20
                      },
                      gridLines: {
                          drawTicks: false,
                          display: false
                      }

                  }],
                  xAxes: [{
                      gridLines: {
                          zeroLineColor: "transparent"
                      },
                      ticks: {
                          padding: 20,
                          fontColor: "rgba(0,0,0,0.5)",
                          fontStyle: "bold"
                      }
                  }]
              }
          }
      }

    }

    else if (type === 'i') {
        //var obj    = document.getElementById('gradient_area').getContext('2d'),
        var gradient = obj.createLinearGradient(0, 0, 0, 450);

        gradient.addColorStop(0, '#5CC5CD');
        gradient.addColorStop(0.5, '#46b6fe');
        gradient.addColorStop(1, '#3866a6');

        config = {
            type: 'line',
            data: {
                labels: [ {{ $year }} ],
                datasets: [{
                        label: 'ENROLL REPORT YEAR',
                        backgroundColor: gradient,
                        pointBackgroundColor: 'white',
                        borderWidth: 1,
                        borderColor: '#3866a6',
                        data: [{{ $enrolls_year }}]
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: true,
                animation: {
                    easing: 'easeInOutQuad',
                    duration: 520
                },
                scales: {
                    xAxes: [{
                        gridLines: {
                            color: 'rgba(200, 200, 200, 0.05)',
                            lineWidth: 1
                        }
                    }],
                    yAxes: [{
                        gridLines: {
                            color: 'rgba(200, 200, 200, 0.08)',
                            lineWidth: 1
                        }
                    }]
                },
                elements: {
                    line: {
                        tension: 0.4
                    }
                },
                legend: {
                    display: false
                },
                point: {
                    backgroundColor: 'white'
                },
                tooltips: {
                    titleFontFamily: 'Open Sans',
                    backgroundColor: '#5CC5CD',
                    titleFontColor: 'red',
                    caretSize: 5,
                    cornerRadius: 2,
                    xPadding: 10,
                    yPadding: 10
                }
            }
        }
    }

    else if (type === 'j') {
        //var obj    = document.getElementById('gradient_area').getContext('2d'),
        var gradient = obj.createLinearGradient(0, 0, 0, 450);

        gradient.addColorStop(0, '#5CC5CD');
        gradient.addColorStop(0.5, '#46b6fe');
        gradient.addColorStop(1, '#3866a6');

        config = {
            type: 'line',
            data: {
                labels: [ "JAN", "FEB", "MAR", "APR", "MAY", "JUN", "JUL" ],
                datasets: [{
                        label: 'ENROLL REPORT MONTH',
                        backgroundColor: gradient,
                        pointBackgroundColor: 'white',
                        borderWidth: 1,
                        borderColor: '#3866a6',
                        data: [{{ $enrolls_jan }}, {{ $enrolls_feb }}, {{ $enrolls_mar }}, {{ $enrolls_apr }}, {{ $enrolls_may }}, {{ $enrolls_june }}, {{ $enrolls_july }}]
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: true,
                animation: {
                    easing: 'easeInOutQuad',
                    duration: 520
                },
                scales: {
                    xAxes: [{
                        gridLines: {
                            color: 'rgba(200, 200, 200, 0.05)',
                            lineWidth: 1
                        }
                    }],
                    yAxes: [{
                        gridLines: {
                            color: 'rgba(200, 200, 200, 0.08)',
                            lineWidth: 1
                        }
                    }]
                },
                elements: {
                    line: {
                        tension: 0.4
                    }
                },
                legend: {
                    display: false
                },
                point: {
                    backgroundColor: 'white'
                },
                tooltips: {
                    titleFontFamily: 'Open Sans',
                    backgroundColor: '#5CC5CD',
                    titleFontColor: 'red',
                    caretSize: 5,
                    cornerRadius: 2,
                    xPadding: 10,
                    yPadding: 10
                }
            }
        }
    }

    else if (type === 'k') {
        //var obj    = document.getElementById('gradient_area').getContext('2d'),
        var gradient = obj.createLinearGradient(0, 0, 0, 450);

        gradient.addColorStop(0, '#5CC5CD');
        gradient.addColorStop(0.5, '#46b6fe');
        gradient.addColorStop(1, '#3866a6');

        config = {
            type: 'line',
            data: {
                labels: [ "First Week","Second Week","Third Week","Fourth Week" ],
                datasets: [{
                        label: 'ENROLL REPORT WEEK',
                        backgroundColor: gradient,
                        pointBackgroundColor: 'white',
                        borderWidth: 1,
                        borderColor: '#3866a6',
                        data: [{{ $enrolls_1st_week }},{{ $enrolls_2nd_week }},{{ $enrolls_3rd_week }},{{ $enrolls_4th_week }}]
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: true,
                animation: {
                    easing: 'easeInOutQuad',
                    duration: 520
                },
                scales: {
                    xAxes: [{
                        gridLines: {
                            color: 'rgba(200, 200, 200, 0.05)',
                            lineWidth: 1
                        }
                    }],
                    yAxes: [{
                        gridLines: {
                            color: 'rgba(200, 200, 200, 0.08)',
                            lineWidth: 1
                        }
                    }]
                },
                elements: {
                    line: {
                        tension: 0.4
                    }
                },
                legend: {
                    display: false
                },
                point: {
                    backgroundColor: 'white'
                },
                tooltips: {
                    titleFontFamily: 'Open Sans',
                    backgroundColor: '#5CC5CD',
                    titleFontColor: 'red',
                    caretSize: 5,
                    cornerRadius: 2,
                    xPadding: 10,
                    yPadding: 10
                }
            }
        }
    }

    else if (type === 'l') {
        //var obj    = document.getElementById('gradient_area').getContext('2d'),
        var gradient = obj.createLinearGradient(0, 0, 0, 450);

        gradient.addColorStop(0, '#5CC5CD');
        gradient.addColorStop(0.5, '#46b6fe');
        gradient.addColorStop(1, '#3866a6');

        config = {
            type: 'line',
            data: {
                labels: [ {{ $last10day->format('d') }}, {{ $last9day->format('d') }},{{ $last8day->format('d') }},{{ $last7day->format('d') }},{{ $last6day->format('d') }},{{ $last5day->format('d') }},{{ $last4day->format('d') }},{{ $last3day->format('d') }},{{ $last2day->format('d') }},{{ $lastday->format('d') }},{{ $today->format('d') }} ],
                datasets: [{
                        label: 'Custom Label Name',
                        backgroundColor: gradient,
                        pointBackgroundColor: 'white',
                        borderWidth: 1,
                        borderColor: '#3866a6',
                        data: [
                          {{ $enrolls_nov_last10day }},
                            {{ $enrolls_oct_last9day }},
                            {{ $enrolls_sep_last8day }},
                            {{ $enrolls_aug_last7day }},
                            {{ $enrolls_july_last6day }},
                            {{ $enrolls_june_last5day }},
                            {{ $enrolls_may_last4day }},
                            {{ $enrolls_apr_last3day }},
                            {{ $enrolls_last2day }},
                            {{ $enrolls_lastday }},
                            {{ $enrolls_today }}
                        ]
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: true,
                animation: {
                    easing: 'easeInOutQuad',
                    duration: 520
                },
                scales: {
                    xAxes: [{
                        gridLines: {
                            color: 'rgba(200, 200, 200, 0.05)',
                            lineWidth: 1
                        }
                    }],
                    yAxes: [{
                        gridLines: {
                            color: 'rgba(200, 200, 200, 0.08)',
                            lineWidth: 1
                        }
                    }]
                },
                elements: {
                    line: {
                        tension: 0.4
                    }
                },
                legend: {
                    display: false
                },
                point: {
                    backgroundColor: 'white'
                },
                tooltips: {
                    titleFontFamily: 'Open Sans',
                    backgroundColor: '#5CC5CD',
                    titleFontColor: 'red',
                    caretSize: 5,
                    cornerRadius: 2,
                    xPadding: 10,
                    yPadding: 10
                }
            }
        }
    }

    // Payment


        else if (type === 'm') {
            //var obj    = document.getElementById('gradient_area').getContext('2d'),
            var gradient = obj.createLinearGradient(0, 0, 0, 450);

            gradient.addColorStop(0, '#5CC5CD');
            gradient.addColorStop(0.5, '#46b6fe');
            gradient.addColorStop(1, '#3866a6');

            config = {
                type: 'line',
                data: {
                    labels: [ {{ $year }} ],
                    datasets: [{
                            label: 'PAYMENT REPORT YEAR',
                            backgroundColor: gradient,
                            pointBackgroundColor: 'white',
                            borderWidth: 1,
                            borderColor: '#3866a6',
                            data: [{{ $paymentMonth }}]
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: true,
                    animation: {
                        easing: 'easeInOutQuad',
                        duration: 520
                    },
                    scales: {
                        xAxes: [{
                            gridLines: {
                                color: 'rgba(200, 200, 200, 0.05)',
                                lineWidth: 1
                            }
                        }],
                        yAxes: [{
                            gridLines: {
                                color: 'rgba(200, 200, 200, 0.08)',
                                lineWidth: 1
                            }
                        }]
                    },
                    elements: {
                        line: {
                            tension: 0.4
                        }
                    },
                    legend: {
                        display: false
                    },
                    point: {
                        backgroundColor: 'white'
                    },
                    tooltips: {
                        titleFontFamily: 'Open Sans',
                        backgroundColor: '#5CC5CD',
                        titleFontColor: 'red',
                        caretSize: 5,
                        cornerRadius: 2,
                        xPadding: 10,
                        yPadding: 10
                    }
                }
            }
        }

        else if (type === 'n') {
            //var obj    = document.getElementById('gradient_area').getContext('2d'),
            var gradient = obj.createLinearGradient(0, 0, 0, 450);

            gradient.addColorStop(0, '#5CC5CD');
            gradient.addColorStop(0.5, '#46b6fe');
            gradient.addColorStop(1, '#3866a6');

            config = {
                type: 'line',
                data: {
                    labels: [ "JAN", "FEB", "MAR", "APR", "MAY", "JUN", "JUL" ],
                    datasets: [{
                            label: 'ENROLL REPORT MONTH',
                            backgroundColor: gradient,
                            pointBackgroundColor: 'white',
                            borderWidth: 1,
                            borderColor: '#3866a6',
                            data: [{{ $enrolls_jan }}, {{ $enrolls_feb }}, {{ $enrolls_mar }}, {{ $enrolls_apr }}, {{ $enrolls_may }}, {{ $enrolls_june }}, {{ $enrolls_july }}]
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: true,
                    animation: {
                        easing: 'easeInOutQuad',
                        duration: 520
                    },
                    scales: {
                        xAxes: [{
                            gridLines: {
                                color: 'rgba(200, 200, 200, 0.05)',
                                lineWidth: 1
                            }
                        }],
                        yAxes: [{
                            gridLines: {
                                color: 'rgba(200, 200, 200, 0.08)',
                                lineWidth: 1
                            }
                        }]
                    },
                    elements: {
                        line: {
                            tension: 0.4
                        }
                    },
                    legend: {
                        display: false
                    },
                    point: {
                        backgroundColor: 'white'
                    },
                    tooltips: {
                        titleFontFamily: 'Open Sans',
                        backgroundColor: '#5CC5CD',
                        titleFontColor: 'red',
                        caretSize: 5,
                        cornerRadius: 2,
                        xPadding: 10,
                        yPadding: 10
                    }
                }
            }
        }

        else if (type === 'o') {
            //var obj    = document.getElementById('gradient_area').getContext('2d'),
            var gradient = obj.createLinearGradient(0, 0, 0, 450);

            gradient.addColorStop(0, '#5CC5CD');
            gradient.addColorStop(0.5, '#46b6fe');
            gradient.addColorStop(1, '#3866a6');

            config = {
                type: 'line',
                data: {
                    labels: [ "First Week","Second Week","Third Week","Fourth Week" ],
                    datasets: [{
                            label: 'ENROLL REPORT WEEK',
                            backgroundColor: gradient,
                            pointBackgroundColor: 'white',
                            borderWidth: 1,
                            borderColor: '#3866a6',
                            data: [{{ $enrolls_1st_week }},{{ $enrolls_2nd_week }},{{ $enrolls_3rd_week }},{{ $enrolls_4th_week }}]
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: true,
                    animation: {
                        easing: 'easeInOutQuad',
                        duration: 520
                    },
                    scales: {
                        xAxes: [{
                            gridLines: {
                                color: 'rgba(200, 200, 200, 0.05)',
                                lineWidth: 1
                            }
                        }],
                        yAxes: [{
                            gridLines: {
                                color: 'rgba(200, 200, 200, 0.08)',
                                lineWidth: 1
                            }
                        }]
                    },
                    elements: {
                        line: {
                            tension: 0.4
                        }
                    },
                    legend: {
                        display: false
                    },
                    point: {
                        backgroundColor: 'white'
                    },
                    tooltips: {
                        titleFontFamily: 'Open Sans',
                        backgroundColor: '#5CC5CD',
                        titleFontColor: 'red',
                        caretSize: 5,
                        cornerRadius: 2,
                        xPadding: 10,
                        yPadding: 10
                    }
                }
            }
        }

        else if (type === 'p') {
            //var obj    = document.getElementById('gradient_area').getContext('2d'),
            var gradient = obj.createLinearGradient(0, 0, 0, 450);

            gradient.addColorStop(0, '#5CC5CD');
            gradient.addColorStop(0.5, '#46b6fe');
            gradient.addColorStop(1, '#3866a6');

            config = {
                type: 'line',
                data: {
                    labels: [ {{ $last10day->format('d') }}, {{ $last9day->format('d') }},{{ $last8day->format('d') }},{{ $last7day->format('d') }},{{ $last6day->format('d') }},{{ $last5day->format('d') }},{{ $last4day->format('d') }},{{ $last3day->format('d') }},{{ $last2day->format('d') }},{{ $lastday->format('d') }},{{ $today->format('d') }} ],
                    datasets: [{
                            label: 'Custom Label Name',
                            backgroundColor: gradient,
                            pointBackgroundColor: 'white',
                            borderWidth: 1,
                            borderColor: '#3866a6',
                            data: [
                              {{ $enrolls_nov_last10day }},
                                {{ $enrolls_oct_last9day }},
                                {{ $enrolls_sep_last8day }},
                                {{ $enrolls_aug_last7day }},
                                {{ $enrolls_july_last6day }},
                                {{ $enrolls_june_last5day }},
                                {{ $enrolls_may_last4day }},
                                {{ $enrolls_apr_last3day }},
                                {{ $enrolls_last2day }},
                                {{ $enrolls_lastday }},
                                {{ $enrolls_today }}
                            ]
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: true,
                    animation: {
                        easing: 'easeInOutQuad',
                        duration: 520
                    },
                    scales: {
                        xAxes: [{
                            gridLines: {
                                color: 'rgba(200, 200, 200, 0.05)',
                                lineWidth: 1
                            }
                        }],
                        yAxes: [{
                            gridLines: {
                                color: 'rgba(200, 200, 200, 0.08)',
                                lineWidth: 1
                            }
                        }]
                    },
                    elements: {
                        line: {
                            tension: 0.4
                        }
                    },
                    legend: {
                        display: false
                    },
                    point: {
                        backgroundColor: 'white'
                    },
                    tooltips: {
                        titleFontFamily: 'Open Sans',
                        backgroundColor: '#5CC5CD',
                        titleFontColor: 'red',
                        caretSize: 5,
                        cornerRadius: 2,
                        xPadding: 10,
                        yPadding: 10
                    }
                }
            }
        }


        //expense





            else if (type === 'q') {
                //var obj    = document.getElementById('gradient_area').getContext('2d'),
                var gradient = obj.createLinearGradient(0, 0, 0, 450);

                gradient.addColorStop(0, '#5CC5CD');
                gradient.addColorStop(0.5, '#46b6fe');
                gradient.addColorStop(1, '#3866a6');

                config = {
                    type: 'line',
                    data: {
                        labels: [ {{ $year }} ],
                        datasets: [{
                                label: 'EXPENSE REPORT YEAR',
                                backgroundColor: gradient,
                                pointBackgroundColor: 'white',
                                borderWidth: 1,
                                borderColor: '#3866a6',
                                data: [{{ $expense_year }}]
                        }]
                    },
                    options: {
                        responsive: true,
                        maintainAspectRatio: true,
                        animation: {
                            easing: 'easeInOutQuad',
                            duration: 520
                        },
                        scales: {
                            xAxes: [{
                                gridLines: {
                                    color: 'rgba(200, 200, 200, 0.05)',
                                    lineWidth: 1
                                }
                            }],
                            yAxes: [{
                                gridLines: {
                                    color: 'rgba(200, 200, 200, 0.08)',
                                    lineWidth: 1
                                }
                            }]
                        },
                        elements: {
                            line: {
                                tension: 0.4
                            }
                        },
                        legend: {
                            display: false
                        },
                        point: {
                            backgroundColor: 'white'
                        },
                        tooltips: {
                            titleFontFamily: 'Open Sans',
                            backgroundColor: '#5CC5CD',
                            titleFontColor: 'red',
                            caretSize: 5,
                            cornerRadius: 2,
                            xPadding: 10,
                            yPadding: 10
                        }
                    }
                }
            }

            else if (type === 'r') {
                //var obj    = document.getElementById('gradient_area').getContext('2d'),
                var gradient = obj.createLinearGradient(0, 0, 0, 450);

                gradient.addColorStop(0, '#5CC5CD');
                gradient.addColorStop(0.5, '#46b6fe');
                gradient.addColorStop(1, '#3866a6');

                config = {
                    type: 'line',
                    data: {
                        labels: [ "JAN", "FEB", "MAR", "APR", "MAY", "JUN", "JUL" ],
                        datasets: [{
                                label: 'EXPENSE REPORT MONTH',
                                backgroundColor: gradient,
                                pointBackgroundColor: 'white',
                                borderWidth: 1,
                                borderColor: '#3866a6',
                                data: [{{ $expense_jan }}, {{ $expense_feb }}, {{ $expense_mar }}, {{ $expense_apr }}, {{ $expense_may }}, {{ $expense_june }}, {{ $expense_july }}]
                        }]
                    },
                    options: {
                        responsive: true,
                        maintainAspectRatio: true,
                        animation: {
                            easing: 'easeInOutQuad',
                            duration: 520
                        },
                        scales: {
                            xAxes: [{
                                gridLines: {
                                    color: 'rgba(200, 200, 200, 0.05)',
                                    lineWidth: 1
                                }
                            }],
                            yAxes: [{
                                gridLines: {
                                    color: 'rgba(200, 200, 200, 0.08)',
                                    lineWidth: 1
                                }
                            }]
                        },
                        elements: {
                            line: {
                                tension: 0.4
                            }
                        },
                        legend: {
                            display: false
                        },
                        point: {
                            backgroundColor: 'white'
                        },
                        tooltips: {
                            titleFontFamily: 'Open Sans',
                            backgroundColor: '#5CC5CD',
                            titleFontColor: 'red',
                            caretSize: 5,
                            cornerRadius: 2,
                            xPadding: 10,
                            yPadding: 10
                        }
                    }
                }
            }

            else if (type === 's') {
                //var obj    = document.getElementById('gradient_area').getContext('2d'),
                var gradient = obj.createLinearGradient(0, 0, 0, 450);

                gradient.addColorStop(0, '#5CC5CD');
                gradient.addColorStop(0.5, '#46b6fe');
                gradient.addColorStop(1, '#3866a6');

                config = {
                    type: 'line',
                    data: {
                        labels: [ "First Week","Second Week","Third Week","Fourth Week" ],
                        datasets: [{
                                label: 'EXPENSE REPORT WEEK',
                                backgroundColor: gradient,
                                pointBackgroundColor: 'white',
                                borderWidth: 1,
                                borderColor: '#3866a6',
                                data: [
                                  {{ $expense_1st_week }},
                                  {{ $expense_2nd_week }},
                                  {{ $expense_3rd_week }},
                                  {{ $expense_4th_week }}
                                ]
                        }]
                    },
                    options: {
                        responsive: true,
                        maintainAspectRatio: true,
                        animation: {
                            easing: 'easeInOutQuad',
                            duration: 520
                        },
                        scales: {
                            xAxes: [{
                                gridLines: {
                                    color: 'rgba(200, 200, 200, 0.05)',
                                    lineWidth: 1
                                }
                            }],
                            yAxes: [{
                                gridLines: {
                                    color: 'rgba(200, 200, 200, 0.08)',
                                    lineWidth: 1
                                }
                            }]
                        },
                        elements: {
                            line: {
                                tension: 0.4
                            }
                        },
                        legend: {
                            display: false
                        },
                        point: {
                            backgroundColor: 'white'
                        },
                        tooltips: {
                            titleFontFamily: 'Open Sans',
                            backgroundColor: '#5CC5CD',
                            titleFontColor: 'red',
                            caretSize: 5,
                            cornerRadius: 2,
                            xPadding: 10,
                            yPadding: 10
                        }
                    }
                }
            }

            else if (type === 't') {
                //var obj    = document.getElementById('gradient_area').getContext('2d'),
                var gradient = obj.createLinearGradient(0, 0, 0, 450);

                gradient.addColorStop(0, '#5CC5CD');
                gradient.addColorStop(0.5, '#46b6fe');
                gradient.addColorStop(1, '#3866a6');

                config = {
                    type: 'line',
                    data: {
                        labels: [ {{ $last10day->format('d') }}, {{ $last9day->format('d') }},{{ $last8day->format('d') }},{{ $last7day->format('d') }},{{ $last6day->format('d') }},{{ $last5day->format('d') }},{{ $last4day->format('d') }},{{ $last3day->format('d') }},{{ $last2day->format('d') }},{{ $lastday->format('d') }},{{ $today->format('d') }} ],
                        datasets: [{
                                label: 'EXPENSE LAST 10 DAYS',
                                backgroundColor: gradient,
                                pointBackgroundColor: 'white',
                                borderWidth: 1,
                                borderColor: '#3866a6',
                                data: [
                                  {{ $expense_today }},
                                    {{ $expense_lastday }},
                                    {{ $expense_last2day }},
                                    {{ $expense_apr_last3day }},
                                    {{ $expense_may_last4day }},
                                    {{ $expense_june_last5day }},
                                    {{ $expense_july_last6day }},
                                    {{ $expense_aug_last7day }},
                                    {{ $expense_sep_last8day }},
                                    {{ $expense_oct_last9day }},
                                    {{ $expense_nov_last10day }}
                                ]
                        }]
                    },
                    options: {
                        responsive: true,
                        maintainAspectRatio: true,
                        animation: {
                            easing: 'easeInOutQuad',
                            duration: 520
                        },
                        scales: {
                            xAxes: [{
                                gridLines: {
                                    color: 'rgba(200, 200, 200, 0.05)',
                                    lineWidth: 1
                                }
                            }],
                            yAxes: [{
                                gridLines: {
                                    color: 'rgba(200, 200, 200, 0.08)',
                                    lineWidth: 1
                                }
                            }]
                        },
                        elements: {
                            line: {
                                tension: 0.4
                            }
                        },
                        legend: {
                            display: false
                        },
                        point: {
                            backgroundColor: 'white'
                        },
                        tooltips: {
                            titleFontFamily: 'Open Sans',
                            backgroundColor: '#5CC5CD',
                            titleFontColor: 'red',
                            caretSize: 5,
                            cornerRadius: 2,
                            xPadding: 10,
                            yPadding: 10
                        }
                    }
                }
            }






    // else if (type === 'filled_line') {
    //     config = {
    //         type: 'line',
    //         data: {
    //             labels: ["January", "February", "March", "April", "May", "June", "July"],
    //             datasets: [{
    //                 label: "My First dataset",
    //                 data: [28, 32, 39, 37, 42, 55, 50],
    //                 borderColor: '#5CC5CD',
    //                 backgroundColor: '#5dbecd',
    //                 pointBorderColor: '#128293',
    //                 pointBackgroundColor: '#FFFFFF',
    //                 pointBorderWidth: 1
    //             }, {
    //                 label: "My Second dataset",
    //                 data: [40, 48, 50, 48, 63, 62, 71],
    //                 borderColor: '#46b6fe',
    //                 backgroundColor: '#3866a6',
    //                 pointBorderColor: '#5ebcf9',
    //                 pointBackgroundColor: '#FFFFFF',
    //                 pointBorderWidth: 1
    //             }]
    //         },
    //         options: {
    //             responsive: true,
    //             legend: false,
    //
    //         }
    //     }
    // }
    // else if (type === 'bar') {
    //     config = {
    //         type: 'bar',
    //         data: {
    //             labels: ["January", "February", "March", "April", "May", "June", "July"],
    //             datasets: [{
    //                 label: "My First dataset",
    //                 data: [28, 48, 40, 19, 86, 27, 90],
    //                 backgroundColor: '#46b6fe',
    //                 strokeColor: "rgba(255,118,118,0.1)",
    //             }, {
    //                 label: "My Second dataset",
    //                 data: [10, 30, 80, 61, 26, 75, 40],
    //                 backgroundColor: '#5CC5CD',
    //                 strokeColor: "rgba(255,118,118,0.1)",
    //             }]
    //         },
    //         options: {
    //             responsive: true,
    //             legend: false
    //         }
    //     }
    // }
    // else if (type === 'area') {
    //     //var obj    = document.getElementById('gradient_area').getContext('2d'),
    //     var gradient = obj.createLinearGradient(0, 0, 0, 450);
    //
    //     gradient.addColorStop(0, '#5CC5CD');
    //     gradient.addColorStop(0.5, '#46b6fe');
    //     gradient.addColorStop(1, '#3866a6');
    //
    //     config = {
    //         type: 'line',
    //         data: {
    //             labels: [ 'January', 'February', 'March', 'April', 'May', 'June' ],
    //             datasets: [{
    //                     label: 'Custom Label Name',
    //                     backgroundColor: gradient,
    //                     pointBackgroundColor: 'white',
    //                     borderWidth: 1,
    //                     borderColor: '#3866a6',
    //                     data: [50, 80, 58, 70, 54, 63]
    //             }]
    //         },
    //         options: {
    //             responsive: true,
    //             maintainAspectRatio: true,
    //             animation: {
    //                 easing: 'easeInOutQuad',
    //                 duration: 520
    //             },
    //             scales: {
    //                 xAxes: [{
    //                     gridLines: {
    //                         color: 'rgba(200, 200, 200, 0.05)',
    //                         lineWidth: 1
    //                     }
    //                 }],
    //                 yAxes: [{
    //                     gridLines: {
    //                         color: 'rgba(200, 200, 200, 0.08)',
    //                         lineWidth: 1
    //                     }
    //                 }]
    //             },
    //             elements: {
    //                 line: {
    //                     tension: 0.4
    //                 }
    //             },
    //             legend: {
    //                 display: false
    //             },
    //             point: {
    //                 backgroundColor: 'white'
    //             },
    //             tooltips: {
    //                 titleFontFamily: 'Open Sans',
    //                 backgroundColor: '#5CC5CD',
    //                 titleFontColor: 'red',
    //                 caretSize: 5,
    //                 cornerRadius: 2,
    //                 xPadding: 10,
    //                 yPadding: 10
    //             }
    //         }
    //     }
    // }
    // else if (type === 'radar') {
    //     config = {
    //         type: 'radar',
    //         data: {
    //             labels: ["January", "February", "March", "April", "May", "June", "July"],
    //             datasets: [{
    //                 label: "My First dataset",
    //                 data: [65, 25, 90, 81, 56, 55, 40],
    //                 borderColor: 'rgba(102,165,226, 0.8)',
    //                 backgroundColor: 'rgba(102,165,226, 0.5)',
    //                 pointBorderColor: 'rgba(102,165,226, 0)',
    //                 pointBackgroundColor: 'rgba(102,165,226, 0.8)',
    //                 pointBorderWidth: 1
    //             }, {
    //                     label: "My Second dataset",
    //                     data: [72, 48, 40, 19, 96, 27, 100],
    //                     borderColor: 'rgba(140,147,154, 0.8)',
    //                     backgroundColor: 'rgba(140,147,154, 0.5)',
    //                     pointBorderColor: 'rgba(140,147,154, 0)',
    //                     pointBackgroundColor: 'rgba(140,147,154, 0.8)',
    //                     pointBorderWidth: 1
    //                 }]
    //         },
    //         options: {
    //             responsive: true,
    //             legend: false
    //         }
    //     }
    // }
    // else if (type === 'pie') {
    //     config = {
    //         type: 'pie',
    //         data: {
    //             datasets: [{
    //                 data: [150, 53, 121, 87, 45],
    //                 backgroundColor: [
    //                     "#515da4",
    //                     "#9988ff",
    //                     "#939edc",
    //                     "#d1d5f0",
    //                     "#f0f1fa"
    //                 ],
    //             }],
    //             labels: [
    //                 "Pia A",
    //                 "Pia B",
    //                 "Pia C",
    //                 "Pia D",
    //                 "Pia E"
    //             ]
    //         },
    //         options: {
    //             responsive: true,
    //             legend: false
    //         }
    //     }
    // }
    return config;
}

</script>

@stop
