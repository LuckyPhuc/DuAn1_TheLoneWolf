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
                            <h4 class="text-white">100</h4>
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
                            <h4 class="text-white">100</h4>
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
                            <h5 class="text-white">Hóa đơn mua hàng</h5>
                        </div>
                        <div class="dash-imgs">
                            <i data-feather="file-text"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12 d-flex">
                    <div class="dash-count das3">
                        <div class="dash-counts">
                            <h4 class="text-white">105</h4>
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
                                        <tr>
                                            <td>1</td>
                                            <td class="productimgname">
                                                <a href="productlist.html" class="product-img">
                                                    <img src="{{ asset('assets/img/product/product22.jpg') }}"
                                                        alt="product">
                                                </a>
                                                <a href="#" class="text-dark">Apple Earpods</a>
                                            </td>
                                            <td class="text-dark">$891.2</td>
                                        </tr>
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
                                    <th>Mã sản phẩm</th>
                                    <th>Tên sản phẩm</th>
                                    <th>Nhà cung cấp</th>
                                    <th>Danh mục</th>
                                    <th>Ngày hết hạn</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td><a href="javascript:void(0);" class="text-dark">IT0001</a></td>
                                    <td class="productimgname">
                                        <a class="product-img" href="productlist.html">
                                            <img src="{{ asset('assets/img/product/product2.jpg') }}" alt="product">
                                        </a>
                                        <a href="productlist.html" class="text-dark">Orange</a>
                                    </td>
                                    <td>N/D</td>
                                    <td>Fruits</td>
                                    <td>12-12-2022</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td><a href="javascript:void(0);" class="text-dark">IT0002</a></td>
                                    <td class="productimgname">
                                        <a class="product-img" href="productlist.html">
                                            <img src="{{ asset('assets/img/product/product3.jpg') }}" alt="product">
                                        </a>
                                        <a href="productlist.html" class="text-dark">Pineapple</a>
                                    </td>
                                    <td>N/D</td>
                                    <td>Fruits</td>
                                    <td>25-11-2022</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td><a href="javascript:void(0);" class="text-dark">IT0003</a></td>
                                    <td class="productimgname">
                                        <a class="product-img" href="productlist.html">
                                            <img src="{{ asset('assets/img/product/product4.jpg') }}" alt="product">
                                        </a>
                                        <a href="productlist.html" class="text-dark">Stawberry</a>
                                    </td>
                                    <td class="text-dark">N/D</td>
                                    <td class="text-dark">Fruits</td>
                                    <td class="text-dark">19-11-2022</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td><a href="javascript:void(0);" class="text-dark">IT0004</a></td>
                                    <td class="productimgname">
                                        <a class="product-img" href="productlist.html">
                                            <img src="{{ asset('assets/img/product/product5.jpg') }}" alt="product">
                                        </a>
                                        <a href="productlist.html" class="text-dark">Avocat</a>
                                    </td>
                                    <td class="text-dark">N/D</td>
                                    <td class="text-dark">Fruits</td>
                                    <td class="text-dark">20-11-2022</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    @endsection
</div>
