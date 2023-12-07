@extends('layouts.admin')
@section('title', 'Admin - categories - create')
<div class="page-wrapper">
    @section('content')

        <div class="content">
            <div class="page-header">
                <div class="page-title">
                    <h4>Thêm danh mục </h4>
                </div>
                <div class="page-btn">
                    <a href="{{ Route('admin.categories.list') }}" class="btn btn-added">
                        <i class="bi bi-card-list"> Danh sách danh mục</i>
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
                <form action="{{ route('admin.categories.store') }}" method="post">
                    @csrf
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Tên danh mục</label>
                                    <input type="text" name="name">
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
