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
                    {!! Form::label('age', '年齢') !!}
                    {!! Form::select('age', ['--','10代', '20代', '30代', '40代', '50代', '60代', '70代～']) !!}
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