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
                <form action="{{ Route('admin.users.store') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="form-group">
                                <label>Full Name</label>
                                <input type="text" placeholder="your Full name" name="fullname">
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="form-group">
                                <label>Password</label>
                                <div class="pass-group">
                                    <input type="password" class="pass-input" placeholder="your password" name="password">
                                    <span class="fas toggle-password fa-eye-slash"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="form-group">
                                <label>Address</label>
                                <input type="text" placeholder="your address name" name="Address">
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="form-group">
                                <label>Phone</label>
                                <input type="text" placeholder="your phone" name="phone">
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="form-group">
                                <label>Email</label>
                                <input type="text" placeholder="your email" name="email">
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="form-group">
                                <label>Role</label>
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
                            <input type="submit" class="btn btn-submit btn-primary">
                            <a href="{{ Route('admin.users.list') }}" class="btn btn-cancel">List users</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
