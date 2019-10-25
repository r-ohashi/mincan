<div>
     {!! Form::open(['route' => ['comments.index', $post->id], 'method' => 'get']) !!}
            <button><i class="far fa-comments"></i>コメントを見る</button>
     {!! Form::close() !!}
</div>
@if (Auth::check())
<div>
    @if (Auth::user()->is_favoriting($post->id))
        {!! Form::open(['route' => ['favorites.unfavorite', $post->id], 'method' => 'delete']) !!}
            <button><i class="fas fa-star"></i>お気に入り解除</button>
        {!! Form::close() !!}
    @else
        {!! Form::open(['route' => ['favorites.favorite', $post->id]]) !!}
            <button><i class="far fa-star"></i>お気に入り登録</button>
        {!! Form::close() !!}
    @endif
    
</div>
@endif
<div class="float-right">
    @if (Auth::id() == $post->user_id)
        {!! Form::open(['route' => ['posts.destroy', $post->id], 'method' => 'delete']) !!}
            <button><i class="fas fa-trash-alt"></i>削除</button>
        {!! Form::close() !!}
    @endif                      
</div>