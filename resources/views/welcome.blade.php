@extends('layouts.app')

@section('content')
    
    <div class="text-center">
        <h1>募集一覧</h1>
    </div>
    
<div class="search">
    {!! Form::open(['route' => ['posts.search'],'method' => 'GET']) !!}
        {!! Form::label('place_keyword', '開催場所') !!}
        {!! Form::select('place_keyword', ['未定','北海道','青森','岩手','宮城','秋田','山形','福島',
                                                '茨城','栃木','群馬','埼玉','千葉','東京','神奈川',
                                                '新潟','富山','石川','福井','山梨','長野','岐阜','静岡','愛知',
                                                '三重','滋賀','大阪','兵庫','奈良','和歌山',
                                                '鳥取','島根','岡山','広島','山口',
                                                '徳島','香川','愛媛','高知',
                                                '福岡','佐賀','長崎','熊本','大分','宮崎','鹿児島','沖縄'],null, ['class' => 'form-control']) !!}        
        {!! Form::label('age_keyword', '募集年代') !!}
        {!! Form::select('age_keyword', ['特になし','10代','20代','30代','40代','50代','60代','70代~'],null, ['class' => 'form-control']) !!}
        {!! Form::label('style_keyword', '宿泊・日帰り') !!}
        {!! Form::select('style_keyword', ['未定', '宿泊', '日帰り'],null, ['class' => 'form-control']) !!}
        {!! Form::label('date1_keyword', '開始日付') !!}
        {!! Form::date('date1_keyword',null,['class' => 'form-control']) !!}
        {!! Form::label('date2_keyword', '終了日付') !!}
        {!! Form::date('date2_keyword',null,['class' => 'form-control']) !!}
        {!! Form::submit('検索') !!}
    {!! Form::close() !!}
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
                            <th>方式</th>
                            <td>{{ $post->styleToString() }}</td>
                        </tr>
                        <tr>
                            <th>日程</th>
                            <td>{{ $post->date1 }} ～ {{ $post->date2 }}</td>
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
