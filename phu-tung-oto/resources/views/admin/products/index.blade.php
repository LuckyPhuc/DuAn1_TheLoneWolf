@extends('layouts.admin')

@section('title', 'Admin - Products')

<div class="page-wrapper">
    @section('content')
        <div class="content">
            <div class="page-header">
                <div class="page-title">
                    <h4>Danh sách sản phẩm</h4>
                    <h6>Quản lý sản phẩm</h6>
                </div>

                <div class="page-btn">
                    <a href="{{ route('admin.products.create') }}" class="btn btn-added"><img
                            src="{{ asset('assets/img/icons/plus.svg') }} " alt="img" class="me-1">Thêm sản phẩm mới</a>
                </div>
            </div>
            @if (isset($messenger) && is_array($messenger) && count($messenger) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($messenger as $message)
                            <li>{{ $message }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <div class="card">
                <div class="card-body">
                    <div class="table-top">
                        <div class="search-set">
                            <div class="search-path">
                                <a class="btn btn-filter" id="filter_search">
                                    <img src="{{ asset('assets/img/icons/filter.svg') }} " alt="img">
                                    <span><img src="{{ asset('assets/img/icons/closes.svg') }} " alt="img"></span>
                                </a>
                            </div>
                            <div class="search-input">
                                <a class="btn btn-searchset"><img src="{{ asset('assets/img/icons/search-white.svg') }} "
                                        alt="img"></a>
                            </div>
                        </div>
                        <div class="wordset">
                            <ul>
                                <li>
                                    <a data-bs-toggle="tooltip" data-bs-placement="top" title="pdf"><img
                                            src="{{ asset('assets/img/icons/pdf.svg') }} " alt="img"></a>
                                </li>
                                <li>
                                    <a data-bs-toggle="tooltip" data-bs-placement="top" title="excel"><img
                                            src="{{ asset('assets/img/icons/excel.svg') }} " alt="img"></a>
                                </li>
                                <li>
                                    <a data-bs-toggle="tooltip" data-bs-placement="top" title="print"><img
                                            src="{{ asset('assets/img/icons/printer.svg') }} " alt="img"></a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="table-responsive">
                        <table class="table  datanew">
                            <thead>
                                <tr>
                                    <th>
                                        <label class="checkboxs">
                                            <input type="checkbox" id="select-all">
                                            <span class="checkmarks"></span>
                                        </label>
                                    </th>
                                    <th>Số thứ tự</th>
                                    <th>Tên sản phẩm</th>
                                    <th>Tên danh mục</th>
                                    <th>Tên nhà cung cấp</th>
                                    <th>Giá</th>
                                    <th>Số lượng</th>
                                    <th>Đơn vị tính</th>
                                    <th>Hành động</th>
                                </tr>
                                @foreach ($products as $product)
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <label class="checkboxs">
                                            <input type="checkbox">
                                            <span class="checkmarks"></span>
                                        </label>
                                    </td>
                                    <td>{{ $loop->iteration }}</td>
                                    <td class="productimgname">
                                        <a href="javascript:void(0);" class="product-img">
                                            @if ($product->image_features && count($product->image_features) > 0)
                                                <img src="{{ asset($product->image_features[0]->url_img) }}"
                                                    alt="{{ $product->image_features[0]->alt_img }}">
                                            @endif
                                        </a>
                                        <a href="javascript:void(0);" style="color: #111111">{{ $product->name }}</a>
                                    </td>
                                    <td>{{ $product->category->name }}</td>
                                    <td>{{ $product->supplier->name }}</td>
                                    <td>{{ $product->price }}</td>
                                    <td>{{ $product->quantity }}</td>
                                    <td>{{ $product->unit }}</td>
                                    <td>
                                        <a class="btn btn-success"
                                            href="product-details.html"style="background: #111111; padding:0.5rem"
                                            data-bs-toggle="tooltip" data-bs-placement="top" title="Chi tiết sản phẩm">
                                            <i class="bi bi-eye"></i>
                                        </a>
                                        <a class="btn btn-success" style="background: green; padding:0.5rem" href="#"
                                            data-bs-toggle="tooltip" data-bs-placement="top" title="Sửa mục này">
                                            <i class="bi bi-pencil"></i>
                                        </a>
                                        <a class="btn btn-success" href="javascript:void(0);"
                                            style="background: red; padding:0.5rem" data-bs-toggle="tooltip"
                                            data-bs-placement="top" title="Xóa mục này">
                                            <i class="bi bi-trash3"></i>
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                            @endforeach
                        </table>
                    </div>

                </div>
            </div>

        </div>
    @endsection
</div>
