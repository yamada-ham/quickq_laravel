@extends('layouts.main')
@section('content')
<div class="topImgBox">
  <div class="inTopImgBox">
    <img src = "{{asset('images/quickq_top2.jpg')}}">
    <div class="contentsInTopImgBox">
    <div class="inContentsInTopImgBox">
      <div class="catchCopyInTopImgBox">
        <div class="inCatchCopyInTopImgBox">
          <h1>お手軽なアンケート収集</h1>
          <p>QuickQ(クイックキュー)は、<br />すばやく人々の意見を集めるために作られました。<br />誰でも簡単にアンケートを作成し、回答することができます。</p>
        </div>
      </div>
      <div class="signUpBoxInTopImgBox">
      <div class="inSignUpBoxInTopImgBox">
        <p>[会員登録]はこちらから</p>
        <form method="POST" action="{{ route('register') }}">
          @csrf
          <div class="inputTextBox">
            <p class="typeText">
              <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" placeholder="ユーザー名" required autofocus>
            @if ($errors->has('name'))
              <div class="errBox"><p>
              {{ $errors->first('name') }}
              </p></div>
            @endif
          </div>

          <div class="inputTextBox">
            <p class="typeText">
              <input id="email" type="email"  name="email" value="{{ old('email') }}" placeholder="メールアドレス" required>
            </p>
            @if ($errors->has('email'))
              <div class="errBox"><p>
              {{ $errors->first('email') }}
              </p></div>
            @endif
          </div>

          <div class="inputPasswordBox">
            <p class="typePassword">
              <input type="password" name="password" placeholder="パスワード">
            </p>
            @if ($errors->has('password'))
              <div class="errBox"><p>
              {{ $errors->first('password') }}
              </p></div>
            @endif

          </div>

          <div class="inputPasswordBox">
            <p class="typePassword">
              <input id="password-confirm" type="password" name="password_confirmation" placeholder="パスワード(確認)" required>
            </p>
            @if ($errors->has('password_confirmation'))
              <div class="errBox"><p>
              {{ $errors->first('password_confirmation') }}
              </p></div>
            @endif
           </div>
          <div class="submitBox">
          <p class="inSubmitBox">
            <input type="submit" name="id" value="サインアップ">
          </p>
          </div>
        </form>
      </div>
      </div>
    </div>
    </div>
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
