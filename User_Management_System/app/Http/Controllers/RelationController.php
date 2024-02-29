<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RelationController extends Controller
{
    public function index(){
        $user = User::with('role')->find(1);
        dd($user->toArray());
        
    }
}
