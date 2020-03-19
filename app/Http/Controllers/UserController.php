<?php

namespace App\Http\Controllers\UserManager;
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Group;
use App\Http\Controllers\Controller;
use App\User;
use App\UserHasGroup;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
  public function __construct(){
        // $this->middleware('auth');
    }

    public  function index(){
        $users = User::with('groups')->get();
        return view('userManager.user.index')->with('users',$users);
    }

    public function create(){
        $groups = Group::all();
        return view('userManager.user.create')->with('groups',$groups);
    }

    public function store(Request $request){
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
        $user =new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        if ($user->save()) {
            if($request->group_id != null){
                $user->assignGroup($request->group_id);

                activity()->withProperties(['name' => $request->name])->log('New User named');
                notify()->success($request->name . ' ' . 'User Successfully');
                return back();
            }
            activity()->withProperties(['name' => $request->name])->log('New User named');
            notify()->success($request->name . ' ' . 'User Successfully');
            return back();
        } else {

          activity()->withProperties(['name' => $request->name])->log('New User named');
          notify()->error($request->name . ' ' . 'User Successfully');
          return back();

        }
    }

    public  function show($id){
        try{
            $user = User::where('id',$id)->with('groups')->first();
            return view('userManager.user.show')->with('user',$user);
        }catch(Exception $e){
            return redirect()->back()->with('failed', 'There are Some Problem Try again '.$e);
        }
    }

    public function edit($id)
    {
        try{
            $groupss =Group::all();
            $user = User::where('id',$id)->with('groups')->first();
            return view('userManager.user.edit')->with('user',$user)->with('groupss',$groupss);
        }catch(Exception $e){
            return redirect()->back()->with('failed', 'There are Some Problem Try again '.$e);
        }

    }

    public function update(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],

        ]);
        try {
            $user = User::where('id', $request->id)->update([
                'name' => $request->name,
                'email' =>$request->email,

            ]);
            //delete old data form group_has_permission table
            UserHasGroup::where('user_id',$request->id)->delete();
            //after delete add new data in group_has_permission table
            foreach ($request->group_id as $id){
                $gpc = new UserHasGroup();
                $gpc->group_id = $id;
                $gpc->user_id = $request->id;
                $gpc->updated_at = Carbon::now();
                $gpc->save();
            }

            if ($user) {
                return redirect()->back()->with('success', 'User Update Successfully');
            } else {
                return redirect()->back()->with('failed', 'There are Some Problem Try again ');
            }
        } catch (Exception $e) {
            return redirect()->back()->with('failed', 'There are Some Problem Try again ' . $e);
        }

    }


    public function destroy($id)
    {
        try{
            if (User::where('id', $id)->delete() && UserHasGroup::where('user_id',$id)->delete())  {
                return redirect()->back()->with('success', 'User Delete Successfully');
            } else {
                return redirect()->back()->with('failed', 'There are Some Problem Try again ');
            }
        }catch(Exception $e){
            return redirect()->back()->with('failed', 'There are Some Problem Try again '.$e);
        }

    }
    //END
}
