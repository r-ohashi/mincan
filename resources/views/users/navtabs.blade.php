<div>
    <ul class="nav nav-tabs nav-justified">
        <li class="nav-item"><a href="{{ route('users.favoritings', ['id' => $user->id]) }}" class="nav-link">行きたい！リスト</a></li>
        <li class="nav-item"><a href="" class="nav-link">投稿一覧</a></li>
        <li class="nav-item"><a href="{{ route('users.show', ['id' => $user->id]) }}" class="nav-link">登録情報</a></li>
    </ul>
</div>