<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>MinCam</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    </head>

    <body>
        <header class="mb-4">
            <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
                <a class="navbar-brand" href="/">みんきゃん</a>
                
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#nav-bar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <div class="collapse navbar-collapse" id="nav-bar">
                    <ul class="navbar-nav mr-auto"></ul>
                    <ul class="navbar-nav">
                        <li class="nav-item list-inline">
                            @if (Auth::check())
    　　　                         <li class="nav-item">{!! link_to_route('post.index', '募集一覧', [], ['class' => 'nav-link']) !!}</li>
                                <li class="nav-item">{!! link_to_route('posts.create', '新規募集作成', [], ['class' => 'nav-link']) !!}</li>
                                <li class="nav-item">{!! link_to_route('user.edit', 'ユーザーページ', ['id' => Auth::id()], ['class' => 'nav-link']) !!}</li>
                                <li class="nav-item">{!! link_to_route('logout.get', 'ログアウト', [], ['class' => 'nav-link']) !!}</li>
                            @else
                                <div class="text-center">
                                    <li class="nav-item">{!! link_to_route('post.index', '募集一覧', [], ['class' => 'nav-link']) !!}</li>
                                    <li class="nav-item">{!! link_to_route('signup.get', '新規募集作成（会員登録が必要です）', [], ['class' => 'nav-link']) !!}</li>
                                    <li class="nav-item">{!! link_to_route('login.post', 'ログイン', [], ['class' => 'nav-link']) !!}</li>
                                    <li class="nav-item">{!! link_to_route('signup.get', '会員登録', [], ['class' => 'nav-link']) !!}</li>
                                </div>
                            @endif
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

        <div class="container">
            @include('commons.error_messages')
            
            @yield('content')
        </div>
        
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
        <script defer src="https://use.fontawesome.com/releases/v5.7.2/js/all.js"></script>
    </body>
</html>