<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class AnswerQuestController extends Controller
{
    public function get(Request $request){

      $answeredQuest = DB::table('answers')->whereRaw(
        'code = ? and remote_addr = ? and user_agent = ?',[$request->code,$_SERVER['REMOTE_ADDR'],$_SERVER['HTTP_USER_AGENT']])->first();

      $quest = DB::table('quests')->where('code',$request->code)->first();

        //回答したことがある場合
        if($answeredQuest){
          $checkAnswer = true;

          $result = DB::table('quests')->where('code',$request->code)->select('choicesList','numberOfResponses')->first();

          $choicesList = explode(',',$result->choicesList);
          $numberOfResponses = $result->numberOfResponses;

          //全体の投票結果
          foreach($choicesList as $choice){
             $count = DB::table('answers')->where('code',$request->code)->where('choice',$choice)->count();
             $votes[] = $count;
          }

          // foreach($choicesList as $choice){
          //   $count = DB::table('answers')->whereRaw('code = ? and choice = ? and sex = ?',[$request->code,$choice,'男'])->count();
          //   $manVotes[] = $count;
          // }
          //
          // foreach($choicesList as $choice){
          //   $count = DB::table('answers')->whereRaw('code = ? and choice = ? and sex = ?',[$request->code,$choice,'女'])->count();
          //   $womanVotes[] = $count;
          // }

          // $ages = [00,10,20,30,40,50,60,70];
          //
          // foreach($choicesList as $choice){
          //   foreach($ages as $age){
          //     $count = DB::table('answers')->whereRaw('code = ? and choice = ? and age = ?',[$request->code,$choice,$age])->count();
          //     $array[] = $count;
          //   }
          //   $ageVotes[] = $array;
          //   $array = [];
          // }

          $votesData = [
            ($choicesList),
            ($votes),
            // ($manVotes),
            // ($womanVotes),
            // ($ageVotes),
          ];
          // $votesData = json_encode($votesData);

          return view('pages.answerQuest',['checkAnswer'=>$checkAnswer,'quest'=>$quest,'votesData'=>$votesData]);
        }else{
          $checkAnswer = false;

          $choicesList = explode(',',$quest->choicesList);
          return view('pages.answerQuest',['checkAnswer'=>$checkAnswer,'quest'=>$quest,'choicesList'=>$choicesList]);
        }


    }

    public function post(Request $request){
      $param = [
        'code' => $request->code,
        'age' => $request->age,
        'sex' => $request->sex,
        'questTitle' => $request->questTitle,
        'choice' => $request->choice,
        'remote_addr' => $_SERVER['REMOTE_ADDR'],
        'user_agent'=>$_SERVER['HTTP_USER_AGENT'],
        'created'=> new \DateTime(),
        'modified'=> new \DateTime(),
      ];

      DB::transaction(function () use($param) {
        DB::table('answers')->insert($param);
      });

      return redirect()->action('AnswerQuestController@get',['code'=>$request->code]);
    }
}
