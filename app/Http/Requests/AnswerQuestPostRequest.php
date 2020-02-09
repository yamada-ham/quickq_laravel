<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AnswerQuestPostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
      if($this->path() == 'answer_quest'){
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
          'questTitle' => 'required',
          'age' => 'required|age',
          'sex' => 'required|sex',
          'choice' => 'required'
        ];
    }

    public function messages()
    {
      return [
        'questTitle' => 'questTitleがありません',
        'age.required' => '年齢が選択されていません。',
        'age.age' => '年齢フォームエラー',
        'sex.required' => '性別が選択されていません。',
        'sex.sex' => '性別フォームエラー',
        'choice.required' => '項目が選択されていません。',
      ];
    }
}
