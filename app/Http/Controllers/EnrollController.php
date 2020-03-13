<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\Course;
use App\Batch;
use App\Enroll;
use App\Installment;
use Carbon\Carbon;

class EnrollController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


  // index
  function index()
  {
    $courses = Course::all();
    $students = Student::all();
    $batchs = Batch::all();
    return view('enrollment.newenroll.index',compact('courses','students','batchs'));
  }
  // courseFee
  function courseFee(Request $request)
  {

        $x = Course::where('id',$request->course_id)->get();

        $dataSend ='';
        foreach ($x as $xs) {
          $dataSend .= "<input type='number' value='$xs->course_fee' class='form-control' placeholder='Course Fee' name='course_fee' id='value1' required readonly>";
        }

        return $dataSend;
  }
  // create
  function create(Request $request)
  {

      $last_inserted_id = Enroll::insertGetId([
      'student_name'=>$request->student_name,
      'course_name'=>$request->course_name,
      'course_fee'=>$request->course_fee,
      'student_roll'=>$request->student_roll,
      'batch_no'=>$request->batch_no,
      'sum'=>$request->sum,
      'created_at'=>Carbon::now(),
    ]);

      Installment::insert([
      'enroll_id'=>$last_inserted_id,
      'student_id'=>$request->student_name,
      'course_discount'=>$request->course_discount,
      'firstInstallment'=>$request->firstInstallment,
      'firstInstallmentDate'=>$request->firstInstallmentDate,
      'secondInstallment'=>$request->secondInstallment,
      'secondInstallmentCheck'=>'due',
      'secondInstallmentDate'=>$request->secondInstallmentDate,
      'thirdInstallment'=>$request->thirdInstallment,
      'thirdInstallmentCheck'=>'due',
      'thirdInstallmentDate'=>$request->thirdInstallmentDate,
      'fourInstallment'=>$request->fourInstallment,
      'fourInstallmentCheck'=>'due',
      'fourInstallmentDate'=>$request->fourInstallmentDate,
      'fiveInstallment'=>$request->fiveInstallment,
      'fiveInstallmentCheck'=>'due',
      'fiveInstallmentDate'=>$request->fiveInstallmentDate,
      'created_at'=>Carbon::now(),
    ]);



    activity()->withProperties(['name' => $request->student_name])->log('Student enrolled course named');
    notify()->success($request->student_name . ' ' . 'Enrolled Successfully Successfully');
    return back();
  }
  // all
  function all()
  {
    $enrolls = Enroll::all();
    return view('enrollment.allenroll.all',compact('enrolls','installments'));
  }
  // profile
  function profile($enroll_id)
  {
    $enroll = Enroll::findOrFail($enroll_id);
    $installments = Installment::findOrFail($enroll_id);

    return view('enrollment.profile.profile',compact('enroll','installments'));
  }
  // edit
  function edit($enroll_id)
  {
    $edit_installment = Installment::findOrFail($enroll_id);
    $enroll = Enroll::findOrFail($enroll_id);



    return view('enrollment.editenroll.edit',compact('edit_installment','enroll'));
  }
  // update
  function update(Request $request,$enroll_id)
  {

    $last_inserted_id = Installment::findOrFail($enroll_id)->update([
      'firstInstallment'=>$request->firstInstallment,
      'firstInstallmentDate'=>$request->firstInstallmentDate,
      'secondInstallment'=>$request->secondInstallment,
      'secondInstallmentCheck'=>$request->secondInstallmentCheck,
      'secondInstallmentDate'=>$request->secondInstallmentDate,
      'thirdInstallment'=>$request->thirdInstallment,
      'thirdInstallmentCheck'=>$request->thirdInstallmentCheck,
      'thirdInstallmentDate'=>$request->thirdInstallmentDate,
      'fourInstallment'=>$request->fourInstallment,
      'fourInstallmentCheck'=>$request->fourInstallmentCheck,
      'fourInstallmentDate'=>$request->fourInstallmentDate,
      'fiveInstallment'=>$request->fiveInstallment,
      'fiveInstallmentCheck'=>$request->fiveInstallmentCheck,
      'fiveInstallmentDate'=>$request->fiveInstallmentDate,
      'updated_at'=>Carbon::now(),
    ]);

    activity()->withProperties(['name' => $request->name])->log('Student Installment updated');
    notify()->success($request->name . ' ' . 'Updated Successfully');
    return back();
  }

  //END
}
