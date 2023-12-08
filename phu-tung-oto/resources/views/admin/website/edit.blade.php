<!-- resources/views/admin/website/edit.blade.php -->
@extends('layouts.admin')

@section('title', 'Admin - Edit Website')

@section('content')
    <div class="content">
        <div class="page-header">
            <div class="page-title">
                <h4>Website Management</h4>
                <h6>Edit Website</h6>
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
                <form action="{{ route('admin.website.update', ['id' => $website->id]) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="form-group">
                                <label>Title</label>
                                <input type="text" value="{{ $website->title }}" name="title">
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="form-group">
                                <label>Hotline</label>
                                <input type="text" value="{{ $website->hotline }}" name="hotline">
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="form-group">
                                <label>Email CSKH</label>
                                <input type="text" value="{{ $website->email_support }}" name="email_support">
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="form-group">
                                <label>Facebook</label>
                                <input type="text" value="{{ $website->facebook }}" name="facebook">
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="form-group">
                                <label>Zalo</label>
                                <input type="text" value="{{ $website->zalo }}" name="zalo">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label>Logo</label>
                                <input type="file" name="logo">
                                <!-- Add preview or existing logo display if needed -->
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label>Bottom Banner</label>
                                <input type="file" name="bottom_banner">
                                <!-- Add preview or existing bottom banner display if needed -->
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <input type="submit" class="btn btn-submit btn-primary" value="Update">
                            <a href="{{ route('admin.website.list') }}" class="btn btn-cancel">Cancel</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
