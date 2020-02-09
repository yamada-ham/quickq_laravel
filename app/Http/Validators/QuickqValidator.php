<?php
namespace App\Http\Validators;

use Illuminate\Validation\Validator;
use Illuminate\Support\Facades\DB;

class QuickqValidator extends Validator{
  public function validateExistQuest($attribute,$value,$parameters){
    // exit;
    return DB::table('quests')->where('code',$value)->exists();
  }
  public function validateChoicesMin2($attribute,$value,$parameters){
    // exit;
    if(count($value) > 1){
      return true;
    }else{
      return false;
    }
  }
}
