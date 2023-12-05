@extends('layouts.admin')
@section('title', 'Admin - categories - create')
<div class="page-wrapper">
    @section('content')

        <div class="content">
            <div class="page-header">
                <div class="page-title">
                    <h4>Thêm danh mục </h4>
                </div>
            </div>
            @if (isset($messages) && is_array($messages) && count($messages) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($messages as $messages)
                            <li>{{ $messages }}</li>
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
                                    <label>Category Name</label>
                                    <input type="text" name="category-name">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <button class="btn btn-primary">Thêm mới</button>
                            </div>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    @endsection
</div>
