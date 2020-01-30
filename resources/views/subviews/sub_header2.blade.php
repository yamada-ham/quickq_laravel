<header class="">
  <div class="inHeader clear">
      <div class="drawer" id="menubtn">
        <img src="{{asset("images/icon/btnOpen.png")}}">
      </div>
      <div class="inTitleBox">
        <h1><a href="{{asset('')}}">
          {{Config('const.QUICKQ.name')}}
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
    @if(Auth::check())
      <h2 class="greet">Hello.{{ Auth::user()->name }}さん</h2>
      <ul>
      <li><a href="userAccount.php">アカウント管理</a></li>
      <li><a href="createQuest.php">アンケートを作成する</a></li>
      </ul>
    @else
      <ul>
      <li class="login"><a href="{{ route('login') }}">ログイン</a></li>
      <li class="signup"><a href="{{ route('register') }}">アカウント作成はこちら</a></li>
      </ul>
    @endif
  </div>
</nav>

<div class="overlay"></div>
