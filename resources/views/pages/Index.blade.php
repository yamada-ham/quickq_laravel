@extends('layouts.main')
@section('content')
<div class="topImgBox">
  <div class="inTopImgBox">
    <img src = "{{asset('images/quickq_title.png')}}">
  </div>
</div>
<ul class="questLimitBox">
  <li class="listBox newListBox">
    <div class="inListBox inNewListBox">
      <div><h2>最新アンケート</h2></div>
      <ul>
        @foreach($newLimit5 as $quest)
          <li><a href="{{action('AnswerQuestController@get',['code'=>$quest->code])}}">{{$quest->questTitle}}</a></li>
        @endforeach
      </ul>
    </div>
  </li><!-- newListBox -->
  <li class="listBox popularListBox">
    <div class="inListBox inPpopularListBox">
      <div><h2>人気アンケート</h2></div>
      <ul>
        @foreach($popularLimit5 as $quest)
          <li><a href="{{action('AnswerQuestController@get',['code'=>$quest->code])}}">{{$quest->questTitle}}</a></li>
        @endforeach
      </ul>
    </div>
  </li><!-- newListBox -->
</ul>
<div class="categoryBox">
    <div class="inCategoryBox">
    <ul class="accordion_ul clear">
      @foreach($categories as $key => $arr)
        <li class="accordion_li">
          <section>
          <h1>{{$key}}</h1>
          <ul>
            @foreach($arr as $category)
              <li><a href="{{action('CategoryController@get',["category"=>$category])}}">{{$category}}</a></li>
            @endforeach
          </ul>
          </section>
      </li>
    @endforeach
    </ul>
  </div>
</div><!-- categoryBox -->

<div class='createBox'>
  {{-- <p><a href="{{asset('createQuest')}}"><span>+</span></a></p> --}}
  <p><a href="{{action('CreateQuestController@get')}}"><img src="{{asset('images/icon/plus.png')}}" alt="プラス"></a></p>
</div>
@endsection
