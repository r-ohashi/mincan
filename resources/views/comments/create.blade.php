@if (Auth::check())
    <ul class="list-unstyled">
        {!! Form::open( ['route' => ['comments.store','post_id' => $post->id], 'method' => 'post']) !!}
                    <div class="form-group">
                        {!! Form::label('comment_content', 'コメント投稿:') !!}
                        {!! Form::textarea('comment_content','', ['class' => 'form-control']) !!}
                    </div>
                    {!! Form::submit('投稿', ['class' => 'btn btn-primary']) !!}
        {!! Form::close() !!}
    </ul>
@else
        {!! link_to_route('signup.get', 'コメント投稿には会員登録が必要です',[], ['class' => 'btn btn-primary btn-sm']) !!}
@endif