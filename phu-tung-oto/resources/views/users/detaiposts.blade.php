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
    <div class="container p-5">
        {!! $posts->body !!}
    </div>
@endsection
