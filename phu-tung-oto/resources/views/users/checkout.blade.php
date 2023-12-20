@extends('layouts.app')
@section('title', 'Phụ tùng ôtô - Trang Check Out')
@section('content')
    <div class="breadcrumbs-area position-relative">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="breadcrumb-content position-relative section-content">
                        <h3 class="title-3 text-white">Thanh Toán</h3>
                        <ul>
                            <li><a class="text-white" href="{{ route('index') }}">Trang chủ</a></li>
                            <li class="text-white">Thanh Toán</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="checkout-area">
        <div class="container container-default-2 custom-container">
            <div class="row">
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                <div class="col-lg-6 col-12">
                    <form action="{{ Route('checkout.checkouts') }}" method="POST">
                        @csrf
                        @method('POST')
                        <div class="checkbox-form">
                            <h3>CHI TIẾT THANH TOÁN</h3>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="checkout-form-list">
                                        <label>Nhập địa chỉ <span class="required">*</span></label>
                                        <input placeholder="Nhập địa chỉ của bạn" type="text" name="address">
                                        @error('address')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="checkout-form-list">
                                        <label>Nhập Số Điện Thoại <span class="required">*</span></label>
                                        <input type="text" placeholder="Nhập số điện thoại" name="sdt">
                                        @error('sdt')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="different-address">
                                <div class="order-notes mt-3">
                                    <div class="checkout-form-list checkout-form-list-2">
                                        <label>Ghi chú đặt hàng</label>
                                        <textarea id="checkout-mess" cols="30" rows="10" name="description"
                                            placeholder="Ghi chú về đơn đặt hàng của bạn, ví dụ: ghi chú đặc biệt để giao hàng."></textarea>
                                        @error('description')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div>
                                <p class="form-row">
                                    <input type="radio" id="remember_me" name="radio">
                                    <label for="remember_me">Thanh toán khi nhận hàng</label>
                                </p>
                                <p class="form-row">
                                    <input type="radio" id="remember_online" name="radio">
                                    <label for="remember_online">Thanh toán online</label>
                                </p>
                            </div>
                            <div class="payment-method">
                                <div class="payment-accordion">
                                    <div class="order-button-payment">
                                        <input value="Place order" type="submit">
                                    </div>
                                </div>
                            </div>
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
                                @foreach ($groupedCart as $productId => $items)
                                    @php
                                        $orderDetail = $items->first();
                                        $totalQuantity = $items->sum('quantity');
                                        $subTotal = $totalQuantity * $orderDetail->product->price;
                                        $inputId = 'cartInput_' . $productId;
                                    @endphp
                                    <tbody>
                                        <tr class="cart_item">
                                            <td class="cart-product-name">{{ $orderDetail->product->name }}<strong
                                                    class="product-quantity">
                                                    × {{ $totalQuantity }}</strong></td>
                                            <td class="cart-product-total text-center">
                                                @if ($totalQuantity > 0)
                                                    <span class="amount">
                                                        {{ number_format($orderDetail->product->price, 2) }}
                                                        VND
                                                    </span>
                                                @else
                                                    0
                                                @endif
                                            </td>
                                        </tr>
                                    </tbody>
                                @endforeach
                                <tfoot>
                                    <tr class="cart-subtotal">
                                        <th>Cart Subtotal</th>
                                        <td class="text-center"><span
                                                class="amount">{{ number_format($subTotal, 2) }}</span>
                                        </td>
                                    </tr>
                                    <tr class="order-total">
                                        <th>Order Total</th>
                                        <td class="text-center"><strong><span
                                                    class="amount">{{ number_format($subTotal, 2) }}</span></strong>
                                        </td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
