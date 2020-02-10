@extends('layouts.main2')

@section('content')
<div class="contentsBox">
<div class="inContentsBox">
  <h2>アカウントのパスワードをリセット</h2>
  <hr>
    @if (session('status'))
      {{ session('status') }}
    @endif

    <form method="POST" action="{{ route('password.email') }}">
        @csrf
        <div class="inputTextBox">

            <label for="email" class="emailLabel">email:</label>
            <p class="typeText">
                <input id="email" type="email" class="" name="email" value="{{ old('email') }}" required></p>
                @if ($errors->has('email'))
                      {{ $errors->first('email') }}
                @endif
                <button type="submit" class="">
                    {{ __('Send Password Reset Link') }}
                </button>
        </div>
    </form>
</div>
</div>
@endsection
