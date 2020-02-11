@extends('layouts.main2')

@section('content')
<div class="verifyBox">
  @if (session('resent'))
    <div class="msgBox">
    <p>{{ __('確認メールが再送信されました。') }}</p>
    </div>
  @endif

  <div class="inVerifyBox">
    
    <div class="verifyTextBox">
      <p>{{ __('メールを確認してください。') }}</p>
    </div>
    <div class="retransmissionBox">
      <p>{{ __('※メールが届かない場合は下のボタンで再送信してください。') }}</p>
      <a href="{{ route('verification.resend') }}">{{ __('メールの再送信') }}</a></div>

    <div class="logoutRegisterBox">
      <p>※無効なメールアドレスで登録しようとした場合</p>
      <form action="{{ route('logout') }}" method="POST" id="logout">
        <p><input type="submit" value="やり直し">
        </p>
        @csrf
      </form>
    </div>
  </div>
</div>
@endsection
