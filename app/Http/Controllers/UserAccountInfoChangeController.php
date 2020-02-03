<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserAccountInfoChangeController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function get(){
      return view('pages.userAccountInfoChange');
    }

    public function post(Request $request){
      $param = [
        'name' => $request -> userName,
        'email' => $request -> email,
        'updated_at' => new \DateTime(),
      ];
      DB::table('users')->where('id',$request -> id)->update($param);
      return view('pages.userAccountInfoConfirm',['msg'=>'お客様のアカウント情報を変更しました。']);
    }
}
