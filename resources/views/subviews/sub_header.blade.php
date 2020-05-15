<header class="">
  <div class="inHeader clear">
      <div class="drawer" id="menubtn">
        <img src="{{asset("images/icon/btnOpen.png")}}">
      </div>
      <div class="inTitleBox">
        <h1><a href='{{action('IndexController@get')}}'>
          <img src="{{asset('images/quickq.png')}}" alt="{{Config('const.QUICKQ.name')}}">
        </a></h1>
      </div>
      <div class="menuBox">
        <div class="inMenuBox">
          <nav>
            <ul>
              <li>
                <p><a href="#">サービズの概要</a></p>
              </li>
              <li>
                <p><a href="#">料金</a></p>
              </li>
              <li>
                <p><a href="#">よくあるご質問</a></p>
              </li>
              <li>
                <p><a href="#">お問い合わせ</a></p>
              </li>
            </ul>
          </nav>
        </div>
      </div>
      <div class="loginInfoBox">
        @if(!empty(Auth::user()->email_verified_at))
          @if(Auth::check())
          <p><a href={{action('UserAccountController@get')}}><span class="greet">{{Auth::user()->name}}</span><span class="account">Myアカウント</span></a></p>
          @endif
        @else
          <p><a href="{{route('login')}}">ログイン</a></p>
        @endif
      </div>
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
