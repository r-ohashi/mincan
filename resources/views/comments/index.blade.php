@extends('layouts.app')

@section('content')

<div>タイトル：{{ $post->title }}</div>
<div>開催場所：{{ $post->place }}</div>
<div>募集年代：{{ $post->age }}</div>
<div>方式：{{ $post->styleToString() }}</div>
<div>詳細：{{ $post->content }}</div>

@if (count($comments) > 0)
    <ul class="list-unstyled">
        @foreach ($comments as $comment)
            <div>{{ $comment->content }}</div>
            @if (Auth::id() == $comment->user_id)
                {!! Form::open(['route' => ['comments.destroy', $comment->id], 'method' => 'delete']) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) !!}
                {!! Form::close() !!}
            @endif
        @endforeach
    </ul>
@endif

@if (Auth::check())
    {!! link_to_route('comments.create', 'コメント投稿', [$post->id], ['class' => 'btn btn-lg btn-primary']) !!}
@endif
    
@endsection
