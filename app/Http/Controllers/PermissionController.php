<?php

namespace App\Http\Controllers\UserManager;
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Permission;
use Illuminate\Support\Str;

class PermissionController extends Controller
{
  public function __construct(){
     // $this->middleware('auth');
 }

 public function index()
 {
     $permissions = Permission::all();
     return view('userManager.permission.index')->with('permissions',$permissions);
 }


 public function create()
 {
     return view('userManager.permission.create');
 }


 public function store(Request $request)
 {
     $request->validate([
        'name'=>['required','string','unique:permissions','max:255'],
     ]);
     $permission = new Permission();
     $permission->name = $request->name;
     $permission->slug = Str::slug($request->name,'-');
     $permission->description = $request->description ?? null;
     if ($permission->save()) {

       activity()->withProperties(['name' => $request->name])->log('New Permission named');
       notify()->success($request->name . ' ' . 'Permission Successfully');
       return back();
       
     } else {

       activity()->withProperties(['name' => $request->name])->log('New Permission named');
       notify()->error($request->name . ' ' . 'Permission Failed');
       return back();

     }

 }



 public function show($id)
 {
     try{
         $permission = Permission::where('id',$id)->first();
         return view('userManager.permission.show')->with('permission',$permission);
     }catch(Exception $e){
         return redirect()->back()->with('failed', 'There are Some Problem Try again '.$e);
     }
 }


 public function edit($id)
 {
     try{
         $permission = Permission::where('id',$id)->first();
         return view('userManager.permission.edit')->with('permission',$permission);
     }catch(Exception $e){
         return redirect()->back()->with('failed', 'There are Some Problem Try again '.$e);
     }
 }


 public function update(Request $request)
 {
     try {
         $permission = Permission::where('id', $request->id)->update([
             'name' => $request->name,
             'slug' =>  Str::slug($request->name,'-'),
             'description' =>$request->description,
         ]);

         if ($permission) {
             return redirect()->back()->with('success', 'Permission Update Successfully');
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
         if (Permission::where('id', $id)->delete()) {
             return redirect()->back()->with('success', 'Permission Delete Successfully');
         } else {
             return redirect()->back()->with('failed', 'There are Some Problem Try again ');
         }
     }catch(Exception $e){
         return redirect()->back()->with('failed', 'There are Some Problem Try again '.$e);
     }
 }
    //END
}
