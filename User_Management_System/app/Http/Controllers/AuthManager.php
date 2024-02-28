<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthManager extends Controller
{
    public function signIn(){

        if(Auth::check()){
            // $users = User::all(); // Retrieve all users from the database
            return redirect(route('adminPannel.get'))->with('success', 'Alreday Logined');
        }
        return view('auth.signIn');
    }

    public function signUp(){

        if(Auth::check()){
            return redirect(route('adminPannel.get'))->with('success', 'Alreday Logined');
        }
        return view('auth.signUp');
    }




    public function signUpPost(Request $request){
        $request->validate([
            'firstName' => 'required',
            'lastName' => 'required',
            'email' => 'required',
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
        if($data['role'] == 'user'){
            $role['role_id']  = 2;
            $role['role_name'] = 'user';

            $roles = Role::create($role);
        
        }   
        
        $profile = User::create($data);

       
         

        if(!$profile){
            return redirect(route('signUp.get'))->with('error', 'Resgister failed! Please try again');
        }

        // if(!$roles){
        //     dd('Role Not filled');
        // }

        if(Auth::check()){
            return redirect(route('userList.get'));
        }

        return redirect(route('signIn.get'))->with('success', 'Registration Successfull ✌️');
    }


    public function signInPost(Request $request){
        $request->validate([
            'email',
            'password',
        ]);
        $credentials = $request->only('email', 'password');
        if(Auth::attempt($credentials)){
            return redirect()->intended(route('adminPannel.get'));
        }

        return redirect(route('signIn.get'))->with('error', 'Login detials are not valid');
    }



    public function signOutPost(){
        Auth::logout();
        Session::flush();
        return redirect(route('signIn.get'));
    }
}
