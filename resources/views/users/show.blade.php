@extends('layouts.app')

@section('content')
    
    <div class="text-center">
        <h1>{{ $user->name }}さんの登録情報</h1>
    </div>
    <div>
        <table class="table-bodered border table table-bodered ">
            <tr>
                <th>ユーザーネーム</th>
                <td>{{ $user->name }}</td>
            </tr>
            <tr>
                <th>年齢</th>
                <td>{{ $user->age }}</td>
            </tr>
            <tr>
                <th>居住地</th>
                <td>{{ $user->adress }}</td>
            </tr>
            <tr>
                <th>自己紹介</th>
                <td>{{ $user->introduction }}</td>
            </tr>
        </table>
        <div class="text-center">
            @if (Auth::id() == $user->id)
             {!! link_to_route('user.edit', 'ユーザー情報編集',[$user->id], ['class' => 'btn btn-primary btn-primary']) !!}
            @endif
        </div>
    </div>
@endsection