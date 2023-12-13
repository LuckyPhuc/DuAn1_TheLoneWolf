<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @section('title', 'Admin - Posts - create')
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
    <div class="page-wrapper">
        @section('content')

            <div class="content">
                <div class="page-header">
                    <div class="page-title">
                        <h4>Thêm Bài Viết </h4>
                    </div>
                    <div class="page-btn">
                        <a href="{{ Route('admin.posts.list') }}" class="btn btn-added">
                            <i class="bi bi-card-list"> Danh sách Bài Viết</i>
                        </a>
                    </div>
                </div>
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                <div class="card">
                    <form action="{{ route('admin.posts.update', ['id' => $posts->id]) }}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="card-body">
                            <div class="row">

                                <div class="form-group">
                                    <label>Tiêu Đề Bài Viết</label>
                                    <input type="text" name="title" value="{{ $posts->title }}">
                                    @error('title')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label>MÔ tả bài viết</label>
                                    <input type="text" name="description" value="{{ $posts->description }}">
                                    @error('description')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Nội Dung</label>
                                    <textarea name="body">
                                    {{ $posts->body }}
                                    </textarea>
                                    @error('body')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                <div class="col-lg-12">
                                    <input type="submit" value="cập nhật" class="btn btn-added"
                                        style="background: #ff9f43;color:#fff; padding:0.5rem">
                                    <a href="{{ route('admin.categories.list') }}" class="btn btn-danger">Hủy</a>
                                </div>
                            </div>
                    </form>

                </div>
            </div>
        @endsection
    </div>

</body>

</html>
