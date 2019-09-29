@extends('layouts.app')

@section('content')
    <div class="text-center">
        <h1>ユーザーページ</h1>
    </div>
    
    <div class="row">
        <div class="col-sm-6 offset-sm-3">
            
            {!! Form::model($user, ['route' => ['user.update', $user->id], 'method' => 'put']) !!}
           　　　<div class="form-group">
                    {!! Form::label('email', 'メールアドレス') !!}
                    {!! Form::email('email', old('email'), ['class' => 'form-control']) !!}
                </div>
                
                <div class="form-group">
                    {!! Form::label('name', '名前') !!}
                    {!! Form::text('name', old('name'), ['class' => 'form-control']) !!}
                </div>
                
                <div class="form-group">
                    {!! Form::label('password', 'パスワード') !!}
                    {!! Form::password('password', ['class' => 'form-control']) !!}
                </div>
                
                <div class="form-group">
                    {!! Form::label('password_confirmation', 'パスワード（確認用）') !!}
                    {!! Form::password('password_confirmation', ['class' => 'form-control']) !!}
                </div>
                
                <div class="form-group">
                    {!! Form::label('age', '年齢') !!}
                    {!! Form::select('age', ['‐‐','10代', '20代', '30代', '40代', '50代', '60代', '70代～']) !!}
                </div>
                
                <div class="form-group">
                    {!! Form::label('adress', '居住地') !!}
                    {!! Form::select('adress', ['‐‐','北海道', '青森', '岩手', '宮城', '秋田', '山形', '福島',
                                                '茨城', '栃木', '群馬', '埼玉', '千葉', '東京', '神奈川',
                                                '新潟', '富山', '石川', '福井', '山梨', '長野', '岐阜', '静岡', '愛知',
                                                '三重', '滋賀', '京都', '大阪', '兵庫', '奈良', '和歌山',
                                                '鳥取', '島根', '岡山', '広島', '山口', '徳島', '香川', '愛媛', '高知',
                                                '福岡', '佐賀', '長崎', '熊本', '大分', '宮崎', '鹿児島', '沖縄'
                                                ]) !!}
                </div>
               
                {!! Form::submit('編集', ['class' => 'btn btn-primary btn-block']) !!}
            {!! Form::close() !!}
        </div>
    </div>
@endsection