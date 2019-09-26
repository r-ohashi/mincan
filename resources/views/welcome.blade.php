@extends('layouts.app')

@section('content')
    <div class="text-center">
        {!! link_to_route('signup.get', '会員登録', [], ['class' => 'btn btn-lg btn-primary']) !!}
    </div>
@endsection