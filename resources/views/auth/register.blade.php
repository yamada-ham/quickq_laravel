@extends('layouts.main2')
@section('content')

<div class="contentsBox">
  <div class="inContentsBox">
    <h2>アカウントの作成</h2>
    <hr>
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <div class="inputTextBox">
          <label for="name" class="emailLabel">ユーザー名</label>
          <p>
            <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" placeholder="Q田Q太郎" required autofocus>
          <p class="err">@if ($errors->has('name'))<strong>{{ $errors->first('name') }}</strong>@endif</p>
        </div>

        <div class="inputTextBox">
          <label for="email" class="emailLabel">email:</label>
          <p class="typeText">
            <input id="email" type="email"  name="email" value="{{ old('email') }}" required>
          </p>
          <p class="err">@if ($errors->has('email'))<strong>{{ $errors->first('email') }}</strong>
                          @endif</p>
        </div>

        <div class="inputPasswordBox">
          <label for="password" class="passwordlLabel">password:</label>
          <p class="typePassword">
            <input type="password" name="password" placeholder="•••••••••">
          </p>
          <p class="err">@if ($errors->has('password'))<strong>{{ $errors->first('password') }}</strong>@endif</p>
        </div>

        <div class="inputPasswordBox">
          <label for="password-confirm" class="passwordConfirmlLabel">password(確認のためもう一度):</label>
          <p class="typePassword">
            <input id="password-confirm" type="password" name="password_confirmation" placeholder="•••••••••" required>
          </p>
        </div>
        <div class="submitBox">
        <p class="inSubmitBox">
          <input type="submit" name="id" value="サインアップ">
        </p>
      </div>
      <div class="signupBox">
        <p class="inSignupBox"><a href="{{route('login')}}">すでにアカウントはお持ちですか？</a></p>
      </div>

                {{-- <button type="submit">
                    {{ __('Register') }}
                </button> --}}
    </form>
  </div>
</div>


@endsection
