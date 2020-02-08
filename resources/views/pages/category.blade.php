@extends('layouts.main')

@section('content')
<div class="theCategoryBox">
  <div class="inTheCategoryBox">
    @php \Debugbar::info($quests); @endphp
    @if($quests->total() <= 0)
    <p>『{{$category}}』カテゴリーのアンケートは作られていません。</p>
    @else
    <h2>『{{$category}}』カテゴリー</h2>
    <ul>
      @foreach($quests as $quest)
      <li><a href="{{action('AnswerQuestController@get',['code'=>$quest->code])}}">{{$quest->questTitle}}</a>
      <div class="categoryQuestData">
        <img src="{{asset('images/icon/answerNumIcon.png')}}" class="answerNumIcon"><span>{{$quest->numberOfResponses}}</span></div>
      </li>
      @endforeach
    </ul>
    @endif
  </div>
</div>
{{$quests->appends(['category'=>$category])->links('vendor.pagination.my-custom')}}
@endsection
