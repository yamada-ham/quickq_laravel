@extends('layouts.app')

@section('content')
  @include('subviews.sub_header2')
<div class="">
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif

    You are logged in!
</div>

@endsection
