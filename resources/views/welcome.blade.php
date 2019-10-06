@extends('layouts.app')

@section('content')
@extends('commons.header')
    
    @if (count($posts) > 0)
        <ul class="list-unstyled">
            @foreach ($posts as $post)
                <div>タイトル：{{ $post->title }}</div>
                <div>開催場所：{{ $post->place }}</div>
                <div>募集年齢：{{ $post->age }}</div>
                <div>方式：{{ $post->styleTostring() }}</div>
                <div>詳細：{{ $post->content }}</div>
                {!! link_to_route('comments.index', 'コメント一覧',[$post->id], ['class' => 'btn btn-lg btn-primary']) !!}
                
                @if (Auth::id() == $post->user_id)
                    {!! Form::open(['route' => ['posts.destroy', $post->id], 'method' => 'delete']) !!}
                        {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) !!}
                    {!! Form::close() !!}
                @endif
            @endforeach
        </ul>
    @endif
@endsection