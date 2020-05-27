<header class="">
  <div class="inHeader clear">
      <div class="drawer" id="menubtn">
        <i class="fas fa-bars"></i>
      </div>
      <div class="inTitleBox">
        <h1><a href="{{action('IndexController@get')}}">
          <img src="{{asset('images/quickq_bl.png')}}" alt="{{Config('const.QUICKQ.name')}}">
        </a></h1>
      </div>
      {{-- <div class="loginInfoBox">
        @if(Auth::check())
        <p><a><span class="greet">{{$user->name}}</span><span class="account">Myアカウント</span></a></p>
        @else
          <p><a href="{{route('login')}}">ログイン</a></p>
        @endif
      </div> --}}
  </div><!-- inHeader -->
</header>

<nav class="drwerMenuBox">
  <div class="inDrwerMenuBox">
    @if(!empty(Auth::user()->email_verified_at))
    @if(Auth::check())
      <h2 class="greet">Hello.{{Auth::user()->name}}さん</h2>
      <ul>
      <li><a href="{{action('UserAccountController@get')}}">アカウント管理</a></li>
      <li><a href="{{action('CreateQuestController@get')}}">アンケートを作成する</a></li>
      <li><form action="{{ route('logout') }}" method="POST" id="logout">
        <p><input type="submit" value="ログアウト">
        </p>
        @csrf
      </form></li>
      </ul>
    @endif
    @else
      <ul>
      <li class="login"><a href="{{ route('login') }}">ログイン</a></li>
      <li class="signup"><a href="{{ route('register') }}">アカウント作成はこちら</a></li>
      </ul>
    @endif
  </div>
</nav>

<div class="overlay"><div class="btnCloseBox"><img src="{{asset('./images/icon/btnClose.png')}}"></div></div>
