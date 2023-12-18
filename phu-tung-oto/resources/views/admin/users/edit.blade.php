@extends('layouts.admin')
@section('title', 'Admin - Users - create')
@section('content')
    <div class="content">
        <div class="page-header">
            <div class="page-title">
                <h4>User Management</h4>
                <h6>Add/Update User</h6>
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
                <form action="{{ route('admin.users.update', ['id' => $users->id]) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="form-group">
                                <label>Họ và tên</label>
                                <input type="text" placeholder="Nhập họ và tên" name="fullname">
                            </div>
                            @error('fullname')
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
                        <div class="col-lg-12">
                            <button style="padding: 0.5rem" type="submit" class="btn btn-submit btn-primary">Cập
                                nhật</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
