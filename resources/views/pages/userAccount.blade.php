@extends('layouts.main')
@section('content')
<div class="accountInfoBox">
  <div class="inAccountInfoBox">
    <div class="accountServiceListBox">
      <ul>
        <li><a href="{{action('UserAccountInfoConfirmController@get')}}">アカウント情報の変更<img src="{{asset('images/icon/ya.png')}}"></a></li>
        <li><a href="{{action('UserQuestsController@get')}}">作成したアンケート<img src="{{asset('images/icon/ya.png')}}"></a></li>
      </ul>
  </div>
  </div>
</div>
@endsection
