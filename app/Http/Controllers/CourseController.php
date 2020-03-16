<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
use Image;
use Carbon\Carbon;

class CourseController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
    }



  // index
  function index()
  {
    return view('course.newCourse.index');
  }
  // create
  function create(Request $request)
  {

      $last_inserted_id = Course::insertGetId([
        'course_name'=>$request->course_name,
        'course_fee'=>$request->course_fee,
        'course_outline'=>$request->course_outline,
        'course_thumb'=>$request->course_thumb,
        'created_at'=>Carbon::now(),
      ]);

        if ($request->hasFile('course_thumb')) {
                $photo_upload     =  $request ->course_thumb;
                $photo_extension  =  $photo_upload -> getClientOriginalExtension();
                $photo_name       =  $last_inserted_id . "." . $photo_extension;
                Image::make($photo_upload)->save(base_path('public/uploads/course/'.$photo_name),100);
                Course::find($last_inserted_id)->update([
                'course_thumb'          => $photo_name,
                    ]);
                    }

    // if ($request->course_outline != null) {
    //   foreach ($request->course_outline as $value) {
    //
    //     $last_inserted_id = Course::insertGetId(
    //       array(
    //         'course_name'=>$request->course_name,
    //         'course_fee'=>$request->course_fee,
    //         'course_outline'=>$value,
    //         'course_thumb'=>$request->course_thumb,
    //       )
    //     );
    //
    //
    //
    //         if ($request->hasFile('course_thumb')) {
    //          $photo_upload     =  $request ->course_thumb;
    //          $photo_extension  =  $photo_upload -> getClientOriginalExtension();
    //          $photo_name       =  $last_inserted_id . "." . $photo_extension;
    //          Image::make($photo_upload)->save(base_path('public/uploads/course/'.$photo_name),100);
    //          Course::find($last_inserted_id)->update([
    //          'course_thumb'          => $photo_name,
    //              ]);
    //              }
    //
    //   }
    // }



    activity()->withProperties(['name' => $request->course_name])->log('New course added named');
    notify()->success($request->course_name . ' ' . 'Courese Added Successfully');
    return back();
  }
  // all
  function all()
  {
    $courses = Course::all();
    return view('course.allCourses.all',compact('courses'));
  }
  // profile
  function profile($course_id)
  {
    $course = Course::findOrFail($course_id);
    return view('course.profile.profile',compact('course'));
  }
  // edit
  function edit($course_id)
  {
    $edit_course = Course::findOrFail($course_id);
    return view('course.editCourse.edit',compact('edit_course'));
  }
  // update
  function update(Request $request,$course_id)
  {

    if($request->hasFile('course_thumb')){
      if(Course::find($course_id)->course_thumb =='default.png'){
       $photo_upload     = $request->course_thumb;
       $photo_extension  =  $photo_upload->getClientOriginalExtension();
       $photo_name       =  $request->avatar . "." . $photo_extension;
       Image::make($photo_upload)->save(base_path('public/uploads/course/'.$photo_name),100);
       Course::find($course_id)->update([
       'course_thumb'          => $photo_name,
      ]);
      }
      else {
       //delete
       $delete_photo=Course::find($course_id)->course_thumb;
       unlink(base_path('public/uploads/course/'.$delete_photo));
       //update
       $photo_upload     = $request->course_thumb;
       $photo_extension  =  $photo_upload->getClientOriginalExtension();
       $photo_name       =  $course_id . "." . $photo_extension;
       Image::make($photo_upload)->save(base_path('public/uploads/course/'.$photo_name),100);
       Course::find($course_id)->update([
       'course_thumb'          => $photo_name,
      ]);
      }
   }

    Course::findOrFail($course_id)->update([
      'course_name'=>$request->course_name,
      'course_fee'=>$request->course_fee,
      'course_outline'=>$request->course_outline,
      'updated_at'=>Carbon::now(),
    ]);

    activity()->withProperties(['name' => $request->course_name])->log('Course Updated');
    notify()->success($request->name . ' ' . 'Updated Successfully');
    return back();
  }

  //END
}
