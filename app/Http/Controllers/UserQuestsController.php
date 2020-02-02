<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\UserQuestsModel;
class UserQuestsController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function get(){
      $userId = Auth::user()->id;
      \Debugbar::info($userId);
      $quests = UserQuestsModel::where('userId',$userId)->orderBy('id')->get(['id','code','questTitle','userId','numberOfResponses','created_at']);
      // \Debugbar::info($quests);
      return view('pages.userQuests',['quests'=>$quests]);
    }
}
