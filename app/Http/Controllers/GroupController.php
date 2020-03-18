<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\GropuHasPermission;
use App\Http\Controllers\Controller;
use Junges\ACL\Http\Models\Group;
use Illuminate\Support\Str;
use Junges\ACL\Http\Models\Permission;


class GroupController extends Controller
{

  public function __construct(){
        // $this->middleware('auth');
    }

    public function index()
    {
        $groups = Group::with('permissions')->get();
        return view('userManager.group.index')->with('groups',$groups);
    }


    public function create()
    {
        $permissions = Permission::all();
        return view('userManager.group.create')->with('permissions',$permissions);
    }


    public function store(Request $request)
    {
        $request->validate([
            'name'=>['required','string','unique:groups','max:255'],
        ]);
        $group = new Group();
        $group->name = $request->name;
        $group->slug = Str::slug($request->name,'-');
        $group->description = $request->description ?? null;
        if ($group->save()) {
            if($request->permission_id != null){
              $group->assignPermissions($request->permission_id);

              activity()->withProperties(['name' => $request->name])->log('New Group named');
              notify()->success($request->name . ' ' . 'Group Successfully');
              return back();

            }

            activity()->withProperties(['name' => $request->name])->log('New Group named');
            notify()->success($request->name . ' ' . 'Group Successfully');
            return back();

        } else {
          activity()->withProperties(['name' => $request->name])->log('New Group named');
          notify()->error($request->name . ' ' . 'Group Successfully');
          return back();
        }

    }


    public function show($id)
    {
        try{
            $group = Group::where('id',$id)->with('permissions')->first();
            return view('userManager.group.show')->with('group',$group);
        }catch(Exception $e){
            return redirect()->back()->with('failed', 'There are Some Problem Try again '.$e);
        }
    }


    public function edit($id)
    {

        try{
            $permissions = Permission::all();
            $group = Group::where('id',$id)->with('permissions')->first();
//            return $group;
            return view('userManager.group.edit')
                ->with('group',$group)->with('permissions',$permissions);
        }catch(Exception $e){
            return redirect()->back()->with('failed', 'There are Some Problem Try again '.$e);
        }
    }


    public function update(Request $request)
    {

        try {
            $group = Group::where('id', $request->id)->update([
                'name' => $request->name,
                'slug' =>  Str::slug($request->name,'-'),
                'description' =>$request->description,
            ]);
            //delete old data form group_has_permission table
            GropuHasPermission::where('group_id',$request->id)->delete();
            //after delete add new data in group_has_permission table
            foreach ($request->permission_id as $id){
                $gpc = new GropuHasPermission();
                $gpc->group_id = $request->id;
                $gpc->permission_id = $id;
                $gpc->save();
            }
            if ($group) {
                return redirect()->back()->with('success', 'Group Update Successfully');
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

            if (Group::where('id', $id)->delete() &&  GropuHasPermission::where('group_id',$id)->delete()) {
                return redirect()->back()->with('success', 'Group Delete Successfully');
            } else {
                return redirect()->back()->with('failed', 'There are Some Problem Try again ');
            }
        }catch(Exception $e){
            return redirect()->back()->with('failed', 'There are Some Problem Try again '.$e);
        }
    }

    //END
}
