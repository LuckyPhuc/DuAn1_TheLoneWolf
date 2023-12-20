@extends('layouts.app')
@section('title', 'Chi tiết sản phẩm ')
@section('content')
    <div class="breadcrumbs-area position-relative">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="breadcrumb-content position-relative section-content">
                        <h3 class="title-3 text-white">Chi tiết sản phẩm</h3>
                        <ul>
                            <li><a href="{{ route('index') }}" class="text-white">Trang chủ</a></li>
                            <li class="text-white">Chi tiết sản phẩm</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="single-product-main-area">
        <div class="container container-default custom-area">
            <div class="row">
                <div class="col-lg-5 col-custom">
                    <div class="product-details-img horizontal-tab">
                        <div class="pd-slider-nav product-slider">
                            <div class="single-thumb border">
                                <img src="{{ asset($products->image_features->first()->url_img) }}" alt="Product Thumbnail">
                            </div>
                        </div>
                        <div class="img__slider" style="display: flex; height: 100px;">
                            @for ($i = 0; $i < $products->image_features->count(); $i++)
                                <div class="img__item border-black" style="width:150px">
                                    <img src="{{ asset($products->image_features[$i]->url_img) }}" alt=""
                                        onclick="changeImage(this)">
                                </div>
                            @endfor
                        </div>
                    </div>
                    <script>
                        function changeImage(clickedImage) {
                            const mainImage = document.querySelector(".single-thumb img");
                            mainImage.src = clickedImage.src;
                        }
                    </script>

                </div>
                <div class="col-lg-7 col-custom">
                    <div class="product-summery position-relative">
                        <div class="product-head mb-3">
                            <h2 class="product-title">{{ $products->name }}</h2>
                        </div>
                        <div class="price-box mb-2">
                            <span class="regular-price">{{ number_format($products->price, 2, '.', ',') }}
                                VND</span>

                        </div>
                        <div class="product-rating mb-3">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                        </div>
                        <h6 style="font-size: 24px">Hãng: {{ $products->supplier->name }}</h6>
                        <h6 style="font-size: 24px">Danh mục: {{ $products->category->name }}</h6>
                        <p class="mb-3">{!! $products->description !!}</p>
                        <form class="mt-3"
                            action="{{ route('cart.add', ['productId' => $products->id, 'quantity' => $products->quantity]) }}"
                            method="POST" id="cartForm">
                            @csrf
                            <div class="quantity-with_btn mb-4 d-flex align-item-center">
                                <div class="quantity">
                                    <div class="cart-plus-minus">
                                        <input name="quantity" class="cart-plus-minus-box" value="1" type="number"
                                            id="quantityInput" min="1" pattern="\d+" oninput="validateInput()">
                                        <div class="dec qtybutton" onclick="decrementQuantity()">-</div>
                                        <div class="inc qtybutton" onclick="incrementQuantity()">+</div>
                                    </div>
                                </div>
                                <h1 class="px-3">{{ $products->unit }}</h1>
                                <div class="add-to_cart">
                                    <input class="btn obrien-button primary-btn" type="button" value="Add to cart"
                                        onclick="submitForm()">

                                    <a class="btn obrien-button-2 treansparent-color pt-0 pb-0" href="wishlist.html">Add to
                                        wishlist</a>
                                </div>
                            </div>
                            <script>
                                function validateInput() {
                                    var quantityInput = document.getElementById('quantityInput');
                                    var enteredValue = quantityInput.value;

                                    // Kiểm tra nếu giá trị là số âm, đặt giá trị thành 0
                                    if (enteredValue < 0) {
                                        quantityInput.value = '';
                                    }
                                }

                                function incrementQuantity() {
                                    var input = document.getElementById('quantityInput');
                                    var currentValue = parseInt(input.value);
                                    input.value = currentValue + 1;
                                }

                                function decrementQuantity() {
                                    var input = document.getElementById('quantityInput');
                                    var currentValue = parseInt(input.value);

                                    if (currentValue > 1) {
                                        input.value = currentValue - 1;
                                    } else {
                                        input.value = 1
                                    }
                                }
                                // lay gia tri quantity day len url
                                function submitForm() {
                                    var quantityValue = document.getElementById('quantityInput').value;
                                    var formAction = "{{ route('cart.add', ['productId' => $products->id, 'quantity' => ':quantity']) }}";
                                    formAction = formAction.replace(':quantity', quantityValue);
                                    document.getElementById('cartForm').action = formAction;
                                    document.getElementById('cartForm').submit();
                                }
                            </script>
                        </form>
                        {{-- <div class="social-share mb-4">
                            <span>Chia sẻ :</span>
                            <a href="#"><i class="fa fa-facebook-square facebook-color"></i></a>
                            <a href="#"><i class="fa fa-twitter-square twitter-color"></i></a>
                            <a href="#"><i class="fa fa-linkedin-square linkedin-color"></i></a>
                            <a href="#"><i class="fa fa-pinterest-square pinterest-color"></i></a>
                        </div> --}}
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="product-area my-5"
        style="box-shadow: rgba(0, 0, 0, 0.25) 0px 14px 28px, rgba(0, 0, 0, 0.22) 0px 10px 10px;">
        <div class="container container-default custom-area y-3">
            <div class="row">
                <div class="col-lg-5 m-auto text-center col-custom my-5">
                    <div class="section-content">
                        <h2 class="title-1 text-uppercase">Sản phẩm liên quan</h2>
                        <div class="desc-content">
                            <p>Bạn có thể xem các sản phẩm liên quan</p>
                        </div>
                    </div>
                </div>
            </div>
            <swiper-container class="mySwiper" init="false" navigation="true" autoplay-delay="2500">
                @foreach ($product as $products)
                    <swiper-slide class="py-3">
                        <div class="single-product position-relative">
                            <div class="product-image">
                                <a class="d-block" href="{{ route('detail', ['id' => $products->id]) }}">
                                    <img src="{{ asset($products->image_features->first()->url_img) }}" alt=""
                                        class="product-image-1 w-100">
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
                                    <h4 class="title-2"> <a href="#">{{ $products->name }}</a> </h4>
                                </div>
                                <div class="price-box">
                                    <span class="regular-price ">{{ number_format($products->price, 2, '.', ',') }}
                                        VND</span>
                                </div>
                            </div>
                            <div class="add-action d-flex position-absolute">
                                <form id="addToCartForm"
                                    action="{{ route('cart.add', ['productId' => $products->id, 'quantity' => 1]) }}"
                                    method="post">
                                    @csrf
                                    <a style="margin-right: 15px">
                                        <button type="submit" value="app to cart"><i class="ion-bag"></i></button>
                                    </a>
                                </form>
                                <a href="#" title="Compare"><i class="ion-ios-loop-strong"></i></a>
                                <a href="#" title="Add To Wishlist"><i class="ion-ios-heart-outline"></i></a>
                                <a href="#" data-bs-toggle="modal" title="Quick View"><i class="ion-eye"></i></a>
                            </div>
                        </div>
                    </swiper-slide>
                @endforeach
            </swiper-container>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>

        <script>
            const swiperEl = document.querySelector('swiper-container')
            Object.assign(swiperEl, {
                slidesPerView: 1,
                spaceBetween: 10,
                breakpoints: {
                    "@0.00": {
                        slidesPerView: 1,
                        spaceBetween: 10,
                    },
                    "@0.75": {
                        slidesPerView: 2,
                        spaceBetween: 20,
                    },
                    "@1.00": {
                        slidesPerView: 3,
                        spaceBetween: 40,
                    },
                    "@1.50": {
                        slidesPerView: 4,
                        spaceBetween: 50,
                    },
                },
            });

            swiperEl.initialize();
        </script>
    </div>
    </div>
@endsection
