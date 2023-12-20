@extends('layouts.admin')

@section('title', 'Admin - Products')

<div class="page-wrapper">
    @section('content')
        <div class="content">
            <div class="page-header">
                <div class="page-title">
                    <h4>Danh sách Bài viết</h4>
                    <h6>Quản lý Bài viết</h6>
                </div>

                <div class="page-btn">
                    <a href="{{ route('admin.posts.create') }}" class="btn btn-added">
                        <img src="{{ asset('assets/img/icons/plus.svg') }}" alt="img" class="me-1">
                        Thêm sản bài viết
                    </a>
                </div>
            </div>

            <div class="posts row">
                @foreach ($posts as $post)
                    @php
                        $doc = new DOMDocument();
                        @$doc->loadHTML($post->body); // Sử dụng @ để tránh báo lỗi HTML parsing

                        $imgTags = $doc->getElementsByTagName('img');
                        $imgSrc = null;
                        if ($imgTags->length > 0) {
                            $imgSrc = $imgTags->item(0)->getAttribute('src');
                        }
                    @endphp
                    <div class="single-blog col-md-4 ">
                        <div class="single-blog-thumb">
                            <a href="#">
                                @if ($imgSrc)
                                    <img style="height: 200px" class="w-100" src="{{ $imgSrc }}"
                                        alt="{{ $post->title }}">
                                @endif
                            </a>
                        </div>
                        <div class="single-blog-content position-relative border " style="height: 180px">
                            <div class="post-date text-center border rounded d-flex flex-column position-absolute">
                                <span>{{ $post->created_at->format('d') }}</span>
                                <span>{{ $post->created_at->format('m') }}</span>
                            </div>
                            <div class="post-meta">
                                <span class="author">{{ $post->users->name }}</span>
                            </div>
                            <h2 class="post-title">
                                <a href="#">{{ substr($post->title, 0, 31) }}...</a>
                            </h2>
                            <p class="desc-content">
                                {{ substr($post->description, 0, 60) }} ...
                            </p>

                            <form action="{{ route('admin.posts.destroy', $post->id) }}" method="POST"
                                style="padding-bottom: 10px;">
                                @csrf
                                @method('DELETE')
                                <a class="btn btn-success" style="background: green; padding:0.5rem"
                                    href="{{ route('admin.posts.edit', ['id' => $post->id]) }}" data-bs-toggle="tooltip"
                                    data-bs-placement="top" title="Sửa mục này">
                                    <i class="bi bi-pencil"></i>
                                </a>
                                <button type="submit" class="btn btn-danger" style="background: red; padding:0.5rem"
                                    onclick="return confirm('Bạn có muốn xóa bài viết này không?')" data-bs-toggle="tooltip"
                                    data-bs-placement="top" title="Xóa mục này">
                                    <i class="bi bi-trash3"></i>
                                </button>
                            </form>

                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    @endsection
</div>
