@extends('layouts.app')

@section('content')

<h2>募集詳細</h2>
<table class="table-bodered border table table-bodered ">
    <tr>
        <th>投稿者</th>
        <td>{!! link_to_route('user.show', $post->user->name, ['id' => $post->user->id]) !!}</td>
    </tr>
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
        <th>宿泊・日帰り</th>
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
</table>

<h2>コメント一覧</h2>
@if (count($comments) > 0)
    @foreach ($comments as $comment)
        <div class="card">
            <div class="card-header">
                <div class="float-left">{!! link_to_route('user.show', $comment->user->name, ['id' => $comment->user->id]) !!}さんのコメント</div>
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
                {{ $comment->comment_content }}
            </div>
    　　</div>
    @endforeach
@endif

@include('comments.create')

{{ $comments->links('pagination::bootstrap-4') }}

@endsection
