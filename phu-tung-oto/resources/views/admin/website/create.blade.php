@extends('layouts.admin')

@section('title', 'Admin - Add Media Website')

<div class="page-wrapper">
    @section('content')
        <div class="content">
            <div class="page-header">
                <div class="page-title">
                    <h4>Thêm Website</h4>
                </div>
                <div class="page-btn">
                    <a href="{{ Route('admin.users.list') }}" class="btn btn-added">
                        <i class="bi bi-card-list"> Danh sách Website</i></a>
                </div>
            </div>
            <form action="{{ route('admin.website.store') }}" method="POST">
                @csrf
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
                <div class="form-group mt-2">
                    <label for="hotline"><b>Tiêu đề Website</b></label>
                    <input type="text" class="form-control-2" name="title" id="title" value=""
                        placeholder="Nhập tiêu đề Website">
                </div>

                <div class="form-group mt-2">
                    <label for="hotline"><b>Thẻ Meta Website</b></label>
                    <input type="text" class="form-control-2" name="meta_description" id="meta_description"
                        value="" placeholder="Nhập tiêu đề Website">
                </div>

                <div class="form-group mt-2">
                    <label for="hotline"><b>Đường dây nóng</b></label>
                    <input type="text" class="form-control-2" name="hotline" id="hotline" value=""
                        placeholder="Nhập đường dây nóng">
                </div>

                <div class="form-group mt-2">
                    <label for="email-support"><b>Email CSKH</b></label>
                    <input id="email-support" type="text" class="form-control-2" name="email_support" value=""
                        placeholder="Nhập email hỗ trợ">
                </div>

                <div class="form-group mt-2">
                    <label for="facebook"><b>Facebook URL</b></label>
                    <input id="facebook" type="text" class="form-control-2" name="facebook" value=""
                        placeholder="Nhập Link Facebook">
                </div>

                <div class="form-group mt-2">
                    <label for="youtube"><b>Youtube URL</b></label>
                    <input id="youtube" type="text" class="form-control-2" name="youtube" value=""
                        placeholder="Nhập Link Youtube">
                </div>

                <div class="form-group mt-2">
                    <label for="instagram"><b>Instagram URL</b></label>
                    <input id="instagram" type="text" class="form-control-2" name="instagram" value=""
                        placeholder="Nhập Link Instagram">
                </div>

                <div class="form-group mt-2">
                    <label for="tiktok"><b>TikTok URL</b></label>
                    <input id="tiktok" type="text" class="form-control-2" name="facebook" value=""
                        placeholder="Nhập Link Tiktok">
                </div>

                <div class="form-group mt-2">
                    <label for="zalo"><b>Zalo</b></label>
                    <input id="zalo" type="text" class="form-control-2" name="zalo" value=""
                        placeholder="Nhập SĐT Zalo">
                </div>

                <div class="row">
                    <div class="col-6 pe-4">
                        <div class="form-group">
                            <label for="logo"><b>Logo Header Website</b></label>
                            <input type="file" class="form-control-2" name="logo_head" id="logo_head" value="">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-6 pe-4">
                        <div class="form-group">
                            <label for="logo"><b>Logo Footer Website</b></label>
                            <input type="file" class="form-control-2" name="logo_foot" id="logo_foot" value="">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-6 pe-4">
                        <div class="form-group">
                            <label for="logo"><b>Banner Website 1</b></label>
                            <input type="file" class="form-control-2" name="head_banner" id="head_banner"
                                value="">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-6 pe-4">
                        <div class="form-group">
                            <label for="logo"><b>Banner Website 2</b></label>
                            <input type="file" class="form-control-2" name="middle_banner" id="middle_banner"
                                value="">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-6 pe-4">
                        <div class="form-group">
                            <label for="logo"><b>Banner Website 3</b></label>
                            <input type="file" class="form-control-2" name="bottom_banner" id="bottom_banner"
                                value="">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-6 pe-4">
                        <div class="form-group">
                            <label for="logo"><b>Favicon Website</b></label>
                            <input type="file" class="form-control-2" name="favicon" id="favicon" value="">
                        </div>
                    </div>
                </div>

                <div class="col-lg-12">
                    <input type="submit" class="btn btn-submit btn-primary" value="Xác Nhận">
                </div>
        </div>
        </form>
    </div>
@endsection
</div>
