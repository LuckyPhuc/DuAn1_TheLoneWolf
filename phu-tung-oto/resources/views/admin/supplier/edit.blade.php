@extends('layouts.admin')
@section('title', 'Admin - supplier - Edit')
<div class="page-wrapper">
    @section('content')

        <div class="content">
            <div class="page-header">
                <div class="page-title">
                    <h4>Cập nhật nhà cung cấp </h4>
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
                <form action="{{ route('admin.supplier.update', ['id' => $supplier->id]) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Tên nhà cung cấp</label>
                                    <input type="text" name="name" value ='{{ $supplier->name }}'>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <input type ='submit'class="btn btn-primary" value="Cập nhật">
                                <a href="{{ route('admin.supplier.list') }}" class="btn btn-danger">Hủy</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    @endsection
</div>
