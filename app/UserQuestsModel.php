<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserQuestsModel extends Model
{
    protected $table = 'quests';
    public function dateFormat(){
      $dateTime = new \DateTime($this->created_at);
      return $dateTime->format('Y年m月d日');
    }
}
