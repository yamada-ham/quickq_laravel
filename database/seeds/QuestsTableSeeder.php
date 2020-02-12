<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuestsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $param = [
        'code' => uniqid(mt_rand(),true),
        'questTitle' => '好きな豆腐はどちらですか？',
        'choicesNum' => 2,
        'choicesList' => '木綿,絹',
        'category' => '料理,食物',
        'userId' => 1,
        'numberOfResponses' => 0,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
      ];
      DB::table('quests')->insert($param);

      $param = [
        'code' => uniqid(mt_rand(),true),
        'questTitle' => '朝型ですか？夜型ですか？',
        'choicesNum' => 2,
        'choicesList' => '朝型,夜型',
        'category' => '健康',
        'userId' => 1,
        'numberOfResponses' => 0,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
      ];
      DB::table('quests')->insert($param);

      $param = [
        'code' => uniqid(mt_rand(),true),
        'questTitle' => '10月10日文化祭が行われるので、私たちのクラスの催しを決めたいと思います。
前回のクラス会議では「お化け屋敷」「たこ焼き屋」「タピオカ屋」の三つの案に絞られました。この中から自分が希望するものに投票してください。',
        'choicesNum' => 3,
        'choicesList' => 'お化け屋敷,たこ焼き屋,タピオカ屋',
        'category' => '小中高',
        'userId' => 1,
        'numberOfResponses' => 0,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
      ];
      DB::table('quests')->insert($param);


      $param = [
        'code' => uniqid(mt_rand(),true),
        'questTitle' => '好きな肉の種類は？',
        'choicesNum' => 6,
        'choicesList' => '牛,豚,鶏,馬,鴨,羊',
        'category' => '料理,食物',
        'userId' => 1,
        'numberOfResponses' => 0,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
      ];
      DB::table('quests')->insert($param);

      $param = [
        'code' => uniqid(mt_rand(),true),
        'questTitle' => '同窓会を行います。お店はどこがいいですか？',
        'choicesNum' => 3,
        'choicesList' => '和食,中華,洋食',
        'category' => '料理,食物',
        'userId' => 1,
        'numberOfResponses' => 0,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
      ];
      DB::table('quests')->insert($param);

      $param = [
        'code' => uniqid(mt_rand(),true),
        'questTitle' => '卵焼きにかける調味料といえば？',
        'choicesNum' => 6,
        'choicesList' => '醤油,塩,マヨネーズ,ケチャップ, ソース,コショウ',
        'category' => '料理,食物',
        'userId' => 1,
        'numberOfResponses' => 0,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
      ];
      DB::table('quests')->insert($param);
    }
}
