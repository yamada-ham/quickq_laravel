@extends('layouts.main')
@section('content')
<div class="accountInfoBox">
  <div class="inAccountInfoBox">
    <div class="accountServiceListBox">
      <ul>
        <li><a href="./userAccountInfoChange.php">アカウント情報の変更<img src="{{asset('images/icon/ya.png')}}"></a></li>
        <li><a href="./userQuests.php">作成したアンケート<img src="{{asset('images/icon/ya.png')}}"></i></a></li>
      </ul>
  </div>
  </div>
</div>
@endsection
