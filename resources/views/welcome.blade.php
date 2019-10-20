@extends('layouts.app')

@section('content')
    
    <div class="text-center">
        <h1>募集一覧</h1>
    </div>

@include('posts.search')
    
@include('posts.index')
    
@endsection
