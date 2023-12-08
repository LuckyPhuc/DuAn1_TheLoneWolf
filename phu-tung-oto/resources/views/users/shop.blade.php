@extends('layouts.app')
@section('title', 'trang shop')
@section('content')
    <div class="banner-fullwidth-area mb-text">
        <div class="container custom-area">
            <div class="row">
                <div class=" text-center justify-content-center col-custom">
                    <div class="banner-flash-content d-flex flex-column align-items-center justify-content-center h-100 ">
                        <h2 class="deal-head text-uppercase">Shop</h2>
                        <h3 class="deal-title text-uppercase">
                            Hurry up and Get 25% Discount
                        </h3>
                        {{-- <a href="shop.html" class="obrien-button primary-btn">Shop Now</a> --}}
                        <div class="countdown-wrapper d-flex justify-content-center" data-countdown="2022/12/24"></div>
                    </div>
                </div>
                {{-- <div class="col-md-5 col-lg-6 text-center col-custom">
                    <div class="banner-thumb h-100 d-flex justify-content-center align-items-center">
                        <img src="{{ asset('assets/img/product/product69.jpg') }}" alt="Banner Thumb" />
                    </div>
                </div> --}}
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
                            <button data-role="grid_list" type="button" class="btn-list" data-bs-toggle="tooltip"
                                title="List"><i class="fa fa-th-list"></i></button>
                        </div>
                        <div class="shop-select">
                            <form class="d-flex flex-column w-100" action="#">
                                <div class="form-group">
                                    <select class="form-control nice-select w-100">
                                        <option selected value="1">Alphabetically, A-Z</option>
                                        <option value="2">Sort by popularity</option>
                                        <option value="3">Sort by newness</option>
                                        <option value="4">Sort by price: low to high</option>
                                        <option value="5">Sort by price: high to low</option>
                                        <option value="6">Product Name: Z</option>
                                    </select>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!--shop toolbar end-->
                    <!-- Shop Wrapper Start -->
                    <div class="row shop_wrapper grid_3">
                        <div class="col-md-6 col-sm-6 col-lg-4 col-custom product-area">
                            <div class="single-product position-relative">
                                <div class="product-image">
                                    <a class="d-block" href="product-details.html">
                                        <img src="{{ asset('assets/img/product/product69.jpg') }}" alt=""
                                            class="product-image-1 w-100">
                                    </a>
                                </div>
                                <div class="product-content">
                                    <div class="product-rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <div class="product-title">
                                        <h4 class="title-2"> <a href="product-details.html">Product dummy title</a></h4>
                                    </div>
                                    <div class="price-box">
                                        <span class="regular-price ">$40.00</span>
                                        <span class="old-price"><del>$45.00</del></span>
                                    </div>
                                </div>
                                <div class="add-action d-flex position-absolute">
                                    <a href="cart.html" title="Add To cart">
                                        <i class="ion-bag"></i>
                                    </a>
                                    <a href="compare.html" title="Compare">
                                        <i class="ion-ios-loop-strong"></i>
                                    </a>
                                    <a href="wishlist.html" title="Add To Wishlist">
                                        <i class="ion-ios-heart-outline"></i>
                                    </a>
                                    <a href="#exampleModalCenter" data-bs-toggle="modal" title="Quick View">
                                        <i class="ion-eye"></i>
                                    </a>
                                </div>
                                <div class="product-content-listview">
                                    <div class="product-rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <div class="product-title">
                                        <h4 class="title-2"> <a href="product-details.html">Product dummy title</a></h4>
                                    </div>
                                    <div class="price-box">
                                        <span class="regular-price ">$40.00</span>
                                        <span class="old-price"><del>$44.00</del></span>
                                    </div>
                                    <div class="add-action-listview d-flex">
                                        <a href="cart.html" title="Add To cart">
                                            <i class="ion-bag"></i>
                                        </a>
                                        <a href="compare.html" title="Compare">
                                            <i class="ion-ios-loop-strong"></i>
                                        </a>
                                        <a href="wishlist.html" title="Add To Wishlist">
                                            <i class="ion-ios-heart-outline"></i>
                                        </a>
                                        <a href="#exampleModalCenter" data-bs-toggle="modal" title="Quick View">
                                            <i class="ion-eye"></i>
                                        </a>
                                    </div>
                                    <p class="desc-content">
                                        Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a
                                        piece of classical Latin literature from 45 BC, making it over 2000 years old.
                                        Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia,
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Shop Wrapper End -->
                    <!-- Bottom Toolbar Start -->
                    <div class="row">
                        <div class="col-sm-12 col-custom">
                            <div class="toolbar-bottom mt-30">
                                <nav class="pagination pagination-wrap mb-10 mb-sm-0">
                                    <ul class="pagination">
                                        <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                    </ul>
                                </nav>
                                <p class="desc-content text-center text-sm-right">Showing 1 - 12 of 34 result</p>
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
                            <div class="widget-list widget-mb-1">
                                <h3 class="widget-title">Menu Categories</h3>
                                <!-- Widget Menu Start -->
                                <nav>
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
                                </nav>
                                <!-- Widget Menu End -->
                            </div>
                            <div class="widget-list widget-mb-1">
                                <h3 class="widget-title">Categories</h3>
                                <div class="sidebar-body">
                                    <ul class="sidebar-list">
                                        <li><a href="#">All Product</a></li>
                                        <li><a href="#">Best Seller (5)</a></li>
                                        <li><a href="#">Featured (4)</a></li>
                                        <li><a href="#">New Products (6)</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="widget-list widget-mb-4">
                                <h3 class="widget-title">Recent Products</h3>
                                <div class="sidebar-body">
                                    <div class="sidebar-product align-items-center">
                                        <a href="product-details.html" class="image">
                                            <img src="{{ asset('assets/img/product/product69.jpg') }}" alt="product">
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
                                            <img src="{{ asset('assets/img/product/product69.jpg') }}" alt="product">
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
                                            <img src="{{ asset('assets/img/product/product69.jpg') }}" alt="product">
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
    <!-- Shop Main Area End Here -->
    <!-- Support Area Start Here -->
    <div class="support-area">
        <div class="container container-default custom-area">
            <div class="row">
                <div class="col-lg-12 col-custom">
                    <div class="support-wrapper d-flex">
                        <div class="support-content">
                            <h1 class="title">Need Help ?</h1>
                            <p class="desc-content">Call our support 24/7 at 01234-567-890</p>
                        </div>
                        <div class="support-button d-flex align-items-center">
                            <a class="obrien-button primary-btn" href="contact-us.html">Contact now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
