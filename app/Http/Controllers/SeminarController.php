<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Teacher;
use App\Course;
use App\Seminar;
use Carbon\Carbon;
use App\ApiData;
use Image;

class SeminarController extends Controller
{


  public function __construct()
  {
      $this->middleware('auth');
      $this->middleware('outsiders');
  }


  // index
  function index()
  {
    $courses= Course::all();
    $teachers= Teacher::all();
    return view('seminar.newseminar.index',compact('courses','teachers'));
  }
  // create
  function create(Request $request)
  {


      $last_inserted_id = Seminar::insertGetId([
        'name'=>$request->name,
        'phone'=>$request->phone,
        'email'=>$request->email,
        'address'=>$request->address,
        'seminar_date'=>$request->seminar_date,
        'seminar_topic'=>$request->seminar_topic,
        'seminar_representer'=>$request->seminar_representer,
        'created_at'=>Carbon::now(),
      ]);

      ApiData::create([
        'name'=>$request->name,
        'email'=>$request->email,
        'phone'=>$request->phone,
      ]);


    activity()->withProperties(['name' => $request->name])->log('New Seminar named');
    notify()->success($request->name . ' ' . 'Created Successfully');
    return back();
  }
  // all
  function all()
  {
    $seminars = Seminar::all();
    return view('seminar.allseminar.all',compact('seminars'));
  }
  // // profile
  // function profile($student_id)
  // {
  //   $student = Student::findOrFail($student_id);
  //   return view('student.profile.profile',compact('student'));
  // }
  // // edit
  // function edit($student_id)
  // {
  //   $edit_student = Student::findOrFail($student_id);
  //   return view('student.editstudent.edit',compact('edit_student'));
  // }
  // // update
  // function update(Request $request,$student_id)
  // {
  //
  //   if($request->hasFile('avatar')){
  //     if(Student::find($student_id)->avatar =='default.png'){
  //      $photo_upload     = $request->avatar;
  //      $photo_extension  =  $photo_upload->getClientOriginalExtension();
  //      $photo_name       =  $request->avatar . "." . $photo_extension;
  //      Image::make($photo_upload)->save(base_path('public/uploads/student/'.$photo_name),100);
  //      Student::find($student_id)->update([
  //      'avatar'          => $photo_name,
  //     ]);
  //     }
  //     else {
  //      //delete
  //      $delete_photo=Student::find($student_id)->avatar;
  //      unlink(base_path('public/uploads/student/'.$delete_photo));
  //      //update
  //      $photo_upload     = $request->avatar;
  //      $photo_extension  =  $photo_upload->getClientOriginalExtension();
  //      $photo_name       =  $student_id . "." . $photo_extension;
  //      Image::make($photo_upload)->save(base_path('public/uploads/student/'.$photo_name),100);
  //      Student::find($student_id)->update([
  //      'avatar'          => $photo_name,
  //     ]);
  //     }
  //  }
  //
  //
  //   Student::findOrFail($student_id)->update([
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
  //   ]);
  //
  //
  //
  //   notify()->success($request->name . ' ' . 'Updated Successfully');
  //   return back();
  // }
    //END
}
