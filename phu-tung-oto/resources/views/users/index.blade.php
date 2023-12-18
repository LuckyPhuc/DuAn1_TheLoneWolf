@extends('layouts.app')
@section('title', 'Trang chủ ')

@section('content')
    <!-- Slider banner -->
    <swiper-container class="mySwiper" pagination="true" pagination-clickable="true" navigation="true" autoplay="true"
        autoplay-delay="3500">
        <swiper-slide><img src="{{ asset('assets/img/slider/1.jpg') }}" alt="..."></swiper-slide>
        <swiper-slide><img src="{{ asset('assets/img/slider/2.jpg') }}" alt="..."></swiper-slide>
        <swiper-slide><img src="{{ asset('assets/img/slider/3.jpg') }}" alt="..."></swiper-slide>
        <swiper-slide><img src="{{ asset('assets/img/slider/4.jpg') }}" alt="..."></swiper-slide>
    </swiper-container>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>

    <!-- Call to action -->
    <div class="call-to-action-area py-4">
        <div class="container container-default custom-area">
            <div class="row">
                <div class="col-md-4 col-lg-4 col-custom">
                    <div class="call-to-action-item mt-0 d-lg-flex d-md-block align-items-center">
                        <div class="call-to-action-icon">
                            <img src="{{ asset('assets/img/icons/icon-1.png') }}" alt="Icon">
                        </div>
                        <div class="call-to-action-info">
                            <h3 class="action-title">Miễn Phí Giao Hàng</h3>
                            <p class="desc-content">Miễn phí vận chuyển trong thành phố bán kính 10km </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 col-custom">
                    <div class="call-to-action-item d-lg-flex d-md-block align-items-center">
                        <div class="call-to-action-icon">
                            <img src="{{ asset('assets/img/icons/icon-2.png') }}" alt="Icon">
                        </div>
                        <div class="call-to-action-info">
                            <h3 class="action-title">Chất lượng sản phẩm</h3>
                            <p class="desc-content">Thời gian bảo hành lên đến 12 tháng</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 col-custom">
                    <div class="call-to-action-item d-lg-flex d-md-block align-items-center">
                        <div class="call-to-action-icon">
                            <img src="{{ asset('assets/img/icons/icon-3.png') }}" alt="Icon">
                        </div>
                        <div class="call-to-action-info">
                            <h3 class="action-title">Hỗ trợ trao đổi</h3>
                            <p class="desc-content">Đội ngũ nhân viên hỗ trợ nhiệt tình về sản phẩm</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner Area Start Here -->
    <div class="banner-area">
        <div class="container container-default custom-area">
            <div class="row" style="margin-top: 5%">
                <div class="col-md-4 col-sm-12 col-custom">
                    <div class="banner-image hover-style">
                        <a class="d-block" href="{{ route('shop') }}">
                            <img class="w-100" src="{{ asset('assets/img/banner/1.jpg') }}" alt="Banner Image" />
                        </a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12 col-custom">
                    <div class="banner-image hover-style">
                        <a class="d-block" href="{{ route('shop') }}">
                            <img class="w-100" src="{{ asset('assets/img/banner/2.jpg') }}" alt="Banner Image" />
                        </a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12 col-custom">
                    <div class="banner-image hover-style mb-0">
                        <a class="d-block" href="{{ route('shop') }}">
                            <img class="w-100" src="{{ asset('assets/img/banner/4.jpg') }}" alt="Banner Image" />
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
                                <span>ƯU ĐÃI</span> ĐẶC BIỆT KHI ĐĂNG KÝ
                            </h4>
                            <h2 class="title-3 text-uppercase">
                                NHẬN GIẢM GIÁ NGAY LẬP TỨC CHO THÀNH VIÊN
                            </h2>
                            <p class="desc-content">
                                Đăng ký bản tin của chúng tôi và tất cả các tin tức mới nhất về
                                <br />sản phẩm, khuyến mãi và ưu đãi mới nhất của chúng tôi
                            </p>
                        </div>
                        <div class="newsletter-form-wrap ml-auto mr-auto">
                            <form id="mc-form" class="mc-form d-flex position-relative">
                                <input type="email" id="mc-email" class="form-control email-box"
                                    placeholder="email@example.com" name="EMAIL" />
                                <button id="mc-submit"
                                    class="btn primary-btn obrien-button newsletter-btn position-absolute" type="submit">
                                    Đặt Mua
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
                        <h2 class="title-1 text-uppercase">BÁN CHẠY NHẤT</h2>
                        <div class="desc-content">
                            <p>
                                Tất cả các sản phẩm bán chạy nhất hiện đều có sẵn cho bạn và bạn có thể mua sản phẩm này
                                từ
                                đây bất cứ lúc nào, bất cứ nơi nào, vì vậy hãy mua ngay bây giờ
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                @foreach ($products->take(4) as $product)
                    <div class="col-md-3 col-sm-8 col-lg-3 col-custom product-area p-3">
                        <div class="single-product position-relative">
                            <div class="product-image">
                                <a class="d-block" href="{{ route('detail', ['id' => $product->id]) }}">
                                    <img src="{{ asset($product->image_features->first()->url_img) }}" alt=""
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
                                    <h4 class="title-2">
                                        <a class="name__products"
                                            href="{{ route('detail', ['id' => $product->id]) }}">{{ $product->name }}
                                        </a>
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
                                        <button type="submit" value="app to cart"><i class="ion-bag"></i></button>
                                    </a>
                                </form>

                                <a href="compare.html" title="Compare"><i class="ion-ios-loop-strong"></i></a>
                                <a href="wishlist.html" title="Add To Wishlist"><i class="ion-ios-heart-outline"></i></a>
                                <a href="#exampleModalCenter" data-bs-toggle="modal" title="Quick View"><i
                                        class="ion-eye"></i></a>
                            </div>
                        </div>
                    </div>

                    @if ($loop->iteration % 3 == 0)
                        {{-- Add an empty column after every 3rd product --}}
                        <div class="w-100 d-none d-md-block d-lg-none"></div>
                    @endif
                @endforeach
            </div>

        </div>
    </div>
    <div class="banner-fullwidth-area mb-text">
        <div class="container custom-area">
            <div class="row">
                <div class="col-md-5 col-lg-6 text-center col-custom">
                    <div class="banner-thumb h-100 d-flex justify-content-center align-items-center w-90">
                        <img src="{{ asset('assets/img/banner/3.jpg') }}" alt="Banner Thumb" />
                    </div>
                </div>
                <div class="col-md-7 col-lg-6 text-center justify-content-center col-custom">
                    <div class="banner-flash-content d-flex flex-column align-items-center justify-content-center h-100">
                        <h2 class="deal-head text-uppercase">ƯU ĐÃI CHỚP NHOÁNG
                        </h2>
                        <h3 class="deal-title text-uppercase">
                            HÃY NHANH TAY ĐỂ ĐƯỢC GIẢM GIÁ 25%
                        </h3>
                        <a href="{{ route('shop') }}" class="obrien-button primary-btn">Mua Ngay</a>
                        <div class="countdown-wrapper d-flex justify-content-center" data-countdown="2022/12/24">
                        </div>
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
                        <h2 class="title-1 text-uppercase"> MỚI NHẤT</h2>
                        <div class="desc-content">
                            <p>
                                Tất cả các sản phẩm bán chạy nhất hiện đều có sẵn cho bạn và bạn có thể mua sản phẩm này
                                từ
                                đây bất cứ lúc nào, bất cứ nơi nào, vì vậy hãy mua ngay bây giờ
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($products->take(4) as $product)
                    <div class="col-md-3 col-sm-8 col-lg-3 col-custom product-area p-3">
                        <div class="single-product position-relative">
                            <div class="product-image">
                                <a class="d-block" href="{{ route('detail', ['id' => $product->id]) }}">
                                    <img src="{{ asset($product->image_features->first()->url_img) }}" alt=""
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
                                    <h4 class="title-2">
                                        <a class="name__products"
                                            href="{{ route('detail', ['id' => $product->id]) }}">{{ $product->name }}
                                        </a>
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
                                        <button type="submit" value="app to cart"><i class="ion-bag"></i></button>
                                    </a>
                                </form>

                                <a href="compare.html" title="Compare"><i class="ion-ios-loop-strong"></i></a>
                                <a href="wishlist.html" title="Add To Wishlist"><i class="ion-ios-heart-outline"></i></a>
                                <a href="#exampleModalCenter" data-bs-toggle="modal" title="Quick View"><i
                                        class="ion-eye"></i></a>
                            </div>
                        </div>
                    </div>

                    @if ($loop->iteration % 3 == 0)
                        {{-- Add an empty column after every 3rd product --}}
                        <div class="w-100 d-none d-md-block d-lg-none"></div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
    {{-- blog --}}
    <div class="latest-blog-area">
        <div class="container container-default custom-area">
            <div class="row">
                <div class="col-lg-5 m-auto text-center col-custom">
                    <div class="section-content">
                        <h2 class="title-1 text-uppercase">BLOG MỚI NHẤT</h2>
                        <div class="desc-content">
                            <p>
                                Nếu bạn muốn biết về sản phẩm hữu cơ thì hãy theo dõi blog của chúng tôi.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-custom d-flex">
                    <div class="obrien-slider d-flex">
                        @foreach ($posts->take(2) as $post)
                            @php
                                $doc = new DOMDocument();
                                @$doc->loadHTML($post->body); // Sử dụng @ để tránh báo lỗi HTML parsing

                                $imgTags = $doc->getElementsByTagName('img');
                                $imgSrc = null;
                                if ($imgTags->length > 0) {
                                    $imgSrc = $imgTags->item(0)->getAttribute('src');
                                }
                            @endphp
                            <div class="single-blog">
                                <div class="single-blog-thumb">
                                    <a href="{{ route('posts.show', ['id' => $post->id]) }}">
                                        @if ($imgSrc)
                                            <img class="w-100" src="{{ $imgSrc }}" alt="{{ $post->title }}">
                                        @endif
                                    </a>
                                </div>
                                <div class="single-blog-content position-relative">
                                    <div class="post-date text-center border rounded d-flex flex-column position-absolute">
                                        <span>{{ $post->created_at->format('d') }}</span>
                                        <span>{{ $post->created_at->format('m') }}</span>
                                    </div>
                                    <div class="post-meta">
                                        <span class="author">Người Viết: {{ $post->users->name }}</span>
                                    </div>
                                    <h2 class="post-title">
                                        <a href="{{ route('posts.show', ['id' => $post->id]) }}">{{ $post->title }}</a>
                                    </h2>
                                    <p class="desc-content name__products">
                                        {!! nl2br(e($post->description)) !!}
                                    </p>
                                </div>
                            </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
