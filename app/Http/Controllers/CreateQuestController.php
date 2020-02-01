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
      return view('pages.createQuest');
    }
}
