<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function get(Request $request){
      $quests = DB::table('quests')->where('category',$request->category)->orderBy('id','desc')->paginate(10);
      return view('pages.category',['quests'=>$quests,'category'=>$request->category]);
    }
}
