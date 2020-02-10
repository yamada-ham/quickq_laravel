@extends('layouts.main2')

@section('content')
<div class="contentsBox">
<div class="inContentsBox">
  <h2>パスワードを再設定</h2>
  <hr>


<form method="POST" action="{{ route('password.update') }}">
    @csrf

    <input type="hidden" name="token" value="{{ $token }}">
      <div class="inputTextBox">
        <label for="email" class="">{{ __('E-Mail Address') }}</label>
        <p class="typeText">
            <input id="email" type="email" class="" name="email" value="{{ $email ?? old('email') }}" required autofocus>

            @if ($errors->has('email'))
                  {{ $errors->first('email') }}
            @endif
        </p>
      </div>
      <div class="inputPasswordBox">
        <label for="password" class="">{{ __('Password') }}</label>
        <p class="typePassword">
        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required></p>

        <p class="err">@if ($errors->has('password'))<strong>{{ $errors->first('password') }}</strong>@endif</p>
      </div>





      <div class="inputPasswordBox">

        <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

        <p class="typePassword"><input id="password-confirm" type="password" class="" name="password_confirmation" placeholder="•••••••••" required></p>
      </div>

      <div class="submitBox">
        <p class="inSubmitBox">
        <button type="submit" class="btn btn-primary">
            パスワードを再設定
        </button>
        </p>
      </div>
</form>
</div>
</div>
@endsection
