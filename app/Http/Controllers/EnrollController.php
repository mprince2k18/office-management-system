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
      'course_discount'=>$request->course_discount,
      'sum'=>$request->sum,
      'created_at'=>Carbon::now(),
    ]);

      Installment::insert([
      'enroll_id'=>$last_inserted_id,
      'student_id'=>$request->student_name,
      'firstInstallment'=>$request->firstInstallment,
      'firstInstallmentDate'=>$request->firstInstallmentDate,
      'secondInstallment'=>$request->secondInstallment,
      'secondInstallmentDate'=>$request->secondInstallmentDate,
      'thirdInstallment'=>$request->thirdInstallment,
      'thirdInstallmentDate'=>$request->thirdInstallmentDate,
      'fourInstallment'=>$request->fourInstallment,
      'fourInstallmentDate'=>$request->fourInstallmentDate,
      'fiveInstallment'=>$request->fiveInstallment,
      'fiveInstallmentDate'=>$request->fiveInstallmentDate,
      'created_at'=>Carbon::now(),
    ]);



    activity()->withProperties(['name' => $request->student_name])->log('Student enrolled course named');
    notify()->success($request->student_name . ' ' . 'Enrolled Successfully Successfully');
    return back();
  }
  // // all
  // function all()
  // {
  //   $teachers = Teacher::all();
  //   return view('teacher.allTeacher.all',compact('teachers'));
  // }
  // // profile
  // function profile($teacher_id)
  // {
  //   $teacher = Teacher::findOrFail($teacher_id);
  //   return view('teacher.profile.profile',compact('teacher'));
  // }
  // // edit
  // function edit($teacher_id)
  // {
  //   $edit_teacher = Teacher::findOrFail($teacher_id);
  //   return view('teacher.editTeacher.edit',compact('edit_teacher'));
  // }
  // // update
  // function update(Request $request,$teacher_id)
  // {
  //
  //   if($request->hasFile('avatar')){
  //     if(Teacher::find($teacher_id)->avatar =='default.png'){
  //      $photo_upload     = $request->avatar;
  //      $photo_extension  =  $photo_upload->getClientOriginalExtension();
  //      $photo_name       =  $request->avatar . "." . $photo_extension;
  //      Image::make($photo_upload)->save(base_path('public/uploads/teacher/'.$photo_name),100);
  //      Teacher::find($teacher_id)->update([
  //      'avatar'          => $photo_name,
  //     ]);
  //     }
  //     else {
  //      //delete
  //      $delete_photo=Teacher::find($teacher_id)->avatar;
  //      unlink(base_path('public/uploads/teacher/'.$delete_photo));
  //      //update
  //      $photo_upload     = $request->avatar;
  //      $photo_extension  =  $photo_upload->getClientOriginalExtension();
  //      $photo_name       =  $teacher_id . "." . $photo_extension;
  //      Image::make($photo_upload)->save(base_path('public/uploads/teacher/'.$photo_name),100);
  //      Teacher::find($teacher_id)->update([
  //      'avatar'          => $photo_name,
  //     ]);
  //     }
  //  }
  //
  //
  //   Teacher::findOrFail($teacher_id)->update([
  //     'name'=>$request->name,
  //     'father_name'=>$request->father_name,
  //     'mother_name'=>$request->mother_name,
  //     'email'=>$request->email,
  //     'gender'=>$request->gender,
  //     'nationality'=>$request->nationality,
  //     'blood_group'=>$request->blood_group,
  //     'occupation'=>$request->occupation,
  //     'dob'=>$request->dob,
  //     'present_address'=>$request->present_address,
  //     'permanent_address'=>$request->permanent_address,
  //     'marketplace'=>$request->marketplace,
  //     'phone'=>$request->phone,
  //     'password'=>$request->password,
  //     'ssc_inst'=>$request->ssc_inst,
  //     'ssc_board'=>$request->ssc_board,
  //     'ssc_subject'=>$request->ssc_subject,
  //     'ssc_passing'=>$request->ssc_passing,
  //     'hsc_inst'=>$request->hsc_inst,
  //     'hsc_board'=>$request->hsc_board,
  //     'hsc_subject'=>$request->hsc_subject,
  //     'hsc_passing'=>$request->hsc_passing,
  //     'grad_inst'=>$request->grad_inst,
  //     'grad_board'=>$request->grad_board,
  //     'grad_subject'=>$request->grad_subject,
  //     'grad_passing'=>$request->grad_passing,
  //     'masters_inst'=>$request->masters_inst,
  //     'masters_board'=>$request->masters_board,
  //     'masters_subject'=>$request->masters_subject,
  //     'masters_passing'=>$request->masters_passing,
  //     'assigned_course'=>$request->assigned_course,
  //     'updated_at'=>Carbon::now(),
  //   ]);
  //
  //   activity()->withProperties(['name' => $request->name])->log('trainer profile updated');
  //   notify()->success($request->name . ' ' . 'Updated Successfully');
  //   return back();
  // }

  //END
}
