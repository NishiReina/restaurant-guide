<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function getProfile(){
        $user = Auth::user();
        return view('user.profile', compact('user'));
    }
}
