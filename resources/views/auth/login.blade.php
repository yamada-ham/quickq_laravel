@extends('layouts.app')

@section('content')

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


@endsection
