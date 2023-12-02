@extends('layouts.admin')

@section('title', 'Admin - Products')

<div class="page-wrapper">
@section('content')
            <div class="content">
                <div class="page-header">
                    <div class="page-title">
                        <h4>Product List</h4>
                        <h6>Manage your products</h6>
                    </div>
                    <div class="page-btn">
                        <a href="addproduct.html" class="btn btn-added"><img src="{{asset('assets/img/icons/plus.svg')}} " alt="img"
                                class="me-1">Add New Product</a>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="table-top">
                            <div class="search-set">
                                <div class="search-path">
                                    <a class="btn btn-filter" id="filter_search">
                                        <img src="{{asset('assets/img/icons/filter.svg')}} " alt="img">
                                        <span><img src="{{asset('assets/img/icons/closes.svg')}} " alt="img"></span>
                                    </a>
                                </div>
                                <div class="search-input">
                                    <a class="btn btn-searchset"><img src="{{asset('assets/img/icons/search-white.svg')}} "
                                            alt="img"></a>
                                </div>
                            </div>
                            <div class="wordset">
                                <ul>
                                    <li>
                                        <a data-bs-toggle="tooltip" data-bs-placement="top" title="pdf"><img
                                                src="{{asset('assets/img/icons/pdf.svg')}} " alt="img"></a>
                                    </li>
                                    <li>
                                        <a data-bs-toggle="tooltip" data-bs-placement="top" title="excel"><img
                                                src="{{asset('assets/img/icons/excel.svg')}} " alt="img"></a>
                                    </li>
                                    <li>
                                        <a data-bs-toggle="tooltip" data-bs-placement="top" title="print"><img
                                                src="{{asset('assets/img/icons/printer.svg')}} " alt="img"></a>
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
                                        <th>Product Name</th>
                                        <th>SKU</th>
                                        <th>Category </th>
                                        <th>Brand</th>
                                        <th>price</th>
                                        <th>Unit</th>
                                        <th>Qty</th>
                                        <th>Created By</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <label class="checkboxs">
                                                <input type="checkbox">
                                                <span class="checkmarks"></span>
                                            </label>
                                        </td>
                                        <td class="productimgname">
                                            <a href="javascript:void(0);" class="product-img">
                                                <img src="{{asset('assets/img/product/product17.jpg')}}" alt="product">
                                            </a>
                                            <a href="javascript:void(0);">Limon</a>
                                        </td>
                                        <td>PT0011</td>
                                        <td>Health Care </td>
                                        <td>N/D</td>
                                        <td>10.00</td>
                                        <td>kg</td>
                                        <td>100.00</td>
                                        <td>Admin</td>
                                        <td>
                                            <a class="me-3" href="product-details.html">
                                                <img src="{{asset('assets/img/icons/eye.svg')}} " alt="img">
                                            </a>
                                            <a class="me-3" href="editproduct.html">
                                                <img src="{{asset('assets/img/icons/edit.svg')}} " alt="img">
                                            </a>
                                            <a class="confirm-text" href="javascript:void(0);">
                                                <img src="{{asset('assets/img/icons/delete.svg')}}" alt="img">
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
@endsection
</div>