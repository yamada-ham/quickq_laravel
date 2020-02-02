@extends('layouts.main')
@section('content')
<div class="topImgBox">
  <div class="inTopImgBox">
    <img src = "{{asset('images/quickq_title.png')}}">
  </div>
</div>
<ul class="questLimitBox">
  <li class="newListBox">
    <div class="inNewListBox">
      <div><h2>最新アンケート</h2></div>
      <ul>
        @foreach($newLimit5 as $quest)
          <li><a>{{$quest->questTitle}}</a></li>
        @endforeach
      </ul>
    </div>
  </li><!-- newListBox -->
  <li class="newListBox">
    <div class="inNewListBox">
      <div><h2>人気アンケート</h2></div>
      <ul>
        @foreach($popularLimit5 as $quest)
          <li><a>{{$quest->questTitle}}</a></li>
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
              <li><a href="">{{$category}}</a></li>
            @endforeach
          </ul>
          </section>
      </li>
    @endforeach
    </ul>
  </div>
</div><!-- categoryBox -->


<div class='createBox'>
  {{-- <p><a href="{{asset('createQuest')}}">+</a></p> --}}
  <p><a href="{{action('CreateQuestController@get')}}">+</a></p>
</div>
@endsection
