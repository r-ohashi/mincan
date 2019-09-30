@extends('layouts.app')

@section('content')
    @if (Auth::check())
        {{ Auth::check() }}
        {!! link_to_route('logout.get', 'ログアウト', [], ['class' => 'btn btn-lg btn-primary']) !!}
        {!! link_to_route('user.edit', 'ユーザーページ',['id' => Auth::id()], ['class' => 'btn btn-lg btn-primary']) !!}
        {!! link_to_route('posts.create', '新規募集作成',[], ['class' => 'btn btn-lg btn-primary']) !!}
    @else
        <div class="text-center">
            {!! link_to_route('login.post', 'ログイン', [], ['class' => 'btn btn-lg btn-primary']) !!}
            {!! link_to_route('signup.get', '会員登録', [], ['class' => 'btn btn-lg btn-primary']) !!}
        </div>
    @endif
    
    @if (count($posts) > 0)
        <ul class="list-unstyled">
            @foreach ($posts as $post)
                <div>タイトル：{{ $post->title }}</div>
                <div>詳細：{{ $post->content }}</div>
                <div>年齢：{{ $post->ageToString() }}</div>
                <div>方式：{{ $post->styleTostring() }}</div>
                {!! link_to_route('posts.show', '募集詳細',['id' => $post->id], ['class' => 'btn btn-lg btn-primary']) !!}
                
                @if (Auth::id() == $post->user_id)
                    {!! Form::open(['route' => ['posts.destroy', $post->id], 'method' => 'delete']) !!}
                        {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) !!}
                    {!! Form::close() !!}
                @endif
            @endforeach
        </ul>
    @endif
@endsection