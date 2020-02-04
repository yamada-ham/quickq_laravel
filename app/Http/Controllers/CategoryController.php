<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function get(Request $request){
      DB::table('quests')->where('category',$request->category)->orderBy('id','desc')->get();
      return view('pages.category');
    }
}
