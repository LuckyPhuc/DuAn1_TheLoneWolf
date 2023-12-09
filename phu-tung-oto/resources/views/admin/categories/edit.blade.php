@extends('layouts.admin')
@section('title', 'Admin - Categories - Edit')
<div class="page-wrapper">
    @section('content')

        <div class="content">
            <div class="page-header">
                <div class="page-title">
                    <h4>Sửa danh mục </h4>
                </div>
            </div>
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <div class="card">
                <form action="{{ route('admin.categories.update', ['id' => $categories->id]) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Tên danh mục</label>
                                    <input type="text" name="name" value ='{{ $categories->name }}'>
                                    @error('name')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <input type ='submit'class="btn btn-primary" value="Cập nhật">
                                <a href="{{ route('admin.categories.list') }}" class="btn btn-danger">Hủy</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    @endsection
</div>
