@extends('layouts.app')
@section('title', 'trang chi tiết bài viết')
@section('content')
    <div class="container">
        {!! $posts->body !!}
    </div>
@endsection
