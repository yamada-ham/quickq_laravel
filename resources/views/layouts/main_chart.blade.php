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
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.min.js" >
</script>
<script type="text/javascript" src="{{asset('js/chartjs-plugin-labels.js')}}"></script>
</head>
<body>
<div id='app'>
@include('subviews.sub_header')
@yield('content')
@include('subviews.sub_footer')
</div>
<script src="{{asset('./js/app.js')}}"></script>
</body>
</html>
