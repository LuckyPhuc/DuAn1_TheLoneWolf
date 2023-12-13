@extends('layouts.admin')
@section('title', 'Admin - Products - add')
<div class="page-wrapper">
    @section('content')
        <div class="content">
            <div class="page-header">
                <div class="page-title">
                    <h4>Chỉnh sửa sản phẩm </h4>
                </div>
            </div>
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            <div class="card">
                <form action="route('admin.products.update', ['id' => $products->id])" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Tên sản phẩm</label>
                                    <input type="text" name="name" placeholder=" Nhập tên sản phẩm"
                                        value="{{ $products->name }}">
                                    @error('name')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Số lượng</label>
                                    <input type="text" name="quantity" placeholder="Nhập tên sản phẩm"
                                        value="{{ $products->quantity }}">
                                    @error('quantity')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Đơn vị tính</label>
                                    <input type="text" name="unit" placeholder="Nhập đơn vị tính"
                                        value="{{ $products->unit }}">
                                    @error('unit')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Giá</label>
                                    <input type="text" name="price" placeholder="Nhập giá sản phẩm"
                                        value=" {{ $products->price }}">
                                    @error('price')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Tên danh mục</label>
                                    <select class="form-select" name="category_id">
                                        <option>Chọn danh mục</option>
                                        @foreach ($categories as $category)
                                            <option value={{ $category->id }}>{{ $category->name }}</option>
                                        @endforeach
                                        @error('category_id')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Nhà cung cấp</label>
                                    <select class="form-select" name="supplier_id">
                                        <option>Chọn nhà cung cấp</option>
                                        @foreach ($suppliers as $supplier)
                                            <option value={{ $supplier->id }}>{{ $supplier->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('supplier_id')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Mô tả</label>
                                    <textarea class="form-control" name="description">{{ $products->description }}</textarea>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Upload file tại đây</label>
                                    <input type="file" name="images[]" multiple>
                                    @error('images')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <input type="submit" value="Thêm mới sản phẩm" class="btn btn-added"
                            style="background: #ff9f43;color:#fff; padding:0.5rem">
                        <a href="{{ route('admin.products.list') }}" class="btn btn-added"
                            style="background: #ff9f43;color:#fff; padding:0.5rem">Hủy</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
@endsection
</div>
