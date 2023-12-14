@extends('layouts.app')
@section('title', 'Trang giỏ hàng')
@section('content')
    <div class="breadcrumbs-area position-relative">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="breadcrumb-content position-relative section-content">
                        <h3 class="title-3 text-white">cart</h3>
                        <ul>
                            <li><a class="text-white" href="{{ route('users.index') }}">Home</a></li>
                            <li class="text-white">cart</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="cart-main-wrapper mt-no-text mb-no-text">
        <div class="container container-default-2 custom-area">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Cart Table Area -->
                    <div class="cart-table table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th class="pro-thumbnail">Hình ảnh</th>
                                    <th class="pro-title">Tên sản phẩm</th>
                                    <th class="pro-price">Giá</th>
                                    <th class="pro-quantity">Số lượng</th>
                                    <th class="pro-subtotal">Tổng cộng</th>
                                    <th class="pro-remove">Hành động</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="pro-thumbnail"><a href="#"><img class="img-fluid"
                                                src="assets/images/product/small-size/4.png" alt="Product" /></a></td>
                                    <td class="pro-title"><a href="#">Dummy Title</a></td>
                                    <td class="pro-price"><span>$110.00</span></td>
                                    <td class="pro-quantity">
                                        <div class="quantity">
                                            <div class="cart-plus-minus">
                                                <input class="cart-plus-minus-box" value="2" type="text">
                                                <div class="dec qtybutton">-</div>
                                                <div class="inc qtybutton">+</div>
                                                <div class="dec qtybutton"><i class="fa fa-minus"></i></div>
                                                <div class="inc qtybutton"><i class="fa fa-plus"></i></div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="pro-subtotal"><span>$110.00</span></td>
                                    <td class="pro-remove"><a href="#"><i class="ion-trash-b"></i></a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- Cart Update Option -->
                    <div class="cart-update-option d-block d-md-flex justify-content-between">
                        <div class="apply-coupon-wrapper">
                            <form action="#" method="post" class=" d-block d-md-flex">
                                <input type="text" placeholder="Nhập mã giảm giá" required />
                                <button class="btn obrien-button primary-btn">Áp mã giảm giá</button>
                            </form>
                        </div>
                        <div class="cart-update mt-sm-16">
                            <a href="#" class="btn obrien-button primary-btn">Cập nhật giỏ hàng</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-5 ml-auto">
                    <!-- Cart Calculation Area -->
                    <div class="cart-calculator-wrapper">
                        <div class="cart-calculate-items">
                            <h3>Hóa đơn</h3>
                            <div class="table-responsive">
                                <table class="table">
                                    <tr>
                                        <td>Tổng cộng</td>
                                        <td>$230</td>
                                    </tr>
                                    <tr>
                                        <td>Tiền ship</td>
                                        <td>$70</td>
                                    </tr>
                                    <tr class="total">
                                        <td></td>
                                        <td class="total-amount">$300</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <a href="checkout.html" class="btn obrien-button primary-btn d-block">Thanh toán</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
