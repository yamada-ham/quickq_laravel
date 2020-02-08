@extends('layouts.main')

@section('content')
<div class="createdQuestHistoryBox">
  <div class="inCreatedQuestHistoryBox">
  <h3>作成したアンケート</h3>
    <ul>
      @foreach($quests as $quest)
        <li>
        <div class="questHistoryInfo clear">
          <p>作成日:{{$quest->dateFormat()}}</p>
          <p class="answerNum"><img src='{{asset('./images/icon/answerNumIcon.png')}}' class="answerNumIcon"><span>{{$quest->numberOfResponses}}<span></p>
        </div>
        <div class="questHistoryTitle">
          <p><a href="{{action('QuestAnalysisController@get',['code'=>$quest->code])}}">{{$quest->questTitle}}</a></p>
        </div>
      </li>
      @endforeach
    </ul>
  </div>
</div>
@endsection
