@extends('layouts.app')

@section('content')
    @if (Auth::check())
        {{ Auth::check() }}
        {!! link_to_route('logout.get', 'Logout') !!}
    @else
        <div class="text-center">
            {!! link_to_route('signup.get', '会員登録', [], ['class' => 'btn btn-lg btn-primary']) !!}
        </div>
    @endif
@endsection