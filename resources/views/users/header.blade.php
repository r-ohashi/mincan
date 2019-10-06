@if (Auth::check())
    {!! link_to_route('logout.get', 'ログアウト', [], ['class' => 'btn btn-lg btn-primary']) !!}
    {!! link_to_route('posts.create', '新規募集作成',[], ['class' => 'btn btn-lg btn-primary']) !!}
    {!! link_to_route('post.index', '投稿一覧', [], ['class' => 'btn btn-lg btn-primary']) !!}
@endif