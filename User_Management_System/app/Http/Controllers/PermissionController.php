<?php

namespace App\Http\Controllers;

use App\Models\PermissionAssign;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class PermissionController extends Controller
{
    // public function getPermissions(){
    //     $roles = Role::all();
    //     return view('admin-page.admin_permission',['roles' => $roles]);
    // }

    public function getPermission(Request $request){
        
        $selectedPermissions = $request->input('permission', []);

        dd($selectedPermissions);

        return view('demo');
    }


    public function assignPermissions(Request $request){


        // Get the array of selected permission values from the checkboxes
        $selectedPermissions = $request->input('permission', []);

        $permissions = PermissionAssign::create($selectedPermissions);

        // dd($selectedPermissions);


    }

    public function grantedPermission(Request $request, $id){
        $user = User::with('role')->find($id);
        // dd($user->toArray());
        return view('admin-page.admin_viewPermissions',['role' => $user->role]);
    }
}
