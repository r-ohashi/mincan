@extends('layouts.app')

@section('content')

<h3>募集詳細</h3>
<table class="table table-bodered">
<tr>
    <th>タイトル</th>
    <td>{{ $post->title }}</td>
</tr>
<tr>
    <th>開催場所</th>
    <td>{{ $post->place }}</td>
</tr>
<tr>
    <th>募集年代</th>
    <td>{{ $post->age }}</td>
</tr>
<tr>
    <th>方式</th>
    <td>{{ $post->styleToString() }}</td>
</tr>
<tr>
    <th>詳細</th>
    <td>{{ $post->content }}</td>
</tr>
</table>

<h3>コメント一覧</h3>
@if (count($comments) > 0)
    <div class="card mb-4">
        @foreach ($comments as $comment)
            <div class="card-body">
                {{ $comment->content }}
            </div>
            
            <div class="card-footer">
                <span>
                投稿日時：{{ $comment->created_at->format('Y年m月d日 H時i分s秒') }}
                </span>
                <span>
                @if (Auth::id() == $comment->user_id)
                    {!! Form::open(['route' => ['comments.destroy', $comment->id], 'method' => 'delete']) !!}
                        {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) !!}
                    {!! Form::close() !!}
                @endif
                </span>
            </div>
    　　@endforeach
    </div>
@endif

@if (Auth::check())
    <ul class="list-unstyled">
        {!! Form::open( ['route' => ['comments.store','post_id' => $post->id], 'method' => 'post']) !!}
                    <div class="form-group">
                        {!! Form::label('content', 'コメント投稿:') !!}
                        {!! Form::text('content','', ['class' => 'form-control']) !!}
                    </div>
                    {!! Form::submit('投稿', ['class' => 'btn btn-primary']) !!}
        {!! Form::close() !!}
    </ul>
@endif

@endsection
