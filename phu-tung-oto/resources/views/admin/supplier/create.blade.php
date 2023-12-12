@extends('layouts.admin')
@section('title', 'Admin - categories - create')
<div class="page-wrapper">
    @section('content')

        <div class="content">
            <div class="page-header">
                <div class="page-title">
                    <h4>Thêm nhà cung cấp </h4>
                </div>
                <div class="page-btn">
                    <a href="{{ Route('admin.supplier.list') }}" class="btn btn-added">
                        <i class="bi bi-card-list"> Danh sách nhà cung cấp</i>
                    </a>
                </div>
            </div>
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <div class="card">
                <form action="{{ route('admin.supplier.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Tên nhà cung cấp</label>
                                    <input type="text" name="name">
                                    @error('name')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Hình ảnh</label>
                                    <input type="file" name="avatar">
                                    @error('avatar')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror

                                </div>
                                <div class="form-group">
                                    <label>Địa chỉ</label>
                                    <input type="text" name="address">
                                    @error('address')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="text" name="email">
                                    @error('email')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label>Số điện thoại</label>
                                    <input type="number" name="phone">
                                    @error('phone')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
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
