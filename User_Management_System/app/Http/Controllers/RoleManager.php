<?php

namespace App\Http\Controllers;

use App\Models\PermissionAssign;
use App\Models\Role;
use Illuminate\Http\Request;

class RoleManager extends Controller


{

    public function addRoleGet(){
        $roles = Role::all();
        return view('admin-page.admin_addRoles',['roles' => $roles]);
    }


    public function addRolePost(Request $request){
        $request->validate([
            'roleID' => 'required',
            'roleName' => 'required',
        ]);


        $role['role_id'] = $request->roleID;
        $role['role_name'] = $request->roleName;

        $roles = Role::create($role);

        $permissions = $request->input('permission', []); // Get an array of selected permission IDs from the form

        foreach ($permissions as $permissionId) {
            $data = [
                'role_id' => $request->roleID,
                'permission_id' => $permissionId // Assign each selected permission ID to the role
            ];

            $permission = PermissionAssign::create($data); // Create a new permission assignment record
        }



        return redirect(route('addRoles.get'));
    }


    

}
