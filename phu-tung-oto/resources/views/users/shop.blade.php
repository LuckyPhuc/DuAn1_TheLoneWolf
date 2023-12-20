@extends('layouts.app')
@section('title', 'Phụ tùng ôtô - Trang sản phẩm')
@section('content')
    <div class="breadcrumbs-area position-relative">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="breadcrumb-content position-relative section-content">
                        <h3 class="title-3 text-white">Sản phẩm</h3>
                        <ul>
                            <li><a href="{{ route('index') }}" class="text-white">Trang chủ</a></li>
                            <li class="text-white">Sản phẩm</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="shop-main-area">
        <div class="container container-default custom-area">
            <div class="row flex-row-reverse">
                <div class="col-lg-9 col-12 col-custom widget-mt">
                    <!--shop toolbar start-->
                    <div class="shop_toolbar_wrapper">
                        <div class="shop_toolbar_btn">
                            <button data-role="grid_3" type="button" class="active btn-grid-3" data-bs-toggle="tooltip"
                                title="3"><i class="fa fa-th"></i></button>
                            <!-- <button data-role="grid_4" type="button"  class=" btn-grid-4" data-bs-toggle="tooltip" title="4"></button> -->
                            {{-- <button data-role="grid_list" type="button" class="btn-list" data-bs-toggle="tooltip"
                                title="List"><i class="fa fa-th-list"></i></button> --}}
                        </div>
                        <div class="shop-select">
                            <div class="form-group d-flex">
                                <form action="{{ route('locProducts') }}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <select class="form-control nice-select w-100" name="sorting_option">
                                            <option selected value="1">Theo bảng chữ cái, A-Z</option>
                                            <option value="2">Sắp xếp theo mức độ phổ biến</option>
                                            <option value="3">Sắp xếp theo độ mới</option>
                                            <option value="4">Sắp xếp theo giá: thấp đến cao</option>
                                            <option value="5">Sắp xếp theo giá: cao xuống thấp</option>
                                        </select>
                                    </div>
                                    <div class="buttun">
                                        <input type="submit" value="Lọc">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!--shop toolbar end-->
                    <!-- Shop Wrapper Start -->
                    <div class="row">
                        @foreach ($products as $product)
                            <div class="col-md-4 col-sm-6 col-lg-4 col-custom product-area p-3">
                                <div class="single-product position-relative">
                                    <div class="product-image">
                                        <a class="d-block" href="{{ route('detail', ['id' => $product->id]) }}">
                                            <img src="{{ asset($product->image_features->first()->url_img) }}"
                                                alt="" class="product-image-1 w-100">
                                        </a>
                                    </div>
                                    <div class="product-content" style="height: 160px">
                                        <div class="product-rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <div class="product-title">
                                            <h4 class="title-2"> <a class="name__products"
                                                    href="{{ route('detail', ['id' => $product->id]) }}">{{ $product->name }}</a>
                                            </h4>
                                        </div>
                                        <div class="price-box">
                                            <span class="regular-price ">{{ number_format($product->price, 2, '.', ',') }}
                                                VND</span>
                                        </div>
                                    </div>
                                    <div class="add-action d-flex position-absolute">
                                        <form id="addToCartForm"
                                            action="{{ route('cart.add', ['productId' => $product->id, 'quantity' => 1]) }}"
                                            method="post">
                                            @csrf
                                            <a style="margin-right: 15px">
                                                <button type="submit" value="Thêm vào giỏ hàng"><i
                                                        class="ion-bag"></i></button>
                                            </a>
                                        </form>
                                        <a href="compare.html" title="Compare"><i class="ion-ios-loop-strong"></i></a>
                                        <a href="wishlist.html" title="Add To Wishlist"><i
                                                class="ion-ios-heart-outline"></i></a>
                                        <a href="#exampleModalCenter" data-bs-toggle="modal" title="Quick View"><i
                                                class="ion-eye"></i></a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <!-- Shop Wrapper End -->
                    <!-- Bottom Toolbar Start -->
                    <div class="row">
                        <div class="col-sm-12 col-custom">
                            <div class="toolbar-bottom mt-30">
                                {{-- <nav class="pagination pagination-wrap mb-10 mb-sm-0">
                                    <ul class="pagination">
                                        @if ($products->currentPage() == 1)
                                            <li class="page-item disabled"><span class="page-link">Previous</span></li>
                                        @else
                                            <li class="page-item"><a class="page-link"
                                                    href="{{ $products->previousPageUrl() }}">Previous</a></li>
                                        @endif

                                        @foreach ($products->getUrlRange(1, $products->lastPage()) as $page => $url)
                                            <li class="page-item {{ $page == $products->currentPage() ? 'active' : '' }}">
                                                <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                                            </li>
                                        @endforeach

                                        @if ($products->hasMorePages())
                                            <li class="page-item"><a class="page-link"
                                                    href="{{ $products->nextPageUrl() }}">Next</a></li>
                                        @else
                                            <li class="page-item disabled"><span class="page-link">Next</span></li>
                                        @endif
                                    </ul>
                                </nav>
                                <div class="result-count">
                                    <span>{{ __('Showing') }}</span>
                                    <span class="font-medium">{{ $products->firstItem() }}</span>
                                    <span>{{ __('to') }}</span>
                                    <span class="font-medium">{{ $products->lastItem() }}</span>
                                    <span>{{ __('of') }}</span>
                                    <span class="font-medium">{{ $products->total() }}</span>
                                    <span>{{ __('results') }}</span>
                                </div> --}}
                            </div>


                        </div>
                    </div>
                    <!-- Bottom Toolbar End -->
                </div>
                <div class="col-lg-3 col-12 col-custom">
                    <!-- Sidebar Widget Start -->
                    <aside class="sidebar_widget widget-mt">
                        <div class="widget_inner">
                            <div class="widget-list widget-mb-1">
                                <h3 class="widget-title">Bạn cần mua gì ?</h3>
                                <div class="search-box">
                                    <form action="{{ Route('search') }}" method="POST">
                                        @csrf
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Search Our Store"
                                                name="search">
                                            <div class="input-group-append">
                                                <button class="btn btn-outline-secondary" type="submit">
                                                    <i class="fa fa-search"></i>
                                            </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="widget-list widget-mb-1">
                            <h3 class="widget-title">Danh mục sản phẩm</h3>

                            @foreach ($categories as $category)
                                <ul class="sidebar-list">
                                    <li>
                                        <a
                                            href="{{ route('showProducts', ['category' => $category]) }}">{{ $category->name }}</a>
                                    </li>
                                </ul>
                            @endforeach
                        </div>
                        <div class="widget-list widget-mb-4">
                            <h3 class="widget-title">hãng</h3>
                            @foreach ($suppliers as $supplier)
                                <ul class="sidebar-list">
                                    <li>
                                        <a
                                            href="{{ route('showsuppliers', ['supplier' => $supplier]) }}">{{ $supplier->name }}</a>

                                    </li>
                                </ul>
                            @endforeach
                        </div>
                </div>
                </aside>
                <!-- Sidebar Widget End -->
            </div>
        </div>
    </div>

    </div>
    <!-- Shop Main Area End Here -->
    <!-- Support Area Start Here -->
@endsection
