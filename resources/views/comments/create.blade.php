@extends('layouts.app')

@if (Auth::check())
    <ul class="list-unstyled">
        {!! Form::model($comment, ['route' => ['comments.store','post_id' => $post->id], 'method' => 'post']) !!}
                    <div class="form-group">
                        {!! Form::label('content', 'コメント:') !!}
                        {!! Form::text('content','', ['class' => 'form-control']) !!}
                    </div>
                    {!! Form::submit('投稿', ['class' => 'btn btn-primary']) !!}
        {!! Form::close() !!}
    </ul>
@endif