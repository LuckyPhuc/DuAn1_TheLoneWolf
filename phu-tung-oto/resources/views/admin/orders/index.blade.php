@extends('layouts.admin')

@section('title', 'Admin - Orders')

<div class="page-wrapper">
    @section('content')
        <div class="content">
            <div class="page-header">
                <div class="page-title">
                    <h4>Sales Return List</h4>
                    <h6>Manage your Returns</h6>
                </div>
                <div class="page-btn">
                    <a href="#" class="btn btn-added">
                        <img src="{{ asset('assets/img/icons/plus.svg') }}" alt="img" class="me-2">Add New Sales Return
                    </a>
                </div>
            </div>


            <div class="card">
                <div class="card-body">
                    <div class="table-top">
                        <div class="search-set">
                            <div class="search-path">
                                <a class="btn btn-filter" id="filter_search">
                                    <img src="{{ asset('assets/img/icons/filter.svg') }}" alt="img">
                                    <span><img src="{{ asset('assets/img/icons/closes.svg') }}" alt="img"></span>
                                </a>
                            </div>
                            <div class="search-input">
                                <a class="btn btn-searchset"><img src="{{ asset('assets/img/icons/search-white.svg') }}"
                                        alt="img"></a>
                            </div>
                        </div>
                        <div class="wordset">
                            <ul>
                                <li>
                                    <a data-bs-toggle="tooltip" data-bs-placement="top" title="pdf"><img
                                            src="{{ asset('assets/img/icons/pdf.svg') }}" alt="img"></a>
                                </li>
                                <li>
                                    <a data-bs-toggle="tooltip" data-bs-placement="top" title="excel"><img
                                            src="{{ asset('assets/img/icons/excel.svg') }}" alt="img"></a>
                                </li>
                                <li>
                                    <a data-bs-toggle="tooltip" data-bs-placement="top" title="print"><img
                                            src="{{ asset('assets/img/icons/printer.svg') }}" alt="img"></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    <div class="table-responsive">
                        <table class="table datanew">
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
                                    <th>Thời gian đặt</th>
                                    <th>Tên khách hàng</th>
                                    <th>số lượng</th>
                                    <th>Tổng tiền</th>
                                    <th>Status</th>
                                    <th>Hành động</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($groupedCart as $productId => $items)
                                    @php
                                        $orderDetail = $items->first();
                                        $totalQuantity = $items->sum('quantity');
                                        $inputId = 'cartInput_' . $productId;

                                    @endphp
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
                                                <img src="{{ asset($orderDetail->product->image_features->first()->url_img) }}"
                                                    alt="product">
                                            </a>
                                            <a style="color: black">{{ substr($orderDetail->product->name, 0, 20) }}...</a>
                                        </td>
                                        <td>{{ \Carbon\Carbon::parse($orderDetail->order->order_date)->timezone('Asia/Ho_Chi_Minh')->format('d-m-Y H:i:s') }}
                                        </td>
                                        <td>{{ $orderDetail->order->users->name }}</td>
                                        <td>{{ $orderDetail->quantity }}{{ $orderDetail->product->unti }}</td>
                                        <td>{{ number_format($orderDetail->order->total, 2) }} VND</td>
                                        <td><span class="badges bg-lightgreen">{{ $orderDetail->order->status }}</span>
                                        </td>
                                        <td>
                                            <form action="{{ route('admin.orders.destroy', ['id' => $orderDetail->id]) }}"
                                                method="POST" style="padding-bottom: 10px;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger"
                                                    style="background: red; padding:0.5rem"
                                                    onclick="return confirm('Bạn có muốn xóa bài viết này không?')"
                                                    data-bs-toggle="tooltip" data-bs-placement="top" title="Xóa mục này">
                                                    <i class="bi bi-trash3"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    Không có đơn hàng nào
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    @endsection
</div>
