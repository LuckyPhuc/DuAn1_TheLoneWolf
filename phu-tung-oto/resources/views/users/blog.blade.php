@extends('layouts.app')
@section('title', 'Phụ tùng ôtô - Trang bài viết')
@section('content')
    <div class="breadcrumbs-area position-relative">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="breadcrumb-content position-relative section-content">
                        <h3 class="title-3 text-white">Bài viết</h3>
                        <ul>
                            <li><a href="{{ route('index') }}" class="text-white">Trang chủ</a></li>
                            <li class="text-white">Bài viết</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="blog-main-area">
        <div class="container container-default custom-area">
            <div class="row flex-row-reverse">
                <div class="col-lg-8 col-12 col-custom widget-mt">
                    <!-- Blog Wrapper Start -->
                    <div class="row">
                        <div class="col-md-12 col-custom mb-4">
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
                                <div class="single-blog p-3">
                                    <div class="single-blog-thumb">
                                        <a href="{{ route('posts.show', ['id' => $post->id]) }}">
                                            @if ($imgSrc)
                                                <img class="w-100" src="{{ $imgSrc }}" alt="{{ $post->title }}">
                                            @endif
                                        </a>
                                    </div>
                                    <div class="single-blog-content position-relative">
                                        <div
                                            class="post-date text-center border rounded d-flex flex-column position-absolute">
                                            <span>{{ $post->created_at->format('d') }}</span>
                                            <span>{{ $post->created_at->format('m') }}</span>
                                        </div>
                                        <div class="post-meta">
                                            <span class="author"> <span class="author">Người Viết:
                                                    {{ $post->users->name }}</span></span>
                                        </div>
                                        <h2 class="post-title">
                                            <a href="{{ route('posts.show', ['id' => $post->id]) }}">{{ $post->title }}</a>
                                        </h2>
                                        <p class="desc-content"> {!! nl2br(e($post->description)) !!}
                                        </p>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <!-- Blog Wrapper End -->
                    <!-- Bottom Toolbar Start -->
                    <div class="row">
                        <div class="col-sm-12 col-custom">
                            <div class="toolbar-bottom">
                                <nav class="pagination pagination-wrap mb-10 mb-sm-0">
                                    <ul class="pagination">
                                        @if ($posts->onFirstPage())
                                            <li class="page-item disabled"><span class="page-link">Previous</span></li>
                                        @else
                                            <li class="page-item"><a class="page-link"
                                                    href="{{ $posts->previousPageUrl() }}">Previous</a></li>
                                        @endif
                                        @foreach ($posts->getUrlRange(1, $posts->lastPage()) as $page => $url)
                                            <li class="page-item {{ $page == $posts->currentPage() ? 'active' : '' }}">
                                                <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                                            </li>
                                        @endforeach
                                        @if ($posts->hasMorePages())
                                            <li class="page-item"><a class="page-link"
                                                    href="{{ $posts->nextPageUrl() }}">Next</a></li>
                                        @else
                                            <li class="page-item disabled"><span class="page-link">Next</span></li>
                                        @endif
                                    </ul>
                                </nav>
                                <div class="result-count">
                                    <span>{{ __('Showing') }}</span>
                                    <span class="font-medium">{{ $posts->firstItem() }}</span>
                                    <span>{{ __('to') }}</span>
                                    <span class="font-medium">{{ $posts->lastItem() }}</span>
                                    <span>{{ __('of') }}</span>
                                    <span class="font-medium">{{ $posts->total() }}</span>
                                    <span>{{ __('results') }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Bottom Toolbar End -->
                </div>
                <div class="col-lg-4 col-12 col-custom">
                    <!-- Sidebar Widget Start -->
                    <aside class="sidebar_widget mt-no-text">
                        <div class="widget_inner">
                            <div class="widget-list widget-mb-1">
                                <h3 class="widget-title">Search</h3>
                                <div class="search-box">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search Our Store"
                                            aria-label="Search Our Store">
                                        <div class="input-group-append">
                                            <button class="btn btn-outline-secondary" type="button">
                                                <i class="fa fa-search"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="widget-list widget-mb-3">
                                <h3 class="widget-title">Menu Categories</h3>
                                <ul>
                                    @foreach ($categories as $category)
                                        <li><a href="#">{{ $category->name }}</a></li>
                                    @endforeach
                                </ul>
                                <!-- Widget Menu Start -->
                                {{-- <nav>
                                        <ul class="mobile-menu p-0 m-0">
                                            <li class="menu-item-has-children"><a href="#">Breads</a>
                                                <ul class="dropdown">
                                                    <li><a href="#">Skateboard (02)</a></li>
                                                    <li><a href="#">Surfboard (4)</a></li>
                                                    <li><a href="#">Accessories (3)</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item-has-children"><a href="#">Fruits</a>
                                                <ul class="dropdown">
                                                    <li><a href="#">Samsome</a></li>
                                                    <li><a href="#">GL Stylus (4)</a></li>
                                                    <li><a href="#">Uawei (3)</a></li>
                                                    <li><a href="#">Avocado (3)</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item-has-children"><a href="#">Vagetables</a>
                                                <ul class="dropdown">
                                                    <li><a href="#">Power Bank</a></li>
                                                    <li><a href="#">Data Cable (4)</a></li>
                                                    <li><a href="#">Avocado (3)</a></li>
                                                    <li><a href="#">Brocoly (3)</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item-has-children"><a href="#">Organic Food</a>
                                                <ul class="dropdown">
                                                    <li><a href="#">Vagetables</a></li>
                                                    <li><a href="#">Green Food (4)</a></li>
                                                    <li><a href="#">Coconut (3)</a></li>
                                                    <li><a href="#">Cabage (3)</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </nav> --}}

                                <!-- Widget Menu End -->
                            </div>
                            <div class="widget-list widget-mb-4">
                                <h3 class="widget-title">Recent Products</h3>
                                <div class="sidebar-body">
                                    <div class="sidebar-product align-items-center">
                                        <a href="product-details.html" class="image">
                                            <img src="assets/images/product/small-product/1.jpg" alt="product">
                                        </a>
                                        <div class="product-content">
                                            <div class="product-title">
                                                <h4 class="title-2"> <a href="product-details.html">Product dummy name</a>
                                                </h4>
                                            </div>
                                            <div class="price-box">
                                                <span class="regular-price ">$80.00</span>
                                                <span class="old-price"><del>$90.00</del></span>
                                            </div>
                                            <div class="product-rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sidebar-product align-items-center">
                                        <a href="product-details.html" class="image">
                                            <img src="assets/images/product/small-product/2.jpg" alt="product">
                                        </a>
                                        <div class="product-content">
                                            <div class="product-title">
                                                <h4 class="title-2"> <a href="product-details.html">Product dummy
                                                        title</a></h4>
                                            </div>
                                            <div class="price-box">
                                                <span class="regular-price ">$50.00</span>
                                                <span class="old-price"><del>$60.00</del></span>
                                            </div>
                                            <div class="product-rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sidebar-product align-items-center">
                                        <a href="product-details.html" class="image">
                                            <img src="assets/images/product/small-product/3.jpg" alt="product">
                                        </a>
                                        <div class="product-content">
                                            <div class="product-title">
                                                <h4 class="title-2"> <a href="product-details.html">Product title here</a>
                                                </h4>
                                            </div>
                                            <div class="price-box">
                                                <span class="regular-price ">$40.00</span>
                                                <span class="old-price"><del>$50.00</del></span>
                                            </div>
                                            <div class="product-rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                                <i class="fa fa-star-half-o"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </aside>
                    <!-- Sidebar Widget End -->
                </div>
            </div>
        </div>
    </div>
@endsection
