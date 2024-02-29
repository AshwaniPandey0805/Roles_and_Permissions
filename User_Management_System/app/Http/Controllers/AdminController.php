<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function adminPannel(){

        
        return view('admin');
    }

    public function getUserList(){

        $userDetails = User::all();

        return view('admin-page.admin_users',['userDetails' => $userDetails]);
    }

    public function addUsers(){
        $roles = Role::all();
        return view('admin-page.admin_addUser',['roles' => $roles]);
    }

    public function editUser(Request $request, $id){

        $roles = Role::all();
        return view('admin-page.admin_editUser',[
            'userID' => $id,
            'roles' => $roles
        ]);

    }


}
