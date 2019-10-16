@extends('layouts.app')

@section('content')
    
    <div class="text-center">
        <h1>募集一覧</h1>
    </div>
    
    @if (count($posts) > 0)
        @foreach ($posts as $post)
            <div class="card">
                <div class="card-header">
                    <div class="float-left">{{ $post->title }}</div>　　　　
                    <div class="float-right">投稿日時：{{ $post->created_at->format('Y年m月d日 H時i分s秒') }}</div>
                </div>
                
                <div class="card-body row">
                    <table class="table-bodered border table table-bodered">
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
                        <td>{{ $post->date1 }} ～ {{ $post->date2 }}</td>
                    </tr>
                    <tr>
                        <th></th>
                        <td></td>
                    </tr>
                    </table>
                    
                    <div>
                        {!! link_to_route('comments.index', 'コメント・詳細を見る',[$post->id], ['class' => 'btn btn-primary btn-sm']) !!}
                    </div>
                    @if (Auth::check())
                    <div>
                        @if (Auth::user()->is_favoriting($post->id))
                            {!! Form::open(['route' => ['favorites.unfavorite', $post->id], 'method' => 'delete']) !!}
                                {!! Form::submit('取り消す', ['class' => "btn btn-danger btn-sm"]) !!}
                            {!! Form::close() !!}
                        @else
                            {!! Form::open(['route' => ['favorites.favorite', $post->id]]) !!}
                                {!! Form::submit('行きたい！', ['class' => "btn btn-primary btn-sm"]) !!}
                            {!! Form::close() !!}
                        @endif
                    </div>
                    @endif
                    <div class="float-right">
                        @if (Auth::id() == $post->user_id)
                            {!! Form::open(['route' => ['posts.destroy', $post->id], 'method' => 'delete']) !!}
                                {!! Form::submit('投稿削除', ['class' => 'btn btn-danger btn-sm']) !!}
                            {!! Form::close() !!}
                        @endif                      
                    </div>
                </div>
            </div>
        @endforeach
    @endif
    
    {{ $posts->links('pagination::bootstrap-4') }}
    
@endsection