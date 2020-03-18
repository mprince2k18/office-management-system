<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;
use App\Designation;
use App\Duties;
use Carbon\Carbon;
use Image;

class EmployeeController extends Controller
{

  public function __construct()
  {
      $this->middleware('auth');
      $this->middleware('outsiders');
  }


  // index
  function index()
  {
    $designations = Designation::all();
    $duties = Duties::all();
    return view('employee.newemployee.index',compact('designations','duties'));
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


  // all
  function all()
  {
    $employees = Employee::all();
    return view('employee.allemployee.all',compact('employees'));
  }

  // profile
  function profile($employee_id)
  {
    $employee = Employee::findOrFail($employee_id);
    return view('employee.profile.profile',compact('employee'));
  }


  // edit
  function edit($employee_id)
  {
    $edit_employee = Employee::findOrFail($employee_id);
    $designations = Designation::all();
    $duties = Duties::all();
    return view('employee.editemployee.edit',compact('edit_employee','designations','duties'));
  }



  // update
  function update(Request $request, $employee_id)
  {

    if($request->hasFile('photo')){
      if(Employee::find($employee_id)->photo =='default.png'){
       $photo_upload     = $request->photo;
       $photo_extension  =  $photo_upload->getClientOriginalExtension();
       $photo_name       =  $request->avatar . "." . $photo_extension;
       Image::make($photo_upload)->save(base_path('public/uploads/employee/'.$photo_name),100);
       Employee::find($employee_id)->update([
       'photo'          => $photo_name,
      ]);
      }
      else {
       //delete
       $delete_photo=Employee::find($employee_id)->photo;
       unlink(base_path('public/uploads/employee/'.$delete_photo));
       //update
       $photo_upload     = $request->photo;
       $photo_extension  =  $photo_upload->getClientOriginalExtension();
       $photo_name       =  $employee_id . "." . $photo_extension;
       Image::make($photo_upload)->save(base_path('public/uploads/employee/'.$photo_name),100);
       Employee::find($employee_id)->update([
       'photo'          => $photo_name,
      ]);
      }
   }

    Employee::findOrFail($employee_id)->update([
      'name'=>$request->name,
      'phone'=>$request->phone,
      'address'=>$request->address,
      'designation'=>$request->designation,
      'salary'=>$request->salary,
      'duties'=>$request->duties,
      'updated_at'=>Carbon::now(),
    ]);

    activity()->withProperties(['name' => $request->name])->log('Employee Updated');
    notify()->success($request->name . ' ' . 'Updated Successfully');
    return back();
  }


  // designation_create
    function designation_create(Request $request)
    {
      Designation::insertGetId([
        'name'=>$request->name,
        'created_at'=>Carbon::now(),
      ]);

      activity()->withProperties(['name' => $request->name])->log('New Designation Added');
      notify()->success($request->name . ' ' . 'Added Successfully');
      return back();
    }

  // duties_create
    function duties_create(Request $request)
    {
      Duties::insertGetId([
        'name'=>$request->name,
        'created_at'=>Carbon::now(),
      ]);

      activity()->withProperties(['name' => $request->name])->log('New Duties Added');
      notify()->success($request->name . ' ' . 'Added Successfully');
      return back();
    }







    //END
}
