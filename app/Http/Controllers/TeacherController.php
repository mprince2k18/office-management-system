<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Teacher;
use App\Course;
use App\ApiData;
use Image;
use Carbon\Carbon;

class TeacherController extends Controller
{

  public function __construct()
  {
      $this->middleware('auth');
      $this->middleware('outsiders');
  }



  // index
  function index()
  {
    $courses = Course::all();

    return view('teacher.newTeacher.index',compact('courses'));
  }
  // create
  function create(Request $request)
  {

    $markets = $request->marketplace;
//     $a = array();
//
// $last_names = array_column($a, 'last_name');
// print_r($last_names);

// foreach ($markets as $market) {
//   json_encode($markets);
// }

// return json_encode($markets);

    $last_inserted_id = Teacher::insertGetId([
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
      'marketplace'=>json_encode($markets),
      'phone'=>$request->phone,
      'password'=>$request->password,
      'ssc_inst'=>$request->ssc_inst,
      'ssc_board'=>$request->ssc_board,
      'ssc_subject'=>$request->ssc_subject,
      'ssc_passing'=>$request->ssc_passing,
      'hsc_inst'=>$request->hsc_inst,
      'hsc_board'=>$request->hsc_board,
      'hsc_subject'=>$request->hsc_subject,
      'hsc_passing'=>$request->hsc_passing,
      'grad_inst'=>$request->grad_inst,
      'grad_board'=>$request->grad_board,
      'grad_subject'=>$request->grad_subject,
      'grad_passing'=>$request->grad_passing,
      'masters_inst'=>$request->masters_inst,
      'masters_board'=>$request->masters_board,
      'masters_subject'=>$request->masters_subject,
      'masters_passing'=>$request->masters_passing,
      'assigned_course'=>$request->assigned_course,
      'avatar'=>$request->avatar,
      'created_at'=>Carbon::now(),
    ]);

    if ($request->hasFile('avatar')) {
     $photo_upload     =  $request ->avatar;
     $photo_extension  =  $photo_upload -> getClientOriginalExtension();
     $photo_name       =  $last_inserted_id . "." . $photo_extension;
     Image::make($photo_upload)->save(base_path('public/uploads/teacher/'.$photo_name),100);
     Teacher::find($last_inserted_id)->update([
     'avatar'          => $photo_name,
         ]);
         }

         ApiData::create([
           'name'=>$request->name,
           'email'=>$request->email,
           'phone'=>$request->phone,
         ]);

    activity()->withProperties(['name' => $request->name])->log('New trainer joined named');
    notify()->success($request->name . ' ' . 'Admitted Successfully');
    return back();
  }
  // all
  function all()
  {
    $teachers = Teacher::all();
    return view('teacher.allTeacher.all',compact('teachers'));
  }
  // profile
  function profile($teacher_id)
  {
    $teacher = Teacher::findOrFail($teacher_id);
    // dd(json_decode($teacher->marketplace));
    $x = json_decode($teacher->marketplace);
    $y=[];
    foreach ($x as $xs) {
      array_push($y,$xs);
    }
    return view('teacher.profile.profile',compact('teacher','y'));
  }
  // edit
  function edit($teacher_id)
  {
    $edit_teacher = Teacher::findOrFail($teacher_id);
    $x = json_decode($edit_teacher->marketplace);
    $y=[];
    foreach ($x as $xs) {
      array_push($y,$xs);
    }
    return view('teacher.editTeacher.edit',compact('edit_teacher','y'));
  }
  // update
  function update(Request $request,$teacher_id)
  {

    if($request->hasFile('avatar')){
      if(Teacher::find($teacher_id)->avatar =='default.png'){
       $photo_upload     = $request->avatar;
       $photo_extension  =  $photo_upload->getClientOriginalExtension();
       $photo_name       =  $request->avatar . "." . $photo_extension;
       Image::make($photo_upload)->save(base_path('public/uploads/teacher/'.$photo_name),100);
       Teacher::find($teacher_id)->update([
       'avatar'          => $photo_name,
      ]);
      }
      else {
       //delete
       $delete_photo=Teacher::find($teacher_id)->avatar;
       unlink(base_path('public/uploads/teacher/'.$delete_photo));
       //update
       $photo_upload     = $request->avatar;
       $photo_extension  =  $photo_upload->getClientOriginalExtension();
       $photo_name       =  $teacher_id . "." . $photo_extension;
       Image::make($photo_upload)->save(base_path('public/uploads/teacher/'.$photo_name),100);
       Teacher::find($teacher_id)->update([
       'avatar'          => $photo_name,
      ]);
      }
   }


    Teacher::findOrFail($teacher_id)->update([
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
      'ssc_passing'=>$request->ssc_passing,
      'hsc_inst'=>$request->hsc_inst,
      'hsc_board'=>$request->hsc_board,
      'hsc_subject'=>$request->hsc_subject,
      'hsc_passing'=>$request->hsc_passing,
      'grad_inst'=>$request->grad_inst,
      'grad_board'=>$request->grad_board,
      'grad_subject'=>$request->grad_subject,
      'grad_passing'=>$request->grad_passing,
      'masters_inst'=>$request->masters_inst,
      'masters_board'=>$request->masters_board,
      'masters_subject'=>$request->masters_subject,
      'masters_passing'=>$request->masters_passing,
      'assigned_course'=>$request->assigned_course,
      'updated_at'=>Carbon::now(),
    ]);

    activity()->withProperties(['name' => $request->name])->log('trainer profile updated');
    notify()->success($request->name . ' ' . 'Updated Successfully');
    return back();
  }

  //END
}
