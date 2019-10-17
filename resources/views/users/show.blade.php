@extends('layouts.app')

@section('content')
    
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