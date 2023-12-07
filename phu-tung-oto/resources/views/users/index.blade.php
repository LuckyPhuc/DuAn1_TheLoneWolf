@extends('layouts.app')
@section('title', 'trang chủ')
@section('content')
    <!--  Slider  -->
    <div id="carouselExampleIndicators" class="carousel slide">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('assets/img/img-01.jpg') }}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('assets/img/img-05.jpg') }}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('assets/img/img-02.jpg') }}" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <div class="call-to-action-area">
        <div class="container container-default custom-area">
            <div class="row" style="margin-top: 5%">
                <div class="col-md-4 col-lg-4 col-custom">
                    <div class="call-to-action-item mt-0 d-lg-flex d-md-block align-items-center">
                        <div class="call-to-action-icon">
                            <img src="{{ asset('assets/img/icons/icon-1.png') }}" alt="Icon" />
                        </div>
                        <div class="call-to-action-info">
                            <h3 class="action-title">Free Home Delivery</h3>
                            <p class="desc-content">
                                Provide free home delivery for all product over $100
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 col-custom">
                    <div class="call-to-action-item d-lg-flex d-md-block align-items-center">
                        <div class="call-to-action-icon">
                            <img src="{{ asset('assets/img/icons/icon-2.png') }}" alt="Icon" />
                        </div>
                        <div class="call-to-action-info">
                            <h3 class="action-title">Quality Products</h3>
                            <p class="desc-content">
                                We ensure our product quality all times
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 col-custom">
                    <div class="call-to-action-item d-lg-flex d-md-block align-items-center">
                        <div class="call-to-action-icon">
                            <img src="{{ asset('assets/img/icons/icon-3.png') }}" alt="Icon" />
                        </div>
                        <div class="call-to-action-info">
                            <h3 class="action-title">Online Support</h3>
                            <p class="desc-content">
                                To satisfy our customer we try to give support online
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Call to Action Area End Here -->
    <!-- Banner Area Start Here -->
    <div class="banner-area">
        <div class="container container-default custom-area">
            <div class="row" style="margin-top: 5%">
                <div class="col-md-4 col-sm-12 col-custom">
                    <div class="banner-image hover-style">
                        <a class="d-block" href="shop.html">
                            <img class="w-100" src="{{ asset('assets/img/product/product69.jpg') }}" alt="Banner Image" />
                        </a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12 col-custom">
                    <div class="banner-image hover-style">
                        <a class="d-block" href="shop.html">
                            <img class="w-100" src="{{ asset('assets/img/product/product69.jpg') }}" alt="Banner Image" />
                        </a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12 col-custom">
                    <div class="banner-image hover-style mb-0">
                        <a class="d-block" href="shop.html">
                            <img class="w-100" src="{{ asset('assets/img/product/product69.jpg') }}" alt="Banner Image" />
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="newsletter-area mt-no-text mb-text-p">
        <div class="container container-default h-100 custom-area">
            <div class="row h-100">
                <div class="col-lg-8 col-xl-5 offset-xl-6 offset-lg-3 col-custom">
                    <div
                        class="newsletter-content text-center d-flex flex-column align-items-center justify-content-center h-100">
                        <div class="section-content">
                            <h4 class="title-4 text-uppercase">
                                Special <span>Offer</span> for subscription
                            </h4>
                            <h2 class="title-3 text-uppercase">
                                Get instant discount for membership
                            </h2>
                            <p class="desc-content">
                                Subscribe our newsletter and all latest news of our
                                <br />latest product, promotion and offers
                            </p>
                        </div>
                        <div class="newsletter-form-wrap ml-auto mr-auto">
                            <form id="mc-form" class="mc-form d-flex position-relative">
                                <input type="email" id="mc-email" class="form-control email-box"
                                    placeholder="email@example.com" name="EMAIL" />
                                <button id="mc-submit"
                                    class="btn primary-btn obrien-button newsletter-btn position-absolute" type="submit">
                                    Subscribe
                                </button>
                            </form>
                            <!-- mailchimp-alerts Start -->
                            <div class="mailchimp-alerts text-centre">
                                <div class="mailchimp-submitting"></div>
                                <!-- mailchimp-submitting end -->
                                <div class="mailchimp-success text-success"></div>
                                <!-- mailchimp-success end -->
                                <div class="mailchimp-error text-danger"></div>
                                <!-- mailchimp-error end -->
                            </div>
                            <!-- mailchimp-alerts end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="product-area mt-text">
        <div class="container container-default custom-area">
            <div class="row">
                <div class="col-lg-5 m-auto text-center col-custom">
                    <div class="section-content">
                        <h2 class="title-1 text-uppercase">Best Sale</h2>
                        <div class="desc-content">
                            <p>
                                All best seller product are now available for you and your
                                can buy this product from here any time any where so sop now
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row product__card">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="{{ asset('assets/img/product/product69.jpg') }}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Tên</h5>
                        <p class="card-text">Gía</p>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                    </div>
                    <div class="card-body">
                        <a href="#" class="card-link"><i class="bi bi-bag-plus"></i></a>
                        <a href="#" class="card-link"><i class="bi bi-eye"></i></a>
                        <a href="#" class="card-link"><i class="bi bi-heart"></i></a>
                    </div>
                </div>
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="{{ asset('assets/img/product/product69.jpg') }}"
                        alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Tên</h5>
                        <p class="card-text">Gía</p>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                    </div>
                    <div class="card-body">
                        <a href="#" class="card-link"><i class="bi bi-bag-plus"></i></a>
                        <a href="#" class="card-link"><i class="bi bi-eye"></i></a>
                        <a href="#" class="card-link"><i class="bi bi-heart"></i></a>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="banner-fullwidth-area mb-text">
        <div class="container custom-area">
            <div class="row">
                <div class="col-md-5 col-lg-6 text-center col-custom">
                    <div class="banner-thumb h-100 d-flex justify-content-center align-items-center">
                        <img src="{{ asset('assets/img/product/product69.jpg') }}" alt="Banner Thumb" />
                    </div>
                </div>
                <div class="col-md-7 col-lg-6 text-center justify-content-center col-custom">
                    <div class="banner-flash-content d-flex flex-column align-items-center justify-content-center h-100">
                        <h2 class="deal-head text-uppercase">Flash Deals</h2>
                        <h3 class="deal-title text-uppercase">
                            Hurry up and Get 25% Discount
                        </h3>
                        <a href="shop.html" class="obrien-button primary-btn">Shop Now</a>
                        <div class="countdown-wrapper d-flex justify-content-center" data-countdown="2022/12/24"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Product Area End Here -->
    <div class="product-area mb-text">
        <div class="container container-default custom-area">
            <div class="row">
                <div class="col-lg-5 m-auto text-center col-custom">
                    <div class="section-content">
                        <h2 class="title-1 text-uppercase">Featured Products</h2>
                        <div class="desc-content">
                            <p>
                                All best seller product are now available for you and your
                                can buy this product from here any time any where so sop now
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row product__card">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="{{ asset('assets/img/product/product69.jpg') }}"
                        alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Tên</h5>
                        <p class="card-text">Gía</p>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                    </div>
                    <div class="card-body">
                        <a href="#" class="card-link"><i class="bi bi-bag-plus"></i></a>
                        <a href="#" class="card-link"><i class="bi bi-eye"></i></a>
                        <a href="#" class="card-link"><i class="bi bi-heart"></i></a>
                    </div>
                </div>
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="{{ asset('assets/img/product/product69.jpg') }}"
                        alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Tên</h5>
                        <p class="card-text">Gía</p>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                    </div>
                    <div class="card-body">
                        <a href="#" class="card-link"><i class="bi bi-bag-plus"></i></a>
                        <a href="#" class="card-link"><i class="bi bi-eye"></i></a>
                        <a href="#" class="card-link"><i class="bi bi-heart"></i></a>
                    </div>
                </div>

            </div>
        </div>
    </div>
    {{-- blog --}}
    <div class="latest-blog-area">
        <div class="container container-default custom-area">
            <div class="row">
                <div class="col-lg-5 m-auto text-center col-custom">
                    <div class="section-content">
                        <h2 class="title-1 text-uppercase">Latest Blog</h2>
                        <div class="desc-content">
                            <p>
                                If you want to know about the organic product then keep an
                                eye on our blog.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-custom">
                    <div class="obrien-slider">
                        <div class="single-blog">
                            <div class="single-blog-thumb">
                                <a href="blog.html">
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
                                    <a href="blog.html">There Are Many Variation of Passages of Lorem Ipsum
                                        Available</a>
                                </h2>
                                <p class="desc-content">
                                    Contrary to popular belief, Lorem Ipsum is not simply
                                    random text. It has roots in a piece of classical Latin
                                    literature from 45 BC, making...
                                </p>
                            </div>
                        </div>
                        <div class="single-blog">
                            <div class="single-blog-thumb">
                                <a href="blog.html">
                                    <img class="w-100" src="{{ asset('assets/img/product/product69.jpg') }}"
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
                                    <a href="blog.html">There Are Many Variation of Passages of Lorem Ipsum
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
        </div>
    </div>
@endsection
