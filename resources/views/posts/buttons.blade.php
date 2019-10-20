<div>
    <i class="far fa-comments"></i> <a href="{{ route('comments.index', ['id' => $post->id]) }}">コメントを見る</a>
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