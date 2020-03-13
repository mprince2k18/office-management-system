@extends('layout.master')
@section('title', 'Report')
@section('parentPageTitle', 'Report Area')
@section('page-style')
<link rel="stylesheet" href="{{asset('assets/plugins/morrisjs/morris.min.css')}}"/>
@stop
@section('content')
<div class="row clearfix">
    <div class="col-lg-12 col-md-12">
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
                    <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#year">YEAR</a></li>
                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#month">MONTH</a></li>
                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#week">WEEK</a></li>
                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#day">DAY</a></li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content">



                    <div role="tabpanel" class="tab-pane in active" id="year">
                        <canvas id="line_chart_year" class="chartjs_graph"></canvas>
                    </div>




                    <div role="tabpanel" class="tab-pane" id="month">
                        <canvas id="line_chart_month" class="chartjs_graph"></canvas>
                    </div>



                    <div role="tabpanel" class="tab-pane" id="week">
                        <canvas id="line_chart_week" class="chartjs_graph"></canvas>
                    </div>



                    <div role="tabpanel" class="tab-pane" id="day">
                        <canvas id="line_chart_day" class="chartjs_graph"></canvas>
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
    </div>
    <div class="col-lg-6 col-md-12">
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
    </div>
    <div class="col-lg-6 col-md-12">
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
    </div>
    <div class="col-lg-6 col-md-12">
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
    var lc = document.getElementById("line_chart_year").getContext("2d");
    new Chart(lc, getChartJs(lc, 'a'));

    var lc = document.getElementById("line_chart_month").getContext("2d");
    new Chart(lc, getChartJs(lc, 'b'));

    var lc = document.getElementById("line_chart_week").getContext("2d");
    new Chart(lc, getChartJs(lc, 'c'));

    var lc = document.getElementById("line_chart_day").getContext("2d");
    new Chart(lc, getChartJs(lc, 'd'));

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
                    label: "STUDENT REPORT",
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
                  label: "STUDENT REPORT",
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
              labels: ["Start Of The Week"],
              datasets: [{
                  label: "STUDENT REPORT",
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
                  data: [{{ $students_week }}]
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
              labels: ["JAN", "FEB", "MAR", "APR", "MAY", "JUN", "JUL"],
              datasets: [{
                  label: "STUDENT REPORT",
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
