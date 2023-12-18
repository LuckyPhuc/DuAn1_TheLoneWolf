@extends('layouts.admin')
@section('title', 'Admin - Users - create')
@section('content')
    <div class="content">
        <div class="page-header">
            <div class="page-title">
                <h4>Thêm người dùng</h4>
            </div>
            <div class="page-btn">
                <a href="{{ Route('admin.users.list') }}" class="btn btn-added">
                    <i class="bi bi-card-list"> Danh sách người dùng</i></a>
            </div>
        </div>
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <div class="card">
            <div class="card-body">
                <form action="{{ Route('admin.users.store') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="form-group">
                                <label>Họ và tên</label>
                                <input type="text" placeholder="Nhập họ và tên" name="name">
                            </div>
                            @error('name')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="form-group">
                                <label>Mật khẩu</label>
                                <div class="pass-group">
                                    <input type="password" class="pass-input" placeholder="Nhập mật khẩu" name="password">
                                    <span class="fas toggle-password fa-eye-slash"></span>
                                </div>
                                @error('password')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="form-group">
                                <label>Địa chỉ</label>
                                <input type="text" placeholder="Nhập địa chỉ" name="Address">
                            </div>
                            @error('Address')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="form-group">
                                <label>Số điện thoại</label>
                                <input type="text" placeholder="Nhập số điện thoại" name="phone">
                            </div>
                            @error('phone')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="form-group">
                                <label>Email</label>
                                <input type="text" placeholder="Nhập email" name="email">
                            </div>
                            @error('email')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="form-group">
                                <label>Role</label>
                                @error('role')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                                <select class="form-select" name="role">
                                    <option>users</option>
                                    <option>admin</option>
                                </select>
                            </div>
                        </div>
                        {{-- <div class="col-lg-12">
                            <div class="form-group">
                                <label> User Image</label>
                                <div class="image-upload">
                                    <input type="file" />
                                    <div class="image-uploads">
                                        <img src="{{ asset('assets/img/icons/upload.svg') }} " alt="img" />
                                        <h4>Drag and drop a file to upload</h4>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                        <div class="col-lg-12">
                            <button style="padding: 0.5rem" type="submit" class="btn btn-submit btn-primary">Thêm Người
                                dùng</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
