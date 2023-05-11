<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    public function __construct(){
        $this->middleware('auth');

    }

    public function profile(){
        // $console = Console::where('user_id', Auth::user()->id)->get();
        return view('user.profile');
    }
}
