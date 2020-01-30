<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('const.QUICKQ.name') }}</title>
    <script src="http://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script src="http://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>


    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div id="app">
@guest
        <a class="" href="{{ route('login') }}">{{ __('Login') }}</a>
    @if (Route::has('register'))
            <a class="" href="{{ route('register') }}">{{ __('Register') }}</a>
    @endif

@endguest

    <main>
      <div class="">{{ __('Login') }}</div>

      <form method="POST" action="{{ route('login') }}">
        @csrf


        <label for="email" class="">{{ __('E-Mail Address') }}</label>


        <input id="email" type="email" class="{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

        @if ($errors->has('email'))
          <span class="">{{ $errors->first('email') }}</span>
        @endif

      <label for="password" class="">{{ __('Password') }}</label>


      <input id="password" type="password" class="{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

      @if ($errors->has('password'))
      <span class="" role="alert">
      <strong>{{ $errors->first('password') }}</strong>
      </span>
      @endif


          <input class="" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

          <label class="" for="remember">
              {{ __('Remember Me') }}
          </label>

      <button type="submit" class="">
          {{ __('Login') }}
      </button>

      @if (Route::has('password.request'))
          <a class="" href="{{ route('password.request') }}">
              {{ __('Forgot Your Password?') }}
          </a>
      @endif

      </form>
    </main>
</div>
    <script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>
