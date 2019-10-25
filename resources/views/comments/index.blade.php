@extends('layouts.app')

@section('content')

@include('comments.show')

@include('comments.create')

{{ $comments->links('pagination::bootstrap-4') }}

@endsection
