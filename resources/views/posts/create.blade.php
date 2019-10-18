@extends('layouts.app')

@section('content')
    <div class="text-center">
    <h1>新規募集作成</h1>
    </div>
    <div>
            {!! Form::model($post, ['route' => 'posts.store']) !!}
                <div class="form-group">
                    {!! Form::label('title', 'タイトル') !!}
                    {!! Form::text('title', null, ['class' => 'form-control']) !!}
                </div>
                
                <div class="form-group">
                    {!! Form::label('ages', '募集年代（複数選択可）') !!}
                    {!! Form::select('ages[]', ['特になし','10代','20代','30代','40代','50代','60代','70代~']
                    , null, ['class' => 'form-control', 'multiple' => 'multiple']) !!}
                </div>
                
                <div class="form-group">
                    {!! Form::label('places', '開催場所（複数選択可）') !!}
                    {!! Form::select('places[]', ['未定','北海道','青森','岩手','宮城','秋田','山形','福島',
                                                '茨城','栃木','群馬','埼玉','千葉','東京','神奈川',
                                                '新潟','富山','石川','福井','山梨','長野','岐阜','静岡','愛知',
                                                '三重','滋賀','大阪','兵庫','奈良','和歌山',
                                                '鳥取','島根','岡山','広島','山口',
                                                '徳島','香川','愛媛','高知',
                                                '福岡','佐賀','長崎','熊本','大分','宮崎','鹿児島','沖縄']
                    , null, ['class' => 'form-control', 'multiple' => 'multiple']) !!}
                </div>
                
                <div class="form-group">
                    {!! Form::label('style', '宿泊・日帰り') !!}
                    {!! Form::select('style', ['未定', '宿泊', '日帰り'],null, ['class' => 'form-control']) !!}
                </div>
                
                <div class="form-group">
                    <div>
                        {!! Form::label('date', '開始日付:') !!}
                        {!! Form::date('date1',null,['class' => 'form-control']) !!}
                    </div>
                    <div>
                        {!! Form::label('date', '終了日付:') !!}
                        {!! Form::date('date2',null,['class' => 'form-control']) !!}
                    </div>
                 </div>  
                    
                <div class="form-group">
                    {!! Form::label('content', '詳細') !!}
                    {!! Form::textarea('content', null, ['class' => 'form-control']) !!}
                </div>
                
        
                <di>{!! Form::submit('投稿', ['class' => 'btn btn-primary']) !!}</div>
        
            {!! Form::close() !!}
    </div>
@endsection