@extends('layouts.admin')
@section('title', 'Admin - categories - List')
<div class="page-wrapper">
    @section('content')
        <div class="content">
            <div class="page-header">
                <div class="page-title">
                    <h4>Danh sách danh mục</h4>
                </div>
                <div class="page-btn">
                    <a href="{{ route('admin.categories.create') }}" class="btn btn-added">
                        <img src="{{ asset('assets/img/icons/plus.svg') }} " class="me-1" alt="img" />Thêm danh mục sản
                        phẩm
                    </a>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <div class="table-top">

                        <div class="search-path">
                            <input type="text" placeholder="Bạn muốn tìm kiếm gì?" name="search">
                            <button class="btn btn-primary"><i class="bi bi-search"></i></button>
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
                            @foreach ($categories as $category)
                                <tr>
                                    <td>
                                        <label class="checkboxs">
                                            <input type="checkbox" />
                                            <span class="checkmarks"></span>
                                        </label>
                                    </td>
                                    <td>{{ $loop->iteration }}</td>
                                    <td class="productimgname">
                                        <a href="javascript:void(0);"> {{ $category->name }}</a>
                                    </td>

                                    <td>
                                        <a class="btn btn-success" href="#">
                                            <i class="bi bi-pencil"></i>
                                        </a>
                                        <a class="btn btn-danger" href="javascript:void(0);">
                                            <i class="bi bi-trash3"></i>
                                        </a>
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
