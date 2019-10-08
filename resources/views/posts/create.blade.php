@extends('layouts.app')

@section('content')

    <h1>新規募集作成</h1>

    <div class="row">
        <div class="col-6">
            {!! Form::model($post, ['route' => 'posts.store']) !!}
                <div class="form-group">
                    {!! Form::label('title', 'タイトル') !!}
                    {!! Form::text('title', null, ['class' => 'form-control']) !!}
                </div>
                
                <div class="form-group">
                    {!! Form::label('style', '形式') !!}
                    {!! Form::select('style', ['--', '宿泊', '日帰り']) !!}
                </div>
                
                <div class="form-group">
                    {!! Form::label('place', '開催場所') !!}
                    {!! Form::label('未定') !!}
                    {!! Form::checkbox('place', '未定') !!}
                    {!! Form::label('北海道') !!}
                    {!! Form::checkbox('place', '北海道') !!}
                    {!! Form::label('青森') !!}
                    {!! Form::checkbox('place', '青森') !!}
                    {!! Form::label('岩手') !!}
                    {!! Form::checkbox('place', '岩手') !!}
                    {!! Form::label('宮城') !!}
                    {!! Form::checkbox('place', '宮城') !!}
                    {!! Form::label('秋田') !!}
                    {!! Form::checkbox('place', '秋田') !!}
                    {!! Form::label('山形') !!}
                    {!! Form::checkbox('place', '山形') !!}
                    {!! Form::label('福島') !!}
                    {!! Form::checkbox('place', '福島') !!}
                    {!! Form::label('茨城') !!}
                    {!! Form::checkbox('place', '茨城') !!}
                    {!! Form::label('栃木') !!}
                    {!! Form::checkbox('place', '栃木') !!}
                    {!! Form::label('群馬') !!}
                    {!! Form::checkbox('place', '群馬') !!}
                    {!! Form::label('埼玉') !!}
                    {!! Form::checkbox('place', '埼玉') !!}
                    {!! Form::label('千葉') !!}
                    {!! Form::checkbox('place', '千葉') !!}
                    {!! Form::label('東京') !!}
                    {!! Form::checkbox('place', '東京') !!}
                    {!! Form::label('神奈川') !!}
                    {!! Form::checkbox('place', '神奈川') !!}
                    {!! Form::label('新潟') !!}
                    {!! Form::checkbox('place', '新潟') !!}
                    {!! Form::label('富山') !!}
                    {!! Form::checkbox('place', '富山') !!}
                    {!! Form::label('石川') !!}
                    {!! Form::checkbox('place', '石川') !!}
                    {!! Form::label('福井') !!}
                    {!! Form::checkbox('place', '福井') !!}
                    {!! Form::label('山梨') !!}
                    {!! Form::checkbox('place', '山梨') !!}
                    {!! Form::label('長野') !!}
                    {!! Form::checkbox('place', '長野') !!}
                    {!! Form::label('岐阜') !!}
                    {!! Form::checkbox('place', '岐阜') !!}
                    {!! Form::label('静岡') !!}
                    {!! Form::checkbox('place', '静岡') !!}
                    {!! Form::label('愛知') !!}
                    {!! Form::checkbox('place', '愛知') !!}
                    {!! Form::label('三重') !!}
                    {!! Form::checkbox('place', '三重') !!}
                    {!! Form::label('滋賀') !!}
                    {!! Form::checkbox('place', '滋賀') !!}
                    {!! Form::label('大阪') !!}
                    {!! Form::checkbox('place', '大阪') !!}
                    {!! Form::label('兵庫') !!}
                    {!! Form::checkbox('place', '兵庫') !!}
                    {!! Form::label('奈良') !!}
                    {!! Form::checkbox('place', '奈良') !!}
                    {!! Form::label('和歌山') !!}
                    {!! Form::checkbox('place', '和歌山') !!}
                    {!! Form::label('鳥取') !!}
                    {!! Form::checkbox('place', '鳥取') !!}
                    {!! Form::label('島根') !!}
                    {!! Form::checkbox('place', '島根') !!}
                    {!! Form::label('岡山') !!}
                    {!! Form::checkbox('place', '岡山') !!}
                    {!! Form::label('広島') !!}
                    {!! Form::checkbox('place', '広島') !!}
                    {!! Form::label('山口') !!}
                    {!! Form::checkbox('place', '山口') !!}
                    {!! Form::label('徳島') !!}
                    {!! Form::checkbox('place', '徳島') !!}
                    {!! Form::label('香川') !!}
                    {!! Form::checkbox('place', '香川') !!}
                    {!! Form::label('愛媛') !!}
                    {!! Form::checkbox('place', '愛媛') !!}
                    {!! Form::label('高知') !!}
                    {!! Form::checkbox('place', '高知') !!}
                    {!! Form::label('福岡') !!}
                    {!! Form::checkbox('place', '福岡') !!}
                    {!! Form::label('佐賀') !!}
                    {!! Form::checkbox('place', '佐賀') !!}
                    {!! Form::label('長崎') !!}
                    {!! Form::checkbox('place', '長崎') !!}
                    {!! Form::label('熊本') !!}
                    {!! Form::checkbox('place', '熊本') !!}
                    {!! Form::label('大分') !!}
                    {!! Form::checkbox('place', '大分') !!}
                    {!! Form::label('宮崎') !!}
                    {!! Form::checkbox('place', '宮崎') !!}
                    {!! Form::label('鹿児島') !!}
                    {!! Form::checkbox('place', '鹿児島') !!}
                    {!! Form::label('沖縄') !!}
                    {!! Form::checkbox('place', '沖縄') !!}
                </div>
                
                <div class="form-group">
                    {!! Form::label('age', '募集年代') !!}
                    {!! Form::label('特になし') !!}
                    {!! Form::checkbox('age','特になし') !!}
                    {!! Form::label('10代') !!}
                    {!! Form::checkbox('age','10代') !!}
                    {!! Form::label('20代') !!}
                    {!! Form::checkbox('age','20代') !!}
                    {!! Form::label('30代') !!}
                    {!! Form::checkbox('age','30代') !!}
                    {!! Form::label('40代') !!}
                    {!! Form::checkbox('age','40代') !!}
                    {!! Form::label('50代') !!}
                    {!! Form::checkbox('age','50代') !!}
                    {!! Form::label('60代') !!}
                    {!! Form::checkbox('age','60代') !!}
                    {!! Form::label('70代~') !!}
                    {!! Form::checkbox('age','70代~') !!}
                </div>
                
                <div class="form-group">
                    {!! Form::label('content', '詳細') !!}
                    {!! Form::text('content', null, ['class' => 'form-control']) !!}
                </div>
        
                {!! Form::submit('投稿', ['class' => 'btn btn-primary']) !!}
        
            {!! Form::close() !!}
        </div>
    </div>
@endsection