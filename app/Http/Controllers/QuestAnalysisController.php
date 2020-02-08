<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\QuestAnalysisRequest;
class QuestAnalysisController extends Controller
{
    public function __construct(){
      $this->middleware('auth');
    }

    public function get(QuestAnalysisRequest $request){
      $quest = DB::table('quests')->where('code',$request->code)->select('questTitle','choicesList','numberOfResponses')->first();

      $choicesList = explode(',',$quest->choicesList);
      $numberOfResponses = $quest->numberOfResponses;


      //全体の投票結果
      foreach($choicesList as $choice){
         $count = DB::table('answers')->where('code',$request->code)->where('choice',$choice)->count();
         $votes[] = $count;
      }

      $ages = [00,10,20,30,40,50,60,70];

      foreach($choicesList as $choice){
        foreach($ages as $age){
          $count = DB::table('answers')->whereRaw('code = ? and choice = ? and age = ?',[$request->code,$choice,$age])->count();
          $array[] = $count;
        }
        $ageVotes[$choice] = $array;
        $array = [];
      }

      foreach($choicesList as $choice){
        $count = DB::table('answers')->whereRaw('code = ? and choice = ? and sex = ?',[$request->code,$choice,'男'])->count();
        $manVotes[] = $count;
      }

      foreach($choicesList as $choice){
        $count = DB::table('answers')->whereRaw('code = ? and choice = ? and sex = ?',[$request->code,$choice,'女'])->count();
        $womanVotes[] = $count;
      }

      $votesData = [
        json_encode($choicesList),
        json_encode($votes),
        json_encode($ageVotes),
        json_encode($manVotes),
        json_encode($womanVotes),
      ];


      return view('pages.questAnalysis',['quest'=>$quest,'votesData'=>$votesData]);
    }
}
