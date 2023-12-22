@extends('layouts.admin')

@section('title', 'Admin - DashBoard')


<div class="page-wrapper">
    @section('content')
        <div class="content">
            <div class="row">
                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="dash-widget">
                        <div class="dash-widgetimg">
                            <span><img src="{{ asset('assets/img/icons/dash1.svg') }}" alt="img"></span>
                        </div>
                        <div class="dash-widgetcontent">
                            <h5>$<span class="counters" data-count="307144.00">$307,144.00</span></h5>
                            <h6>Tổng số tiền mua hàng đến hạn</h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="dash-widget dash1">
                        <div class="dash-widgetimg">
                            <span><img src="{{ asset('assets/img/icons/dash2.svg') }}" alt="img"></span>
                        </div>
                        <div class="dash-widgetcontent">
                            <h5>$<span class="counters" data-count="4385.00">$4,385.00</span></h5>
                            <h6>Tổng doanh thu đến hạn</h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="dash-widget dash2">
                        <div class="dash-widgetimg">
                            <span><img src="{{ asset('assets/img/icons/dash3.svg') }}" alt="img"></span>
                        </div>
                        <div class="dash-widgetcontent">
                            <h5>$<span class="counters" data-count="385656.50">385,656.50</span></h5>
                            <h6>Tổng tiền sale đến hạn</h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="dash-widget dash3">
                        <div class="dash-widgetimg">
                            <span><img src="{{ asset('assets/img/icons/dash4.svg') }}" alt="img"></span>
                        </div>
                        <div class="dash-widgetcontent">
                            <h5>$<span class="counters" data-count="40000.00">400.00</span></h5>
                            <h6>Tổng tiền sale hàng tháng</h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12 d-flex">
                    <div class="dash-count">
                        <div class="dash-counts">
                            <h4 class="text-white">{{ $users }}</h4>
                            <h5 class="text-white">Khách hàng</h5>
                        </div>
                        <div class="dash-imgs">
                            <i data-feather="user"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12 d-flex">
                    <div class="dash-count das1">
                        <div class="dash-counts">
                            <h4 class="text-white">{{ $suppliersCount }}</h4>
                            <h5 class="text-white">Nhà cung cấp</h5>
                        </div>
                        <div class="dash-imgs">
                            <i data-feather="user-check"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12 d-flex">
                    <div class="dash-count das2">
                        <div class="dash-counts">
                            <h4 class="text-white">100</h4>
                            <h5 class="text-white">Hóa đơn hàng nhập</h5>
                        </div>
                        <div class="dash-imgs">
                            <i data-feather="file-text"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12 d-flex">
                    <div class="dash-count das3">
                        <div class="dash-counts">
                            <h4 class="text-white">{{ $order }}</h4>
                            <h5 class="text-white">Hóa đơn bán hàng</h5>
                        </div>
                        <div class="dash-imgs">
                            <i data-feather="file"></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-7 col-sm-12 col-12 d-flex">
                    <div class="card flex-fill">
                        <div class="card-header pb-0 d-flex justify-content-between align-items-center">
                            <h5 class="card-title mb-0">Mua & Bán</h5>
                            <div class="graph-sets">
                                <ul>
                                    <li>
                                        <span>Mua</span>
                                    </li>
                                    <li>
                                        <span>Bán</span>
                                    </li>
                                </ul>
                                <div class="dropdown">
                                    <button class="btn btn-white btn-sm dropdown-toggle" type="button"
                                        id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                        2022 <img src="{{ asset('assets/img/icons/dropdown.svg') }}" alt="img"
                                            class="ms-2">
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item">2022</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item">2021</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item">2020</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div id="sales_charts"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-sm-12 col-12 d-flex">
                    <div class="card flex-fill">
                        <div class="card-header pb-0 d-flex justify-content-between align-items-center">
                            <h4 class="card-title mb-0">Sản phẩm mới thêm</h4>
                            <div class="dropdown">
                                <a href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false"
                                    class="dropset">
                                    <i class="fa fa-ellipsis-v"></i>
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <li>
                                        <a href="{{ route('admin.products.list') }}" class="dropdown-item">
                                            Danh sách sản phẩm</a>
                                    </li>
                                    <li>
                                        <a href="addproduct.html" class="dropdown-item">Thêm sản phẩm</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive dataview">
                                <table class="table datatable ">
                                    <thead>
                                        <tr>
                                            <th>STT</th>
                                            <th>Sản phẩm</th>
                                            <th>Giá</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($products->take(10) as $product)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td class="productimgname">
                                                    <a href="#" class="product-img">
                                                        @if ($product->image_features && count($product->image_features) > 0)
                                                            <img src="{{ asset($product->image_features[0]->url_img) }}"
                                                                alt="{{ $product->image_features[0]->alt_img }}">
                                                        @endif
                                                    </a>
                                                    <a href="#"
                                                        class="text-dark">{{ \Illuminate\Support\Str::limit($product->name, $limit = 20, $end = '...') }}</a>
                                                </td>
                                                <td class="text-dark">{{ number_format($product->price, 2) }} VND
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-0">
                <div class="card-body">
                    <h4 class="card-title">Sản phẩm hết hàng</h4>
                    <div class="table-responsive dataview">
                        <table class="table datatable ">
                            <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Tên sản phẩm</th>
                                    <th>Nhà cung cấp</th>
                                    <th>Danh mục</th>
                                    <th>Ngày tạo</th> <!-- Đổi tên tiêu đề nếu cần -->
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($products->where('quantity', 0) as $product)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td class="productimgname">
                                            <a class="product-img" href="productlist.html">
                                                @if ($product->image_features && count($product->image_features) > 0)
                                                    <img src="{{ asset($product->image_features[0]->url_img) }}"
                                                        alt="{{ $product->image_features[0]->alt_img }}">
                                                @endif
                                            </a>
                                            <a href="productlist.html" class="text-dark">
                                                {{ \Illuminate\Support\Str::limit($product->name, $limit = 20, $end = '...') }}
                                            </a>
                                        </td>
                                        <td><a href="javascript:void(0);"
                                                class="text-dark">{{ $product->supplier->name }}</a></td>
                                        <td>{{ $product->category->name }}</td>
                                        <td>{{ $product->created_at->format('d-m-Y h:i A') }}</td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5" class="text-center">Chưa có sản phẩm hết hàng.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    @endsection
</div>
