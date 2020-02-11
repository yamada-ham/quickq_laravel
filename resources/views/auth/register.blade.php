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
          <p class="emailText">
            <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" placeholder="Q田Q太郎" required autofocus>
          @if ($errors->has('name'))
            <div class="errBox"><p>
            {{ $errors->first('name') }}
            </p></div>
          @endif
        </div>

        <div class="inputTextBox">
          <label for="email" class="emailLabel">email:</label>
          <p class="typeText">
            <input id="email" type="email"  name="email" value="{{ old('email') }}" required>
          </p>
          @if ($errors->has('email'))
            <div class="errBox"><p>
            {{ $errors->first('email') }}
            </p></div>
          @endif
        </div>

        <div class="inputPasswordBox">
          <label for="password" class="passwordlLabel">password:</label>
          <p class="typePassword">
            <input type="password" name="password" placeholder="•••••••••">
          </p>
          @if ($errors->has('password'))
            <div class="errBox"><p>
            {{ $errors->first('password') }}
            </p></div>
          @endif

        </div>

        <div class="inputPasswordBox">
          <label for="password-confirm" class="passwordConfirmlLabel">password(確認のためもう一度):</label>
          <p class="typePassword">
            <input id="password-confirm" type="password" name="password_confirmation" placeholder="•••••••••" required>
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
