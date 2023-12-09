@extends('layouts.admin')
@section('title', 'Admin - Image Website - Create')

<div class="page-wrapper">
    @section('content')

        <div class="content">
            <div class="page-header">
                <div class="page-title">
                    <h4>Thêm Tài Nguyên Website</h4>
                </div>
                <div class="page-btn">
                    <a href="{{ Route('admin.website.list') }}" class="btn btn-added">
                        <i class="bi bi-card-list"> Danh sách Website</i>
                    </a>
                </div>
            </div>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
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
                <form action="{{ route('admin.supplier.store') }}" method="post">
                    @csrf
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="form-group">
                            <label>Logo</label>
                            <div class="image-upload">
                                <input type="file">
                                <div class="image-uploads">
                                    <img src="{{ asset('assets/img/icons/upload.svg') }}" alt="img">
                                    <h4>Upload ảnh tại đây</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="form-group">
                            <label>Logo</label>
                            <div class="image-upload">
                                <input type="file">
                                <div class="image-uploads">
                                    <img src="{{ asset('assets/img/icons/upload.svg') }}" alt="img">
                                    <h4>Upload ảnh tại đây</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <input type="submit" value="Thêm mới" class="btn btn-added"
                            style="background: #ff9f43;color:#fff; padding:0.5rem">
                    </div>
            </div>
        </div>
        </form>

    </div>
    </div>
@endsection
</div>
