<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use Carbon\Carbon;

class ReportController extends Controller
{
    function index()
    {
      $year = Carbon::now()->year;
      $today = Student::all();


      $students_jan = Student::whereBetween('created_at',['2020-01-01 00:00:00','2020-01-31 00:00:00'])->count();
      $students_feb = Student::whereBetween('created_at',['2020-02-01 00:00:00','2020-02-31 00:00:00'])->count();
      $students_mar = Student::whereBetween('created_at',['2020-03-01 00:00:00','2020-03-31 00:00:00'])->count();
      $students_apr = Student::whereBetween('created_at',['2020-04-01 00:00:00','2020-04-31 00:00:00'])->count();
      $students_may = Student::whereBetween('created_at',['2020-05-01 00:00:00','2020-05-31 00:00:00'])->count();
      $students_june = Student::whereBetween('created_at',['2020-06-01 00:00:00','2020-06-31 00:00:00'])->count();
      $students_july = Student::whereBetween('created_at',['2020-07-01 00:00:00','2020-07-31 00:00:00'])->count();
      // $students_aug = Student::where('created_at',$year-08-01)->count();
      // $students_sep = Student::where('created_at',$year-09-01)->count();
      // $students_oct = Student::where('created_at',$year-10-01)->count();
      // $students_nov = Student::where('created_at',$year-11-01)->count();
      // $students_dec = Student::where('created_at',$year-12-01)->count();
      return view('report.chartjs',compact('students','students_jan','students_feb','students_mar', 'students_apr', 'students_may','students_june','students_july'));

      // echo $students_jan;

    }
    //END
}
