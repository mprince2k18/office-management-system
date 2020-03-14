<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;
use Carbon\Carbon;
use Image;

class EmployeeController extends Controller
{

  public function __construct()
  {
      $this->middleware('auth');
  }


  // index
  function index()
  {
    return view('employee.newemployee.index');
  }
  // create
  function create(Request $request)
  {



    $last_inserted_id = Employee::insertGetId([
      'name'=>$request->name,
      'phone'=>$request->phone,
      'address'=>$request->address,
      'photo'=>$request->photo,
      'designation'=>$request->designation,
      'salary'=>$request->salary,
      'duties'=>$request->duties,
      'created_at'=>Carbon::now(),

    ]);

    if ($request->hasFile('photo')) {
     $photo_upload     =  $request ->photo;
     $photo_extension  =  $photo_upload -> getClientOriginalExtension();
     $photo_name       =  $last_inserted_id . "." . $photo_extension;
     Image::make($photo_upload)->save(base_path('public/uploads/employee/'.$photo_name),100);
     Employee::find($last_inserted_id)->update([
     'photo'          => $photo_name,
         ]);
         }


    activity()->withProperties(['name' => $request->name])->log('New Employee named');
    notify()->success($request->name . ' ' . 'Admitted Successfully');
    return back();
  }

    //END
}
