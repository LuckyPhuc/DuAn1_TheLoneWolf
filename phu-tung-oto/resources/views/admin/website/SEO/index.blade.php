<!-- resources/views/admin/website/index.blade.php -->
@extends('layouts.admin')

@section('title', 'Danh sách Website')

@section('content')
    <div class="content">
        <div class="page-header">
            <div class="page-title">
                <h4>Danh sách Website</h4>
            </div>
            <div class="page-btn">
                <a href="{{ route('admin.website.create') }}" class="btn btn-added">
                    <img src="{{ asset('assets/img/icons/plus.svg') }}" alt="img" class="me-2" />Thêm Website</a>
            </div>
        </div>
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <div class="card">
            <div class="card-body">
                <div class="table-top">
                    <!-- Phần lọc và tìm kiếm -->
                    <div class="search-set">
                        <div class="search-path">
                            <a class="btn btn-filter" id="filter_search">
                                <img src="{{ asset('assets/img/icons/filter.svg') }}" alt="img" />
                                <span><img src="{{ asset('assets/img/icons/closes.svg') }}" alt="img" /></span>
                            </a>
                        </div>
                        <div class="search-input">
                            <a class="btn btn-searchset">
                                <img src="{{ asset('assets/img/icons/search-white.svg') }}" alt="img" />
                            </a>
                        </div>
                    </div>
                    <!-- Phần chức năng -->
                    <div class="wordset">
                        <ul>
                            <li>
                                <a data-bs-toggle="tooltip" data-bs-placement="top" title="pdf">
                                    <img src="{{ asset('assets/img/icons/pdf.svg') }}" alt="img" />
                                </a>
                            </li>
                            <li>
                                <a data-bs-toggle="tooltip" data-bs-placement="top" title="excel">
                                    <img src="{{ asset('assets/img/icons/excel.svg') }}" alt="img" />
                                </a>
                            </li>
                            <li>
                                <a data-bs-toggle="tooltip" data-bs-placement="top" title="print">
                                    <img src="{{ asset('assets/img/icons/printer.svg') }}" alt="img" />
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table datanew">
                        <thead>
                            <tr>
                                <th>
                                    <label class="checkboxs">
                                        <input type="checkbox" id="select-all" />
                                        <span class="checkmarks"></span>
                                    </label>
                                </th>
                                <th>STT</th>
                                <th>Tiêu đề</th>
                                <th>Hotline</th>
                                <th>Email CSKH</th>
                                <th>Facebook</th>
                                <th>youtube</th>
                                <th>instagram</th>
                                <th>tiktok</th>
                                <th>Zalo</th>
                                <th>Hành Động</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($SEO as $website)
                                <tr>
                                    <td>
                                        <label class="checkboxs">
                                            <input type="checkbox" />
                                            <span class="checkmarks"></span>
                                        </label>
                                    </td>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $website->title }}</td>
                                    <td>{{ $website->hotline }}</td>
                                    <td>{{ $website->email_support }}</td>
                                    <td>{{ $website->facebook }}</td>
                                    <td>{{ $website->youtube }}</td>
                                    <td>{{ $website->instagram }}</td>
                                    <td>{{ $website->tiktok }}</td>
                                    <td>{{ $website->zalo }}</td>
                                    <td>
                                        <a class="btn btn-success"
                                            href="{{ route('admin.website.edit', ['id' => $website->id]) }}"
                                            style="background: green; padding:0.5rem">
                                            <i class="bi bi-pencil"></i>
                                        </a>
                                        <a>
                                            <form action="{{ route('admin.website.destroy', ['id' => $website->id]) }}"
                                                method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"style="background: red; padding:0.5rem"
                                                    onclick="return confirm('Bạn có chắc chắn muốn xóa website này?')"
                                                    class="btn btn-danger">
                                                    <i class="bi bi-trash3"></i>
                                                </button>
                                            </form>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
