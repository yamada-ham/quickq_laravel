@extends('layouts.main')

@section('content')
<div class="changeFormBox">
  <div class="inChangeFormBox">
    <h2>あなたの情報を変更</h2>
    <form action="" method="POST">
      @csrf
      <div class="inputBox">
        <label for="userName">name:</label><input type='text' id="userName" name="userName" value="{{Auth::user()->name}}">
      </div>
      <div class="inputBox">
        <label for="email">email:</label><input type='text' id="email" name="email" value="{{Auth::user()->email}}">
      </div>
      <p><input type="submit" value="変更内容を保存"></p>
      <input type="hidden" name="id" value="{{Auth::user()->id}}">
    </form>
  </div>
</div>
@endsection
