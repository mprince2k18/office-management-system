<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Logo;
use Carbon\Carbon;
use Image;

class AppSettingsController extends Controller
{

  public function __construct()
  {
      $this->middleware('auth');
      $this->middleware('outsiders');
  }


    function index()
    {
      $logos  = Logo::latest()->get();
      return view('app_settings.logo.index',compact('logos'));
    }

    // logo_create
    function logo_create(Request $request)
    {
      $last_inserted_id = Logo::insertGetId([
        'logo'=>$request->logo,
        'status'=>2,
        'created_at'=>Carbon::now(),
      ]);

      if ($request->hasFile('logo')) {
       $photo_upload     =  $request ->logo;
       $photo_extension  =  $photo_upload -> getClientOriginalExtension();
       $photo_name       =  $last_inserted_id . "." . $photo_extension;
       Image::make($photo_upload)->save(base_path('public/uploads/logo/'.$photo_name),100);
       Logo::find($last_inserted_id)->update([
       'logo'          => $photo_name,
           ]);
        }

      activity()->withProperties(['name' => $request->logo])->log('New Logo named');
      notify()->success($request->logo . ' ' . 'Added Successfully');
      return back();
    }

    // logo_delete
    function logo_delete($logo_id)
    {
      Logo::findOrFail($logo_id)->delete();

      activity()->withProperties(['name' => $logo_id])->log('Logo Deleted');
      notify()->success($logo_id . ' ' . 'Deleted Successfully');
      return back();
    }

    // logo_active
    function logo_active($logo_id)
    {

      $logos = Logo::all();

          foreach ($logos as $logo) {
            Logo::findOrFail($logo->id)->update([
              'status' => 2,
            ]);
          }

        if ($logo->status == 2) {
          Logo::findOrFail($logo_id)->update([
                'status' => 1,
              ]);
        }

      activity()->withProperties(['name' => $logo_id])->log('Logo Changes');
      notify()->success($logo_id . ' ' . 'Changed Successfully');
      return back();
    }



    // //END
}
