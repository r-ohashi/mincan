@extends('layouts.app')

@section('content')
    <div class="text-center">
    <h1>新規募集作成</h1>
    </div>
    <div>
            {!! Form::model($post, ['route' => 'posts.store',"enctype"=>"multipart/form-data"]) !!}
                <div class="form-group">
                    {!! Form::label('title', 'タイトル') !!}
                    {!! Form::text('title', null, ['class' => 'form-control']) !!}
                </div>
                
                <div class="form-group">
                    募集年代（複数選択可）<br>
                    {!! Form::checkbox('ages[]','0') !!}
                    {!! Form::label('ages[]','特になし') !!}
                    {!! Form::checkbox('ages[]','1') !!}
                    {!! Form::label('ages[]','10代') !!}
                    {!! Form::checkbox('ages[]','2') !!}
                    {!! Form::label('ages[]','20代') !!}
                    {!! Form::checkbox('ages[]','3') !!}
                    {!! Form::label('ages[]','30代') !!}
                    {!! Form::checkbox('ages[]','4') !!}
                    {!! Form::label('ages[]','40代') !!}
                    {!! Form::checkbox('ages[]','5') !!}
                    {!! Form::label('ages[]','50代') !!}
                    {!! Form::checkbox('ages[]','6') !!}
                    {!! Form::label('ages[]','60代') !!}
                    {!! Form::checkbox('ages[]','7') !!}
                    {!! Form::label('ages[]','70代～') !!}
                </div>
                
                <div class="form-group">
                    開催場所（複数選択可）<br>
                    {!! Form::checkbox('places[]','0') !!}
                    {!! Form::label('places[]','未定') !!}
                    {!! Form::checkbox('places[]','1') !!}
                    {!! Form::label('places[]','北海道') !!}
                    {!! Form::checkbox('places[]','2') !!}
                    {!! Form::label('places[]','青森') !!}
                    {!! Form::checkbox('places[]','3') !!}
                    {!! Form::label('places[]','岩手') !!}
                    {!! Form::checkbox('places[]','4') !!}
                    {!! Form::label('places[]','宮城') !!}
                    {!! Form::checkbox('places[]','5') !!}
                    {!! Form::label('places[]','秋田') !!}
                    {!! Form::checkbox('places[]','6') !!}  
                    {!! Form::label('places[]','山形') !!}
                    {!! Form::checkbox('places[]','7') !!}
                    {!! Form::label('places[]','福島') !!}
                    {!! Form::checkbox('places[]','8') !!}
                    {!! Form::label('places[]','茨城') !!}
                    {!! Form::checkbox('places[]','9') !!}
                    {!! Form::label('places[]','栃木') !!}
                    {!! Form::checkbox('places[]','10') !!}
                    {!! Form::label('places[]','群馬') !!}
                    {!! Form::checkbox('places[]','11') !!}
                    {!! Form::label('places[]','埼玉') !!}
                    {!! Form::checkbox('places[]','12') !!}
                    {!! Form::label('places[]','千葉') !!}
                    {!! Form::checkbox('places[]','13') !!}
                    {!! Form::label('places[]','東京') !!}
                    {!! Form::checkbox('places[]','14') !!}
                    {!! Form::label('places[]','神奈川') !!}
                    {!! Form::checkbox('places[]','15') !!}
                    {!! Form::label('places[]','新潟') !!}
                    {!! Form::checkbox('places[]','16') !!}
                    {!! Form::label('places[]','富山') !!}
                    {!! Form::checkbox('places[]','17') !!}
                    {!! Form::label('places[]','石川') !!}
                    {!! Form::checkbox('places[]','18') !!}
                    {!! Form::label('places[]','福井') !!}
                    {!! Form::checkbox('places[]','19') !!}
                    {!! Form::label('places[]','山梨') !!}
                    {!! Form::checkbox('places[]','20') !!}
                    {!! Form::label('places[]','長野') !!}
                    {!! Form::checkbox('places[]','21') !!}
                    {!! Form::label('places[]','岐阜') !!}
                    {!! Form::checkbox('places[]','22') !!}
                    {!! Form::label('places[]','静岡') !!}
                    {!! Form::checkbox('places[]','23') !!}
                    {!! Form::label('places[]','愛知') !!}
                    {!! Form::checkbox('places[]','24') !!}
                    {!! Form::label('places[]','三重') !!}
                    {!! Form::checkbox('places[]','25') !!}
                    {!! Form::label('places[]','滋賀') !!}
                    {!! Form::checkbox('places[]','26') !!}
                    {!! Form::label('places[]','大阪') !!}
                    {!! Form::checkbox('places[]','27') !!}
                    {!! Form::label('places[]','兵庫') !!}
                    {!! Form::checkbox('places[]','28') !!}
                    {!! Form::label('places[]','奈良') !!}
                    {!! Form::checkbox('places[]','29') !!}
                    {!! Form::label('places[]','和歌山') !!}
                    {!! Form::checkbox('places[]','30') !!}
                    {!! Form::label('places[]','大阪') !!}
                    {!! Form::checkbox('places[]','31') !!}
                    {!! Form::label('places[]','島根') !!}
                    {!! Form::checkbox('places[]','32') !!}
                    {!! Form::label('places[]','岡山') !!}
                    {!! Form::checkbox('places[]','33') !!}
                    {!! Form::label('places[]','広島') !!}
                    {!! Form::checkbox('places[]','34') !!}
                    {!! Form::label('places[]','山口') !!}
                    {!! Form::checkbox('places[]','35') !!}
                    {!! Form::label('places[]','鳥取') !!}
                    {!! Form::checkbox('places[]','36') !!}
                    {!! Form::label('places[]','香川') !!}
                    {!! Form::checkbox('places[]','37') !!}
                    {!! Form::label('places[]','愛媛') !!}
                    {!! Form::checkbox('places[]','38') !!}
                    {!! Form::label('places[]','高知') !!}
                    {!! Form::checkbox('places[]','39') !!}
                    {!! Form::label('places[]','福岡') !!}<br>
                    {!! Form::checkbox('places[]','40') !!}
                    {!! Form::label('places[]','佐賀') !!}
                    {!! Form::checkbox('places[]','41') !!}
                    {!! Form::label('places[]','長崎') !!}
                    {!! Form::checkbox('places[]','42') !!}
                    {!! Form::label('places[]','熊本') !!}
                    {!! Form::checkbox('places[]','43') !!}
                    {!! Form::label('places[]','大分') !!}
                    {!! Form::checkbox('places[]','44') !!}
                    {!! Form::label('places[]','宮崎') !!}
                    {!! Form::checkbox('places[]','45') !!}
                    {!! Form::label('places[]','鹿児島') !!}
                    {!! Form::checkbox('places[]','46') !!}
                    {!! Form::label('places[]','沖縄') !!}
                   
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