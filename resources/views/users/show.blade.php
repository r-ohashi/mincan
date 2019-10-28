@extends('layouts.app')

@section('content')
<ul class="nav nav-tabs nav-justified mb-3">
    <li class="nav-item"><a href="{{ route('user.show', ['id' => $user->id]) }}" class="nav-link">プロフィール</a></li>
    <li class="nav-item"><a href="{{ route('user.favoritings', ['id' => $user->id]) }}" class="nav-link {{ Request::is('users/' . $user->id) ? 'active' : '' }}">お気に入り一覧</a></li>
</ul>
    
    <div class="text-center">
        <h1>{{ $user->name }}さんのプロフィール</h1>
    </div>
    <div>
        <div class="card">
            <div class="card-header">
                ユーザーネーム
            </div>
            <div class="card-body">
                {{ $user->name }}
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                年齢
            </div>
            <div class="card-body">
                {{ $user->ageToString() }}
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                居住地
            </div>
            <div class="card-body">
                {{ $user->adressToString() }}
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                自己紹介
            </div>
            <div class="card-body">
                {{ $user->introduction }}
            </div>
        </div>
                
        <div class="text-center">
            @if (Auth::id() == $user->id)
                {!! link_to_route('user.edit', 'ユーザー情報編集',[$user->id], ['class' => 'btn btn-primary btn-primary']) !!}
            @endif
        </div>
    </div>
@endsection