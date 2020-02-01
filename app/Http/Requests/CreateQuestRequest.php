<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateQuestRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
      if($this->path() == 'createQuest'){
        return true;
      }else{
        return false;
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
            'questTitle' => 'required|max:200',
            'choice.*' => 'required',
            'choice' => 'choicesmin2',
            'parentCategory' => 'required',
            'childCategory' => 'required',
        ];
    }

    public function messages(){
      return [
        'questTitle.required' => '空欄は無効です。',
        'questTitle.max' => '可能入力文字数を超えています。',
        'choice.*.required' => '空欄は無効です。',
        'choice.choicesmin2' => '選択欄は二つ以上作成してください',
        'parentCategory.required' => 'カテゴリーを選択してください',
        'childCategory.required' => 'カテゴリーを選択してください',
      ];
    }
}
