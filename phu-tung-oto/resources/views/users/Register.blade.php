@extends('layouts.app')
@section('title', 'trang cart')
@section('content')
    <div class="breadcrumbs-area position-relative">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="breadcrumb-content position-relative section-content">
                        <h3 class="title-3">Login-Register</h3>
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li>Login-Register</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="login-register-area mt-no-text mb-no-text">
        <div class="container container-default-2 custom-area">
            <div class="row">
                <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 col-custom">
                    <div class="login-register-wrapper">
                        <div class="section-content text-center mb-5">
                            <h2 class="title-4 mb-2">Tạo tài khoản</h2>
                            <p class="desc-content">Vui lòng đăng ký bằng cách sử dụng chi tiết tài khoản dưới đây.</p>
                        </div>
                        <form action="#" method="post">
                            <div class="single-input-item mb-3">
                                <input type="text" placeholder="Nhập họ tên của bạn">
                            </div>
                            <div class="single-input-item mb-3">
                                <input type="text" placeholder="Nhập địa chỉ của bạn">
                            </div>
                            <div class="single-input-item mb-3">
                                <input type="email" placeholder="Nhập địa chỉ email">
                            </div>
                            <div class="single-input-item mb-3">
                                <input type="password" placeholder="Nhập mật khẩu của bạn">
                            </div>
                            <div class="single-input-item mb-3">
                                <div class="login-reg-form-meta d-flex align-items-center justify-content-between">
                                    <div class="remember-meta mb-3">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="rememberMe">
                                            <label class="custom-control-label" for="rememberMe">Đăng ký nhận bản tin của
                                                chúng tôi</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-input-item mb-3">
                                <button class="btn obrien-button-2 primary-color">Đăng ký</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
