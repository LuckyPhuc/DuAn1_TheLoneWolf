@extends('layouts.app')
@section('title', 'trang cart')
@section('content')
    <div class="banner-fullwidth-area mb-text">
        <div class="container custom-area">
            <div class="row">
                <div class=" text-center justify-content-center col-custom">
                    <div class="banner-flash-content d-flex flex-column align-items-center justify-content-center h-100 ">
                        <h2 class="deal-head text-uppercase">thanh toan</h2>
                        <h3 class="deal-title text-uppercase">
                            cart cua ban
                        </h3>
                        <div class="countdown-wrapper d-flex justify-content-center" data-countdown="2022/12/24"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="checkout-area">
        <div class="container container-default-2 custom-container">
            <div class="row">
                <div class="col-lg-6 col-12">
                    <form action="#">
                        <div class="checkbox-form">
                            <h3>CHI TIẾT THANH TOÁN</h3>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="checkout-form-list">
                                        <label>Nhập Họ Tên</label>
                                        <input type="text" placeholder="nhập họ tên của bạn">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="checkout-form-list">
                                        <label>Nhập địa chỉ <span class="required">*</span></label>
                                        <input placeholder="Nhập địa chỉ của bạn" type="text">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="checkout-form-list">
                                        <label>Nhập Email <span class="required">*</span></label>
                                        <input placeholder="Nhập Enail của bạn" type="email">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="checkout-form-list">
                                        <label>Nhập Số Điện Thoại <span class="required">*</span></label>
                                        <input type="text" placeholder="Nhập số điện thoại">
                                    </div>
                                </div>
                            </div>
                            <div class="different-address">
                                <div class="order-notes mt-3">
                                    <div class="checkout-form-list checkout-form-list-2">
                                        <label>Ghi chú đặt hàng</label>
                                        <textarea id="checkout-mess" cols="30" rows="10"
                                            placeholder="Notes about your order, e.g. special notes for delivery."></textarea>
                                    </div>
                                </div>
                            </div>
                            <p class="form-row">
                                <input type="checkbox" id="remember_me">
                                <label for="remember_me">Thanh toán khi nhận hàng</label>
                            </p>
                            <p class="form-row">
                                <input type="checkbox" id="remember_online">
                                <label for="remember_online">Thanh toán trực tiếp</label>
                            </p>
                        </div>
                    </form>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="your-order">
                        <h3>ĐƠN HÀNG CỦA BẠN</h3>
                        <div class="your-order-table table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="cart-product-name">SẢN PHẨM</th>
                                        <th class="cart-product-total">TỔNG CỘNG</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="cart_item">
                                        <td class="cart-product-name"> Vestibulum suscipit<strong class="product-quantity">
                                                × 1</strong></td>
                                        <td class="cart-product-total text-center"><span class="amount">£165.00</span>
                                        </td>
                                    </tr>
                                    <tr class="cart_item">
                                        <td class="cart-product-name"> Vestibulum suscipit<strong class="product-quantity">
                                                × 1</strong></td>
                                        <td class="cart-product-total text-center"><span class="amount">£165.00</span>
                                        </td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr class="cart-subtotal">
                                        <th>Cart Subtotal</th>
                                        <td class="text-center"><span class="amount">£215.00</span></td>
                                    </tr>
                                    <tr class="order-total">
                                        <th>Order Total</th>
                                        <td class="text-center"><strong><span class="amount">£215.00</span></strong></td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        <div class="payment-method">
                            <div class="payment-accordion">
                                {{-- <div id="accordion">
                                    <div class="card">
                                        <div class="card-header" id="#payment-1">
                                            <h5 class="panel-title mb-2">
                                                <a href="#" class="" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseOne" aria-expanded="true"
                                                    aria-controls="collapseOne">
                                                    Direct Bank Transfer.
                                                </a>
                                            </h5>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="#payment-2">
                                            <h5 class="panel-title mb-2">
                                                <a href="#" class="collapsed" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseTwo" aria-expanded="false"
                                                    aria-controls="collapseTwo">
                                                    Cheque Payment
                                                </a>
                                            </h5>
                                        </div>

                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="#payment-3">
                                            <h5 class="panel-title mb-2">
                                                <a href="#" class="collapsed" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseThree" aria-expanded="false"
                                                    aria-controls="collapseThree">
                                                    PayPal
                                                </a>
                                            </h5>
                                        </div>
                                    </div>
                                </div> --}}
                                <div class="order-button-payment">
                                    <input value="Place order" type="submit">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
