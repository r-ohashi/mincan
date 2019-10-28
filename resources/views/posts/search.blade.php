<div class="border py-3 pb-2 mt-1">
    <div class="col-12">
    <h4>検索フォーム</h4>
    {!! Form::open(['route' => ['posts.search'],'method' => 'GET']) !!}
        {!! Form::label('place_keyword', '　開催場所') !!}
        {!! Form::select('place_keyword', ['未定','北海道','青森','岩手','宮城','秋田','山形','福島',
                                                '茨城','栃木','群馬','埼玉','千葉','東京','神奈川',
                                                '新潟','富山','石川','福井','山梨','長野','岐阜','静岡','愛知',
                                                '三重','滋賀','大阪','兵庫','奈良','和歌山',
                                                '鳥取','島根','岡山','広島','山口',
                                                '徳島','香川','愛媛','高知',
                                                '福岡','佐賀','長崎','熊本','大分','宮崎','鹿児島','沖縄'],null, ['class' => 'form-control']) !!}        
        {!! Form::label('age_keyword', '　募集年代') !!}
        {!! Form::select('age_keyword', ['特になし','10代','20代','30代','40代','50代','60代','70代～'],null, ['class' => 'form-control']) !!}
        {!! Form::label('style_keyword', '　宿泊・日帰り') !!}
        {!! Form::select('style_keyword', ['未定', '宿泊', '日帰り'],null, ['class' => 'form-control']) !!}
        {!! Form::label('date1_keyword', '　開始日付～') !!}
        {!! Form::date('date1_keyword',null,['class' => 'form-control']) !!}
        {!! Form::label('date2_keyword', '　～終了日付') !!}
        {!! Form::date('date2_keyword',null,['class' => 'form-control']) !!}
        <div class="mt-2 text-center">{!! Form::submit('検索',['class' => "btn btn-primary col-md-12"]) !!}</div>
    {!! Form::close() !!}
    </div>
</div>