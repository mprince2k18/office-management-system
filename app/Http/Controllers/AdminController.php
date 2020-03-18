<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Hash;
use App\Role;

class AdminController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('outsiders');
    }

    function index()
    {
      $roles = Role::all();
      return view('admin.newuser.index',compact('roles'));
    }

    function role_create(Request $request)
    {
      Role::insert([
        'role_name' =>$request->role_name,
        'role_details' =>$request->role_details,
      ]);

      activity()->withProperties(['name' => $request->role_name])->log('New Role Added named');
      notify()->success($request->role_name . ' ' . 'Added Successfully');
      return back();
    }



    function user_create(Request $request)
    {
      User::insert([
        'name' =>$request->name,
        'email' =>$request->email,
        'password' =>bcrypt($request->password),
        'role_id' =>$request->role_id,
      ]);

      activity()->withProperties(['name' => $request->name])->log('New User Added named');
      notify()->success($request->name . ' ' . 'Added Successfully');
      return back();
    }

    //END
}
