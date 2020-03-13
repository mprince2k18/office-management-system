<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Activitylog\Models\Activity;
use App\Student;
use App\Teacher;
use App\Visitor;
use App\Enroll;
use Carbon\Carbon;

class ActivityController extends Controller
{

  public function __construct()
  {
      $this->middleware('auth');
  }


  // index
  function index()
  {

    $today         =  Carbon::now();
    $yesterday     =  Carbon::yesterday();
    $last2daysAgo  =  Carbon::now()->subDay(2)->format('Y-m-d');
    $last3daysAgo  =  Carbon::now()->subDay(3)->format('Y-m-d');
    $last4daysAgo  =  Carbon::now()->subDay(4)->format('Y-m-d');
    $last5daysAgo  =  Carbon::now()->subDay(5)->format('Y-m-d');
    $last6daysAgo  =  Carbon::now()->subDay(6)->format('Y-m-d');

    $activities = Activity::latest()->paginate(20);

    $students_count       = Student::count();
    $teachers_count       = Teacher::count();
    $visitors_count       = Visitor::count();
    $enrolled_count       = Enroll::count();

    $student_today           = Student::where('created_at',$today)->count();
    $student_yesterday       = Student::where('created_at',$yesterday)->count();
    $student_last2daysAgo    = Student::where('created_at',$last2daysAgo)->count();
    $student_last3daysAgo    = Student::where('created_at',$last3daysAgo)->count();
    $student_last4daysAgo    = Student::where('created_at',$last4daysAgo)->count();
    $student_last5daysAgo    = Student::where('created_at',$last5daysAgo)->count();
    $student_last6daysAgo    = Student::where('created_at',$last6daysAgo)->count();


    $teacher_today           = Teacher::where('created_at',$today)->count();
    $teacher_yesterday       = Teacher::where('created_at',$yesterday)->count();
    $teacher_last2daysAgo    = Teacher::where('created_at',$last2daysAgo)->count();
    $teacher_last3daysAgo    = Teacher::where('created_at',$last3daysAgo)->count();
    $teacher_last4daysAgo    = Teacher::where('created_at',$last4daysAgo)->count();
    $teacher_last5daysAgo    = Teacher::where('created_at',$last5daysAgo)->count();
    $teacher_last6daysAgo    = Teacher::where('created_at',$last6daysAgo)->count();


    $visitor_today           = Visitor::where('created_at',$today)->count();
    $visitor_yesterday       = Visitor::where('created_at',$yesterday)->count();
    $visitor_last2daysAgo    = Visitor::where('created_at',$last2daysAgo)->count();
    $visitor_last3daysAgo    = Visitor::where('created_at',$last3daysAgo)->count();
    $visitor_last4daysAgo    = Visitor::where('created_at',$last4daysAgo)->count();
    $visitor_last5daysAgo    = Visitor::where('created_at',$last5daysAgo)->count();
    $visitor_last6daysAgo    = Visitor::where('created_at',$last6daysAgo)->count();

    $enrolled_today           = Enroll::where('created_at',$today)->count();
    $enrolled_yesterday       = Enroll::where('created_at',$yesterday)->count();
    $enrolled_last2daysAgo    = Enroll::where('created_at',$last2daysAgo)->count();
    $enrolled_last3daysAgo    = Enroll::where('created_at',$last3daysAgo)->count();
    $enrolled_last4daysAgo    = Enroll::where('created_at',$last4daysAgo)->count();
    $enrolled_last5daysAgo    = Enroll::where('created_at',$last5daysAgo)->count();
    $enrolled_last6daysAgo    = Enroll::where('created_at',$last6daysAgo)->count();


    return view('activitylog.index',compact(
      'activities',
      'students_count',
      'teachers_count',
      'visitors_count',
      'enrolled_count',
      'student_today',
      'student_yesterday',
      'student_last2daysAgo',
      'student_last3daysAgo',
      'student_last4daysAgo',
      'student_last5daysAgo',
      'student_last6daysAgo',
      'teacher_today',
      'teacher_yesterday',
      'teacher_last2daysAgo',
      'teacher_last3daysAgo',
      'teacher_last4daysAgo',
      'teacher_last5daysAgo',
      'teacher_last6daysAgo',

      'visitor_today',
      'visitor_yesterday',
      'visitor_last2daysAgo',
      'visitor_last3daysAgo',
      'visitor_last4daysAgo',
      'visitor_last5daysAgo',
      'visitor_last6daysAgo',

      'enrolled_today',
      'enrolled_yesterday',
      'enrolled_last2daysAgo',
      'enrolled_last3daysAgo',
      'enrolled_last4daysAgo',
      'enrolled_last5daysAgo',
      'enrolled_last6daysAgo'
    ));
  }


      // searchLog
      function searchLog(Request $request)
      {
        $afterSearch = '';
              if($request->from == '' && $request->to ==''){

                  $from = date($request->from); //cant empy
                  $to = date($request->to);  //cant empy
                  $userName = $request->userName; //
                  // $transactionId = $request->transactionId;

                  $afterSearch = Activity::where('properties', 'LIKE', "%" . $userName . "%")
                  ->paginate(30);
                  // echo $afterSearch;
                  return view('activitylog.searchResult',compact('afterSearch'));
              }
              else{
                $from = date($request->from); //cant empy
                $to = date($request->to);  //cant empy
                $userName = $request->userName; //
                // $transactionId = $request->transactionId;
                $afterSearch = Activity::whereBetween('created_at',[$from,$to])
                ->paginate(30);
                return view('activitylog.searchResult',compact('afterSearch'));


                // echo $afterSearch;
      }
      }
    //END
}
