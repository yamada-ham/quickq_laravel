@extends('layouts.main2')

@section('content')
<div class="contentsBox">
<div class="inContentsBox">
  <h2>アカウントのパスワードを再設定</h2>
  <hr>

    @if (session('status'))
      <div class="msgBox">
      <p>{{ session('status') }}</p>
      </div>
    @endif


    <form method="POST" action="{{ route('password.email') }}">
        @csrf
        <div class="inputEmailBox">
            <label for="email" class="emailLabel">email:</label>
            <p class="emailText">
                <input id="email" type="email" class="" name="email" value="{{ old('email') }}" required autofocus></p>
                @if ($errors->has('email'))
                  <div class='errBox'><p>
                    {{ $errors->first('email') }}
                  </p></div>
                @endif

        </div>
        <div class="submitBox">
        <p class="inSubmitBox">
        <button type="submit" class="">
            再設定用メールを送信
        </button>
        </p>
        </div>
    </form>
</div>
</div>
@endsection
