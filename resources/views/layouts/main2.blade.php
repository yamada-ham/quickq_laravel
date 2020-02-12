<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<meta charset="utf-8">
<meta name="csrf-token" content="{{ csrf_token() }}">
<title>{{Config('const.QUICKQ.name')}}</title>
<meta name="viewport" content="width=device-width">
<link rel="stylesheet" href="{{asset('css/app.css')}}">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
</head>
<body>
<div id="app">
@include('subviews.sub_header2')
@yield('content')
{{-- @include('subviews.sub_footer') --}}
</div>
<script src="{{asset('./js/app.js')}}"></script>
</body>
</html>
