@extends('layouts.app')
@section('title', 'trang cart')
@section('content')
    <div class="breadcrumbs-area position-relative">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="breadcrumb-content position-relative section-content">
                        <h3 class="title-3 text-white">Đăng ký</h3>
                        <ul>
                            <li><a class="text-white" href="{{ route('user.index') }}">trang chủ</a></li>
                            <li class="text-white">Đăng ký</li>
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
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
                        <form action="{{ route('user.register.store') }}" method="POST">
                            @csrf
                            <div class="single-input-item mb-3">
                                @error('name')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                                <input type="text" placeholder="Nhập họ tên của bạn" name="name">
                            </div>

                            <div class="single-input-item mb-3">
                                @error('address')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                                <input type="text" placeholder="Nhập địa chỉ của bạn" name="address">
                            </div>
                            <div class="single-input-item mb-3">
                                @error('email')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                                <input type="email" placeholder="Nhập địa chỉ email" name="email">
                            </div>
                            <div class="single-input-item mb-3">
                                @error('password')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                                <input type="password" placeholder="Nhập mật khẩu của bạn" name="password">
                            </div>
                            <div class="single-input-item mb-3">
                                @error('phone')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                                <input type="text" placeholder="Nhập mật khẩu của bạn" name="phone">
                            </div>
                            <div class="single-input-item mb-3">
                                <input type="submit" class="btn obrien-button-2 primary-color" value="Đăng ký">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
