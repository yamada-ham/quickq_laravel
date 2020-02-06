@extends('layouts.main')

@section('content')
<div class="changeFormBox">
  <div class="inChangeFormBox">
    <h2>あなたの情報を変更</h2>
    <form action="" method="POST">
      @csrf
      <div class="inputBox">
        @if($errors->has('name'))
          <div class="errAccountInfoChangeBox"><p>{{$errors->first('name')}}</p></div>
        @endif
        <label for="name">name:</label><input type='text' id="name" name="name" value="{{Auth::user()->name}}">
      </div>
      <div class="inputBox">
        @if($errors->has('email'))
          <div class="errAccountInfoChangeBox"><p>{{$errors->first('email')}}</p></div>
        @endif
        <label for="email">email:</label><input type='text' id="email" name="email" value="{{Auth::user()->email}}">
      </div>
      <p class="submitBox"><input type="submit" value="変更内容を保存"></p>
      <input type="hidden" name="id" value="{{Auth::user()->id}}">
    </form>
    <div class="userAccountInfoConfirmLink"><a href="{{action('UserAccountInfoConfirmController@get')}}">アカウント情報確認ページに戻る</a></div>
  </div>
</div>
@endsection
