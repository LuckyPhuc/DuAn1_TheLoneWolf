@extends('layouts.app')
@section('title', 'trang cart')
@section('content')
    <div class="breadcrumbs-area position-relative">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="breadcrumb-content position-relative section-content">
                        <h3 class="title-3 text-white">Giỏ hàng</h3>
                        <ul>
                            <li><a class="text-white" href="{{ route('users.index') }}">Trang chủ</a></li>
                            <li class="text-white">Giỏ hàng</li>
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
                                    <th class="pro-thumbnail">Image</th>
                                    <th class="pro-title">Product</th>
                                    <th class="pro-price">Price</th>
                                    <th class="pro-quantity">Quantity</th>
                                    <th class="pro-subtotal">Total</th>
                                    <th class="pro-remove">Remove</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="pro-thumbnail"><a href="#"><img class="img-fluid"
                                                src="{{ asset($products->image_features->first()->url_img) }}"
                                                alt="Product" /></a></td>
                                    <td class="pro-title"><a href="#">{{ $products->name }}</a></td>
                                    <td class="pro-price"><span>{{ number_format($products->price, 2, '.', ',') }}</span>
                                    </td>
                                    <td class="pro-quantity">
                                        <div class="quantity">
                                            <div class="cart-plus-minus">
                                                <input class="cart-plus-minus-box" value="1" type="text"
                                                    id="quantityInput">
                                                <div class="dec qtybutton" onclick="decrementQuantity()">-</div>
                                                <div class="inc qtybutton" onclick="incrementQuantity()">+</div>
                                            </div>
                                            <script>
                                                function incrementQuantity() {
                                                    var input = document.getElementById('quantityInput');
                                                    var currentValue = parseInt(input.value);
                                                    input.value = currentValue + 1;
                                                    // updateSubtotal();
                                                }

                                                function decrementQuantity() {
                                                    var input = document.getElementById('quantityInput');
                                                    var currentValue = parseInt(input.value);
                                                    if (currentValue > 0) {
                                                        input.value = currentValue - 1;
                                                        // updateSubtotal();
                                                    }
                                                }

                                                function updateSubtotal() {
                                                    var quantity = parseInt(document.getElementById('quantityInput').value);
                                                    var price = parseFloat('{{ $products->price }}'); // Replace $price with your actual variable
                                                    var subtotal = quantity * price;
                                                    var formattedSubtotal = formatNumber(subtotal, 2, '.', ',');

                                                    document.getElementById('subtotalSpan').innerText = formattedSubtotal;
                                                }

                                                function formatNumber(number, decimals, decimalSeparator, thousandsSeparator) {
                                                    decimals = decimals || 0;
                                                    number = parseFloat(number);

                                                    var fixedNumber = number.toFixed(decimals);
                                                    var parts = fixedNumber.split('.');
                                                    parts[0] = parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, thousandsSeparator);

                                                    return parts.join(decimalSeparator);
                                                }
                                            </script>
                                        </div>
                                    </td>
                                    <td class="pro-subtotal">
                                        <span id="subtotalSpan">{{ number_format($subtotal, 2, '.', ',') }}</span>
                                    </td>
                                    <td class="pro-remove"><a href="#"><i class="ion-trash-b"></i></a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- Cart Update Option -->
                    <div class="cart-update-option d-block d-md-flex justify-content-between">
                        <div class="apply-coupon-wrapper">
                            <form action="#" method="post" class=" d-block d-md-flex">
                                <input type="text" placeholder="Enter Your Coupon Code" required />
                                <button class="btn obrien-button primary-btn">Apply Coupon</button>
                            </form>
                        </div>
                        <div class="cart-update mt-sm-16">
                            <a href="#" class="btn obrien-button primary-btn" onclick="updateSubtotal()">Update
                                Cart</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-5 ml-auto">
                    <!-- Cart Calculation Area -->
                    <div class="cart-calculator-wrapper">
                        <div class="cart-calculate-items">
                            <h3>Cart Totals</h3>
                            <div class="table-responsive">
                                <table class="table">
                                    <tr>
                                        <td>Sub Total</td>
                                        <td>$230</td>
                                    </tr>
                                    <tr>
                                        <td>Shipping</td>
                                        <td>$70</td>
                                    </tr>
                                    <tr class="total">
                                        <td>Total</td>
                                        <td class="total-amount">$300</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <a href="checkout.html" class="btn obrien-button primary-btn d-block">Proceed To Checkout</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
