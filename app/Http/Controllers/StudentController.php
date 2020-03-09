<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use Image;

class StudentController extends Controller
{
    // index
    function index()
    {
      return view('student.newstudent.index');
    }
    // create
    function create(Request $request)
    {

      $markets = implode(',',$request->marketplace);


      $last_inserted_id = Student::insertGetId([
        'name'=>$request->name,
        'father_name'=>$request->father_name,
        'mother_name'=>$request->mother_name,
        'email'=>$request->email,
        'gender'=>$request->gender,
        'nationality'=>$request->nationality,
        'blood_group'=>$request->blood_group,
        'occupation'=>$request->occupation,
        'dob'=>$request->dob,
        'present_address'=>$request->present_address,
        'permanent_address'=>$request->permanent_address,
        'marketplace'=>$markets,
        'phone'=>$request->phone,
        'password'=>$request->password,
        'avatar'=>$request->avatar,
        'ssc_inst'=>$request->ssc_inst,
        'ssc_board'=>$request->ssc_board,
        'ssc_subject'=>$request->ssc_subject,
        'hsc_inst'=>$request->hsc_inst,
        'hsc_board'=>$request->hsc_board,
        'hsc_subject'=>$request->hsc_subject,
        'grad_inst'=>$request->grad_inst,
        'grad_board'=>$request->grad_board,
        'grad_subject'=>$request->grad_subject,
        'masters_inst'=>$request->masters_inst,
        'masters_board'=>$request->masters_board,
        'masters_subject'=>$request->masters_subject,
      ]);

      if ($request->hasFile('avatar')) {
       $photo_upload     =  $request ->avatar;
       $photo_extension  =  $photo_upload -> getClientOriginalExtension();
       $photo_name       =  $last_inserted_id . "." . $photo_extension;
       Image::make($photo_upload)->save(base_path('public/uploads/student/'.$photo_name),100);
       Student::find($last_inserted_id)->update([
       'avatar'          => $photo_name,
           ]);
           }

      activity()->withProperties(['name' => $request->name])->log('Admitted named');
      notify()->success($request->name . ' ' . 'Admitted Successfully');
      return back();
    }
    // all
    function all()
    {
      $students = Student::all();
      return view('student.allstudent.all',compact('students'));
    }
    // profile
    function profile($student_id)
    {
      $student = Student::findOrFail($student_id);
      return view('student.profile.profile',compact('student'));
    }
    // edit
    function edit($student_id)
    {
      $edit_student = Student::findOrFail($student_id);
      return view('student.editstudent.edit',compact('edit_student'));
    }
    // update
    function update(Request $request,$student_id)
    {

      if($request->hasFile('avatar')){
        if(Student::find($student_id)->avatar =='default.png'){
         $photo_upload     = $request->avatar;
         $photo_extension  =  $photo_upload->getClientOriginalExtension();
         $photo_name       =  $request->avatar . "." . $photo_extension;
         Image::make($photo_upload)->save(base_path('public/uploads/student/'.$photo_name),100);
         Student::find($student_id)->update([
         'avatar'          => $photo_name,
        ]);
        }
        else {
         //delete
         $delete_photo=Student::find($student_id)->avatar;
         unlink(base_path('public/uploads/student/'.$delete_photo));
         //update
         $photo_upload     = $request->avatar;
         $photo_extension  =  $photo_upload->getClientOriginalExtension();
         $photo_name       =  $student_id . "." . $photo_extension;
         Image::make($photo_upload)->save(base_path('public/uploads/student/'.$photo_name),100);
         Student::find($student_id)->update([
         'avatar'          => $photo_name,
        ]);
        }
     }


      Student::findOrFail($student_id)->update([
        'name'=>$request->name,
        'father_name'=>$request->father_name,
        'mother_name'=>$request->mother_name,
        'email'=>$request->email,
        'gender'=>$request->gender,
        'nationality'=>$request->nationality,
        'blood_group'=>$request->blood_group,
        'occupation'=>$request->occupation,
        'dob'=>$request->dob,
        'present_address'=>$request->present_address,
        'permanent_address'=>$request->permanent_address,
        'marketplace'=>$request->marketplace,
        'phone'=>$request->phone,
        'password'=>$request->password,
        'ssc_inst'=>$request->ssc_inst,
        'ssc_board'=>$request->ssc_board,
        'ssc_subject'=>$request->ssc_subject,
        'hsc_inst'=>$request->hsc_inst,
        'hsc_board'=>$request->hsc_board,
        'hsc_subject'=>$request->hsc_subject,
        'grad_inst'=>$request->grad_inst,
        'grad_board'=>$request->grad_board,
        'grad_subject'=>$request->grad_subject,
        'masters_inst'=>$request->masters_inst,
        'masters_board'=>$request->masters_board,
        'masters_subject'=>$request->masters_subject,
      ]);

      notify()->success($request->name . ' ' . 'Updated Successfully');
      return back();
    }

    //END
}
