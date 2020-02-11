<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserAccountInfoChangeRequest;
use Illuminate\Support\Facades\DB;

class UserAccountInfoChangeController extends Controller
{
    public function __construct(){
        // $this->middleware('auth');
        $this->middleware('verified');
    }

    public function get(){
      return view('pages.userAccountInfoChange');
    }

    public function post(UserAccountInfoChangeRequest $request){
      $param = [
        'name' => $request -> name,
        'email' => $request -> email,
        'updated_at' => new \DateTime(),
      ];
      DB::table('users')->where('id',$request -> id)->update($param);
      return redirect()->action('UserAccountInfoConfirmController@get');
      // return view('pages.userAccountInfoConfirm',['msg'=>'お客様のアカウント情報を変更しました。','name' => $request -> userName,'email' => $request -> email,]);
    }
}
