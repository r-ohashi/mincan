@extends('layouts.app')
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