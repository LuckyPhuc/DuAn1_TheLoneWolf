@extends('layouts.admin')
@section('title', 'Admin - Supplier - List')
<div class="page-wrapper">
    @section('content')
        <div class="content">
            <div class="page-header">
                <div class="page-title">
                    <h4>Danh sách nhà cung cấp</h4>
                </div>
                <div class="page-btn">
                    <a href="{{ route('admin.supplier.create') }}" class="btn btn-added">
                        <img src="{{ asset('assets/img/icons/plus.svg') }} " class="me-1" alt="img" />Thêm nhà cung cấp
                        sản phẩm
                    </a>
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

                        <div class="search-path">
                            <input type="text" placeholder="Bạn muốn tìm kiếm gì?" name="search">
                            <button class="btn btn-primary" style="background: #ff9f43;color:#fff; padding:0.5rem"><i
                                    class="bi bi-search"></i></button>
                        </div>

                        <div class="wordset">
                            <ul>
                                <li>
                                    <a data-bs-toggle="tooltip" data-bs-placement="top" title="pdf"><img
                                            src="{{ asset('assets/img/icons/pdf.svg') }} " alt="img" /></a>
                                </li>
                                <li>
                                    <a data-bs-toggle="tooltip" data-bs-placement="top" title="excel"><img
                                            src="{{ asset('assets/img/icons/excel.svg') }} " alt="img" /></a>
                                </li>
                                <li>
                                    <a data-bs-toggle="tooltip" data-bs-placement="top" title="print"><img
                                            src="{{ asset('assets/img/icons/printer.svg') }} " alt="img" /></a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <table class="table">
                        <thead>
                            <tr>
                                <th>
                                    <label class="checkboxs">
                                        <input type="checkbox" id="select-all" />
                                        <span class="checkmarks"></span>
                                    </label>
                                </th>
                                <th>Số thứ tự</th>
                                <th>Tên danh mục</th>
                                <th>Hành động</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($suppliers as $supplier)
                                <tr>
                                    <td>
                                        <label class="checkboxs">
                                            <input type="checkbox" />
                                            <span class="checkmarks"></span>
                                        </label>
                                    </td>
                                    <td>{{ $loop->iteration }}</td>
                                    <td class="productimgname">
                                        <a href="javascript:void(0);" class="text-dark"> {{ $supplier->name }}</a>

                                    </td>

                                    <td>
                                        <form action="{{ route('admin.supplier.destroy', $supplier->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <a class="btn btn-success" style="background: green; padding:0.5rem"
                                                href="{{ route('admin.supplier.edit', ['id' => $category->id]) }}"
                                                data-bs-toggle="tooltip" data-bs-placement="top" title="Sửa mục này">
                                                <i class="bi bi-pencil"></i>
                                            </a>
                                            <button type="submit" class="btn btn-danger"
                                                style="background: red; padding:0.5rem"
                                                onclick="return confirm('Bạn có muốn xóa nhà cung cấp này không?')"
                                                data-bs-toggle="tooltip" data-bs-placement="top" title="Xóa mục này">
                                                <i class="bi
                                                bi-trash3"></i>
                                            </button>
                                        </form>

                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    @endsection
</div>
