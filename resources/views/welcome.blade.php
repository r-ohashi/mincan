@extends('layouts.app')

@section('content')
    @if (Auth::check())
        {{ Auth::check() }}
        {!! link_to_route('logout.get', 'ログアウト', [], ['class' => 'btn btn-lg btn-primary']) !!}
        {!! link_to_route('user.edit', 'ユーザーページ',['id' => Auth::id()], ['class' => 'btn btn-lg btn-primary']) !!}
    @else
        <div class="text-center">
            {!! link_to_route('login.post', 'ログイン', [], ['class' => 'btn btn-lg btn-primary']) !!}
            {!! link_to_route('signup.get', '会員登録', [], ['class' => 'btn btn-lg btn-primary']) !!}
        </div>
    @endif
@endsection