<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\CreateQuestRequest;
use Carbon\Carbon;
class CreateQuestController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function get(){
      return view('pages.createQuest');
    }

    public function post(CreateQuestRequest $request){

      $choiceCount = 0;
      $choiceText = '';
      foreach($request->choice as $choice){
        if($choice === ''){
          continue;
        }
          $choice = str_replace(',','&#44',$choice);
          $choiceCount++;
          $choiceText .= $choice;
          if($choiceCount < count($request->choice)){
            $choiceText .= ',';
          }
      }

      $param =[
        'questTitle' => $request->questTitle,
        'choicesNum' => count($request->choice),
        'choicesList' => $choiceText,
        'category' => $request->childCategory,
        'code' => uniqid(mt_rand(),true),
        'userId' => Auth::user()->id,
        'created_at' => new \DateTime(),
        'updated_at' => new \DateTime(),
      ];

      DB::table('quests')->insert($param);

      return redirect()->action('UserQuestsController@get');
      // return view('pages.index');
    }
}
