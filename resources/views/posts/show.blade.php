@extends('layouts.app')
<div>タイトル：{{ $post->title }}</div>
<div>方式：{{ $post->style }}</div>
<div>年齢：{{ $post->age }}</div>
<div>詳細：{{ $post->content }}</div>

{!! link_to_route('comments.index', '募集詳細',['id' => $post->id], ['class' => 'btn btn-lg btn-primary']) !!}

