<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserAccountInfoChangeRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
      {
        if($this->path() == 'user_account_info_change'){
          return true;
        }else{
          return false;
        }
      }
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|max:200',
            'email' => 'email'
        ];
    }

    public function messages(){
      return [
        'name.required' => '空欄は無効です。',
        'name.max' => '文字数が長すぎです',
        'email' => '有効なメールアドレスではありません'
      ];
    }

}
