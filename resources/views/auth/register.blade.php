@extends('layouts.app')

@section('content')

<form method="POST" action="{{ route('register') }}">
    @csrf

    <div>
        <label for="name" class="">{{ __('Name') }}</label>

            <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

            @if ($errors->has('name'))
                    <strong>{{ $errors->first('name') }}</strong>
            @endif
    </div>

    <div class="">
        <label for="email" class="">{{ __('E-Mail Address') }}</label>

            <input id="email" type="email" class="{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

            @if ($errors->has('email'))
                    <strong>{{ $errors->first('email') }}</strong>
            @endif
    </div>

    <div>
        <label for="password">{{ __('Password') }}</label>

            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

            @if ($errors->has('password'))
                    <strong>{{ $errors->first('password') }}</strong>
            @endif
    </div>

    <div>
        <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

            <input id="password-confirm" type="password" name="password_confirmation" required>
    </div>

            <button type="submit">
                {{ __('Register') }}
            </button>
</form>

@endsection
