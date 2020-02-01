<?php
namespace App\Http\Validators;

use Illuminate\Validation\Validator;

class CreateQuestValidator extends Validator{
  public function validateChoicesMin2($attribute,$value,$parameters){
    // exit;
    if(count($value) > 1){
      return true;
    }else{
      return false;
    }
  }
}
