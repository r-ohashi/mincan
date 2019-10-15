@extends('layouts.app')

@section('content')

<h2>募集詳細</h2>
<table class="table-bodered border table table-bodered ">
    <tr>
        <th>タイトル</th>
        <td>{{ $post->title }}</td>
    </tr>
    <tr>
        <th>開催場所</th>
        <td>{{ implode(', ', $post->place) }}</td>
    </tr>
    <tr>
        <th>募集年代</th>
        <td>{{ implode(', ', $post->age) }}</td>
    </tr>
    <tr>
        <th>方式</th>
        <td>{{ $post->styleToString() }}</td>
    </tr>
    <tr>
        <th>日程</th>
        <td>{{ $post->date1 }}～{{ $post->date2 }}</td>
    </tr>
    <tr>
        <th>詳細</th>
        <td>{{ $post->content }}</td>
    </tr>
    <tr>
        <th>興味のある人</th>
        <td></td>
    </tr>
</table>

<h2>コメント一覧</h2>
@if (count($comments) > 0)
    @foreach ($comments as $comment)
        <div class="card">
            <div class="card-header">
                <div class="float-left">{{ $post->id }}さんのコメント</div>
                <div class="float-right row">
                    <div>投稿日時：{{ $comment->created_at->format('Y年m月d日 H時i分s秒') }}</div>
                    <div>
                    @if (Auth::id() == $comment->user_id)
                        {!! Form::open(['route' => ['comments.destroy', $comment->id], 'method' => 'delete']) !!}
                            {!! Form::submit('削除する', ['class' => 'btn btn-danger btn-sm']) !!}
                        {!! Form::close() !!}
                    @endif
                    </div>
                </div>
            </div>
            
            <div class="card-body row">
                {{ $comment->content }}
            </div>
    　　</div>
    @endforeach
@endif

@if (Auth::check())
    <ul class="list-unstyled">
        {!! Form::open( ['route' => ['comments.store','post_id' => $post->id], 'method' => 'post']) !!}
                    <div class="form-group">
                        {!! Form::label('content', 'コメント投稿:') !!}
                        {!! Form::textarea('content','', ['class' => 'form-control']) !!}
                    </div>
                    {!! Form::submit('投稿', ['class' => 'btn btn-primary']) !!}
        {!! Form::close() !!}
    </ul>
@else
        {!! link_to_route('signup.get', 'コメント投稿には会員登録が必要です',[], ['class' => 'btn btn-primary btn-sm']) !!}
@endif

{{ $comments->links('pagination::bootstrap-4') }}

@endsection
