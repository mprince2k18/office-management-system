<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Requisition;
use App\Employee;
use Carbon\Carbon;
use Image;

class RequisitionController extends Controller
{

  public function __construct()
  {
      $this->middleware('auth');
      $this->middleware('outsiders');
  }


  // index
  function index()
  {
    $employees = Employee::all();
    return view('requisition.newrequisition.index',compact('employees'));
  }

  // create
  function create(Request $request)
  {

    $last_inserted_id = Requisition::insertGetId([
      'for_whom'=>$request->for_whom,
      'buy_from'=>$request->buy_from,
      'cost'=>$request->cost,
      'quantity'=>$request->quantity,
      'transport_fee'=>$request->transport_fee,
      'payment_source'=>$request->payment_source,
      'assigned_person'=>$request->assigned_person,
      'money_receipt'=>$request->money_receipt,
      'note'=>$request->note,
      'created_at'=>Carbon::now(),
    ]);

    if ($request->hasFile('money_receipt')) {
     $photo_upload     =  $request ->money_receipt;
     $photo_extension  =  $photo_upload -> getClientOriginalExtension();
     $photo_name       =  $last_inserted_id . "." . $photo_extension;
     Image::make($photo_upload)->save(base_path('public/uploads/requisition/'.$photo_name),100);
     Requisition::find($last_inserted_id)->update([
     'money_receipt'          => $photo_name,
         ]);
      }

    activity()->withProperties(['name' => $request->for_whom])->log('New Requisition named');
    notify()->success($request->for_whom . ' ' . 'Requisition Successfully');
    return back();
  }


  // all
  function all()
  {
    $requisitions = Requisition::all();
    return view('requisition.allrequisition.all',compact('requisitions'));
  }

  // profile
  function profile($requisition_id)
  {
    $requisition = Requisition::findOrFail($requisition_id);
    return view('requisition.profile.profile',compact('requisition'));
  }


    // edit
    function edit($requisition_id)
    {
      $employees = Employee::all();
      $edit_requisition = Requisition::findOrFail($requisition_id);
      return view('requisition.editrequisition.edit',compact('edit_requisition','employees'));
    }




      // update
      function update(Request $request, $requisition_id)
      {

        if($request->hasFile('money_receipt')){
          if(Requisition::find($requisition_id)->money_receipt =='default.png'){
           $photo_upload     = $request->money_receipt;
           $photo_extension  =  $photo_upload->getClientOriginalExtension();
           $photo_name       =  $request->money_receipt . "." . $photo_extension;
           Image::make($photo_upload)->save(base_path('public/uploads/requisition/'.$photo_name),100);
           Requisition::find($requisition_id)->update([
           'money_receipt'          => $photo_name,
          ]);
          }
          else {
           //delete
           $delete_photo=Requisition::find($requisition_id)->money_receipt;
           unlink(base_path('public/uploads/requisition/'.$delete_photo));
           //update
           $photo_upload     = $request->money_receipt;
           $photo_extension  =  $photo_upload->getClientOriginalExtension();
           $photo_name       =  $requisition_id . "." . $photo_extension;
           Image::make($photo_upload)->save(base_path('public/uploads/requisition/'.$photo_name),100);
           Requisition::find($requisition_id)->update([
           'money_receipt'          => $photo_name,
          ]);
          }
       }

        Requisition::findOrFail($requisition_id)->update([
          'for_whom'=>$request->for_whom,
          'buy_from'=>$request->buy_from,
          'cost'=>$request->cost,
          'quantity'=>$request->quantity,
          'transport_fee'=>$request->transport_fee,
          'payment_source'=>$request->payment_source,
          'assigned_person'=>$request->assigned_person,
          'note'=>$request->note,
          'updated_at'=>Carbon::now(),
        ]);

        activity()->withProperties(['name' => $request->for_whom])->log('New Requisition Updated');
        notify()->success($request->for_whom . ' ' . 'Updated Successfully');
        return redirect('requisition/profile/'.$requisition_id);
      }


  // download
  function download($requisition_id)
  {
    $file_name = Requisition::findOrFail($requisition_id)->money_receipt;
    $path = public_path('uploads/requisition/'.$file_name);
    return response()->download($path);
    // echo $file_name;
  }


    //END
}
