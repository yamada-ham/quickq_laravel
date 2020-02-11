<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserAccountInfoConfirmController extends Controller
{
    public function __construct(){
        // $this->middleware('auth');
        $this->middleware('verified');
    }

    public function get(){
      return view('pages.userAccountInfoConfirm');
    }
}
