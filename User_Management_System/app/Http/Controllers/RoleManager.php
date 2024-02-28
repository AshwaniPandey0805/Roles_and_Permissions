<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;

class RoleManager extends Controller
{

    public function addRoleGet(){

        $roles = Role::all();
        return view('admin-page.admin_addRoles', ['roles'=>$roles]);
    }

    public function addRolePost(Request $request){
        $request->validate([
            'roleID' => 'required',
            'roleName' => 'required',
        ]);

        $role['role_id'] = $request->roleID;
        $role['role_name'] = $request->roleName;

        $roles = Role::create($role);

        if(!$role){
            dd('Not inserted roles');
        }


        return redirect(route('addRoles.get'));
    }


    

}
