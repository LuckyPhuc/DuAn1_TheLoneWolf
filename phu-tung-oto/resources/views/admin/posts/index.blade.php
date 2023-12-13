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
                    <a href="{{ route('admin.Posts.create') }}" class="btn btn-added">
                        <img src="{{ asset('assets/img/icons/plus.svg') }}" alt="img" class="me-1">
                        Thêm sản bài viết
                    </a>
                </div>
            </div>

            <div class="posts d-flex flex-nowrap">
                <div class=" d-flex flex-nowrap">
                    <div class="single-blog col-4 mr-3 ">
                        <div class="single-blog-thumb">
                            <a href="#">
                                <img class="w-100" src ="{{ asset('assets/img/product/product69.jpg') }}"
                                    alt="Blog Image" />
                            </a>
                        </div>
                        <div class="single-blog-content position-relative">
                            <div class="post-date text-center border rounded d-flex flex-column position-absolute">
                                <span>14</span>
                                <span>01</span>
                            </div>
                            <div class="post-meta">
                                <span class="author">Author: Obrien Demo Admin</span>
                            </div>
                            <h2 class="post-title">
                                <a href="#">There Are Many Variation of Passages of Lorem Ipsum
                                    Available</a>
                            </h2>
                            <p class="desc-content">
                                Contrary to popular belief, Lorem Ipsum is not simply
                                random text. It has roots in a piece of classical Latin
                                literature from 45 BC, making...
                            </p>
                        </div>
                    </div>
                    <div class="single-blog col-4 mr-3 ">
                        <div class="single-blog-thumb">
                            <a href="#">
                                <img class="w-100" src ="{{ asset('assets/img/product/product69.jpg') }}"
                                    alt="Blog Image" />
                            </a>
                        </div>
                        <div class="single-blog-content position-relative">
                            <div class="post-date text-center border rounded d-flex flex-column position-absolute">
                                <span>14</span>
                                <span>01</span>
                            </div>
                            <div class="post-meta">
                                <span class="author">Author: Obrien Demo Admin</span>
                            </div>
                            <h2 class="post-title">
                                <a href="#">There Are Many Variation of Passages of Lorem Ipsum
                                    Available</a>
                            </h2>
                            <p class="desc-content">
                                Contrary to popular belief, Lorem Ipsum is not simply
                                random text. It has roots in a piece of classical Latin
                                literature from 45 BC, making...
                            </p>
                        </div>
                    </div>
                    <div class="single-blog col-4 mr-3 ">
                        <div class="single-blog-thumb">
                            <a href="#">
                                <img class="w-100" src ="{{ asset('assets/img/product/product69.jpg') }}"
                                    alt="Blog Image" />
                            </a>
                        </div>
                        <div class="single-blog-content position-relative">
                            <div class="post-date text-center border rounded d-flex flex-column position-absolute">
                                <span>14</span>
                                <span>01</span>
                            </div>
                            <div class="post-meta">
                                <span class="author">Author: Obrien Demo Admin</span>
                            </div>
                            <h2 class="post-title">
                                <a href="#">There Are Many Variation of Passages of Lorem Ipsum
                                    Available</a>
                            </h2>
                            <p class="desc-content">
                                Contrary to popular belief, Lorem Ipsum is not simply
                                random text. It has roots in a piece of classical Latin
                                literature from 45 BC, making...
                            </p>
                        </div>
                    </div>
                    <div class="single-blog col-4 mr-3 ">
                        <div class="single-blog-thumb">
                            <a href="#">
                                <img class="w-100" src ="{{ asset('assets/img/product/product69.jpg') }}"
                                    alt="Blog Image" />
                            </a>
                        </div>
                        <div class="single-blog-content position-relative">
                            <div class="post-date text-center border rounded d-flex flex-column position-absolute">
                                <span>14</span>
                                <span>01</span>
                            </div>
                            <div class="post-meta">
                                <span class="author">Author: Obrien Demo Admin</span>
                            </div>
                            <h2 class="post-title">
                                <a href="#">There Are Many Variation of Passages of Lorem Ipsum
                                    Available</a>
                            </h2>
                            <p class="desc-content">
                                Contrary to popular belief, Lorem Ipsum is not simply
                                random text. It has roots in a piece of classical Latin
                                literature from 45 BC, making...
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
</div>
