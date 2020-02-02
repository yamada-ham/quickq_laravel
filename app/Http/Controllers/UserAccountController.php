<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class UserAccountController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function get(){
      return view('pages.userAccount');
    }
}
