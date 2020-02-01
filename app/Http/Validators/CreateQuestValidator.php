<?php
namespace App\Http\Validators;

use Illuminate\Validation\Validator;

class CreateQuestValidator extends Validator{
  public function validateChoicesMin2($attribute,$value,$parameters){
    return is_int($value);
  }
}
