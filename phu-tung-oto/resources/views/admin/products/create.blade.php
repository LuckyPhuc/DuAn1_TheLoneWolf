@extends('layouts.admin')
@section('title', 'Admin - Products - add')
<div class="page-wrapper">
@section('content')
<div class="content">
                <div class="page-header">
                    <div class="page-title">
                        <h4>Add Products </h4>
                        <h6>Create New Products</h6>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Products name</label>
                                    <input type="text">
                                </div>
                            </div>
                            {{-- <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Type</label>
                                    <select class="select">
                                        <option>Choose Category</option>
                                        <option>Computers</option>
                                    </select>
                                </div>
                            </div> --}}
                            {{-- <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Sub categories</label>
                                    <select class="select">
                                        <option>Choose Sub Category</option>
                                        <option>Fruits</option>
                                    </select>
                                </div>
                            </div> --}}
                            {{-- <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Brand</label>
                                    <select class="select">
                                        <option>Choose Brand</option>
                                        <option>Brand</option>
                                    </select>
                                </div>
                            </div> --}}
                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>PLU</label>
                                    <input type="text">
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Quantity</label>
                                    <input type="text">
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Price</label>
                                    <input type="text">
                                </div>
                            </div>
                            <div class="col-lg-12">
                            <div class="form-group">
                                <label>Description</label>
                                <textarea class="form-control"></textarea>
                            </div>
                            </div>
                           <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Products images 1 </label>
                                    <div class="image-upload">
                                        <input type="file">
                                        <div class="image-uploads">
                                            <img src="{{asset('assets/img/icons/upload.svg')}}" alt="img">
                                            <h4>Drag and drop files to upload</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Product images 2 </label>
                                    <div class="image-upload">
                                        <input type="file">
                                        <div class="image-uploads">
                                            <img src="{{asset('assets/img/icons/upload.svg')}}" alt="img">
                                            <h4>Drag and drop files to upload</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Product images 3</label>
                                    <div class="image-upload">
                                        <input type="file">
                                        <div class="image-uploads">
                                            <img src="{{asset('assets/img/icons/upload.svg')}}" alt="img">
                                            <h4>Drag and drop files to upload</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Product images 4 </label>
                                    <div class="image-upload">
                                        <input type="file">
                                        <div class="image-uploads">
                                            <img src="{{asset('assets/img/icons/upload.svg')}}" alt="img">
                                            <h4>Drag and drop files to upload</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=" col-12">
                                <div class="form-group">
                                    <label>product images 5</label>
                                    <div class="image-upload">
                                        <input type="file">
                                        <div class="image-uploads">
                                            <img src="{{asset('assets/img/icons/upload.svg')}}" alt="img">
                                            <h4>Drag and drop files to upload</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 whit">
                        <a href="#" class="btn btn-submit me-2">Submit</a>
                        <a href="#" class="btn btn-cancel">Cancel</a>
                        </div>
                    </div>
                </div>
            </div>
            </div>
@endsection
        </div>
