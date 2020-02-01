<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\CreateQuestRequest;
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
          $choiceCount++;
          $choiceText .= $choice;
          if($choiceCount < count($request->choice)){
            $choiceText .= ',';
          }
      }
      echo $choiceCount;
      echo $choiceText;
      echo $request->childCategory;

      $param =[
        'questTitle' => $request->questTitle,
        'choice' => $request->choice,
        'category' => $request->childCategory,
      ];

      return view('pages.createQuest');
    }
}
