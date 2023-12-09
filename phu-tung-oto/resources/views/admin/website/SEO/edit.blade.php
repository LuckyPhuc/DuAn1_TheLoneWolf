@extends('layouts.admin')
@section('title', 'Admin - Media Website - Create')
<div class="page-wrapper">
    @section('content')

        <div class="content">
            <div class="page-header">
                <div class="page-title">
                    <h4>Thêm Tài Nguyên Website</h4>
                </div>
                <div class="page-btn">
                    <a href="{{ Route('admin.website.list') }}" class="btn btn-added">
                        <i class="bi bi-card-list"> Danh sách Website</i>
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
                <form action="{{ route('admin.website.update', ['id' => $SEO->id]) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6 col-sm-6 col-12">

                                <div class="form-group">
                                    <label>Tiêu Đề Website</label>
                                    <input type="text" name="title" placeholder="Nhập tiêu đề"
                                        value="{{ $SEO->title }}">
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Mô tả Website</label>
                                    <input type="text" name="description" placeholder="Nhập mô tả"
                                        value="{{ $SEO->description }}">
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Đường dây nóng</label>
                                    <input type="text" name="hotline" placeholder="Nhập số điện thoại"
                                        value="{{ $SEO->hotline }}">
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Email CSKH</label>
                                    <input type="text" name="email_support" placeholder="Nhập email"
                                        value="{{ $SEO->email_support }}">
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Facebook URL</label>
                                    <input type="text" name="facebook" placeholder="Nhập đường link facebook"
                                        value="{{ $SEO->facebook }}">
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Youtube URL</label>
                                    <input type="text" name="youtube" placeholder="Nhập đường link youtube"
                                        value="{{ $SEO->youtube }}">
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Instagram URL</label>
                                    <input type="text" name="instagram" placeholder="Nhập đường link instagram"
                                        value="{{ $SEO->instagram }}">
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Tiktok URL</label>
                                    <input type="text" name="tiktok" placeholder="Nhập đường link tiktok"
                                        value="{{ $SEO->tiktok }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Zalo</label>
                                <input type="text" name="zalo" placeholder="Nhập đường số zalo"
                                    value="{{ $SEO->zalo }}">
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
