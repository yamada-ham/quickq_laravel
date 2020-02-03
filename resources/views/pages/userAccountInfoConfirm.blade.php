@extends('layouts.main')

@section('content')
<div class="accountConfirmBox">
  <div class="inAccountConfirmBox">
    <h2>あなたの情報を確認</h2>
    @if(isset($msg))
    <div class="accountInfoChangeMsgBox"><p>{{$msg}}</p></div>
    @endif
    <div class="userAccountInfoChangeLink">
    <p><a href="{{action('UserAccountInfoChangeController@get')}}">アカウント情報を変更する</a></p>
    </div>
    <ul>
      <li><span>名前</span><p>{{Auth::user()->name}}</p></li>
      <li><span>emailアドレス</span><p>{{Auth::user()->email}}</p></li>
    </ul>

      <div class="userAccountLink">
      <p><a href="{{action('UserAccountController@get')}}">終了</a></p>
      </div>
  </div>
</div>
@endsection
