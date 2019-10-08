@extends('layouts.app')

@section('content')
    
    <div class="text-center">
        <h1>募集一覧</h1>
    </div>
    
    @if (count($posts) > 0)
         <div class="card mb-4">
             @foreach ($posts as $post)
                <div class="card mb-4">
                    <div class="card-header">
                        {{ $post->title }}
                    </div>
                    
                    <div class="card-body">
                        <div>開催場所：{{ $post->place }}</div>
                        <div>募集年齢：{{ $post->age }}</div>
                        <div>方式：{{ $post->styleTostring() }}</div>
                    </div>
                    
                    <div class="card-footer row">
                        <div>
                            {!! link_to_route('comments.index', 'コメント・詳細を見る',[$post->id], ['class' => 'btn btn-primary btn-sm']) !!}
                        </div>
                        <div>
                            @if (Auth::id() == $post->user_id)
                                {!! Form::open(['route' => ['posts.destroy', $post->id], 'method' => 'delete']) !!}
                                    {!! Form::submit('投稿削除', ['class' => 'btn btn-danger btn-sm']) !!}
                                {!! Form::close() !!}
                            @endif                      
                        </div>
                        <div class="pull-right">
                            投稿日時：{{ $post->created_at->format('Y年m月d日 H時i分s秒') }}
                        </div>
                    </div>
                </div>
            @endforeach
         </div>
    @endif
@endsection