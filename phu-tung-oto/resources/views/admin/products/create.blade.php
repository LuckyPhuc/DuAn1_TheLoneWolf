<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @section('title', 'Admin - posts - create')
    <script src="https://cdn.tiny.cloud/1/rw1556z5vgoik9fmr5u44kck2kqrsou9fmbylvglsyjovwur/tinymce/6/tinymce.min.js"
        referrerpolicy="origin"></script>
    <script type="text/javascript">
        tinymce.init({
            selector: 'textarea',
            editable_class: 'mceEditable',
            plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
            toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
        });
    </script>
</head>


<body>
    @extends('layouts.admin')
    @section('title', 'Admin - Products - add')
    <div class="page-wrapper">
        @section('content')
            <div class="content">
                <div class="page-header">
                    <div class="page-title">
                        <h4>Thêm sản phẩm </h4>
                        <h6>Tạo sản phẩm mới</h6>
                    </div>
                </div>
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
                <form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data">
                    <div class="card">
                        @csrf
                        @method('POST')
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-3 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label>Tên sản phẩm</label>
                                        <input type="text" name="name" placeholder=" Nhập tên sản phẩm">
                                        @error('name')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label>Số lượng</label>
                                        <input type="text" name="quantity" placeholder="Nhập tên sản phẩm">
                                        @error('quantity')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label>Đơn vị tính</label>
                                        <input type="text" name="unit" placeholder="Nhập đơn vị tính">
                                        @error('unit')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label>Giá</label>
                                        <input type="text" name="price" placeholder="Nhập giá sản phẩm">
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
                                        <textarea class="form-control" name="description" id="my_description"></textarea>
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
                    </div>
            </div>
            </form>
        </div>
        </div>
    @endsection
    </div>
</body>
