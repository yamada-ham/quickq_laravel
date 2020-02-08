<?php
namespace App\Http\Validators;

use Illuminate\Validation\Validator;
use Illuminate\Support\Facades\DB;

class QuestAnalysisValidator extends Validator{
  public function validateExistQuest($attribute,$value,$parameters){
    // exit;
    return DB::table('quests')->where('code',$value)->exists();
  }
}
