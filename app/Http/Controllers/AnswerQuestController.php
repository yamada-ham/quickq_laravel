<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnswerQuestController extends Controller
{
    public function get(){
      return view('pages.answerQuest');
    }
}
