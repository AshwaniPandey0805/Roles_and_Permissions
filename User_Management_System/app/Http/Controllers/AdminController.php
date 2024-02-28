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

    public function addUserPost(Request $request){
        $request->validate([
            'firstName' => 'required',
            'lastName' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required',
            'phoneNumber' => 'required',
            'profile' => 'required'
        ]);

        // user detials
        $data['first_name'] = $request->firstName;
        $data['last_name'] = $request->lastName;
        $data['email'] = $request->email;
        $data['password'] = Hash::make($request->password);
        $data['phone_number'] = $request->phoneNumber;
        $data['role'] = $request->profile;

        dd($data);
    }
}
