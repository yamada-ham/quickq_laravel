<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
class HomeController extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth');
        $this->middleware('verified');
    }
    public function get(){
      $popularLimit5 = DB::select("select code,questTitle from quests order by numberOfResponses desc limit 5");
      // $popularLimit5 = DB::table('quests')->orderby("numberOfResponses","desc")->limit(5)->get(["code","questTitle"]);

      $newLimit5 = DB::select("select code,questTitle from quests order by id desc Limit 5 ");

      // $user = Auth::user();
      return view('pages.Index',["popularLimit5"=>$popularLimit5,'newLimit5'=>$newLimit5]);
    }
}
