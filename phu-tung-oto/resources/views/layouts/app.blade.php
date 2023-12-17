<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <!-- Slick Carousel -->
    <link rel="stylesheet" type="text/css" href="path/to/slick/slick.css" />
    <script type="text/javascript" src="path/to/slick/slick.min.js"></script>


    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('/assets/img/favicon/favicon-32x32.png') }}">

    <!-- Link thư viện Slick Slider -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css"
        href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <title>@yield('title')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div class="Trang Chủ-wrapper Trang Chủ">
        @yield('header')
        <header class="main-header-area">
            <!-- Header Top Area Start Here -->
            <div class="header-top-area header-top-2">
                <div class="container container-default-2 custom-area">
                    <div class="row">
                        <div class="col-12 col-custom header-top-wrapper text-center">
                            <div class="short-desc">
                                <p>Support Center: <strong><a href="#" title="tel:0123456789">0706252156</a>,
                                    </strong></p>
                                <p> Email: <a href="#" title="mailto:example@email.com">phutungoto@gmail.com</a>
                                </p>
                            </div>
                            <span class="top-close-button">X</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Header Top Area End Here -->
            <!-- Main Header Area Start -->
            <div class="main-header">
                <div class="container container-default custom-area">
                    <div class="row">
                        <div class="col-lg-12 col-custom">
                            <div class="row align-items-center">
                                <div class="col-lg-2 col-xl-2 col-sm-6 col-6 col-custom">
                                    <div class="header-logo d-flex align-items-center">
                                        <a href="{{ route('index') }}">
                                            <img class="img-full" src="{{ asset('assets/img/logo-users/1.png') }}"
                                                alt="Header Logo">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-8 col-xl-7 position-static d-none d-lg-block col-custom">
                                    <nav class="main-nav d-flex justify-content-center">
                                        <ul class="nav">
                                            <li>
                                                <a class="active" href="{{ route('index') }}">
                                                    <span class="menu-text">Trang Chủ</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ route('shop') }}">
                                                    <span class="menu-text">Cửa Hàng</span>
                                                    <i class="fa fa-angle-down"></i>
                                                </a>
                                                <div class="mega-menu dropdown-hover">
                                                    <div class="menu-colum">
                                                        <ul>
                                                            <li><span class="mega-menu-text">Danh Mục Sản Phẩm</span>
                                                            </li>

                                                            @foreach ($categories as $category)
                                                                <li><a
                                                                        href="{{ route('shop', ['category' => $category->name]) }}">{{ $category->name }}</a>
                                                                </li>
                                                            @endforeach

                                                        </ul>
                                                    </div>
                                                    <div class="menu-colum">
                                                        <ul>
                                                            <li><span class="mega-menu-text">Hãng</span></li>

                                                            @foreach ($suppliers as $supplier)
                                                                <li><a
                                                                        href="{{ route('shop.supplier', ['supplier' => $supplier->name]) }}">{{ $supplier->name }}</a>
                                                                </li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <a href="{{ route('posts') }}">
                                                    <span class="menu-text"> Bài viết</span>
                                                    <i class="fa fa-angle-down"></i>
                                                </a>
                                                <ul class="dropdown-submenu dropdown-hover">
                                                    @foreach ($posts as $post)
                                                        <li><a href="#">{{ $post->title }}
                                                            </a>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="about-us.html">
                                                    <span class="menu-text">Về Chúng Tôi</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="menu-text">Liên Hệ</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                                <div class="col-lg-2 col-xl-3 col-sm-6 col-6 col-custom">
                                    <div class="header-right-area main-nav">
                                        <ul class="nav">
                                            <li class="login-register-wrap d-none d-xl-flex">
                                                <span><a href="{{ route('login') }}">Login</a></span>
                                                <span><a href="{{ route('register') }}">Register</a></span>
                                            </li>
                                            <li class="minicart-wrap">
                                                <a href="#" class="minicart-btn toolbar-btn">
                                                    <i class="ion-bag"></i>
                                                    <span class="cart-item_count">3</span>
                                                </a>
                                                <div class="cart-item-wrapper dropdown-sidemenu dropdown-hover-2">
                                                    <div class="single-cart-item">
                                                        <div class="cart-img">
                                                            <a href="{{ route('cart') }}"><img
                                                                    src="assets/images/cart/1.jpg" alt=""></a>
                                                        </div>
                                                        <div class="cart-text">

                                                            <h5 class="title"><a href="{{ route('cart') }}">11.
                                                                    Product with
                                                                    video
                                                                    - navy</a></h5>
                                                            <div class="cart-text-btn">
                                                                <div class="cart-qty">
                                                                    <span>1×</span>
                                                                    <span class="cart-price">$98.00</span>
                                                                </div>
                                                                <button type="button"><i
                                                                        class="ion-trash-b"></i></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="single-cart-item">
                                                        <div class="cart-img">
                                                            <a href="{{ route('cart') }}"><img
                                                                    src="assets/images/cart/2.jpg" alt=""></a>
                                                        </div>
                                                        <div class="cart-text">
                                                            <h5 class="title"><a href="{{ route('cart') }}"
                                                                    title="10. This is the large title for testing large title and there is an image for testing - white">10.
                                                                    This is the large title for testing...</a></h5>
                                                            <div class="cart-text-btn">
                                                                <div class="cart-qty">
                                                                    <span>1×</span>
                                                                    <span class="cart-price">$98.00</span>
                                                                </div>
                                                                <button type="button"><i
                                                                        class="ion-trash-b"></i></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="single-cart-item">
                                                        <div class="cart-img">
                                                            <a href="{{ route('cart') }}"><img
                                                                    src="assets/images/cart/3.jpg" alt=""></a>
                                                        </div>
                                                        <div class="cart-text">
                                                            <h5 class="title"><a href="{{ route('cart') }}">1.
                                                                    New and sale
                                                                    badge
                                                                    product - s / red</a></h5>
                                                            <div class="cart-text-btn">
                                                                <div class="cart-qty">
                                                                    <span>1×</span>
                                                                    <span class="cart-price">$98.00</span>
                                                                </div>
                                                                <button type="button"><i
                                                                        class="ion-trash-b"></i></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="cart-price-total d-flex justify-content-between">
                                                        <h5>Total :</h5>
                                                        <h5>$166.00</h5>
                                                    </div>
                                                    <div class="cart-links d-flex justify-content-center">
                                                        <a class="obrien-button white-btn"
                                                            href="{{ route('cart') }}">View
                                                            cart</a>
                                                        <a class="obrien-button white-btn"
                                                            href="{{ route('checkout') }}">Checkout</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="mobile-menu-btn d-lg-none">
                                                <a class="off-canvas-btn" href="#">
                                                    <i class="fa fa-bars"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Main Header Area End -->
            <!-- Sticky Header Start Here-->
            <div class="main-header header-sticky">
                <div class="container container-default custom-area">
                    <div class="row">
                        <div class="col-lg-12 col-custom">
                            <div class="row align-items-center">
                                <div class="col-lg-2 col-xl-2 col-sm-6 col-6 col-custom">
                                    <div class="header-logo">
                                        <a href="#">
                                            <img class="img-full" src="{{ asset('assets/img/logo-users/1.png') }}"
                                                alt="Header Logo">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-8 col-xl-7 position-static d-none d-lg-block col-custom">
                                    <nav class="main-nav d-flex justify-content-center">
                                        <ul class="nav">
                                            <li>
                                                <a class="active" href="{{ route('index') }}">
                                                    <span class="menu-text"> Trang Chủ</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ route('shop') }}">
                                                    <span class="menu-text">Cửa Hàng</span>
                                                    <i class="fa fa-angle-down"></i>
                                                </a>
                                                <div class="mega-menu dropdown-hover">
                                                    <div class="menu-colum">
                                                        <ul>
                                                            <li><span class="mega-menu-text">Cửa hàng</span></li>
                                                            @foreach ($categories as $category)
                                                                <li><a
                                                                        href="{{ route('shop', ['category' => $category->name]) }}">{{ $category->name }}</a>
                                                                </li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                    <div class="menu-colum">
                                                        <ul>
                                                            <li><span class="mega-menu-text">Hãng</span></li>
                                                            @foreach ($suppliers as $supplier)
                                                                <li><a
                                                                        href="{{ route('shop.supplier', ['supplier' => $supplier->name]) }}">{{ $supplier->name }}</a>
                                                                </li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <a href="{{ route('posts') }}">
                                                    <span class="menu-text"> Bài viết</span>
                                                    <i class="fa fa-angle-down"></i>
                                                </a>
                                                <ul class="dropdown-submenu dropdown-hover">
                                                    @foreach ($posts as $post)
                                                        <li><a href="">{{ $post->title }} </a>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            </li>

                                            <li>
                                                <a href="about-us.html">
                                                    <span class="menu-text"> Về chúng tôi</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="menu-text">Liên hệ</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                                <div class="col-lg-2 col-xl-3 col-sm-6 col-6 col-custom">
                                    <div class="header-right-area main-nav">
                                        <ul class="nav">
                                            <li class="login-register-wrap d-none d-xl-flex">
                                                <span><a href="{{ route('login') }}">Login</a></span>
                                                <span><a href="{{ route('register') }}">Register</a></span>
                                            </li>
                                            <li class="minicart-wrap">
                                                <a href="#" class="minicart-btn toolbar-btn">
                                                    <i class="ion-bag"></i>
                                                    <span class="cart-item_count">3</span>
                                                </a>
                                                <div class="cart-item-wrapper dropdown-sidemenu dropdown-hover-2">
                                                    <div class="single-cart-item">
                                                        <div class="cart-img">
                                                            <a href="{{ route('cart') }}"><img
                                                                    src="assets/images/cart/1.jpg" alt=""></a>
                                                        </div>
                                                        <div class="cart-text">
                                                            <h5 class="title"><a href="{{ route('cart') }}">11.
                                                                    Product with
                                                                    video
                                                                    - navy</a></h5>
                                                            <div class="cart-text-btn">
                                                                <div class="cart-qty">
                                                                    <span>1×</span>
                                                                    <span class="cart-price">$98.00</span>
                                                                </div>
                                                                <button type="button"><i
                                                                        class="ion-trash-b"></i></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="single-cart-item">
                                                        <div class="cart-img">
                                                            <a href="{{ route('cart') }}"><img
                                                                    src="assets/images/cart/2.jpg" alt=""></a>
                                                        </div>
                                                        <div class="cart-text">
                                                            <h5 class="title"><a href="{{ route('cart') }}"
                                                                    title="10. This is the large title for testing large title and there is an image for testing - white">10.
                                                                    This is the large title for testing...</a></h5>
                                                            <div class="cart-text-btn">
                                                                <div class="cart-qty">
                                                                    <span>1×</span>
                                                                    <span class="cart-price">$98.00</span>
                                                                </div>
                                                                <button type="button"><i
                                                                        class="ion-trash-b"></i></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="single-cart-item">
                                                        <div class="cart-img">
                                                            <a href="{{ route('cart') }}"><img
                                                                    src="assets/images/cart/3.jpg" alt=""></a>
                                                        </div>
                                                        <div class="cart-text">
                                                            <h5 class="title"><a href="{{ route('cart') }}">1.
                                                                    New and sale
                                                                    badge
                                                                    product - s / red</a></h5>
                                                            <div class="cart-text-btn">
                                                                <div class="cart-qty">
                                                                    <span>1×</span>
                                                                    <span class="cart-price">$98.00</span>
                                                                </div>
                                                                <button type="button"><i
                                                                        class="ion-trash-b"></i></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="cart-price-total d-flex justify-content-between">
                                                        <h5>Total :</h5>
                                                        <h5>$166.00</h5>
                                                    </div>
                                                    <div class="cart-links d-flex justify-content-center">
                                                        <a class="obrien-button white-btn"
                                                            href="{{ route('cart') }}">View
                                                            cart</a>
                                                        <a class="obrien-button white-btn"
                                                            href="{{ route('checkout') }}">Checkout</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="mobile-menu-btn d-lg-none">
                                                <a class="off-canvas-btn" href="#mobileMenu">
                                                    <i class="fa fa-bars"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Sticky Header End Here -->
            <!-- off-canvas menu start -->
            <aside class="off-canvas-wrapper" id="mobileMenu">
                <div class="off-canvas-overlay"></div>
                <div class="off-canvas-inner-content">
                    <div class="btn-close-off-canvas">
                        <i class="fa fa-times"></i>
                    </div>
                    <div class="off-canvas-inner">

                        <div class="search-box-offcanvas">
                            <form>
                                <input type="text" placeholder="Search product...">
                                <button class="search-btn"><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                        <!-- mobile menu start -->
                        <div class="mobile-navigation">

                            <!-- mobile menu navigation start -->
                            <nav>
                                <ul class="mobile-menu">
                                    <li class="menu-item-has-children"><a href="{{ route('index') }}">Trang
                                            Chủ</a>
                                    </li>
                                    <li class="menu-item-has-children"><a href="#">Cửa Hàng</a>
                                        <ul class="megamenu dropdown">
                                            <li class="mega-title has-children"><a href="#">Shop Layouts</a>
                                                <ul class="dropdown">
                                                    <li><a href="#">Shop Left Sidebar</a></li>
                                                    <li><a href="#">Shop Right Sidebar</a></li>
                                                    <li><a href="#">Shop List Left Sidebar</a></li>
                                                    <li><a href="#">Shop List Right Sidebar</a></li>
                                                    <li><a href="#">Shop Full Width</a></li>
                                                </ul>
                                            </li>
                                            <li class="mega-title has-children"><a href="#">Product Details</a>
                                                <ul class="dropdown">
                                                    <li><a href="product-details.html">Single Product Details</a></li>
                                                    <li><a href="variable-product-details.html">Variable Product
                                                            Details</a></li>
                                                    <li><a href="external-product-details.html">External Product
                                                            Details</a></li>
                                                    <li><a href="gallery-product-details.html">Gallery Product
                                                            Details</a>
                                                    </li>
                                                    <li><a href="countdown-product-details.html">Countdown Product
                                                            Details</a></li>
                                                </ul>
                                            </li>
                                            <li class="mega-title has-children"><a href="#">Others</a>
                                                <ul class="dropdown">
                                                    <li><a href="error404.html">Error 404</a></li>
                                                    <li><a href="compare.html">Compare Page</a></li>
                                                    <li><a href="{{ route('cart') }}">Cart Page</a></li>
                                                    <li><a href="{{ route('checkout') }}">Checkout Page</a></li>
                                                    <li><a href="wishlist.html">Wish List Page</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children "><a href="{{ route('posts') }}">Bài
                                            viết</a>
                                        {{-- <ul class="dropdown">
                                            <li><a href="blog.html">Blog Left Sidebar</a></li>
                                            <li><a href="blog-list-right-sidebar.html">Blog List Right Sidebar</a></li>
                                            <li><a href="blog-list-fullwidth.html">Blog List Fullwidth</a></li>
                                            <li><a href="blog-grid.html">Blog Grid Page</a></li>
                                            <li><a href="blog-grid-right-sidebar.html">Blog Grid Right Sidebar</a></li>
                                            <li><a href="blog-grid-fullwidth.html">Blog Grid Fullwidth</a></li>
                                            <li><a href="blog-details-sidebar.html">Blog Details Sidebar Page</a></li>
                                            <li><a href="{{ route('posts') }}">Blog Details Fullwidth Page</a>
                                            </li>
                                        </ul> --}}
                                    </li>
                                    <li class="menu-item-has-children "><a href="#">Pages</a>
                                        <ul class="dropdown">
                                            <li><a href="frequently-questions.html">FAQ</a></li>
                                            <li><a href="my-account.html">My Account</a></li>
                                            <li><a href="login-{{ route('register') }}">login &amp; register</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="about-us.html">Về chúng tôi</a></li>
                                    <li><a href="#"> Liên hệ</a></li>
                                </ul>
                            </nav>
                            <!-- mobile menu navigation end -->
                        </div>
                        <!-- mobile menu end -->
                        <div class="header-top-settings offcanvas-curreny-lang-support">
                            <!-- mobile menu navigation start -->
                            <nav>
                                <ul class="mobile-menu">
                                    <li class="menu-item-has-children"><a href="#">My Account</a>
                                        <ul class="dropdown">
                                            <li><a href="{{ route('login') }}">Login</a></li>
                                            <li><a href="Register-2.html">Register</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </nav>
                            <!-- mobile menu navigation end -->
                        </div>
                        <!-- offcanvas widget area start -->
                        <div class="offcanvas-widget-area">
                            <div class="top-info-wrap text-left text-black">
                                <ul>
                                    <li>
                                        <i class="fa fa-phone"></i>
                                        <a href="info%40yourdomain.html">(1245) 2456 012</a>
                                    </li>
                                    <li>
                                        <i class="fa fa-envelope"></i>
                                        <a href="info%40yourdomain.html">info@yourdomain.com</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="off-canvas-widget-social">
                                <a title="Facebook-f" href="#"><i class="fa fa-facebook-f"></i></a>
                                <a title="Twitter" href="#"><i class="fa fa-twitter"></i></a>
                                <a title="Linkedin" href="#"><i class="fa fa-linkedin"></i></a>
                                <a title="Youtube" href="#"><i class="fa fa-youtube"></i></a>
                                <a title="Vimeo" href="#"><i class="fa fa-vimeo"></i></a>
                            </div>
                        </div>
                        <!-- offcanvas widget area end -->
                    </div>
                </div>
            </aside>
            <!-- off-canvas menu end -->
        </header>
        @yield('content')
        @yield('footer')
        <div class="support-area">
            <div class="container container-default custom-area">
                <div class="row">
                    <div class="col-lg-12 col-custom">
                        <div class="support-wrapper d-flex">
                            <div class="support-content">
                                <h1 class="title">Cần giúp đỡ ?</h1>
                                <p class="desc-content">Hãy gọi cho bộ phận hỗ trợ của chúng tôi 24/7 theo số
                                    01234-567-890</p>
                            </div>
                            <div class="support-button d-flex align-items-center">
                                <a class="obrien-button primary-btn" href="#">Liên Hệ Ngay</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Support Area End Here -->
        <!-- Footer Area Start Here -->
        <footer class="footer-area">
            <div class="footer-widget-area">
                <div class="container container-default custom-area">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-3 col-custom">
                            <div class="single-footer-widget m-0">
                                <div class="footer-logo">
                                    <a href="{{ route('index') }}">
                                        <img width="200px" src="{{ asset('assets/img/logo-users/1.png') }}"
                                            alt="Logo Image">
                                    </a>
                                </div>
                                <p class="desc-content">The Lone Wolf là cửa hàng cung cấp các sản phẩm điện ô tô hàng
                                    ngày tốt nhất cho bạn. Bạn cần loại điện ô tô nào bạn có thể lấy ở đây The Lone Wolf
                                </p>
                                <div class="social-links">
                                    <ul class="d-flex justify-content-around">
                                        <li>
                                            <a class="" href="#" title="Facebook">
                                                <i style="font-size: 200%" class="bi bi-facebook"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="" href="#" title="Twitter">
                                                <i style="font-size: 200%" class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a class=" " href="#" title="Linkedin">
                                                <i style="font-size: 200%" class="fa fa-linkedin"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="" href="#" title="Youtube">
                                                <i style="font-size: 200%" class="fa fa-youtube"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="" href="#" title="Vimeo">
                                                <i style="font-size: 200%" class="fa fa-vimeo"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-6 col-lg-2 col-custom">
                            <div class="single-footer-widget">
                                <h2 class="widget-title">Thông tin</h2>
                                <ul class="widget-list">
                                    <li><a href="about-us.html">Công ty chúng tôi</a></li>
                                    <li><a href="#">Liên hệ chúng tôi</a></li>
                                    <li><a href="about-us.html">Dịch vụ của chúng tôi</a></li>
                                    <li><a href="about-us.html">Tại sao chúng tôi?</a></li>
                                    <li><a href="about-us.html">Nghề nghiệp</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-6 col-lg-2 col-custom">
                            <div class="single-footer-widget">
                                <h2 class="widget-title">Liên kết nhanh</h2>
                                <ul class="widget-list">
                                    <li><a href="about-us.html">Về chúng tôi</a></li>
                                    <li><a href="{{ route('posts') }}">bài viết</a></li>
                                    <li><a href="{{ route('shop') }}">Cửa hàng</a></li>
                                    <li><a href="{{ route('cart') }}">Giỏ hàng</a></li>
                                    <li><a href="#">Liên hệ</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-6 col-lg-2 col-custom">
                            <div class="single-footer-widget">
                                <h2 class="widget-title">Ủng hộ</h2>
                                <ul class="widget-list">
                                    <li><a href="#">Hỗ trợ trực tuyến</a></li>
                                    <li><a href="#">chính sách vận chuyển</a></li>
                                    <li><a href="#">Chính sách hoàn trả</a></li>
                                    <li><a href="#">Chính sách bảo mật</a></li>
                                    <li><a href="#">Điều khoản dịch vụ</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-6 col-lg-3 col-custom">
                            <div class="single-footer-widget">
                                <h2 class="widget-title">Xem thông tin</h2>
                                <div class="widget-body">
                                    <address>160 Y Moan Ênuôl, Tân Lợi, Thành phố Buôn Ma Thuột, Đắk Lắk<br>Phone:
                                        0706252156
                                        <br>Email: phutungoto@gmail.com
                                    </address>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-copyright-area">
                <div class="container custom-area">
                    <div class="row">
                        <div class="col-12 text-center col-custom">
                            <div class="copyright-content">
                                <p>Bản quyền © 2024 <a href="https://hasthemes.com/" title="https://hasthemes.com/">
                                        HasThemes</a> |Được xây dựng với
                                    &nbsp;<strong>The Lone Wolf</strong>&nbsp;by <a href="https://hasthemes.com/"
                                        title="https://hasthemes.com/">HasThemes</a>.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>

</html>
