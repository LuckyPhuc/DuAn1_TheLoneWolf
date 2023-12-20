@extends('layouts.app')
@section('title', 'Phụ tùng ôtô - Trang bài viết')
@section('content')
    <div class="breadcrumbs-area position-relative">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="breadcrumb-content position-relative section-content">
                        <h3 class="title-3 text-white">Chi tiết bài viết</h3>
                        <ul>
                            <li><a href="{{ route('index') }}" class="text-white">Trang chủ</a></li>
                            <li class="text-white">Chi tiết bài viết</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>
        h2 {
            font-size: 24px;
            padding-bottom: 2%;
            padding-top: 1%
        }

        img {
            width: 100%;
            padding: 1% 3%;
        }
    </style>
    <div class="container p-5">
        <h1 class="display-6 text-center pb-3">{{ $posts->title }}</h1>
        {!! $posts->body !!}
    </div>
@endsection
