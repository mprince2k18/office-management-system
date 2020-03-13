<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use Carbon\Carbon;

class ReportController extends Controller
{
    function index()
    {

      //BEGIN:YEAR

      $year       = Carbon::now()->year;
      $lastyear   = Carbon::now()->subYear(1);
      $last2year  = Carbon::now()->subYear(2);
      $last3year  = Carbon::now()->subYear(3);
      $last4year  = Carbon::now()->subYear(4);
      $last5year  = Carbon::now()->subYear(5);
      $last6year  = Carbon::now()->subYear(6);
      $last7year  = Carbon::now()->subYear(7);
      $last8year  = Carbon::now()->subYear(8);
      $last9year  = Carbon::now()->subYear(9);
      $last10year = Carbon::now()->subYear(10);

      $startOfTheYear = $year."-01-01 00:00:00";
      $endOfTheYear   = $year."-12-31 00:00:00";

      // END:YEAR


      //BEGIN:DAY
      $today = Carbon::today();
      $lastday = Carbon::yesterday();
      $last2day = Carbon::now()->subDays(2);
      $last3day = Carbon::now()->subDays(3);
      $last4day = Carbon::now()->subDays(4);
      $last5day = Carbon::now()->subDays(5);
      $last6day = Carbon::now()->subDays(6);
      $last7day = Carbon::now()->subDays(7);
      $last8day = Carbon::now()->subDays(8);
      $last9day = Carbon::now()->subDays(9);
      $last10day = Carbon::now()->subDays(10);
      //END:DAY


      // BEGIN:WEEK

      $startOfWeek    = Carbon::now()->startOfWeek();
      $endOfWeek      = Carbon::now()->endOfWeek();

      // END:WEEK


      $students_year  = Student::whereBetween('created_at', [$startOfTheYear, $endOfTheYear])->count();


      // BEGIN:MONTH
      $students_jan   = Student::whereBetween('created_at',['2020-01-01 00:00:00','2020-01-31 00:00:00'])->count();
      $students_feb   = Student::whereBetween('created_at',['2020-02-01 00:00:00','2020-02-31 00:00:00'])->count();
      $students_mar   = Student::whereBetween('created_at',['2020-03-01 00:00:00','2020-03-31 00:00:00'])->count();
      $students_apr   = Student::whereBetween('created_at',['2020-04-01 00:00:00','2020-04-31 00:00:00'])->count();
      $students_may   = Student::whereBetween('created_at',['2020-05-01 00:00:00','2020-05-31 00:00:00'])->count();
      $students_june  = Student::whereBetween('created_at',['2020-06-01 00:00:00','2020-06-31 00:00:00'])->count();
      $students_july  = Student::whereBetween('created_at',['2020-07-01 00:00:00','2020-07-31 00:00:00'])->count();
      $students_aug   = Student::whereBetween('created_at',['2020-08-01 00:00:00','2020-08-31 00:00:00'])->count();
      $students_sep   = Student::whereBetween('created_at',['2020-09-01 00:00:00','2020-09-31 00:00:00'])->count();
      $students_oct   = Student::whereBetween('created_at',['2020-10-01 00:00:00','2020-10-31 00:00:00'])->count();
      $students_nov   = Student::whereBetween('created_at',['2020-11-01 00:00:00','2020-11-31 00:00:00'])->count();
      $students_dec   = Student::whereBetween('created_at',['2020-12-01 00:00:00','2020-12-31 00:00:00'])->count();
      // END:MONTH


      $students_week  = Student::whereBetween('created_at', [$startOfWeek, $endOfWeek])->count();


      return view('report.chartjs',compact('students',
      'students_jan',
      'students_feb',
      'students_mar',
      'students_apr',
      'students_may',
      'students_june',
      'students_july',
      'students_year',
      'year',
      'lastyear',
      'last2year',
      'last3year',
      'last4year',
      'last5year',
      'last6year',
      'last7year',
      'last8year',
      'last9year',
      'last10year',
      'startOfWeek',
      'endOfWeek',
      'students_week',
      'today',
      'lastday',
      'last2day',
      'last3day',
      'last4day',
      'last5day',
      'last6day',
      'last7day',
      'last8day',
      'last9day',
      'last10day'
    ));

      // echo $last2day;

    }
    //END
}
