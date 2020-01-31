<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<meta charset="utf-8">
<meta name="csrf-token" content="{{ csrf_token() }}">
<title>{{Config('const.QUICKQ.name')}}</title>
<meta name="viewport" content="width=device-width">
<link rel="stylesheet" href="{{asset('css/app.css')}}">
<script src="http://code.jquery.com/jquery-1.12.4.min.js"></script>
<script src="http://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
</head>
<body>
@include('subviews.sub_header')
@yield('content')
@include('subviews.sub_footer')

<script src="{{asset('./js/app.js')}}"></script>
</body>
</html>
