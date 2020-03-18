<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\Visitor;
use App\Enroll;
use App\Installment;
use App\Requisition;
use Carbon\Carbon;

class ReportController extends Controller
{
    function index()
    {




      //BEGIN:YEAR

      $year       = Carbon::now()->year;
      $month      = Carbon::now()->month;
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

      //BEGIN:YEAR
      $students_year  = Student::whereBetween('created_at', [$startOfTheYear, $endOfTheYear])->count();
      $visitors_year  = Visitor::whereBetween('created_at', [$startOfTheYear, $endOfTheYear])->count();
      $enrolls_year   = Enroll::whereBetween('created_at', [$startOfTheYear, $endOfTheYear])->count();
      $enrolls_year   = Enroll::whereBetween('created_at', [$startOfTheYear, $endOfTheYear])->count();
      $expense_year   = Requisition::select('cost')->whereBetween('created_at', [$startOfTheYear, $endOfTheYear])->pluck('cost')->sum();
      // $payment_year   = Installment::whereBetween('created_at', [$startOfTheYear, $endOfTheYear])->$x->get();
      //END:YEAR

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

      // BEGIN:MONTH
      $visitors_jan   = Visitor::whereBetween('created_at',['2020-01-01 00:00:00','2020-01-31 00:00:00'])->count();
      $visitors_feb   = Visitor::whereBetween('created_at',['2020-02-01 00:00:00','2020-02-31 00:00:00'])->count();
      $visitors_mar   = Visitor::whereBetween('created_at',['2020-03-01 00:00:00','2020-03-31 00:00:00'])->count();
      $visitors_apr   = Visitor::whereBetween('created_at',['2020-04-01 00:00:00','2020-04-31 00:00:00'])->count();
      $visitors_may   = Visitor::whereBetween('created_at',['2020-05-01 00:00:00','2020-05-31 00:00:00'])->count();
      $visitors_june  = Visitor::whereBetween('created_at',['2020-06-01 00:00:00','2020-06-31 00:00:00'])->count();
      $visitors_july  = Visitor::whereBetween('created_at',['2020-07-01 00:00:00','2020-07-31 00:00:00'])->count();
      $visitors_aug   = Visitor::whereBetween('created_at',['2020-08-01 00:00:00','2020-08-31 00:00:00'])->count();
      $visitors_sep   = Visitor::whereBetween('created_at',['2020-09-01 00:00:00','2020-09-31 00:00:00'])->count();
      $visitors_oct   = Visitor::whereBetween('created_at',['2020-10-01 00:00:00','2020-10-31 00:00:00'])->count();
      $visitors_nov   = Visitor::whereBetween('created_at',['2020-11-01 00:00:00','2020-11-31 00:00:00'])->count();
      $visitors_dec   = Visitor::whereBetween('created_at',['2020-12-01 00:00:00','2020-12-31 00:00:00'])->count();
      // END:MONTH

      // BEGIN:MONTH
      $enrolls_jan   = Enroll::whereBetween('created_at',['2020-01-01 00:00:00','2020-01-31 00:00:00'])->count();
      $enrolls_feb   = Enroll::whereBetween('created_at',['2020-02-01 00:00:00','2020-02-31 00:00:00'])->count();
      $enrolls_mar   = Enroll::whereBetween('created_at',['2020-03-01 00:00:00','2020-03-31 00:00:00'])->count();
      $enrolls_apr   = Enroll::whereBetween('created_at',['2020-04-01 00:00:00','2020-04-31 00:00:00'])->count();
      $enrolls_may   = Enroll::whereBetween('created_at',['2020-05-01 00:00:00','2020-05-31 00:00:00'])->count();
      $enrolls_june  = Enroll::whereBetween('created_at',['2020-06-01 00:00:00','2020-06-31 00:00:00'])->count();
      $enrolls_july  = Enroll::whereBetween('created_at',['2020-07-01 00:00:00','2020-07-31 00:00:00'])->count();
      $enrolls_aug   = Enroll::whereBetween('created_at',['2020-08-01 00:00:00','2020-08-31 00:00:00'])->count();
      $enrolls_sep   = Enroll::whereBetween('created_at',['2020-09-01 00:00:00','2020-09-31 00:00:00'])->count();
      $enrolls_oct   = Enroll::whereBetween('created_at',['2020-10-01 00:00:00','2020-10-31 00:00:00'])->count();
      $enrolls_nov   = Enroll::whereBetween('created_at',['2020-11-01 00:00:00','2020-11-31 00:00:00'])->count();
      $enrolls_dec   = Enroll::whereBetween('created_at',['2020-12-01 00:00:00','2020-12-31 00:00:00'])->count();
      // END:MONTH

      // BEGIN:MONTH
      $expense_jan   = Requisition::select('cost')->whereBetween('created_at',['2020-01-01 00:00:00','2020-01-31 00:00:00'])->pluck('cost')->sum();
      $expense_feb   = Requisition::select('cost')->whereBetween('created_at',['2020-02-01 00:00:00','2020-02-31 00:00:00'])->pluck('cost')->sum();
      $expense_mar   = Requisition::select('cost')->whereBetween('created_at',['2020-03-01 00:00:00','2020-03-31 00:00:00'])->pluck('cost')->sum();
      $expense_apr   = Requisition::select('cost')->whereBetween('created_at',['2020-04-01 00:00:00','2020-04-31 00:00:00'])->pluck('cost')->sum();
      $expense_may   = Requisition::select('cost')->whereBetween('created_at',['2020-05-01 00:00:00','2020-05-31 00:00:00'])->pluck('cost')->sum();
      $expense_june  = Requisition::select('cost')->whereBetween('created_at',['2020-06-01 00:00:00','2020-06-31 00:00:00'])->pluck('cost')->sum();
      $expense_july  = Requisition::select('cost')->whereBetween('created_at',['2020-07-01 00:00:00','2020-07-31 00:00:00'])->pluck('cost')->sum();
      $expense_aug   = Requisition::select('cost')->whereBetween('created_at',['2020-08-01 00:00:00','2020-08-31 00:00:00'])->pluck('cost')->sum();
      $expense_sep   = Requisition::select('cost')->whereBetween('created_at',['2020-09-01 00:00:00','2020-09-31 00:00:00'])->pluck('cost')->sum();
      $expense_oct   = Requisition::select('cost')->whereBetween('created_at',['2020-10-01 00:00:00','2020-10-31 00:00:00'])->pluck('cost')->sum();
      $expense_nov   = Requisition::select('cost')->whereBetween('created_at',['2020-11-01 00:00:00','2020-11-31 00:00:00'])->pluck('cost')->sum();
      $expense_dec   = Requisition::select('cost')->whereBetween('created_at',['2020-12-01 00:00:00','2020-12-31 00:00:00'])->pluck('cost')->sum();
      // END:MONTH

      // BEGIN:MONTH
      // $payment_jan   = Installment::whereBetween('created_at',['2020-01-01 00:00:00','2020-01-31 00:00:00'])->count();
      // $payment_feb   = Installment::whereBetween('created_at',['2020-02-01 00:00:00','2020-02-31 00:00:00'])->count();
      // $payment_mar   = Installment::whereBetween('created_at',['2020-03-01 00:00:00','2020-03-31 00:00:00'])->count();
      // $payment_apr   = Installment::whereBetween('created_at',['2020-04-01 00:00:00','2020-04-31 00:00:00'])->count();
      // $payment_may   = Installment::whereBetween('created_at',['2020-05-01 00:00:00','2020-05-31 00:00:00'])->count();
      // $payment_june  = Installment::whereBetween('created_at',['2020-06-01 00:00:00','2020-06-31 00:00:00'])->count();
      // $payment_july  = Installment::whereBetween('created_at',['2020-07-01 00:00:00','2020-07-31 00:00:00'])->count();
      // $payment_aug   = Installment::whereBetween('created_at',['2020-08-01 00:00:00','2020-08-31 00:00:00'])->count();
      // $payment_sep   = Installment::whereBetween('created_at',['2020-09-01 00:00:00','2020-09-31 00:00:00'])->count();
      // $payment_oct   = Installment::whereBetween('created_at',['2020-10-01 00:00:00','2020-10-31 00:00:00'])->count();
      // $payment_nov   = Installment::whereBetween('created_at',['2020-11-01 00:00:00','2020-11-31 00:00:00'])->count();
      // $payment_dec   = Installment::whereBetween('created_at',['2020-12-01 00:00:00','2020-12-31 00:00:00'])->count();
      // END:MONTH

      // BEGIN:Day
      $students_today          = Student::whereDate('created_at',$today)->count();
      $students_lastday        = Student::whereDate('created_at',$lastday)->count();
      $students_last2day       = Student::whereDate('created_at',$last2day)->count();
      $students_apr_last3day   = Student::whereDate('created_at',$last3day)->count();
      $students_may_last4day   = Student::whereDate('created_at',$last4day)->count();
      $students_june_last5day  = Student::whereDate('created_at',$last5day)->count();
      $students_july_last6day  = Student::whereDate('created_at',$last6day)->count();
      $students_aug_last7day   = Student::whereDate('created_at',$last7day)->count();
      $students_sep_last8day   = Student::whereDate('created_at',$last8day)->count();
      $students_oct_last9day   = Student::whereDate('created_at',$last9day)->count();
      $students_nov_last10day  = Student::whereDate('created_at',$last10day)->count();
      // END:Day

      // BEGIN:Day
      $visitors_today          = Visitor::whereDate('created_at',$today)->count();
      $visitors_lastday        = Visitor::whereDate('created_at',$lastday)->count();
      $visitors_last2day       = Visitor::whereDate('created_at',$last2day)->count();
      $visitors_apr_last3day   = Visitor::whereDate('created_at',$last3day)->count();
      $visitors_may_last4day   = Visitor::whereDate('created_at',$last4day)->count();
      $visitors_june_last5day  = Visitor::whereDate('created_at',$last5day)->count();
      $visitors_july_last6day  = Visitor::whereDate('created_at',$last6day)->count();
      $visitors_aug_last7day   = Visitor::whereDate('created_at',$last7day)->count();
      $visitors_sep_last8day   = Visitor::whereDate('created_at',$last8day)->count();
      $visitors_oct_last9day   = Visitor::whereDate('created_at',$last9day)->count();
      $visitors_nov_last10day  = Visitor::whereDate('created_at',$last10day)->count();
      // END:Day

      // BEGIN:Day
      $enrolls_today          = Enroll::whereDate('created_at',$today)->count();
      $enrolls_lastday        = Enroll::whereDate('created_at',$lastday)->count();
      $enrolls_last2day       = Enroll::whereDate('created_at',$last2day)->count();
      $enrolls_apr_last3day   = Enroll::whereDate('created_at',$last3day)->count();
      $enrolls_may_last4day   = Enroll::whereDate('created_at',$last4day)->count();
      $enrolls_june_last5day  = Enroll::whereDate('created_at',$last5day)->count();
      $enrolls_july_last6day  = Enroll::whereDate('created_at',$last6day)->count();
      $enrolls_aug_last7day   = Enroll::whereDate('created_at',$last7day)->count();
      $enrolls_sep_last8day   = Enroll::whereDate('created_at',$last8day)->count();
      $enrolls_oct_last9day   = Enroll::whereDate('created_at',$last9day)->count();
      $enrolls_nov_last10day  = Enroll::whereDate('created_at',$last10day)->count();
      // END:Day

      // BEGIN:Day
      $expense_today          = Requisition::select('cost')->whereDate('created_at',$today)->pluck('cost')->sum();
      $expense_lastday        = Requisition::select('cost')->whereDate('created_at',$lastday)->pluck('cost')->sum();
      $expense_last2day       = Requisition::select('cost')->whereDate('created_at',$last2day)->pluck('cost')->sum();
      $expense_apr_last3day   = Requisition::select('cost')->whereDate('created_at',$last3day)->pluck('cost')->sum();
      $expense_may_last4day   = Requisition::select('cost')->whereDate('created_at',$last4day)->pluck('cost')->sum();
      $expense_june_last5day  = Requisition::select('cost')->whereDate('created_at',$last5day)->pluck('cost')->sum();
      $expense_july_last6day  = Requisition::select('cost')->whereDate('created_at',$last6day)->pluck('cost')->sum();
      $expense_aug_last7day   = Requisition::select('cost')->whereDate('created_at',$last7day)->pluck('cost')->sum();
      $expense_sep_last8day   = Requisition::select('cost')->whereDate('created_at',$last8day)->pluck('cost')->sum();
      $expense_oct_last9day   = Requisition::select('cost')->whereDate('created_at',$last9day)->pluck('cost')->sum();
      $expense_nov_last10day  = Requisition::select('cost')->whereDate('created_at',$last10day)->pluck('cost')->sum();
      // END:Day

      // BEGIN:Day
      // $payment_today          = Installment::whereDate('created_at',$today)->count();
      // $payment_lastday        = Installment::whereDate('created_at',$lastday)->count();
      // $payment_last2day       = Installment::whereDate('created_at',$last2day)->count();
      // $payment_apr_last3day   = Installment::whereDate('created_at',$last3day)->count();
      // $payment_may_last4day   = Installment::whereDate('created_at',$last4day)->count();
      // $payment_june_last5day  = Installment::whereDate('created_at',$last5day)->count();
      // $payment_july_last6day  = Installment::whereDate('created_at',$last6day)->count();
      // $payment_aug_last7day   = Installment::whereDate('created_at',$last7day)->count();
      // $payment_sep_last8day   = Installment::whereDate('created_at',$last8day)->count();
      // $payment_oct_last9day   = Installment::whereDate('created_at',$last9day)->count();
      // $payment_nov_last10day  = Installment::whereDate('created_at',$last10day)->count();
      // END:Day



      // BEGIN:WEEK
      $students_1st_week   = Student::whereBetween('created_at',[$year . '-0'.$month . '-01 00:00:00', $year . '-0'.$month . '-07 00:00:00'])->count();
      $students_2nd_week   = Student::whereBetween('created_at',[$year . '-0'.$month . '-08 00:00:00', $year . '-0'.$month . '-14 00:00:00'])->count();
      $students_3rd_week   = Student::whereBetween('created_at',[$year . '-0'.$month . '-15 00:00:00', $year . '-0'.$month . '-21 00:00:00'])->count();
      $students_4th_week   = Student::whereBetween('created_at',[$year . '-0'.$month . '-22 00:00:00', $year . '-0'.$month . '-31 00:00:00'])->count();
      // END:WEEK


      // BEGIN:WEEK
      $visitors_1st_week   = Visitor::whereBetween('created_at',[$year . '-0'.$month . '-01 00:00:00', $year . '-0'.$month . '-07 00:00:00'])->count();
      $visitors_2nd_week   = Visitor::whereBetween('created_at',[$year . '-0'.$month . '-08 00:00:00', $year . '-0'.$month . '-14 00:00:00'])->count();
      $visitors_3rd_week   = Visitor::whereBetween('created_at',[$year . '-0'.$month . '-15 00:00:00', $year . '-0'.$month . '-21 00:00:00'])->count();
      $visitors_4th_week   = Visitor::whereBetween('created_at',[$year . '-0'.$month . '-22 00:00:00', $year . '-0'.$month . '-31 00:00:00'])->count();
      // END:WEEK


      // BEGIN:WEEK
      $enrolls_1st_week   = Enroll::whereBetween('created_at',[$year . '-0'.$month . '-01 00:00:00', $year . '-0'.$month . '-07 00:00:00'])->count();
      $enrolls_2nd_week   = Enroll::whereBetween('created_at',[$year . '-0'.$month . '-08 00:00:00', $year . '-0'.$month . '-14 00:00:00'])->count();
      $enrolls_3rd_week   = Enroll::whereBetween('created_at',[$year . '-0'.$month . '-15 00:00:00', $year . '-0'.$month . '-21 00:00:00'])->count();
      $enrolls_4th_week   = Enroll::whereBetween('created_at',[$year . '-0'.$month . '-22 00:00:00', $year . '-0'.$month . '-31 00:00:00'])->count();
      // END:WEEK


      // BEGIN:WEEK
      $expense_1st_week   = Requisition::select('cost')->whereBetween('created_at',[$year . '-0'.$month . '-01 00:00:00', $year . '-0'.$month . '-07 00:00:00'])->pluck('cost')->sum();
      $expense_2nd_week   = Requisition::select('cost')->whereBetween('created_at',[$year . '-0'.$month . '-08 00:00:00', $year . '-0'.$month . '-14 00:00:00'])->pluck('cost')->sum();
      $expense_3rd_week   = Requisition::select('cost')->whereBetween('created_at',[$year . '-0'.$month . '-15 00:00:00', $year . '-0'.$month . '-21 00:00:00'])->pluck('cost')->sum();
      $expense_4th_week   = Requisition::select('cost')->whereBetween('created_at',[$year . '-0'.$month . '-22 00:00:00', $year . '-0'.$month . '-31 00:00:00'])->pluck('cost')->sum();
      // END:WEEK


      // BEGIN:WEEK
      // $payment_1st_week   = Installment::whereBetween('created_at',[$year . '-0'.$month . '-01 00:00:00', $year . '-0'.$month . '-07 00:00:00'])->count();
      // $payment_2nd_week   = Installment::whereBetween('created_at',[$year . '-0'.$month . '-08 00:00:00', $year . '-0'.$month . '-14 00:00:00'])->count();
      // $payment_3rd_week   = Installment::whereBetween('created_at',[$year . '-0'.$month . '-15 00:00:00', $year . '-0'.$month . '-21 00:00:00'])->count();
      // $payment_4th_week   = Installment::whereBetween('created_at',[$year . '-0'.$month . '-22 00:00:00', $year . '-0'.$month . '-31 00:00:00'])->count();
      // END:WEEK




      $students_week  = Student::whereBetween('created_at', [$startOfWeek, $endOfWeek])->count();
      $visitors_week  = Visitor::whereBetween('created_at', [$startOfWeek, $endOfWeek])->count();
      $enrolls_week   = Enroll::whereBetween('created_at', [$startOfWeek, $endOfWeek])->count();
      // $payment_week   = Enroll::whereBetween('created_at', [$startOfWeek, $endOfWeek])->count();


      // PAYMENT REPORT

      $installments = Installment::all();
      $paymentMonth = 0;
      $startDate = $year . '-0'.$month . '-01 00:00:00';
      $endDate = $year . '-0'.$month . '-01 00:00:00';

      foreach ($installments as  $installment) {
        if($installment->firstInstallmentDate >= $startDate && $installment->firstInstallmentDate <= $endDate){
          $paymentMonth += $installment->firstInstallment;
        }

        if($installment->secondInstallmentCheck === 'paid' && $installment->secondInstallmentDate >= $startDate && $installment->secondInstallmentDate <= $endDate){
          $paymentMonth += $installment->secondInstallment;
        }

        if($installment->thirdInstallmentCheck === 'paid' && $installment->thirdInstallmentDate >= $startDate && $installment->thirdInstallmentDate <= $endDate){
            $paymentMonth += $installment->thirdInstallment;
        }
        if($installment->fourInstallment === 'paid' && $installment->fourInstallmentDate >= $startDate && $installment->thirdInstallmentDate <= $endDate){
            $paymentMonth += $installment->fourInstallment;
        }
        if($installment->fiveInstallmentCheck === 'paid' && $installment->fiveInstallmentDate >= $startDate && $installment->fiveInstallmentDate <= $endDate){
            $paymentMonth += $installment->fiveInstallment;
        }
      }


      // $requisition_costs = Requisition::all();
      $requisition_costs = Requisition::select('cost')->pluck('cost')->sum();

      $requisition_costs = Requisition::select('cost')->whereBetween('created_at',['2020-03-01 00:00:00', '2020-03-20 00:00:00'])->pluck('cost')->sum();



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
      'last10day',
      'students_today',
      'students_lastday',
      'students_last2day',
      'students_apr_last3day',
      'students_may_last4day',
      'students_june_last5day',
      'students_july_last6day',
      'students_aug_last7day',
      'students_sep_last8day',
      'students_oct_last9day',
      'students_nov_last10day',
      'students_1st_week',
      'students_2nd_week',
      'students_3rd_week',
      'students_4th_week',
      'visitors_year',
      'visitors_jan',
      'visitors_feb',
      'visitors_mar',
      'visitors_apr',
      'visitors_may',
      'visitors_june',
      'visitors_july',
      'visitors_aug',
      'visitors_sep',
      'visitors_oct',
      'visitors_nov',
      'visitors_dec',
      'visitors_today',
      'visitors_lastday',
      'visitors_last2day',
      'visitors_apr_last3day',
      'visitors_may_last4day',
      'visitors_june_last5day',
      'visitors_july_last6day',
      'visitors_aug_last7day',
      'visitors_sep_last8day',
      'visitors_oct_last9day',
      'visitors_nov_last10day',
      'visitors_1st_week',
      'visitors_2nd_week',
      'visitors_3rd_week',
      'visitors_4th_week',
      'visitors_week',
      'enrolls_year',
      'enrolls_jan',
      'enrolls_feb',
      'enrolls_mar',
      'enrolls_apr',
      'enrolls_may',
      'enrolls_june',
      'enrolls_july',
      'enrolls_aug',
      'enrolls_sep',
      'enrolls_oct',
      'enrolls_nov',
      'enrolls_dec',
      'enrolls_today',
      'enrolls_lastday',
      'enrolls_last2day',
      'enrolls_apr_last3day',
      'enrolls_may_last4day',
      'enrolls_june_last5day',
      'enrolls_july_last6day',
      'enrolls_aug_last7day',
      'enrolls_sep_last8day',
      'enrolls_oct_last9day',
      'enrolls_nov_last10day',
      'enrolls_1st_week',
      'enrolls_2nd_week',
      'enrolls_3rd_week',
      'enrolls_4th_week',
      'paymentMonth',
      'requisition_costs',
      'expense_today',
      'expense_lastday',
      'expense_last2day',
      'expense_apr_last3day',
      'expense_may_last4day',
      'expense_june_last5day',
      'expense_july_last6day',
      'expense_aug_last7day',
      'expense_sep_last8day',
      'expense_oct_last9day',
      'expense_nov_last10day',
      'expense_1st_week',
      'expense_2nd_week',
      'expense_3rd_week',
      'expense_4th_week',
      'expense_year',
      'expense_jan',
      'expense_feb',
      'expense_mar',
      'expense_apr',
      'expense_may',
      'expense_june',
      'expense_july',
      'expense_aug',
      'expense_sep',
      'expense_oct',
      'expense_nov',
      'expense_dec'
    ));

      // return $requisition_costs;

    }
    //END
}
