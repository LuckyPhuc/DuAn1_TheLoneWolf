@extends('layouts.admin')

@section('title', 'Admin - Add Tài Nguyên Website')

<div class="page-wrapper">
    @section('content')
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
                    <input type="file" class="form-control-2" name="head_banner" id="head_banner" value="">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-6 pe-4">
                <div class="form-group">
                    <label for="logo"><b>Banner Website 2</b></label>
                    <input type="file" class="form-control-2" name="middle_banner" id="middle_banner" value="">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-6 pe-4">
                <div class="form-group">
                    <label for="logo"><b>Banner Website 3</b></label>
                    <input type="file" class="form-control-2" name="bottom_banner" id="bottom_banner" value="">
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
@endsection
</div>
