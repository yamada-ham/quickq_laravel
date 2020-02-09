<?php
namespace App\Http\Validators;

use Illuminate\Validation\Validator;
use Illuminate\Support\Facades\DB;

class QuickqValidator extends Validator{

  public function validateExistQuest($attribute,$value,$parameters){
    return DB::table('quests')->where('code',$value)->exists();
  }

  public function validateChoicesMin2($attribute,$value,$parameters){
    if(count($value) > 1){
      return true;
    }else{
      return false;
    }
  }

  public function validateAge($attribute,$value,$parameters){
    return in_array ( $value , ['00','10','20','30','40','50','60','70']);
  }

  public function validateSex($attribute,$value,$parameters){
    return in_array ( $value , ['男','女']);
  }
}
