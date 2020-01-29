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
        {{-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button> --}}
      <!-- Authentication Links -->
@guest
        <a class="" href="{{ route('login') }}">{{ __('Login') }}</a>
    @if (Route::has('register'))
            <a class="" href="{{ route('register') }}">{{ __('Register') }}</a>
    @endif
@else
    <li >
        <a>{{ Auth::user()->name }}</a>

        <div>
            <a  href="{{ route('logout') }}"
              onclick="event.preventDefault();
               document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </div>
    </li>
@endguest

    <main class="py-4">
        @yield('content')
    </main>
</div>
    <script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>
