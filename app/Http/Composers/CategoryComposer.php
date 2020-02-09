<?php
namespace App\Http\Composers;
use Illuminate\View\View;

class CategoryComposer{
  public function compose(View $view){
    $category = [
      'エンタメと趣味'=>['芸能人','テレビ','ドラマ','アニメ漫画','本,お笑い','音楽','ゲーム','スポーツ','動画','旅行'],

      '暮らし'=>['料理,食物','ショッピング','日用品,雑貨','冠婚葬祭','ペット','不動産'],

      '健康美容,ファッション'=>['健康','病気','病院','ダイエット','コスメ','美容','筋トレ','メンズファッション','レディースファッション'],
      '人間関係、恋愛'=>['家族','恋愛','友人','職場','近所付き合い','その他の人間'],

      '子育て、学校'=>['出産','子育て','子供','小中高','大学','受験','不登校'],

      '政治、法律、経済、時事'=>['政治','憲法','法律','経済','株','税金','保険','貯金','決済','ニュース','災害'],

      '情報技術'=>['インターネット','スマホアプリ','OS,ソフト','PC,スマートフォン','家電,電子機器'],

      '学問'=>['語学','数学','科学','文学','歴史','芸術','哲学','天気,天文','一般教養','その他学問'],
    ];
    $view->with(['categories'=>$category]);
  }
}
