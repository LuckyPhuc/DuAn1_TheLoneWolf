@extends('layouts.admin')

@section('title', 'Admin - Product - Detail')

<div class="page-wrapper">
    @section('content')
        <div class="content">
            <div class="page-header">
                <div class="page-title">
                    <h4>Chi tiết sản phẩm</h4>
                    <h6>Thông tin đầy đủ của sản phẩm</h6>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-8 col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="productdetails">
                                <ul class="product-bar">
                                    <li>
                                        <h4>Tên sản phẩm</h4>
                                        <h6>{{ $products->name }}</h6>
                                    </li>
                                    <li>
                                        <h4>Tên danh mục</h4>
                                        <h6>{{ $products->category->name }}</h6>
                                    </li>

                                    <li>
                                        <h4>Hãng</h4>
                                        <h6>{{ $products->supplier->name }}</h6>
                                    </li>
                                    <li>
                                        <h4>Đơn vị tính</h4>
                                        <h6>{{ $products->unit }}</h6>
                                    </li>
                                    <li>
                                        <h4>Số lượng</h4>
                                        <h6>{{ $products->quantity }}</h6>
                                    </li>
                                    <li>
                                        <h4>Giá</h4>
                                        <h6>{{ number_format($products->price), 2, '.', ',' }} VNĐ</h6>
                                    </li>
                                    <li>
                                        <h4>Trạng thái</h4>
                                        @if ($products->quantity == 0)
                                            <h6>Hết hàng</h6>
                                        @else
                                            <h6>Còn hàng</h6>
                                        @endif
                                    </li>
                                    <li>
                                        <h4>Mô tả sản phẩm</h4>
                                        <h6>
                                            {!! $products->description !!}
                                        </h6>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-12 border">
                    <div class="product-details-img horizontal-tab">
                        <div class="pd-slider-nav product-slider">
                            <div class="single-thumb " style="height: 400px ">
                                <img class="object-fit-cover border rounded"
                                    src="{{ asset($products->image_features->first()->url_img) }}"
                                    alt="{{ asset($products->image_features->first()->alt_img) }}">
                            </div>
                        </div>
                        <div class="img__slider" style="display: flex; height: 100%;">
                            @for ($i = 0; $i < $products->image_features->count(); $i++)
                                <div class="img__item border-black" style="width:150px">
                                    <img src="{{ asset($products->image_features[$i]->url_img) }}"
                                        alt="{{ asset($products->image_features->first()->alt_img) }}"
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
            </div>
        </div>
    @endsection
</div>
