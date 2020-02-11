<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\UserQuestsModel;
class UserQuestsController extends Controller
{
    public function __construct(){
        // $this->middleware('auth');
        $this->middleware('verified');
    }

    public function get(){
      $userId = Auth::user()->id;
      $quests = UserQuestsModel::where('userId',$userId)->orderBy('id','desc')->select(['id','code','questTitle','userId','numberOfResponses','created_at'])->paginate(10);
      // \Debugbar::info($quests);
      return view('pages.userQuests',['quests'=>$quests]);
    }
}
