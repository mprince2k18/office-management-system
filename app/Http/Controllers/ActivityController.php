<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Activitylog\Models\Activity;
use App\Student;
use Carbon\Carbon;

class ActivityController extends Controller
{
  // index
  function index()
  {

    $today =  Carbon::now();
    $activities = Activity::latest()->paginate(20);
    $students_count   = Student::count();

    $student_today = Student::where('created_at',$today)->count();


    // echo $student_today->format('m');
    // echo $today;
    return view('activitylog.index',compact('activities','students_count'));
  }


      // searchLog
      function searchLog(Request $request)
      {
        $afterSearch = '';
              if($request->from == '' && $request->to ==''){

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
