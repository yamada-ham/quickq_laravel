<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
class QuestAnalysisRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
      if($this->path() == 'quest_analysis'){
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
            'code' => 'required|existquest',
        ];
    }

    public function messages(){
      return [
        'code.existquest' =>'このアンケートは存在しません。'
      ];
    }
}
