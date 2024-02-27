<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthManager extends Controller
{
    public function signIn(){
        
        return view('auth.signIn');
    }

    public function signUp(){

        return view('auth.signUp');
    }

    public function signUpPost(Request $request){
        $request->validate([
            'firstName' => 'required',
            'lastName' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required',
            'phoneNumber' => 'required',
            'profile' => 'required'
        ]);

        // profile detials
        $data['first_name'] = $request->firstName;
        $data['last_name'] = $request->lastName;
        $data['email'] = $request->email;
        $data['password'] = Hash::make($request->password);
        $data['phone_number'] = $request->phoneNumber;
        $data['role'] = $request->profile;

        // role details
        if($data['role'] == 'admin'){
            $role['role_id']  = 1;
            $role['role_name'] = 'admin';

            $roles = Role::create($role);
        
        }   
        
        $profile = User::create($data);
         

        if(!$profile){
            return redirect(route('signUp.get'))->with('error', 'Resgister failed! Please try again');
        }

        // if(!$roles){
        //     dd('Role Not filled');
        // }

        return redirect(route('signIn.get'))->with('success', 'Registration Successfull ✌️');
    }
}
