@extends('layouts.main2')
@section('content')

<div class="contentsBox">
<div class="inContentsBox">
  <h2>QuickQにログイン</h2>
  <hr>
  <form method="POST" action="{{ route('login') }}" id="login">
    @csrf
    <div class="inputTextBox">
      <label for="email" class="emailLabel">email:</label>
      <p class="typeText">
        <input id="email" class="{{ $errors->has('email') ? ' is-invalid' : '' }}" type="text" name="email" value="{{ old('email') }}" placeholder="quick@example.com" required  autofocus>
      </p>
      @if ($errors->has('email'))
        <span class="">{{ $errors->first('email') }}</span>
      @endif
    </div>

    <div class="inputPasswordBox">
      <label for="password" class="passwordLabel">pass:</label>
      <p class="typePassword">
        <input id="password" class="{{ $errors->has('password') ? ' is-invalid' : '' }}" type="password" name="password" placeholder="" required>
      </p>
      <p class="password_request"><a class="" href="{{ route('password.request') }}">パスワードをお忘れですか？</a></p>
      @if ($errors->has('password'))
      <span class="" role="alert">
      <strong>{{ $errors->first('password') }}</strong>
      </span>
      @endif
    </div>

    <div class="submitBox">
      <p class="inSubmitBox">
        <input type="submit" name="id" value="ログイン">
      </p>
      <div class="inputCheckBox">
        <label class="" for="remember">
          <input class="" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
            ログインしたままにする
        </label>
      </div>
    </div>


  <div class="signupBox">
    <p class="inSignupBox"><a href="{{ route('register') }}">新しいQuickQアカウントを作成</a></p>
  </div>

  </form>

</div>
</div>
@endsection
