@if (count($posts) > 0)
    @foreach ($posts as $post)
        <div class="card m-1">
            <div class="card-header">
                <div class="float-left">{{ $post->title }}</div>　　　　
                <div class="float-right">投稿日時：{{ $post->created_at->format('Y年m月d日 H時i分s秒') }}</div>
            </div>
            
            <div class="card-body row">
                <table class="table-bodered border table table-bodered">
                    <tr>
                        <th>投稿者</th>
                        <td>{!! link_to_route('user.show', $post->user->name, ['id' => $post->user->id]) !!}</td>
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
                        <td>{{ $post->date1 }} ～ {{ $post->date2 }}</td>
                    </tr>
                </table>
                
                @include('posts.buttons')

            </div>
        </div>
    @endforeach
@endif

{{ $posts->links('pagination::bootstrap-4') }}