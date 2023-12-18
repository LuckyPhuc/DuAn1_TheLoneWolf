<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>
        @section('title', 'Phụ tùng ôtô - Trang giỏ hàng')
    </title>
</head>

<body>
    @extends('layouts.app')
    @section('content')
        <div class="breadcrumbs-area position-relative">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <div class="breadcrumb-content position-relative section-content">
                            <h3 class="title-3 text-white">Giỏ hàng</h3>
                            <ul>
                                <li><a class="text-white" href="{{ route('index') }}">Trang chủ</a></li>
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
                            @if (session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif
                            <div id="updateSuccessMessage" class="alert alert-success" style="display: none;"></div>
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
                                    @foreach ($groupedCart as $productId => $items)
                                        @php
                                            $orderDetail = $items->first();
                                            $totalQuantity = $items->sum('quantity');
                                            $inputId = 'cartInput_' . $productId;
                                        @endphp

                                        <tr>
                                            <td class="pro-thumbnail">
                                                <a href="#"><img class="img-fluid"
                                                        src="{{ asset($orderDetail->product->image_features->first()->url_img) }}"
                                                        alt="Product" /></a>
                                            </td>
                                            <td class="pro-title">
                                                <a class="name__product w-60"
                                                    href="#">{{ $orderDetail->product->name }}</a>
                                            </td>
                                            <td class="pro-price">
                                                <span>{{ number_format($orderDetail->product->price, 2, '.', ',') }}</span>
                                            </td>
                                            <td class="pro-quantity">
                                                <div class="quantity">
                                                    <div class="cart-plus-minus">
                                                        <input id="{{ $inputId }}" class="cart-plus-minus-box"
                                                            value="{{ $totalQuantity }}" type="text" readonly>
                                                        <div class="dec qtybutton"
                                                            onclick="decrementQuantity('{{ $inputId }}')">-</div>
                                                        <div class="inc qtybutton"
                                                            onclick="incrementQuantity('{{ $inputId }}')">+</div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="pro-subtotal">
                                                <span>{{ number_format($totalQuantity * $orderDetail->product->price, 2, '.', ',') }}
                                                    VND</span>
                                            </td>
                                            <td class="pro-remove">
                                                <form
                                                    action="{{ route('delete.cart.item', ['orderDetail' => $orderDetail->id]) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit"
                                                        onclick="return confirm('Bạn có muốn xóa sản phẩm này không?')"
                                                        data-bs-toggle="tooltip" data-bs-placement="top" title="Xóa mục này"
                                                        style="border: none; background-color: transparent; cursor: pointer;">
                                                        <i class="ion-trash-b"></i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
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
                                <a onclick="updateQuantity()" class="btn obrien-button primary-btn">Update
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
                                        @php
                                            $subTotal = 0;
                                            // Calculate subtotal
                                            foreach ($order_detail as $item) {
                                                $product = $products->where('id', $item->product_id)->first();
                                                $subTotal += $item->quantity * $product->price;
                                            }

                                            $shipping = $subTotal * 0.001;
                                            $total = $subTotal + $shipping;
                                        @endphp

                                        <tr>
                                            <td>Sub Total</td>
                                            <td>${{ number_format($subTotal, 2) }} VND</td>
                                        </tr>
                                        <tr>
                                            <td>Shipping</td>
                                            <td>${{ number_format($shipping, 2) }} VND</td>
                                        </tr>
                                        <tr class="total">
                                            <td>Total</td>
                                            <td class="total-amount">${{ number_format($total, 2) }} VND</td>
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
    <script>
        // Tăng Quantity
        function incrementQuantity(inputId) {
            var input = document.getElementById(inputId);
            var currentValue = parseInt(input.value);
            input.value = currentValue + 1;
        }
        // Giảm Quantity
        function decrementQuantity(inputId) {
            var input = document.getElementById(inputId);
            var currentValue = parseInt(input.value);
            if (currentValue > 0) {
                input.value = currentValue - 1;
            }
        }
        // Cập nhật Quantity
        function updateQuantity() {
            var inputs = document.querySelectorAll('.cart-plus-minus-box');
            var updatedQuantities = [];
            inputs.forEach(function(input) {
                var productId = input.id.split('_')[1];
                var quantity = parseInt(input.value);
                updatedQuantities.push({
                    productId: productId,
                    quantity: quantity
                });
            });
            fetch('update-cart-item', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                    },
                    body: JSON.stringify({
                        updatedQuantities: updatedQuantities
                    }),
                })
                .then(response => response.json())
                .then(data => {
                    console.log('Cart updated successfully:', data);
                    var successMessage = document.getElementById('updateSuccessMessage');
                    successMessage.textContent = data.success;
                    successMessage.style.display = 'block';
                    setTimeout(function() {
                        successMessage.style.display = 'none';
                    }, 5000);
                })
                .catch(error => {
                    console.error('Error updating cart:', error);
                    console.log('Full response:', error.response);
                });
        }
    </script>
</body>

</html>
